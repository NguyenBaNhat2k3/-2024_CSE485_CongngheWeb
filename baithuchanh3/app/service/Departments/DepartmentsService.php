<?php
require_once APP_ROOT.'/app/config/datebase.php';
require_once APP_ROOT.'/app/models/Department.php';

class DepartmentService {
    
    function getALLDepartment() {
        $conn = DBconnection();

        $sql_select = "select * from departments order by parent_Department_ID ASC";

        $resule = queryDB($conn,$sql_select);
        $departments = [];
        if(mysqli_num_rows($resule) > 0) {
            while ($row = mysqli_fetch_assoc($resule)) {
                $department = new Department($row['department_ID'],$row['department_Name'],$row['address'],$row['email'],$row['phone'],$row['logo'],$row['website'],$row['parent_Department_ID']);
                $departments[] = $department;
            }          
        }
        return $departments;

    }

    function addDepartment($name, $email, $phone, $web, $parent_id) {
        $conn = DBconnection();
        $sql_check = "select * from departments where email = '{$email}'";
        $check = queryDB($conn, $sql_check);      
        if(mysqli_num_rows($check) > 0)
            return false;
        else {
            $sql_insert = "insert into departments (department_Name, email, phone, website, parent_Department_ID) values ('$name', '$email', '$phone','$web','$parent_id');";
            $result = mysqli_query($conn, $sql_insert);
            if($result > 0)
                return true;
        }
        return false;
    }
    function deleteDepartment($id) {
        $conn = DBconnection();
        $sql_del = "delete from departments where department_ID = {$id}";
        $result = mysqli_query($conn, $sql_del);
        if($result > 0)
            return true;
        return false;
    }

    function updateDepartment($name, $address, $email, $phone, $logo, $web, $parent_id) {
        $conn = DBconnection();
        $sql_update = "update departments set ";

    }
}


?>