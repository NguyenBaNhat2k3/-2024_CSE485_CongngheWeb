<?php
include("app/config/database.php");

class login
{
    private $user_name;
    private $pass_word;

    public function __construct($username, $password)
    {
        $this->user_name = $username;
        $this->pass_word = $password;
    }

    public function checkInfor()
    {
        $cnt = new connectDB();
        $conn = $cnt->getConn();

        // Chuẩn bị và thực thi truy vấn
        // Lấy username và password từ form
        $input_user_name = $_POST['username'];
        $input_password = $_POST['pass_word'];

// Tránh SQL injection
        $input_user_name = mysqli_real_escape_string($conn, $input_user_name);
        $input_password = mysqli_real_escape_string($conn, $input_password);

// Truy vấn dữ liệu
        $sql = "SELECT * FROM users WHERE user_name = '$input_user_name' AND password = '$input_password'";
        $result = $conn->query($sql);

// Kiểm tra kết quả trả về
        if ($result->num_rows > 0) {
            $row = $result ->fetch_assoc();
            if (!empty($row)) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['user_role'] = $row['Role'];
                $_SESSION['user_id'] = $row['EmployeeID'];}


            // Đăng nhập thành công
            $conn -> close();
            return true;

        } else {
            $conn -> close();
            return false;
        }

    }
}
?>
