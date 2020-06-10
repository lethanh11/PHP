
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #email {
            margin-left: 4rem;
        }
        #number {
            margin-left: 2.2rem;
        }
        .error {
            color: #FF0000;
        }
        table{
            width : 60%;
            border : 1px solid black;
        }
        th,tr,td {
            border : 1px solid black;
            text-align :center;
        }
    </style>
</head>
<body>
<?php
    // chuyển json qua array
    function jsonToArray($filename){
        $jsondata = file_get_contents($filename);
        $arr_data = json_decode($jsondata, true);
        return $arr_data;
    }
    function saveDataJSON($filename, $name, $email, $phone)
    {
        try {
            $contact = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone
            );
            $arr_data = jsonToArray($filename);
            // push giữ liệu từ mảng contact vào mảng trên
            array_push($arr_data, $contact);
            // chuyển sang lại json
            $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
            // ghi dữ liệu ra filename
            file_put_contents($filename, $jsondata);
            echo "Lưu dữ liệu thành công!";
        } catch (Exception $e) {
            echo 'Lỗi: ', $e->getMessage(), "\n";
        }
    }
    // khai báo
    $nameErr = NULL;
    $emailErr = NULL;
    $phoneErr = NULL;
    $name = NULL;
    $email = NULL;
    $phone = NULL;
    //  sử lý request 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $has_error = false;
        if (empty($name)) {
            $nameErr = "Tên đăng nhập không được để trống!";
            $has_error = true;
        }
        if (empty($email)) {
            $emailErr = "Email không được để trống!";
            $has_error = true;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
                $has_error = true;
            }
        }
        if (empty($phone)) {
            $phoneErr = " Số điện thoại không được để trống!";
            $has_error = true;
        }
        if ($has_error === false) {
            saveDataJSON("users.json", $name, $email, $phone);
            $name = NULL;
            $email = NULL;
            $phone = NULL;
        }
    }
?>
    <form method="POST">
        Tên người dùng : <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        Email : <input type="text" name='email' id='email' value="<?php echo $email; ?>" >
        <span class="error">* <?php echo $emailErr; ?></span>
        Điện thoại : <input type="number" name='phone' id='number' value="<?php echo $phone; ?>">
        <span class="error">*<?php echo $phoneErr; ?></span>
        <input type="submit" value="ADD">
    </form>
    <!-- vẽ giữ liệu từ file json ra ngoài -->
    <?php
            $datas = jsonToArray('users.json');
    ?>
    <h2>Registration list</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($datas as $data): ?>
            <tr>
                <td><?= $data['name']; ?></td>
                <td><?= $data['email']; ?></td>
                <td><?= $data['phone']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>