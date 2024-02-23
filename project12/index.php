<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $navItems = [
             "GIỚI THIỆU",
             "TIN TỨC & THÔNG BÁO",
             "TUYỂN SINH",
             "ĐÀO TẠO",
             "NGHIÊN CỨU",
             "ĐỐI NGOẠI",
             "VĂN BẢN",
             "SINH VIÊN",
             "LIÊN HỆ"
        ];
        echo"
            <ul class='header'>
            <li class='nav-item'>
            <i class='fa-solid fa-house'></i>
            </li>
        ";
        foreach ($navItems as $item) {
         echo "<li class='header1'>$item</li>";
        }
        echo '</ul></nav>';
        ?>
</body>
</html>