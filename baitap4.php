<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fieldset {
            width: 30%;
        }

        #Operator {
            padding: 5px 0;
            margin-bottom: 10px;
            width: 40%;
            margin-left: 32px;
        }

        #calculate {
            margin-left: 150px;
        }
    </style>
</head>

<body>
    <h1>Simple Calculator</h1>
    <form action="baitap4.php" method="post">
        <fieldset class='fieldset'>
            <legend>Calculator</legend>
            <div>
                <label for="fname">First Operator:</label>
                <input type="text" id="name" name="name"><br><br>
                <label>Operator:</label>
                <select name='Tinh' id="Operator">
                    <option value="Addition">Addition</option>
                    <option value="Minus">Minus</option>
                    <option value="Multiply">Multiply</option>
                    <option value="Divide">Divide</option>

                </select> <br>
                <label>Second operand:</label>
                <input type="text" name="Second" id="Second"><br><br>
                <input type="submit" value="calculate" id='calculate'> 
                <div>
                <?php
                if (isset($_REQUEST['name'])) {
                    $name = $_POST['name'];
                    $Second = $_POST['Second'];
                    $Tinh = $_POST['Tinh'];
                    $KQ = 0;
                    if ($Tinh === 'Addition') {
                        $KQ = $name + $Second;
                        echo "<strong> Result :  </strong>". $name .' + ' . $Second . " = " . $KQ;
                    }
                    if ($Tinh === 'Minus') {
                        $KQ = $name - $Second;
                        echo "<strong> Result :  </strong>". $name .' - ' . $Second . " = " . $KQ;
                    }
                    if ($Tinh === 'Multiply') {
                        $KQ = $name * $Second;
                        echo "<strong> Result :  </strong>". $name .' * ' . $Second . " = " . $KQ;
                    }
                    if ($Tinh === 'Divide') {
                        $KQ = $name / $Second;
                        echo "<strong> Result :  </strong>". $name . ' / ' . $Second . " = " . $KQ;
                    }
                }
                ?>
                </div>
            </div>
        </fieldset>

    </form>
</body>

</html>