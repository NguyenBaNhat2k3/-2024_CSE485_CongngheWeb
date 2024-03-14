<?php
require_once APP_ROOT . '/app/service/employees/EmployeeService.php';

class EmployeeController {
   public function index() {
       $employeeService = new EmployeeService();
       $employees = $employeeService->getAllEmployee();
       include APP_ROOT . '/app/views/employees/viewEmployees.php';
   }

   public function updateEmployee()
   {
       $employeeService = new EmployeeService();
       $employees = $employeeService->updateEmployee($employeid,$fullname,$address,$position,$mobilephone,$avatar,$departmentid);
       include APP_ROOT .'/app/views/employees/updateEmployee.php';



   }

}
?>