<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'template/top.php'?>
    <title>Cart</title>
    <link rel="stylesheet" href="../public/css/cart.css?v=<?php echo time(); ?>" type="text/css">
</head>
<body>
    <?php include_once 'template/navbar.php'?>
    <div class="cart-container row">
        <div class="col-xs-12">
        <h5 class="lbl-shopping-cart"> Giỏ hàng
        <span>(1 sản phẩm)</span>
        </h5>
        </div>
        <div class="col-xs-8 cart-col-1">
            <form id="shopping cart">
             <div class="row shopping-cart-item">
                <div class="col-xs-3 img-thumbnail-custom">
                     <p class="image">
                    <img class="img-responsive" src=".././public/css/image-folder/chuot/chuot1-1.jpg" alt="">
                    </p>
                </div>
                <div class="col-right">
                     <div class="box-info-product">
                         <input type="hidden" class="hidden-quantity" value="1">
                         <div class="badge-cart-a">
                             <p class="name">
                                 <a href="#">Chuột có dây Genius DX-125 Đen</a>
                             </p>
                         </div>
                         <div class="badge-cart-a-link">
                            <p class="name">
                                 <a href="#">Chuột có dây Genius DX-125 Đen</a>
                             </p>
                         </div>
                         <p class="note">
                            - Hãng : Genius
                         </p>
                         <p class="note">
                            - Mã sản phẩm : DX-125
                         </p>
                         <p class="action">
                            <a href="#" class="btn btn-link btn-item-del"> Xóa </a>
                         </p>
                     </div>
                     <div class="badge-cart-a">
                         <div class="box-size">
                             <p class="price">139.995đ</p>
                         </div>
                     </div>
                     <div class="badge-cart-a-link"></div>
                     <div class="quantity-block">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default bootstrap-touchspin-down">-</button>
                            </span>
                            <input type="tel" class="form-control quantity" min="0" value="2">
                            <span class="input-group-btn">
                                <button class="btn btn-default bootstrap-touchspin-up">+</button>
                            </span>
                        </div>
                     </div>
                </div>
            </div>
            </form>
        </div>
        <div class="col-xs-4 cart-col-2">
            <div id="right-affix" class="affix-top">
                <div class="each-row">                 
                   <div class="box-style fee">
                     <p class="list-info-price">
                        <span>Tạm tính</span>
                        <strong>139.995đ</strong>
                    </p>  
                    </div>     
                    <div class="box-style fee">
                        <div class="total2 clearfix">
                            <span class="text-label">Thành tiền: </span>
                            <div class="amount">
                                <p>
                                    <strong>139.995đ</strong>
                                </p>
                                <p class="text-right">
                                    <small>(Đã bao gồm VAT nếu có)</small>
                                </p>
                            </div>
                        </div>
                    </div> 
                    <button type="button" class="btn btn-large btn-block btn-danger btn-checkout">
                        Tiến hành đặt hàng 
                    </button>                     
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel-group coupon">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                     <h4 class="panel-title">Mã giảm giá / Quà tặng</h4>
                                </div>
                                <div id="collapseOne3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="input-group">
                                            <input id="coupon" class="form-control" type="text" placeholder="Nhập ở đây..">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default btn-coupon" type="button"> Đồng ý</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'template/footer.php'?>