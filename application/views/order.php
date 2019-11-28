<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php require_once "template/top.php"; ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/order.css?v=<?php echo time(); ?>" type="text/css">
</head>

<body>
    <?php include_once "template/navbar.php" ?>
    <h1>2. Xác nhận đơn hàng</h1>
    <a href="<?php echo base_url('Login/logout');?>">LOG OUT</a>
    <div class="row box col-12">
        <div class="col-8 cart-container">
            <div class="cart-header">
                <label> Chi tiết hóa đơn</label>
                <a href="<?php echo base_url(); ?>Cart" type="button" class="btn btn-warning btn-sm btn-update"> Sửa </a>
            </div>
            <div id="shopping-cart">
                <?php 
                    foreach ($cartItems as $Item) {
                        ?>
                <div class="row shopping-cart-item">
                    <div class="col-xs-3 img-thumbnail-custom">
                        <p class="image">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/Chuot/chuot1-2.jpg"
                                alt="">
                        </p>
                    </div>
                    <div class="col-right">
                        <div class="box-info-product">
                            <div class="box-size">
                                <p class="name">
                                    <a href="#"><?=$Item['name']?></a>
                                </p>
                            </div>
                        </div>

                        <div class="box-size">
                            <p>Giá : </p>
                            <p class="price"><?=$Item['price']?></p>
                        </div>

                        <div class="box-size">
                            <p>Số lượng : </p>
                            <p class="quantity"><?=$Item['qty']?></p>
                        </div>

                    </div>
                </div>
                <?php
                    }?>
            </div>
            <div class="btn-order-box">
                <a href="#" type="button" class="btn btn-large btn-danger btn-order">ĐẶT MUA</a>
            </div>
        </div>
        <div class="col-4">
            <div class="address-box">
                <div class="address-header">
                    <label> Địa chỉ giao hàng</label>
                    <a href="#" type="button" class="btn btn-warning btn-sm btn-update"> Sửa </a>
                </div>
                <div class="address-content">
                    <span class="name">Nguyễn Sỹ Cảnh Hưng</span>
                    <p class="address">kí túc xá khu A, Phường Linh Trung, Quận Thủ Đức, Hồ Chí Minh,
                        Việt Nam</p>
                    <span class="sdt">0394796850</span>
                </div>
            </div>
            <div class="payment-methods">
                <label class="text">Chọn phương thức thanh toán</label>
                <div class="form-check" style="margin :13px 0 ;">
                    <input class="form-check-input" type="radio" name="method" id="cash" value="option1" checked>
                    <label class="form-check-label" for="cash">
                        Thanh toán tiền mặt sau khi nhận hàng
                    </label>
                </div>
                <div class="form-check" style="margin :13px 0;">
                    <input class="form-check-input" type="radio" name="method" id="online" value="option2">
                    <label class="form-check-label" for="online">
                        Thanh toán bằng ví MOMO
                    </label>
                </div>
            </div>
        </div>
    </div>
</body>

</html>