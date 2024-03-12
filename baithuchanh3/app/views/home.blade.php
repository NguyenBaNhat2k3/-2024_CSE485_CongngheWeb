<?php
require_once APP_ROOT.'/app/header/user/index.php';
?>

<main>
<div class="container  d-flex">
    <div class="row">
        <?php  for($i=0;$i<5;$i++) : ?>
            <div class="card col-3 m-3" style="width: 18rem;">
                <img src="https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
</main>

<?php 
require_once APP_ROOT.'/app/footer/index.php';
?>