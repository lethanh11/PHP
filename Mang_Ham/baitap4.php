<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fieldset {
            width: 500px;
            margin: 0 auto;
            padding: 20px 20px 20px 30px;
            border: 2px solid navy;
      
        }

        #Operator {
            padding: 5px 0;
            margin-bottom: 10px;
            width: 33%;

        }

        #calculate {
            margin-left: 1em;
            margin-bottom: 0.4em;
        }

      
    </style>
</head>

<body>
    <form action="baitap4.php" method="post">
        <fieldset class='fieldset'>
            <legend>Calculator</legend>
            <div>
                <label name='X'>X:</label>
                <input type="text" id="name" name="name"><br><br>
                <label>O:</label>
                <select name='Tinh' id="Operator">
                    <option value="Addition">Addition</option>
                    <option value="Minus">Minus</option>
                    <option value="Multiply">Multiply</option>
                    <option value="Divide">Divide</option>
                </select> <br>
                <label name='Y'>Y:</label>
                <input type="text" name="Second" id="Second"><br><br>
                <input type="submit" value="calculate" id='calculate'>
                <div>
                    <?php
                    if (isset($_REQUEST['name'])) {
                        $name = $_POST['name'];
                        $Second = $_POST['Second'];
                        $Tinh = $_POST['Tinh'];
                        $KQ = 0;
                        // $name = X ; $Second = Y;
                        function Calc($name, $Second, $Tinh)
                        {
                            if ($name == 0 && $Second == 0) {
                                throw new Exception("Mẫu Và Tử không hợp lệ");
                            }
                            if ($Second == 0) {
                                throw new Exception("Mẫu không hợp lệ");
                            }
                            if ($Tinh === 'Addition') {
                                $KQ = $name + $Second;
                                echo "<strong> Result :  </strong>" . $name . ' + ' . $Second . " = " . $KQ;
                            }
                            if ($Tinh === 'Minus') {
                                $KQ = $name - $Second;
                                echo "<strong> Result :  </strong>" . $name . ' - ' . $Second . " = " . $KQ;
                            }
                            if ($Tinh === 'Multiply') {
                                $KQ = $name * $Second;
                                echo "<strong> Result :  </strong>" . $name . ' * ' . $Second . " = " . $KQ;
                            }
                            if ($Tinh === 'Divide') {
                                $KQ = $name / $Second;
                                echo "<strong> Result :  </strong>" . $name . ' / ' . $Second . " = " . $KQ;
                            }
                        }
                        try {
                            Calc($name, $Second, $Tinh);
                        } catch (Exception $message) {
                            echo  $message->getMessage();
                        }
                    }
                    ?>
                </div>
            </div>
        </fieldset>

    </form>
</body>

</html>