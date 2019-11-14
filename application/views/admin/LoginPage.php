<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/admin/Login.css" type="text/css">
    <title>Đăng nhập trang Admin</title>
</head>

<body>
    <body class="text-center">
        <form class="form-signin" action="<?php echo base_url() ?>admin/login" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Đăng nhập Admin</h1>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Địa chỉ email" 
            required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Nhớ tài khoản
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
        <p>
            <?php
            
            ?>
        </p>
    </body>

</html>