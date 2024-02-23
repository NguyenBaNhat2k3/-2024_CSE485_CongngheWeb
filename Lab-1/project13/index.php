<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Danh sách khóa học</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        .all
        {
            display: flex ;
            flex-wrap: wrap;
        }
        .container
        {
            width: calc(33.33% - 20px);
            margin: 10px;


        }
        .images
        {
            background-image: url("/laragon/www/2024_CSE_CongNgheWeb/Lab1/Images/khoahoclaptrinh.jpg");
            width: 100%;
            height: 9rem;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
        }
        .course h2 {
            color: #333;
        }
        .course p {
            color: #666;
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
    ]

    // Thêm các khóa học khác vào đây
];


echo '<div class = "header_course" style="border-left:2px solid red; padding-left: 15px  " >KHÓA HỌC SẮP KHAI GIẢNG</div>';
echo '<div class = "all">';
// Hiển thị danh sách khóa học
foreach ($courses as $course) {
    echo '<div class= "container">';
    echo '<div class = "images"></div>';
    echo '<div class="course">';
    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p>Học phí: ' . $course['fee'] . '</p>';
    echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
    echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';
    echo '</div>';
}
?>
</body>
</html>