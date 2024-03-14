
<?php 
include '../../config/config.php';
include APP_ROOT.'/app/service/Departments/DepartmentsService.php';

$departmentservice = new DepartmentService();
$id = $_GET['user'];
$msg = "Xóa nhân viên thành công";
if($departmentservice->deleteDepartment($id)) {
    header("Location: /public/index.php?delmsg=$msg");
}
    

?>
<a href="/public/index.php"></a>