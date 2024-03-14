<?php
class User {
    private $user_name;
    private $pass_word;
    private $ROLE;
    private $employee_ID;


    public function __construct($user_name, $pass_word, $ROLE, $employee_ID) {
        $this->user_name = $user_name;
        $this->pass_word = $pass_word;
        $this->ROLE = $ROLE;
        $this->employee_ID = $employee_ID;
    }

    public function getUserName()
    {
        return $this->user_name;
    }


    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }


    public function getPassWord()
    {
        return $this->pass_word;
    }


    public function setPassWord($pass_word)
    {
        $this->pass_word = $pass_word;
    }


    public function getROLE()
    {
        return $this->ROLE;
    }


    public function setROLE($ROLE)
    {
        $this->ROLE = $ROLE;
    }


    public function getEmployeeID()
    {
        return $this->employee_ID;
    }


    public function setEmployeeID($employee_ID)
    {
        $this->employee_ID = $employee_ID;
    }

    public static function getData($conn)
    {
        $usersArray = array();
        $sql = 'SELECT * FROM users ';
        $Result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($Result) > 0) {
            while ($row = mysqli_fetch_assoc($Result)) {
                $user = new User($row['user_name'], $row['pass_word'], $row['ROLE'], $row['employee_ID']);
                $usersArray[] = $user;
            }
            return $usersArray;
        } else {
            return null;
        }
    }
}


