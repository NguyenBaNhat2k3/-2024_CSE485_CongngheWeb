<!doctype html>
<html lang="en">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fontawesome.com/">
<head>
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




echo '<nav><ul class = "navigation_bar">';
foreach ($navItems as $item) {
    echo "<li class = \"item\">$item</li>";
}
echo '</ul></nav>';
?>

</body>
</html>