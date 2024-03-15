<?php 
include '../../config/config.php';
include APP_ROOT.'/app/header/department/index.php'; 
?>

<main>
<div class="container my-5">
        <div class="row">
            <div class="col-md">
                <h3 class="text-center text-primary my-2">Thêm phòng ban</h3>
                <?php if(isset($_GET['er'])): ?>
                    <div class="alert alert-danger" role = "alert">
                        <?= $_GET['er'] ?>
                    </div>
                <?php endif; ?>
                    <form action="add_process.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ Tên</label>
                            <input type="text" class="form-control"  name = "name" >
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Chức vụ</label>
                            <input class="form-control" type="text" name = "position"  rows="3"></input>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" name="phone"  >
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input class="form-control" type="text" name="address" rows="3"></input>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Avatar</label>
                            <input class="form-control" type="text" name="avatar" rows="3" value="https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg"></input>
                        </div>
                        <div class="mb-3">
                            <label for="website" class="form-label">Phòng ban</label>
                            <input class="form-control" type="text" name="department_id" rows="3"></input>
                        </div>
                        <button type="submit" class=" btn btn-primary">OK</button>
                    </form>
               
            </div>
        </div>
    </div>
</main>

<?php
include APP_ROOT.'/app/footer/index.php';
?>

