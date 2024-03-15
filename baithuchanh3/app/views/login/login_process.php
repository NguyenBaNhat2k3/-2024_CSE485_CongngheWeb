<?php
include '../../config/config.php';
include APP_ROOT.'/app/service/users/UserService.php';

$userSer = new UserService();
$userAdmins = $userSer->getALLAdmin();
$userRegulars = $userSer->getAllRegular();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['checkbox'];

//ktr csdl
    foreach($userAdmins as $user) {
        if($username == $user->getUsername() && $password == $user->getPassword() && $role == 'admin')  {
            session_start();
            $_SESSION['isLogin'] = $username;
            header("Location: ".BASE_URL.'/public/index.php?controller=home');
            return;
        }
        // else if($username == $user->getUsername() && $password == $user->getPassword() && $role = 'regular') {
        //     session_start();
        //     $_SESSION['isLogin'] = $username;
        //     header("Location: ".BASE_URL.'/public/index.php?controller=home');
        // }
        
    }
    foreach($userRegulars as $user) {
        if($username == $user->getUsername() && $password == $user->getPassword() && $role == 'regular')  {
            session_start();
            $_SESSION['isLogin'] = $username;
            header("Location: ".BASE_URL.'/public/index.php?controller=home');
            return;
        }
        // else if($username == $user->getUsername() && $password == $user->getPassword() && $role = 'regular') {
        //     session_start();
        //     $_SESSION['isLogin'] = $username;
        //     header("Location: ".BASE_URL.'/public/index.php?controller=home');
        // }       
    }
     
    header("Location: ".BASE_URL.'/public/index.php?controller=login');
        
}
?>