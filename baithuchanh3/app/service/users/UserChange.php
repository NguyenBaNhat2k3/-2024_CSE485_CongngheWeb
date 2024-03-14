<?php
include __DIR__ . '/../config/DB.php';
require_once APP_ROOT.'/app/config/datebase.php';
require_once APP_ROOT.'/app/models/User.php';
global $conn;
$user_name = $_SESSION['employ_ID'];
if ($user_name) {
    $sql = "SELECT * FROM users WHERE user_name = $user_name";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (!empty($row)) {
            $user_name = [
                'user_name' => $row['user_name'],
                'pass_word' => $row['pass_word'],

            ];
        }
    }

    $sqluser = "SELECT * FROM users WHERE user_name = $user_name";
    $result = mysqli_query($conn, $sqluser);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (!empty($row)) {
            $User = [
                'Username' => $row['Username'],
                'Password' => $row['Password'],

            ];
        }
    }
}
?>

<html lang="">
<header>

</header>
<body>
<form style="display: flex;flex-direction: column" method="post" action="./index.php?controller=Info&action=ChangeProcess&ID=<?= $user_name['EmployeeID'] ?? '' ?>">
    <table>
        <h3>Chỉnh Sửa Thông Tin</h3>
        EmployeeID : <input name="EmployeeID" type="text" value="<?= $user_name['EmployeeID'] ?? '' ?>">

        Username : <input name="Username" type="text" value="<?= isset($User['User_name']) ? $User['Username'] : '' ?>">
        Password : <input name="Password" type="password" value="<?= isset($User['Pass_word']) ? $User['Password'] : '' ?>">

        <label for="image">Avatar:</label>
        <input type="file" name="Avatar" id="image">
    </table>
    <button type="submit">Sửa lại</button>
</form>
<button><a href="./ChangeProcess.php?controller=Home&action=index&Role=<?= $_SESSION['user_role']?>">Trở về</a></button>
</body>
</html>


