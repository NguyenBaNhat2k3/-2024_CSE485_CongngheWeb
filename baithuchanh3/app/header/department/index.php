
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh bạ</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <head>
        <nav class="navbar navbar-expand-lg  custom-navbar">
            <div class="container-fluid">
                <a class="navbar-brand " href="#">Danh bạ điện thoại</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= BASE_URL.'/public/index.php?controller=home'?>">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= BASE_URL.'/public/index.php?controller=department'?>">Quản lý nhân viên</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-gear"></i>
                                Cài đặt chung
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                                <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </head>
