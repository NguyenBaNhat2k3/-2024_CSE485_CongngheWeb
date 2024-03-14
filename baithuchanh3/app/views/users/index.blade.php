<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hệ thống nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center" >Danh sách nhân viên</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Tên người dùng</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">vai trò</th>
                <th scope="col">Mã nhân viên</th>
                <th scope="col">Sửa</th>

            </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users as $user) {
                    ?>
                    <tr>
                        <th scope="row"><?= $user->getUserName() ?></th>
                        <td><?= $user->getPassWord() ?></td>
                        <td><?= $user->getRole() ?></td>
                        <td><?= $user->getEmployeeID() ?></td>
                        <td>
                            <a href="../users/update.php?user=<?= $user->getEmployeeID() ?>" class="btn btn-primary">Sửa</a>

                        </td>
                    </tr>
                    <?php
                }

                ?>
            </tbody>
        </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>