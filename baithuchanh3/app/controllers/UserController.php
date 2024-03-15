<?php

class UserController {
    function index() {
        include APP_ROOT.'/app/views/home.blade.php';
    }
    function login() {
        include APP_ROOT.'/app/views/login/index.php';
    }
}
?>