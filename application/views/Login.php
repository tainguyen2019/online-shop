<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "template/top.php"; ?>
    <title>Login-form</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/login.css?v=<?php echo time(); ?>" type="text/css">
</head>

<body>
    <div class="wrapped">
        <?php include "template/navbar.php" ?>
        <div class="form-wrapped">
            <?php 
                if($register == false)
                {
            ?>
            <div class="login-form">
                <div class="login-form-header">
                    <img src="https://img.icons8.com/doodle/64/000000/skype.png" class="logo">
                    <h3 class="title-header">Đăng nhập bằng tài khoản của bạn</h3>
                </div>
                <div class="login-form-content">
                    <form action="<?php echo base_url('Login/login_confirm/y')?>" id="email-sign-in-form" class="login"
                        method="POST">
                        <div class="form-field-box">
                            <div class="form-field">
                                <input id="signin-email" type="text" name="username" placeholder="Địa chỉ email">
                            </div>
                        </div>
                        <div class="form-field-box">
                            <div class="form-field">
                                <input type="password" id="signin-password" name="password" placeholder="Mật Khẩu">
                                <button class="show-password"></button>
                            </div>
                        </div>

                        <div class="component-btn-submit form-field">
                            <input class="btn-submit" type="submit" value="ĐĂNG NHẬP">
                            <?php
                                echo '<label class="text-danger">'. $this->session->flashdata("error").'</label>';
                            ?>
                        </div>
                    </form>
                </div>
            </div>
            <?php } else{?>
            <div class="signup-form">
                <div class="signup-header">
                    <img src="https://img.icons8.com/dusk/64/000000/sign-up.png" class="logo">
                    <h3 class="title-header">Hoàn thành các trường sau để tạo tài khoản </h3>
                </div>
                <div class="signup-content">
                    <form action="<?php echo base_url('Login/register/y')?>" id="user-signup-form" class="register" method="POST">
                        <div class="form-field-box">
                        <label>Email</label>
                            <div class="form-field ">
                                <input id="signup-email" type="text" name="user_email" placeholder="Nhập Email">
                            </div>
                        </div>
                        <div class="form-field-box">
                        <label>Password</label>
                            <div class="form-field ">
                                <input id="signup-password" type="password" name="password" placeholder="Nhập Mật khẩu">
                            </div>
                        </div>
                        <div class="form-field-box">
                        <label>Họ Tên</label>
                            <div class="form-field ">
                                <input id="signup-name" type="text" name="username" placeholder="Nhập Họ và Tên">
                            </div>
                        </div>
                        <div class="form-field-box">
                        <label>Số Điện Thoại</label>
                            <div class="form-field ">
                                <input id="signup-name" type="text" name="phone" placeholder="Nhập Số Điện Thoại">
                            </div>
                        </div>
                        <div class="form-field-box">
                        <label>Địa Chỉ Giao Hàng</label>
                            <div class="form-field ">
                                <input id="signup-name" type="text" name="address" placeholder="Nhập Địa Chỉ Giao Hàng">
                            </div>
                        </div>
                        <div class="component-btn-submit form-field">
                            <input class="btn-submit" type="submit" value="TẠO TÀI KHOẢN">
                        </div>
                    </form>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <div>
        <?php require_once "template/footer.php"; ?>
    </div>

    <script src="<?php echo base_url(); ?>public/js/login.js"></script>
</body>

</html>