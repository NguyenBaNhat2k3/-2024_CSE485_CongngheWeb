<?php
require_once APP_ROOT.'/app/config/datebase.php';
require_once APP_ROOT.'/app/models/User.php';

class UserService {
    public function getALLUser() {
        $conn = DBconnection();
        
        $sql_selectUser = "select * from users order by employee_ID ASC";
        $result = queryDB($conn, $sql_selectUser);

        $users = [];
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $user = new User($row['user_name'],$row['pass_word'],$row['ROLE'],$row['employee_ID']);
                $users[] = $user;
            }
        }
        return $users;
    }




}
