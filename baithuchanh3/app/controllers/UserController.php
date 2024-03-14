<?php
require_once APP_ROOT.'/app/service/users/UserService.php';

class UserController {
    public function index() {
        //goi dulieu tu userservice
        $UserService = new UserService();
        $users = $UserService->getALLUser();
        include APP_ROOT.'/app/views/users/index.blade.php';
    }
}
