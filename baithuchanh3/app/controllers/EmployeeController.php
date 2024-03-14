<<<<<<< HEAD
=======
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
>>>>>>> 038bb88f776202eebb64c3e3e1c4d342cfc364bb
