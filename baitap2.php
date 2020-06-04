<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=number] {
            width: 30%;
            padding: 8px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .flex {
            display: flex;
        }

        .flex .input {
            flex: 15%;
            padding-left: 10%;
        }

        #kq {
            flex: 65%;

        }
    </style>
</head>

<body>
    <form method="post" >
        <label>Inventment Amount </label><input type="number" name="money"><br>
        <label>Yearly Interest Rate </label><input type="number" name="rate"> <br>
        <label>Number of Years </label><input type="number" name='Year'> <br>
        <div class='flex'>
            <div class='input'>
                <input type="submit" value="Calculate ">
            </div>
            <div id='kq'>
                <?php
                if (isset($_POST['money'])) {
                    $money = $_POST['money'];
                    $rate = $_POST['rate'];
                    $Year = $_POST['Year'];
                    for ($i = 0; $i < $Year; $i++) {
                        $money = $money + ($money * $rate);
                    }
                    echo $money;
                }
                ?>
            </div>
        </div>
    </form>
</body>

</html>