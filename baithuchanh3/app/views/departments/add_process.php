
<?php
include '../../config/config.php';
include APP_ROOT.'./app/service/Departments/DepartmentsService.php';
$departmentservice = new DepartmentService();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $web = $_POST['website'];
    $phone= $_POST['phone'];
    $address = $_POST['address'];

    if($departmentservice->addDepartment($name, $address, $email, $phone, $web) == true) {
        header('Location: '.BASE_URL.'/public/index.php?controller=department');
    }
    else 
        header("location: ./add.php");
}
?>

