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


<footer class="bg-dark text-light">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-6">
        <h3>Thông tin liên hệ</h3>
        <p>123 Đường ABC, Thành phố XYZ</p>
        <p>Email: info@example.com</p>
        <p>Điện thoại: 123-456-7890</p>
      </div>
      <div class="col-md-6">
        <h3>Liên kết</h3>
        <ul class="list-unstyled">
          <li><a href="#">Trang chủ</a></li>
          <li><a href="#">Giới thiệu</a></li>
          <li><a href="#">Dịch vụ</a></li>
          <li><a href="#">Liên hệ</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p class="text-center">© 2024 Tên Công ty. Tất cả các quyền được bảo lưu.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

