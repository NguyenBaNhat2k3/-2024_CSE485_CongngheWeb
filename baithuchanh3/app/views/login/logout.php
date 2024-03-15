<?php
include '../../config/config.php';

session_start();
if($_SESSION['isLogin']) {
    unset($_SESSION['isLogin']);
    header("Location:".BASE_URL."/public/index.php?controller=home");
}
?>

