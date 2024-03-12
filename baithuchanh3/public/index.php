<?php
require_once '../app/config/config.php';

// $home = new DepartmentController();
// $home->index();

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
else {
    echo 'URL khong ton tai';
}
?>

