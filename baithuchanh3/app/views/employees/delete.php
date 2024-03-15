<?php 
include '../../config/config.php';
include APP_ROOT.'/app/service/employees/EmployeeService.php';

$employ = new EmployeeService();
$id = $_GET['id'];
$delmsg = "Xóa nhân viên thành công";
if($employ->deleteEmployOfUser($id)) {
    if($employ->deleteEmployee($id))
        header('Location: '.BASE_URL.'/public/index.php?controller=employee&delmsg='.$delmsg);
}
else 
    header('Location: '.BASE_URL.'/public/index.php?controller=employee&delmsg='.$delerr);
    

?>
