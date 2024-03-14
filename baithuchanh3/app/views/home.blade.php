
<?php
    // include '../config/config.php';
    require_once APP_ROOT.'/app/header/user/index.php';
    require_once APP_ROOT.'/app/service/Departments/DepartmentsService.php';
    $view = new DepartmentService();
    $homes = $view -> getALLDepartment();

    $itemsPerPage = 3;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($homes) / $itemsPerPage);
    $homes = array_slice($homes, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống tra cứu danh bạ điện tử TLU</title>
</head>
<body>
    <img style="width : 100%" src="../public/assets/images/banner.jpg" alt="banner">
    <main>
    <div class="container">
        <form class="d-flex my-3 justify-content-end col-5" role="search"  >
            <input class="form-control me-2 " type="search" placeholder="tìm kiếm" aria-label="Search" name = 'timkiem'>
            <button class="btn btn-outline-success " type="submit" style="width: 150px;">Tìm kiếm</button>
        </form>
        <?php  
            if(isset($_GET['timkiem'])) {
                $search = $view->searchDepartment($_GET['timkiem']);
            }
            else
                $search = null; 
        ?>
        <?php if($search  != null) { ?>
            <?php foreach($search as $home) :?> 

                <div class="col-4">
                    <div class="card m-3" style="width: 18rem;">
                        <img style="width : 100%; height : 100%" src="<?= $home->getlogo() ?>" class="card-img-top" alt="Ảnh khoa"> 
                        <div class="card-body">
                            <p class="card-text">Địa chỉ: <?= $home->getAddress() ?></p>
                            <p class="card-text">Email: <?= $home->getEmail() ?></p>
                            <p class="card-text">SĐT: <?= $home->getPhone() ?></p>
                            <p class="card-text">Website: <?= $home->getWebsite() ?></p>
                            <h5 class="card-title">
                                <a href="" class="text-decoration-none"><?= $home->getDepartmentName() ?></a>
                            </h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; ?>
        <?php } else {?>
            <div class="row d-flex">         
                <?php foreach($homes as $home) :?> 

                        <div class="col-4">
                            <div class="card m-3" style="width: 18rem;">
                                <img style="width : 100%; height : 100%" src="<?= $home->getlogo() ?>" class="card-img-top" alt="Ảnh khoa"> 
                                <div class="card-body">
                                    <p class="card-text">Địa chỉ: <?= $home->getAddress() ?></p>
                                    <p class="card-text">Email: <?= $home->getEmail() ?></p>
                                    <p class="card-text">SĐT: <?= $home->getPhone() ?></p>
                                    <p class="card-text">Website: <?= $home->getWebsite() ?></p>
                                    <h5 class="card-title">
                                        <a href="" class="text-decoration-none"><?= $home->getDepartmentName() ?></a>
                                    </h5>
                                </div>
                            </div>
                        </div>  

                <?php endforeach; ?>
            </div>
        <?php } ?>
        <div class="row">
            <nav aria-label="...">
                <ul class="pagination">
                    <?php if ($currentPage > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Trước</a>
                        </li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <?php if ($i == $currentPage): ?>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link"><?php echo $i; ?></span>
                            </li>
                        <?php else: ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($currentPage < $totalPages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Sau</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>

    </div>
    </main>
</body>
</html>


<?php 
require_once APP_ROOT.'/app/footer/index.php';

?>