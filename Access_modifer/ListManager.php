<?php
class Employee
{
    public $name;
    public $email;
    public $address;
    public $phone;

    public function __construct($name, $email, $address, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
    }
}
?>
<?php
class EmployeeManager
{
    public $employee = [];

    public function __construct()
    {
    }

    public function addEmployee($_employee)
    {
        array_push($this->employee, $_employee);
    }
    public function getData()
    {
        return $this->employee;
    }
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: solid 1px #ccc;
        }

        form {
            width: 350px;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    session_start();
    if (isset($_SESSION['employeeManager'])) {
        $employeeManager = $_SESSION['employeeManager'];
    } else {
        $employeeManager = new EmployeeManager();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST['address'];
        $phone = $_POST["phone"];
        $employ = new Employee($name, $email, $address, $phone);
        $employeeManager->addEmployee($employ);
        $_SESSION['employeeManager'] =  $employeeManager;
        $datas = $employeeManager->getData();
    }
    ?>
    <h2> Form</h2>
    <form method="post">
        <fieldset>
            <legend>Details</legend>
            Name: <input type="text" name="name">
            <br><br>
            E-mail: <input type="text" name="email">
            <br><br>
            Dịa chỉ: <input type="text" name="address">
            <br><br>
            Phone: <input type="text" name="phone">
            <br><br>
            <input type="submit" name="submit" value="Register">
        </fieldset>
    </form>
    <h2> list</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($datas as $data) : ?>
            <tr>
                <td><?= $data->name; ?></td>
                <td><?= $data->email; ?></td>
                <td><?= $data->address; ?></td>
                <td><?= $data->phone; ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>