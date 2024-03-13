
<?php
include APP_ROOT.'/app/header/department/index.php';

?>
<main>
    <div class="container ">
        <h3 class = "text-center text-success my-3">Quản lý danh bạ</h3>
        <?php if(isset($_GET['delmsg'])): ?>
            <div class="alert alert-success" role = "alert">
                <?= $_GET['delmsg'] ?>
            </div>
        <?php endif; ?>
        <a href="/app/views/departments/add.php"  class="btn btn-primary">Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên phòng ban</th>
                <th scope="col">Email</th>
                <th scope="col">SĐT</th>
                <th scope="col">Logo</th>
                <th scope="col">Website</th>              
                <th scope="col" colspan="2" class="text-center">Thao tác</th>

                </tr>
            </thead>    
            <tbody>
                <?php  ?>
                <?php $i = 0; foreach($departments as $department): ?>
                    <tr>
                        <th scope="row"><?= ++$i ?></th>
                        <td><?= $department->getDepartmentName() ?></td>
                        <td><?= $department->getEmail() ?></td>
                        <td><?= $department->getPhone() ?></td>
                        <td><img src="<?= $department->getLogo() ?>" class="img-thumbnail" style="max-width: 100px;"></td>
                        <td><a href="#" class="text-decoration-none" target="_blank"><?= $department->getWebsite() ?></a></td>
                        
                        <td>
                            <a href="/app/views/departments/update.php?user=<?= $department->getDepartmentID() ?>"><i class="bi bi-pencil-square btn btn-primary"></i></a>
                        </td>
                        <td>
                            <a href="/app/views/departments/delete.php?user=<?= $department->getDepartmentID() ?>" class = "btn btn-danger"><i class="bi bi-trash3-fill "></i></a>
                        </td>
                        <td>
                            <a href="/app/views/employees/index.blade.php?user=<?= $department->getDepartmentID() ?>" class = "btn btn-success"><i class="bi bi-file-plus-fill"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</main>

<?php
include APP_ROOT.'/app/footer/index.php';
?>