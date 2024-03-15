
<?php
include '../../config/config.php';
include APP_ROOT.'./app/service/employees/EmployeeService.php';
$employeeService = new EmployeeService();
$i = 11;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $department = $_POST['department_id'];
    $phone= $_POST['phone'];
    $address = $_POST['address'];
    $avatar = $_POST['avatar'];

    if($employeeService->addEmployee(++$i, $name, $address, $position, $phone, $avatar,$department) == true) {
        header('Location: '.BASE_URL.'/public/index.php?controller=employee');
    }
    else 
        header("location: ./add.php");
}
?>

