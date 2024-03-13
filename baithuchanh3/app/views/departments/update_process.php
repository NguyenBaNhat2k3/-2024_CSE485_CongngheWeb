<?php 
include '../../config/config.php';
require_once APP_ROOT.'/app/service/Departments/DepartmentsService.php';

$departmentservice = new DepartmentService();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $web = $_POST['website'];
    $phone= $_POST['phone'];
    $address = $_POST['address'];
    $id = $_GET['user'];
    $logo = $_POST['logo'];

    if($departmentservice->updateDepartment($id,$name, $address, $email, $phone, $logo,$web) == true) {
        
        header("Location: /public/index.php?controller=department");
    }
    else 
        header("location: ./update.php?err='that bai'");
}
?>