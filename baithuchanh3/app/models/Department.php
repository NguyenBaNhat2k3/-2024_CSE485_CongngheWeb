<?php 

class Department {
    private $department_ID;
    private $department_name;
    private $address;
    private $email;
    private $phone;
    private $logo;
    private $website;
    private $parent_Department_ID;

    public function __construct($department_ID, $department_name, $address, $email, $phone, $logo, $website, $parent_Department_ID) {
        $this->department_ID = $department_ID;
        $this->department_name = $department_name;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->logo = $logo;
        $this->website = $website;
        $this->parent_Department_ID = $parent_Department_ID;
    }
    public function getDepartmentID() {
        return $this->department_ID;
    }
    public function getDepartmentName() {
        return $this->department_name;
    }
    public function getAddress() {
        return $this->address;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function getLogo() {
        return $this->logo;
    }
    public function getWebsite() {
        return $this->website;
    }
    public function getParentDepartmentID() {
        return $this->parent_Department_ID;
    }

    public function setDepartmentID($department_ID) {
        $this->department_ID = $department_ID;
    }
    public function setDepartmentName($department_name) {
        $this->department_name = $department_name;
    }
    public function setAddress($address) {
        $this->address = $address;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setPhone($phone) {
        $this->phone = $phone;
    }
    public function setLogo($logo) {
        $this->logo = $logo;
    }
    public function setWebsite($website) {
        $this->website = $website;
    }
    public function setParentDepartmentID($parent_Department_ID) {
        $this->parent_Department_ID = $parent_Department_ID;
    }
}

?>