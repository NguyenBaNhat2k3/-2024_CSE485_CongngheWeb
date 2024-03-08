<?php

class Employee {
    private $employee_ID;
    private $full_name;
    private $address;
    private $mobile_phone;
    private $positon;
    private $avatar;
    private $department_ID;

    public function __construct($employee_ID, $full_name, $address, $mobile_phone, $positon, $avatar, $department_ID) {
        $this->$employee_ID = $employee_ID;
        $this->full_name = $full_name;
        $this->address = $address;
        $this->mobile_phone = $mobile_phone;
        $this->positon = $positon;
        $this->avatar = $avatar;
        $this->department_ID= $department_ID;
    }

}

?>