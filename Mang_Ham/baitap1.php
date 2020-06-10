<?php
 function jsonToArray($filename){
    $jsondata = file_get_contents($filename);
    $arr_data = json_decode($jsondata, true);
    return $arr_data;
}
?>
<!DOCTYPE html>
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
    </style>
</head>

<body>
    <form action="baitap1.php" method="POST">
        Tên người dùng : <input type="text" name="name">

        Email : <input type="text" name='email' id='email'>
        Điện thoại : <input type="number" name='number' id='number'>
        <input type="submit" value="ADD">

    </form>
    
</body>

</html>
<?php
if (filter_has_var(INPUT_POST, 'email')) {
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
}
function saveDataJSON($filename, $name, $email, $phone)
{
    $check = false;
    if (empty($_POST['name'])) {
        throw new Exception("Chưa nhập tên");
    }
    if (empty($_POST['number'])) {
        throw new Exception("Chưa nhập số điện thoại");
    }
    if (empty($_POST['email'])) {
        throw new Exception("Chưa nhập email");
    }
    $contact['0'] = ["name"=>$name,"email"=>$email,"phone"=>$phone];
    $json = json_decode(file_get_contents($filename)); 
        // array_push($contact,$name,$email,$phone);
    // json_encode($contact); 
    $contact = array_merge($contact,$json);

    file_put_contents($filename, json_encode($contact), 0);
    return !$check;
}
try {
    
        if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            if (saveDataJSON('users.json', $_POST['name'], $_POST['email'], $_POST['number'])) {
                echo " Đăng ký thành công";
            } 
        }
        else {
        echo 'Email không  hợp lệ <br>';
        echo " Đăng ký không thành công";
    } 
} catch (Exception $e) {
    echo "Đăng Ký không thành công bởi vì : " . $e->getMessage();
}

?>
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