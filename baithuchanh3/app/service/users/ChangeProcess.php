<?php
include('UserChange.php');
include __DIR__ . '/../config/DB.php';
global $conn;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $EmployeeID = $_POST['employee_ID'] ?? null;
    $Username = isset($_POST['user_name']) ? $_POST['username'] : null;
    $Password = isset($_POST['pass_word']) ? $_POST['password'] : null;
    $ROLE = $_POST['Role'] ?? null;
}
    if ($EmployeeID !== null ) {
        $sqluser = "UPDATE users
                SET user_name = '$Username', pass_word = '$Password', 
                    ROLE = '$ROLE'
                WHERE employee_ID = '$EmployeeID'";
    }
    if (mysqli_query($conn, $sqluser)) {
        echo "Cập nhật thông tin thành công.";
    } else {
        echo "Lỗi: " . mysqli_error($conn);

}
?>
