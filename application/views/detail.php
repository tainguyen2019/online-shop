<!DOCTYPE html>
<html lang="en">
<head>
<title>Chi tiet san pham</title>
<?php require_once "template/top.php"; ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/detail.css?v=<?php echo time(); ?>" type="text/css">
</head>
<body>
<?php include_once "template/navbar.php" ?>
<div class="container-box">
    <div class="Product_name">
    <h2> <?=$info[0]['ProductName']?> </h2>
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
                    <img class="d-block w-100" src="<?php echo base_url();?>public/images/Chuot/chuot1-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url();?>public/images/Chuot/chuot1-2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url();?>public/images/Chuot/chuot1-3.jpg" alt="Third slide">
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
                    <strong> <?=$info[0]['Cost'].' đ'?></strong>
                    <label class="sale">Giảm 500,000 đ</label>
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
                    <button class="btn btn_add bg-danger">+ THÊM VÀO GIỎ HÀNG</button>
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
                        <h5><?=$val['DescriptionName']?></h5>
                        <p><?=$val['Infomation']?></p>
                    </li>
                <?php }?>
                </ul>
            </div>
        </div>               
        </div>
</div>
<?php require_once "template/footer.php";?>