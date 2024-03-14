<?php


/**
 * @method getAllEmployees()
 */
class EmployeeController
{
    private $model;
    public function getmodel()
    {
        return $this->model;

    }
    public function setmodel($model)
    {
        $this->model = $model;
    }

    public function __construct($model)
    {
        $this->model = $model;
    }

    public  function getEmployees()
    {
        return $this->model->getEmployees();
    }
    public function getAllEmployeeInfo()
    {
        return $this->model->getAllEmployeeInfo();
    }
    public function updateEmployee($employee_ID, $newinfo)
    {
        $this->model->updateEmployee($employee_ID, $newinfo);
    }


}
?>