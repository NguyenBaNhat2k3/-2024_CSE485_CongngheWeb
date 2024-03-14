<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>All Employeess</h1>
<ul>
    <ul>

        <?php

        require_once APP_ROOT.'/baithuchanh3/app/models/Employee.php';
        require_once '-2024_CSE485_CongngheWeb/baithuchanh3/app/controllers/EmployeeController.php';
        $data = [];
        $model = new Employee($data);
        $controller = new EmployeeController($model);
        $employees = $controller->getAllEmployees();

        foreach ($employees as $employee) {
            echo "<li><a href='edit_employee.php?id=" . $employee['employee_ID'] . "'>" . $employee['full_name'] . "</a></li>";
        }
        ?>
    </ul>
</ul>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
