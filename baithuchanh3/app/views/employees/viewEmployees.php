<?php
// require_once '../../config/config.php';
include APP_ROOT.'/app/header/department/index.php';
require_once APP_ROOT . '/app/service/employees/EmployeeService.php';
require_once APP_ROOT . '/app/models/Employee.php';
$itemService = new EmployeeService();
$items = $itemService->getAllEmployee();

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$item_one_page = 100;
$total_items = count($items);
$total_pages = ceil($total_items / $item_one_page);
$start = ($current_page - 1) * $item_one_page;
$items_current_page = array_slice($items, $start, $item_one_page);

?>
 <?php if(isset($_GET['delmsg'])): ?>
    <div class="alert alert-success" role = "alert">
        <?= $_GET['delmsg'] ?>
    </div>
<?php endif; ?>
<?php if(isset($_GET['delerr'])): ?>
    <div class="alert alert-success" role = "alert">
        <?= $_GET['delerr'] ?>
    </div>
<?php endif; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <h2 class = "text-center text-primary my-3">Danh bạ điện tử</h2>
            <a href="<?= BASE_URL.'/app/views/employees/add.php' ?>"  class="btn btn-primary">Thêm mới</a>
            <table class = "table table-hover text-center">
                <tr class = "text-center">
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại di động</th>
                    <th>Vị trí</th>
                    <th>Ảnh đại diện</th>
                    <th>Phòng ban</th>
                    <th colspan="2" class = "text-center">Thao tác</th>
                </tr>
                <?php $i = ($current_page - 1) * $item_one_page + 1; foreach ($items_current_page as $item): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?php  echo $item->getFullName()?></td>
                        <td><?php  echo $item->getAddress()?></td>
                        <td><?php  echo $item->getMobilePhone()?></td>
                        <td><?php  echo $item->getPosition()?></td>
                        <td><img src="<?php  echo $item->getAvatar()?>" class="img-thumbnail" style="max-width: 100px;"></td>
                        <td><?php  echo $item->getDepartmentID()?></td>
                        <td><a href="<?= BASE_URL.'/app/views/employees/updateEmployee.php?id='.$item->getEmployeeID()?>" class = "btn btn-warning text-center"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="<?= BASE_URL.'/app/views/employees/delete.php?id='.$item->getEmployeeID()?>" class = "btn btn-danger text-center"><i class="bi bi-trash3-fill " onclick="return confirmDelete();"></i></a></td>
                    </tr>
                    <?php $i += 1; endforeach; ?>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php if($current_page > 1): ?>
                        <li class=""><a class="page-link" href="<?= BASE_URL.'/app/views/employees/viewEmployees.php?page='.$current_page - 1; ?>">Về</a></li>
                    <?php endif; ?>
                    <?php for($i = 1; $i <= $total_pages; $i++) :?>
                        <li class="page-item"><a class="page-link <?php if($current_page == $i) {echo 'active'; }; ?>" href="?page=<?= $i ?>"><?= $i ?></a></li>
                    <?php endfor; ?>
                    <?php if($current_page < $total_pages): ?>
                        <li class="page-item"><a class="page-link" href="?page=<?= $current_page + 1; ?>">Tiếp</a></li>
                    <?php endif; ?>
                </ul>

            </nav>
        </div>
    </div>
</div>

</form>

<?php
include APP_ROOT.'/app/footer/index.php';

?>
<script>
function confirmDelete() {
  return confirm("Bạn có muốn xóa không?");
}
</script>