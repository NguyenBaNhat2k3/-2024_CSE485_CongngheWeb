<?php
require_once '../../config/config.php';
require_once APP_ROOT.'/app/controllers/EmployeeController.php';

$employeeService = new EmployeeService();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo"phu bu";
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $mobilephone = $_POST['mobilephone'];
    $position = $_POST['position'];
    $avatar = $_POST['avatar'];
    $departid = $_POST['departmentid'];

    if($employee = $employeeService ->updateEmployee($id,$fullname,$address,$mobilephone,$position,$avatar,$departid)) {
        header("Location: http://localhost/-2024_CSE485_CongngheWeb/baithuchanh3/app/views/employees/viewEmployees.php");
    }
    }