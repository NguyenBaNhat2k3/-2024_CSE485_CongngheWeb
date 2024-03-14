<?php
include '../../config/config.php';
require_once APP_ROOT.'/app/header/user/index.php';
include sprintf("%s./app/service/users/UserService.php", APP_ROOT);

$userservice = new UserService();
$users = $userservice->getALLUser();
$user_id = $_GET['user'];

$user_name = $users[$user_id-1]->getUserName();
$pass_word = $users[$user_id-1]->getPassWord();

?>

<main>
    <div class="container my-5">
        <div class="row">
            <div class="col-md">
                <h3 class="text-center text-primary my-2">Thông tin nhân viên</h3>

                <form action="update_process.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="username" class="form-label">Tên người dùng</label>
                        <input type="text" class="form-control" id="username" name = "username" placeholder="<?= $user_name ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input class="form-control" type="text" name = "password" id="password" placeholder="<?= $pass_word ?>" rows="3">
                    </div>
                    <button type="submit" class=" btn btn-primary">OK</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
require_once APP_ROOT.'/app/footer/index.php';
?>

