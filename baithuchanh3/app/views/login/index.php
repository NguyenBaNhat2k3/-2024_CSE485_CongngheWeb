<?php   
include APP_ROOT.'/app/header/user/index.php';

?>

<h2 class="text-center text-primary my-5">Đăng nhập</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form action="<?= BASE_URL.'/app/views/login/login_process.php' ?>" method="post" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" name="username" class="form-control" />
                    <label class="form-label" for="form2Example1">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="admin" name="checkbox" />
                            <label class="form-check-label" for="form2Example31">Admin</label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="regular" name="checkbox" />
                            <label class="form-check-label" for="form2Example31">Employee</label>
                        </div>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary col-lg-12 mb-5">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
include APP_ROOT.'/app/footer/index.php';

?>