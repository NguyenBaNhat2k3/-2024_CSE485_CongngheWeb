<?php 
session_start(); 
include APP_ROOT.'/app/service/users/UserService.php';

$userSer = new UserService();
$userAdmins = $userSer->getALLAdmin();
$userRegulars = $userSer->getAllRegular();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh bạ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Danh bạ điện thoại</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASE_URL.'/public/index.php?controller=home'?>">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                    <?php if(isset($_SESSION['isLogin']) && ($_SESSION['isLogin'] != "admin")) { ?>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= BASE_URL.'/public/index.php?controller=department'?>">Quản lý phòng ban</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL.'/public/index.php?controller=employee' ?>">Thông tin nhân viên</a>
                        </li>
                    <?php } else if(isset($_SESSION['isLogin']) && ($_SESSION['isLogin'] == "admin")) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../../views/employees/updateEmployee.php">Thông tin cá nhân</a>
                        </li>
                    <?php } ?>    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <?php if(isset($_SESSION['isLogin']) && ($_SESSION['isLogin'] != "")) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?= BASE_URL.'/app/views/employees/index.blade.php?user='.$_SESSION['isLogin'] ?>"  >
                                <i class="bi bi-gear"></i>
                                <?= $_SESSION['isLogin']; ?>
                                <li><a class="nav-link" href="<?= BASE_URL.'/app/views/login/logout.php' ?>">Đăng xuất</a></li>
                                <li><a class="nav-link" href="#">Đổi mật khẩu</a></li>
                            </a>
                        </li>                         
                    <?php } else {?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL.'/public/index.php?controller=login'; ?>">Đăng nhập</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>