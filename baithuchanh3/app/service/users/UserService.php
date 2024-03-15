<?php
require_once APP_ROOT.'/app/config/datebase.php';
require_once APP_ROOT.'/app/models/User.php';

class UserService {
    function getALLUsers() {
        $conn = DBconnection();
        
        $sql_selectuser = "select * from users ";
        $result = queryDB($conn, $sql_selectuser);
        $users = [];
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $user = new User($row['user_name'],$row['pass_word'],$row['ROLE']);
                $users[] = $user;
            }          
        }
        return $users;
    }
    
    function getALLAdmin() {
        $conn = DBconnection();
        
        $sql_selectuser = "select * from users where ROLE = 'admin'";
        $result = queryDB($conn, $sql_selectuser);
        $users = [];
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $user = new User($row['user_name'],$row['pass_word'],$row['ROLE']);
                $users[] = $user;
            }          
        }
        return $users;
    }

    function getAllRegular() {
        $conn = DBconnection();
        
        $sql_selectuser = "select * from users where ROLE = 'regular'";
        $result = queryDB($conn, $sql_selectuser);
        $users = [];
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $user = new User($row['user_name'],$row['pass_word'],$row['ROLE']);
                $users[] = $user;
            }          
        }
        return $users;
    }
}

?>