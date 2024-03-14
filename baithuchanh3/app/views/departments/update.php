<?php 
include '../../config/config.php';
require_once APP_ROOT.'/app/header/department/index.php';
include APP_ROOT.'./app/service/Departments/DepartmentsService.php';
$departmentservice = new DepartmentService();
$depertments = $departmentservice->getALLDepartment();
$user_id = $_GET['user'];

$user_name = $depertments[$user_id-1]->getDepartmentName();
$user_address = $depertments[$user_id-1]->getAddress();
$user_phone = $depertments[$user_id-1]->getPhone();
$user_logo = $depertments[$user_id-1]->getLogo();
$user_email = $depertments[$user_id-1]->getEmail();
$user_web = $depertments[$user_id-1]->getWebsite();

?>
<main>
<div class="container my-5">
        <div class="row">
            <div class="col-md">
                <h3 class="text-center text-primary my-2">Thông tin phòng ban</h3>
                
                    <form action="update_process.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="username" class="form-label">Tên phòng</label>
                            <input type="text" class="form-control" id="username" name = "username" placeholder="<?= $user_name ;?>">
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email</label>
                            <input class="form-control" type="email" name = "useremail" id="useremail" placeholder="<?= $user_email; ?>" rows="3"></input>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="number" class="form-control" name="phone" placeholder="<?= $user_phone; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input class="form-control" type="text" name="address" rows="3" placeholder = "<?= $user_address ?>"></input>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input class="form-control" type="text" name="logo" rows="3" placeholder="<?= $user_logo ?>" ></input>
                        </div>
                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <input class="form-control" type="text" name="website" rows="3" placeholder="<?= $user_web ?>" ></input>
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