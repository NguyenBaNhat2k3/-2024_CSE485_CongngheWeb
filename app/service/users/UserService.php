<?php
require_once APP_ROOT.'/app/config/datebase.php';
require_once APP_ROOT.'/app/models/Department.php';

class UserService {
    function getALLDepartment() {
        $conn = DBconnection();
        
        $sql_selectDepartment = "select parent_Department_ID from departments";
        $result = queryDB($conn, $sql_selectDepartment);
    }
}
?>