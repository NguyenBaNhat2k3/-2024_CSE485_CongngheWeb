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
                            <label for="username" class="form-label">Tên phòng</label>
                            <input type="text" class="form-control" id="username" name = "username" >
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email</label>
                            <input class="form-control" type="email" name = "useremail" id="useremail" placeholder="name@example.com" rows="3"></input>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="number" class="form-control" name="phone"  >
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input class="form-control" type="text" name="address" rows="3"></input>
                        </div>
                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <input class="form-control" type="text" name="website" rows="3"></input>
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

