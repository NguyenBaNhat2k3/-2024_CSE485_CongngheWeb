<?php 
include '../../config/config.php';
include APP_ROOT.'/app/service/Departments/DepartmentsService.php';

$departmentservice = new DepartmentService();
$id = $_GET['user'];
$delmsg = "Xóa nhân viên thành công";
$delerr = "Xóa nhân viên thất bại";
if($departmentservice->deleteDepartment($id)) {
    header('Location: '.BASE_URL.'/public/index.php?controller=department&delmsg='.$delmsg);
}
else 
    header('Location: '.BASE_URL.'/public/index.php?controller=department&delmsg='.$delerr);

?>
