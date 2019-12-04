<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chi tiet san pham</title>
    <?php require_once "template/top.php"; ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/detail.css?v=<?php echo time(); ?>"
        type="text/css">
</head>

<body>
    <?php include_once "template/navbar.php" ?>
    <?php include_once "template/category_list.php"?>
    <div class="container-box">
        <div class="Product_name">
            <h2> <?=$info[0]['product_name']?> </h2>
        </div>
        <div class="row">
            <div class="col-4">
                <!-- add carousel -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" style="width : auto; height : 500px">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url();?>public/images/Chuot/chuot1-1.jpg"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url();?>public/images/Chuot/chuot1-2.jpg"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url();?>public/images/Chuot/chuot1-3.jpg"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-3 price-sale">
                <div class="price">
                    <strong> <?=$info[0]['price'].' đ'?></strong>
                    <label class="sale">Giảm 300,000 đ</label>
                </div>
                <div class="ship">
                    <i class="fa fa-clock-o"></i>
                    <div class="ship-text">NHẬN HÀNG TRONG 1 GIỜ</div>
                </div>
                <div class="promotion">
                    <strong>KHUYẾN MÃI</strong>
                    <div class="promo">
                        <i class="fa fa-check-circle"></i>
                        <div class="detailPromo">
                            Cơ hội trúng <b>61 xe Wave</b> và nhiều phần thưỡng hấp dẫn khác
                        </div>
                    </div>
                </div>
                <div class="addtocart">
                    <a class="btn btn-danger btn_add" type="button"
                        href="<?php echo base_url('cart/AddtoCart/'.$info[0]['product_id'])?>"> MUA NGAY </a>
                </div>
            </div>
            <div class="col-5 ">
                <div class=" product-info">
                    <h2>THÔNG SỐ KỸ THUẬT</h2>
                    <ul class="info">
                        <?php
                        foreach($info as $key=>$val)
                            {
                        ?>
                        <li>
                            <h6> TÊN SẢN PHẨM </h6>
                            <p><?=$val['product_name']?></p>
                        </li>
                        <li>
                            <h6> SẢN XUẤT BỞI/ THƯƠNG HIỆU </h6>
                            <p><?=$val['brand_name']?></p>
                        </li>
                        <li>
                            <h6> MÔ TẢ  </h6>
                            <p><?=$val['description']?></p>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "template/footer.php";?>