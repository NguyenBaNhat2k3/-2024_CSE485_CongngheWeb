<?php
require_once '../../config/config.php';
require_once APP_ROOT.'/app/controllers/EmployeeController.php';

$employeeService = new EmployeeService();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo"phu bu";
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $mobilephone = $_POST['mobilephone'];
    $position = $_POST['position'];
    $avatar = $_POST['avatar'];
    $departid = $_POST['departmentid'];

    if($employee = $employeeService ->updateEmployees($id,$fullname,$address,$mobilephone,$position,$avatar,$departid)) {
        header("Location: ".BASE_URL.'/public/index.php?controller=employee');
    }
}