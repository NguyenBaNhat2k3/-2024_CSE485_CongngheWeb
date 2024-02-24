<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/fontawesome-free-6.3.0-web/css/all.min.css" >
    <title>Danh sách khóa học</title>

    <style>
    /* Thêm các định kiểu CSS của bạn ở đây */

    .container {
        width: 100%;
        height: 100%;
    }

    .header_course {
        font-size: 1.5rem;
        font-weight: 900;
        color: red;
        border-left: 5px solid red;
        padding-left: 10px;
        margin : 1%;
        height: 10%;
    }

    .course {
        background-color: #f9f9f9;
        margin: 1%;
        width: 31%;
        height: 45%;
        box-sizing: border-box;
        float: left;
        margin-top: 0;
        
    }
    .course h2 {
        color: #333;
        margin: 10px;
    }
    .course p {
        margin: 10px;
        color: #666;
    }
    .imagesItem {
        background-image: url(/baithuchanh1/thuchanh1/Screenshot\ 2024-02-23\ 153931.png);
        width: 100%;
        height: 9rem;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .bodyItem {
        margin-top: 5%;
        margin-bottom: 5%;
        width: 100%;
        height: 45%;
    }
    .iconItem {
        display: flex;
    }
    .fa-solid {
        margin: 10px;
        margin-right: 0px;
        color: red;
    }
    </style>

    </head>

    <body>
        <?php
        // Dữ liệu khóa học lưu động trong mảng
        $courses = [
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
        // Thêm các khóa học khác vào đây
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
        ];
        echo '<div class = "container">';
        echo '<div class = "header_course">KHÓA HỌC SẮP KHAI GIẢNG</div>';
        // Hiển thị danh sách khóa học
        foreach ($courses as $course) {
                   
            echo '<div class="course">';
                echo '<div class = "imagesItem"></div>';
                echo '<div class = "bodyItem">';            
                    echo '<h2>' . $course['title'] . '</h2>';
                    echo '<p>' . $course['description'] . '</p>';
                    echo '<div class = "iconItem">';
                        echo '<i class="fa-solid fa-gift"></i>';
                        echo '<p>Học phí: ' . $course['fee'] . '</p>';
                    echo '</div>';
                    echo '<div class = "iconItem">';
                        echo '<i class="fa-solid fa-clock"></i>';
                        echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
                    echo '</div>';
                    echo '<div class = "iconItem">';
                        echo '<i class="fa-solid fa-clock"></i>';
                        echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
        echo '</div>'
        ?>
    </body>
</html>
