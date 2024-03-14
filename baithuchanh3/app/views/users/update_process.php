<?php
// Kết nối HeidiSQL
define('APP_ROOT', dirname(__FILE__, 3));
$server="127.0.0.1";
$username = "root";
$password = "";
$database = "danhbadienthoai";
global $conn;
// Tạo kết nối
$conn = mysqli_connect($server, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Lấy thông tin đăng nhập từ form
$username = $_POST['username'];
$password = $_POST['password'];

// Mã hóa mật khẩu (ví dụ sử dụng MD5)
$hashedPassword = md5($password);

// Truy vấn lấy thông tin người dùng
$sql = "SELECT * FROM users WHERE user_name = '$username' AND pass_word = '$hashedPassword'";
$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả truy vấn
if (mysqli_num_rows($result) === 1) {
    // Đăng nhập thành công
    // Lưu trữ thông tin người dùng vào session (ví dụ)
    session_start();
    $_SESSION['username'] = $username;

    // Chuyển hướng đến trang chủ
    header("Location: home.php");
} else {
    // Đăng nhập thất bại
    echo "<p style='color: red;'>Tên đăng nhập hoặc mật khẩu không chính xác.</p>";
}

// Đóng kết nối
mysqli_close($conn);
?>
