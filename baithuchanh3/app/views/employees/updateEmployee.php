<?php
require_once '../../config/config.php';
require_once APP_ROOT . '/app/service/employees/EmployeeService.php';
require_once APP_ROOT . '/app/models/Employee.php';
include APP_ROOT.'/app/header/employee/index.php';
$employeeService = new EmployeeService();
$employee = $employeeService->getEmployeeById($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Danh bạ điện tử</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 class="text-primary text-center my-3">Sửa thông tin cá nhân </h2>
            <form method="post" action="processupdateEmployee.php">
                <div class="mb-3">
                    <label for="address" class="form-label">ID</label>
                    <input type="text" class="form-control" name="id" value="<?= $employee->getEmployeeID() ?> "readonly>
                </div>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Họ và Tên</label>
                    <input type="text" class="form-control" name="fullname" id ="fullname" value="<?= $employee->getFullName() ?>">

                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" value="<?= $employee->getAddress() ?>">
                </div>
                <div class="mb-3">
                    <label for="mobliephone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" name="mobilephone" value="<?= $employee->getMobilePhone() ?>">
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Vị trí</label>
                    <input type="text" class="form-control" name="position" value="<?= $employee->getPosition() ?>">
                </div>
                <div class="mb-3">
                    <label for="avatar" class="form-label">Ảnh đại diện</label>
                    <input type="text" class="form-control" name="avatar" value="<?= $employee->getAvatar() ?>">
                </div>
                <div class="mb-3">
                    <label for="departmentid" class="form-label">Đơn vị công tác</label>
                    <input type="text" class="form-control" name="departmentid" value="<?= $employee->getDepartmentID() ?>">
                </div>
                <button href="" type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<footer>
    <?php

    include APP_ROOT.'/app/footer/index.php';

    ?>
</footer>
</html>
