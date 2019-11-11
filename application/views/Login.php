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
            <div class="login-form">
                <div class="login-form-header">
                    <img src="https://img.icons8.com/doodle/64/000000/skype.png" class="logo">
                    <h3 class="title-header">Đăng nhập bằng tài khoản của bạn</h3>
                </div>
                <div class="login-form-content">
                    <form action="" id="email-sign-in-form">
                        <div class="form-field-box">
                         <label for="signin-email" class="email-label">
                                <img src="https://img.icons8.com/windows/25/000000/user.png"> 
                           </label>
                        <div class="form-field">
                            <input id="signin-email" type="text" name="email" placeholder="Địa chỉ email">
                        </div>
                        </div>
                            <div class="form-field-box">
                            <label for="signin-password">
                                <img src="https://img.icons8.com/wired/25/000000/password.png">
                            </label>
                            <div class="form-field">              
                            <input type="password" id="signin-password" name="password" placeholder="Mật Khẩu">
                            <button class="show-password"></button>
                             </div>
                        </div>
                       
                        <div class="form-field-row-group">
                            <div class="form-field forgot-pass">
                                <button class="forgot-password">Quên mật khẩu</button>
                            </div>
                        </div>
                        <div class="component-btn-submit form-field">
                            <input class="btn-submit" type="submit" value="ĐĂNG NHẬP">
                        </div>
                    </form>
                </div>

                <div style="text-align: center">
                    <p id="or">OR</p>
                </div>
                <div class="form-field create-user">
                    <button id="create-user">Tạo tài khoản</button>
                </div>
            </div>
            <div class="signup-form">
                <div class="signup-header">
                    <img src="https://img.icons8.com/dusk/64/000000/sign-up.png" class="logo">
                    <h3 class="title-header">Hoàn thành các trường sau để tạo tài khoản </h3>
                </div>
                <div class="signup-content">
                    <form action="" id="user-signup-form">
                        <div class="form-field-box">
                            <label for="signup-email">      
                            </label>
                        <div class="form-field ">
                            <input id="signup-email" type="text" name="email" placeholder="Địa chỉ email">
                        </div>
                        </div>
                        <div class="form-field-box">
                             <label for="signup-password">                                  
                            </label>
                            <div class="form-field ">                          
                            <input id="signup-password" type="password" name="password" placeholder="Mật khẩu">
                            </div>
                        </div>
                        <div class="form-field-box">
                            <label for="signup-confirm-password">                            
                            </label>
                         <div class="form-field ">                          
                            <input id="signup-confirm-password" type="password" name="confirm-password" placeholder="Xác nhận mật khẩu">
                        </div>
                        </div>
                        <div class="form-field-box">
                        <label for="signup-name">                               
                            </label>
                        <div class="form-field ">                         
                         <input id="signup-name" type="text" name="name" placeholder=" Họ và Tên">
                        </div>
                        </div>
                        
                        <div class="component-btn-submit form-field">
                            <input class="btn-submit" type="submit" value="TẠO TÀI KHOẢN">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php require_once "template/footer.php"; ?>
    </div>

    <script src="<?php echo base_url(); ?>public/js/login.js"></script>
</body>

</html>