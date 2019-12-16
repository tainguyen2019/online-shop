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
        <?php if($check_id == true)
        {?>
        <div class="Product_name">
            <h2> <?=$info[0]['product_name']?> </h2>
        </div>
        <div class="row">
            <div class="col-4">
                <img style="    width: 100%; height: 100%;"
                    src="<?php echo base_url('public/images/'.$info[0]['image'])?>" alt="">
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
                            <h6> MÔ TẢ </h6>
                            <p><?=$val['description']?></p>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <?php } else {?>
            <h1>KHÔNG TÌM THẤY SẢN PHẨM </h1>
        <?php }?>
    </div>
    <?php require_once "template/footer.php";?>