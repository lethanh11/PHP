<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 10%;
            padding: 5px 5px;
            margin: 10px 10px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <form action="baitap3.php" method="post">
        <label>Product Description</label><input type="text" name="name">
        <label>List Price</label><input type="text" name="money">
        <label>Discount Percent(%)</label><input type="text" name="percent">
        <input type="submit" value="Calculate Discount">
        <div>
        <?php
        if (isset($_REQUEST['name'])) {
            $name = $_POST['name'];
            $money = $_POST['money'];
            $percent = $_POST['percent'];
            $money = $money - $money * $percent * 0.01;

            echo "Tiền Nhận Được =" . $money . " VND";
        }
        ?>
        </div>
    </form>

</body>

</html>