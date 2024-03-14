<?php

class Employee {
    private $employee_ID;
    private $full_name;
    private $address;
    private $mobile_phone;
    private $position;
    private $avatar;
    private $department_ID;

    public function __construct($employee_ID, $full_name, $address, $mobile_phone, $position, $avatar, $department_ID)
    {
        $this->employee_ID = $employee_ID;
        $this->full_name = $full_name;
        $this->address = $address;
        $this->mobile_phone = $mobile_phone;
        $this->position = $position;
        $this->avatar = $avatar;
        $this->department_ID = $department_ID;
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
        return $this->position;
    }
    public function setPosition($position) {
        $this->position = $position;
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



}

?>

