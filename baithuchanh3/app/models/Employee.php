<?php

class Employee {
    private $employee_ID;
    private $full_name;
    private $address;
    private $mobile_phone;
    private $positon;
    private $avatar;
    private $department_ID;
    private $db;

    public function __construct($employee_ID, $full_name, $address, $mobile_phone, $positon, $avatar, $department_ID) {
        $this->$employee_ID = $employee_ID;
        $this->full_name = $full_name;
        $this->address = $address;
        $this->mobile_phone = $mobile_phone;
        $this->positon = $positon;
        $this->avatar = $avatar;
        $this->department_ID= $department_ID;
    }

    public function getEmployeeID() {
        return $this->employee_ID;
    }
    public function setEmployeeID($employee_ID) {
        $this->employee_ID = $employee_ID;
    }
    public function getFullName() {
        return $this->full_name;
    }
    public function setFullName($full_name) {
        $this->full_name = $full_name;
    }
    public function getAddress() {
        return $this->address;
    }
    public function setAddress($address) {
        $this->address = $address;
    }
    public function getMobilePhone() {
        return $this->mobile_phone;
    }
    public function setMobilePhone($mobile_phone) {
        $this->mobile_phone = $mobile_phone;
    }
    public function getPosition() {
        return $this->positon;
    }
    public function setPosition($positon) {
        $this->positon = $positon;
    }
    public function getAvatar() {
        return $this->avatar;
    }
    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }
    public function getDepartmentID() {
        return $this->department_ID;
    }
    public function setDepartmentID($department_ID) {
        $this->department_ID = $department_ID;
    }
    public function getAllEmployeeInfo() {
        $conn = DBconnection();
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($conn, $sql);
        $data = [];
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function getEmPloyeeIfo()
    {
        //ket noi co so du lieu
        $conn = DBconnection();
        //cau truy van
        $sql = "SELECT * FROM employees";
        //thuc thi cau truy van
        $result = mysqli_query($conn, $sql);
        //bien chua du lieu tra ve
        $data = [];
        //kiem tra xem co du lieu tra ve hay khong
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;

    }
    public function updateEmployee($employee_ID, $full_name, $address, $mobile_phone, $positon, $avatar, $department_ID)
    {
        $conn = DBconnection();
        $sql = "UPDATE employees SET full_name = '$full_name', address = '$address', mobile_phone = '$mobile_phone', positon = '$positon', avatar = '$avatar', department_ID = '$department_ID' WHERE employee_ID = '$employee_ID'";
        $result = mysqli_query($conn, $sql);
        return $result;
    }


}

?>