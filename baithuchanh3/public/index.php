<?php
require_once '../app/config/config.php';


$controller = isset($_GET['controller']) ? $_GET['controller'] : DEFAULT_CONTROLLER;
$action     = isset($_GET['action']) ? $_GET['action'] : DEFAULT_ACTION;

if($controller == DEFAULT_CONTROLLER) {
    require_once APP_ROOT.'/app/controllers/UserController.php';    
    $home = new UserController();
    $home->index();
    
}
else if($controller == 'department') {
    require_once APP_ROOT.'/app/controllers/DepartmentController.php';
    $home = new DepartmentController();
    $home->index();
}
else if($controller == 'employee') {
    require_once APP_ROOT.'/app/controllers/EmployeeController.php';
    $home = new EmployeeController();
    $home->index();
}
else if($controller == 'login') {
    require_once APP_ROOT.'/app/controllers/UserController.php';
    $home = new UserController();
    $home -> login();
}
else {
    echo 'URL khong ton tai';
}
?>

