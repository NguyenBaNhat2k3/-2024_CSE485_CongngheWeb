<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/fontawesome-free-6.3.0-web/css/all.min.css" >
    <title>Document</title>
    
    <style>      
        *{
            height: 100%;
            width: 100%;
            box-sizing: border-box;
        }


        .header_tasbar {
            display: flex;
            align-items: center;
            justify-content:start;
            background-color: blue;
            height: 7%;
            width: 100%;
            list-style-type: none;
            margin: 0px;
        }

        .header_item {
            color: white;
            width: auto;
            height: auto;
            padding-right: 1%;
            padding-left: 1%;
            border-right: 1px solid white;
            font: 1.2rem;
        }

        .header_item:first-child {
            
            color: white;
        }    
        .fa-solid {
            color: white ;
            font-size: 1.8rem;
        }                
    </style>

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
            "LIÊN HỆ",
        ];

    ?> 

    <nav>
        <ul class="header_tasbar">
            <li class = "header_item"><i class="fa-solid fa-house"></i></li>
            <?php
                foreach ($navItems as $navItem) {
                    echo "<li class = \"header_item\">$navItem</li>";
                }
            ?>
        </ul>
    </nav>

    
</head>
<body>
