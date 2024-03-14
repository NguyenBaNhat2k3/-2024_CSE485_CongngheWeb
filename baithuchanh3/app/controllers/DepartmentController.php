<?php
require_once APP_ROOT.'/app/service/Departments/DepartmentsService.php';

class DepartmentController {
    public function index() {
        $departmentServiec = new DepartmentService();
        $departments = $departmentServiec->getALLDepartment();
            
        //lay du lieu tu Department
        include APP_ROOT.'/app/views/departments/index.blade.php';
        
    }
    public function add_process() {
        

        //lay du lieu
    }

}
