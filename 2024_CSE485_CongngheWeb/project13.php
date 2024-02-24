<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" >
    <title>DANH SÁCH KHÓA HỌC</title>

    <style>
        .header {
            font-size: 24px;
            color: brown;
            font-weight: 700;
            border-left: 5px solid brown;
            padding-left: 10px;
            margin : 1%;
            height: 10%;
        }

        .frame {
            width: 100%;
            height: 100%;
        }

        .course_content {
            box-sizing: border-box;
            float: left;
            margin-top: 10px;
            background-color: lightgray;
            margin:1%;
            width: 30%;
            height: 40%;
        }
        .course h3 {
            color: DarkGray;
            margin: 20px;
            font-size: 50px;
        }
        .course p {
            margin: 10px;
            color: darkred;
        }
        .imagesItem {
            background-image:;
            width: 100%;
            height: 9rem;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .body_content {
            margin-top: 5%;
            margin-bottom: 5%;
            width: 100%;
            height: 45%;
        }
        .iconcontent {
            display: flex;
            color:black;
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
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    // Thêm các khóa học khác vào đây
    [
        'title' => 'LẬP TRÌNH WEB FULL STACK',
        'description' => 'Khóa học phù hợp với người mới và đổi nghề.Trang bị kiến thức từ fontend đến backend xây dựng web hoàn chỉnh.',
        'fee' => 'ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => 'thời lượng: 6 tháng'
    ],
    [
        'title' => 'LẬP TRÌNH JAVA FULL STACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng java,
        các ứng dụng sử dụng J2EE,JSP,EJB,..... Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => 'thời lượng: 6 tháng',
        'duration' => '236 giờ'
    ],
    [
        'title' => 'LẬP TRINH PHP & LARAVEL',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng java,các ứng dụng sử dụng J2EE,JSP,EJB,....',
        'fee' => '9.600.000 VND',
        'start_date' => '5/2/2024',
        'duration' => '36 giờ'
    ],
    [
        'title' => 'KHOÁ HỌC LẬP TRÌNH NET',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
        'fee' => '6.000.000 VND',
        'start_date' => '2/2024',
        'duration' => '40 giờ'
    ],
    [
        'title' => 'LẬP TRÌNH SQL SERVEL',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
        'fee' => '4.500.000 VND',
        'start_date' => '2/2024',
        'duration' => '30 giờ'
    ],
];
echo '<div class = "frame">';
echo '<div class = "header">KHÓA HỌC SẮP KHAI GIẢNG</div>';
// Hiển thị danh sách khóa học
foreach ($courses as $course) {

    echo '<div class="course_content">';
    echo '<div class = "imagesItem"></div>';
    echo '<div class = "body_content">';
    echo '<h3>' . $course['title'] . '</h3>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<div class = "iconcontent">';
    echo '<i class="fa-solid fa-gift"></i>';
    echo '<p>Học phí: ' . $course['fee'] . '</p>';
    echo '</div>';
    echo '<div class = "iconcontent">';
    echo '<i class="fa-solid fa-clock"></i>';
    echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
    echo '</div>';
    echo '<div class = "iconcontent">';
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

