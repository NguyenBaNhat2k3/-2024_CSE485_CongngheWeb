<?php
require_once '../../config/config.php';
require_once APP_ROOT . '/app/service/employees/EmployeeService.php';
require_once APP_ROOT . '/app/models/Employee.php';
include APP_ROOT.'/app/header/employee/index.php';
$itemService = new EmployeeService();
$items = $itemService->getAllEmployee();

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$item_one_page = 4;
$total_items = count($items);
$total_pages = ceil($total_items / $item_one_page);
$start = ($current_page - 1) * $item_one_page;
$items_current_page = array_slice($items, $start, $item_one_page);

?>


<!DOCTYPE html>
<html>
<head>
    <title >Danh bạ điện tử</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <h2 class = "text-center text-primary">Danh bạ điện tử</h2>
            <table class = "table table-hover text-center">
                <tr class = "text-center">
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại di động</th>
                    <th>Vị trí</th>
                </tr>
                <?php $i = ($current_page - 1) * $item_one_page + 1; foreach ($items_current_page as $item): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?php  echo $item->getFullName()?></td>
                        <td><?php  echo $item->getAddress()?></td>
                        <td><?php  echo $item->getMobilePhone()?></td>
                        <td><?php  echo $item->getPosition()?></td>
                    </tr>
                    <?php $i += 1; endforeach; ?>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php if($current_page > 1): ?>
                        <li class=""><a class="page-link" href="?page=<?= $current_page - 1; ?>">Về</a></li>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<footer>
    <?php

    include APP_ROOT.'/app/footer/index.php';

    ?>
</html>
