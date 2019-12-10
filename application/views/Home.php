<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DoanWeb-LandingPage</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/home.css?v=<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/aos.css?v=<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/template.css?v=<?php echo time(); ?>"
        type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>
    <header>
        <?php include_once 'template/navbar.php'?>
        <?php include_once 'template/category_list.php'?>
        <!--carousel-->
        <div id="myCarousel" class="carousel slide border" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="<?php echo base_url(); ?>public/images/slide_show-1.jpeg"
                        alt="Cat">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="<?php echo base_url(); ?>public/images/slide_show-2.jpeg"
                        alt="Lion">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="<?php echo base_url(); ?>public/images/slide_show-3.jpeg"
                        alt="Lion">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="<?php echo base_url(); ?>public/images/slide_show-4.jpeg"
                        alt="Lion">
                </div>
                <!-- Controls -->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </header>
    <main>
        <!--list ultilities-->
        <div class="list-ultility container-fluid">
            <div class="container flex-column">
                <div class="title flex-center">
                    <h2 class="main-title">
                        WEBSITE CHUYÊN VỀ CÁC PHỤ KIỆN ĐIỆN TỬ
                    </h2>
                    <h5 class="sub-title ">
                        Luôn mang lại cho khách hàng những sản phẩm chất lượng nhất.
                    </h5>
                </div>
                <div class="col-md-12 ">
                    <div id="product-utilities">
                        <div class="col-3 full-size">
                            <div class="product-items  contain-img full-size">
                                <a href="<?php echo base_url();?>product/show_products/1" class="full-size">
                                    <p class="product-item-name">ÂM THANH TRÒ CHƠI</p>
                                    <img src="<?php echo base_url(); ?>public/images/tainghe_button.jpeg" alt="1">
                                    <button id="btn-muasam" class="btn-muasam-tainghe">MUA SẮM TAI NGHE</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 full-size">
                            <div class="product-items contain-img full-size">
                                <a href="<?php echo base_url();?>product/show_products/2" class="full-size">
                                    <p class="product-item-name">CHUỘT CHƠI GAME</p>
                                    <img src="<?php echo base_url(); ?>public/images/chuot_button.jpeg" alt="2">
                                    <button id="btn-muasam" class="btn-muasam-chuot">MUA SẮM CHUỘT</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 full-size">
                            <div class="product-items contain-img full-size">
                                <a href="<?php echo base_url();?>product/show_products/4" class="full-size">
                                    <p class="product-item-name">BÀN PHÍM CHUYÊN DỤNG</p>
                                    <img src="<?php echo base_url(); ?>public/images/banphim_button.jpeg" alt="3">
                                    <button id="btn-muasam" class="btn-muasam-banphim">MUA SẮM BÀN PHÍM</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-3  speaker-contain-img full-size">
                            <div class="product-items contain-img full-size">
                                <a href="<?php echo base_url();?>product/show_products/3" class="full-size">
                                    <p class="product-item-name">LOA CHUYÊN DỤNG</p>
                                    <img class="speaker-img" src="<?php echo base_url(); ?>public/images/loa_button.jpg"
                                        alt="4">
                                    <button id="btn-muasam" class="btn-muasam-loa">MUA SẮM LOA</button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div id="khoangtrang"></div>

        <div class="introduction-box">
            <section id="headphone" class="introduction">
                <div class="intro-header">
                    <div class="intro-header-title">
                        <div class="intro-header-name">
                            TAI NGHE CỰC ĐỈNH
                        </div>
                        <div class="intro-header-img">
                            <img src="https://img.icons8.com/dusk/40/000000/headphones.png">
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="left advertisement-img col-4">
                        <img class="card-img-top bg-light img-product-effect"
                            src="<?php echo base_url(); ?>public/images/other_images/mouse_ad.png">
                    </div>
                    <div class="right list-product col-8">
                        <div class="list-product">
                            <?php
                    foreach($show_headphone as $key=>$val)
                    {
                  ?>
                            <div class="card product-card">
                                <a href="<?php echo base_url('product/show_product_info/'.$val['product_id'])?>">
                                    <img class="card-img-top bg-light img-product-effect"
                                        src="<?php echo base_url('public/images/').$val['image']; ?>">
                                    <img class="sale-img" src="https://img.icons8.com/color/64/000000/sale--v2.png">
                                </a>
                                <div class="card-body card-body-size" style="position : relative">
                                    <p class="card-title product-name"><?php echo $val['product_name']?></p>
                                    <p class="card-text product-price"><?php echo $val['price']?></p>
                                    <a class="btn btn-effect btn-outline-dark"
                                        href="<?php echo base_url('cart/AddtoCart/'.$val['product_id'])?>">
                                        Mua ngay
                                    </a>
                                    <img src="https://img.icons8.com/bubbles/70/000000/gift.png"
                                        style="margin-left: 20px;">
                                </div>
                            </div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="introduction-box">
            <section id="mouse" class="introduction">
                <div class="intro-header">
                    <div class="intro-header-title">
                        <div class="intro-header-name">
                            CHUỘT CHƠI GAME
                        </div>
                        <div class="intro-header-img">
                            <img src="https://img.icons8.com/dusk/40/000000/mouse.png">
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="left advertisement-img col-4">
                        <img class="card-img-top bg-light img-product-effect"
                            src="<?php echo base_url(); ?>public/images/other_images/mouse_ad.png">
                    </div>
                    <div class="right list-product col-8">
                        <div class="list-product">
                            <?php
                    foreach($show_mouse as $key=>$val)
                    {
                  ?>
                            <div class="card product-card">
                                <a href="<?php echo base_url('product/show_product_info/'.$val['product_id'])?>">
                                    <img class="card-img-top bg-light img-product-effect"
                                        src="<?php echo base_url('public/images/').$val['image']; ?>">
                                    <img class="sale-img" src="https://img.icons8.com/color/64/000000/sale--v2.png">
                                </a>
                                <div class="card-body card-body-size" style="position : relative">
                                    <p class="card-title product-name"><?php echo $val['product_name']?></p>
                                    <p class="card-text product-price"><?php echo $val['price']?></p>
                                    <a class="btn btn-effect btn-outline-dark"
                                        href="<?php echo base_url('cart/AddtoCart/'.$val['product_id'])?>">
                                        Mua ngay
                                    </a>
                                    <img src="https://img.icons8.com/bubbles/70/000000/gift.png"
                                        style="margin-left: 20px;">
                                </div>
                            </div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="introduction-box">
            <section id="keyboard" class="introduction">
                <div class="intro-header">
                    <div class="intro-header-title">
                        <div class="intro-header-name">
                            BÀN PHÍM CHUẨN
                        </div>
                        <div class="intro-header-img">
                            <img src="https://img.icons8.com/dusk/40/000000/keyboard.png">
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="left advertisement-img col-4">
                        <img class="card-img-top bg-light img-product-effect"
                            src="<?php echo base_url(); ?>public/images/other_images/mouse_ad.png">
                    </div>
                    <div class="right list-product col-8">
                        <div class="list-product">
                            <?php
                    foreach($show_keyboard as $key=>$val)
                    {
                  ?>
                            <div class="card product-card">
                                <a href="<?php echo base_url('product/show_product_info/'.$val['product_id'])?>">
                                    <img class="card-img-top bg-light img-product-effect"
                                        src="<?php echo base_url('public/images/').$val['image']; ?>">
                                    <img class="sale-img" src="https://img.icons8.com/color/64/000000/sale--v2.png">
                                </a>
                                <div class="card-body card-body-size" style="position : relative">
                                    <p class="card-title product-name"><?php echo $val['product_name']?></p>
                                    <p class="card-text product-price"><?php echo $val['price']?></p>
                                    <a class="btn btn-effect btn-outline-dark"
                                        href="<?php echo base_url('cart/AddtoCart/'.$val['product_id'])?>">
                                        Mua ngay
                                    </a>
                                    <img src="https://img.icons8.com/bubbles/70/000000/gift.png"
                                        style="margin-left: 20px;">
                                </div>
                            </div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="introduction-box">
            <section id="speaker" class="introduction">
                <div class="intro-header">
                    <div class="intro-header-title">
                        <div class="intro-header-name">
                            LOA CHUYÊN DỤNG
                        </div>
                        <div class="intro-header-img">
                            <img src="https://img.icons8.com/dusk/40/000000/portable-speaker2.png">
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="left advertisement-img col-4">
                        <img class="card-img-top bg-light img-product-effect"
                            src="<?php echo base_url(); ?>public/images/other_images/mouse_ad.png">
                    </div>
                    <div class="right list-product col-8">
                        <div class="list-product">
                            <?php
                    foreach($show_speaker as $key=>$val)
                    {
                  ?>
                            <div class="card product-card">
                                <a href="<?php echo base_url('product/show_product_info/'.$val['product_id'])?>">
                                    <img class="card-img-top bg-light img-product-effect"
                                        src="<?php echo base_url('public/images/').$val['image']; ?>">
                                    <img class="sale-img" src="https://img.icons8.com/color/64/000000/sale--v2.png">
                                </a>
                                <div class="card-body card-body-size" style="position : relative">
                                    <p class="card-title product-name"><?php echo $val['product_name']?></p>
                                    <p class="card-text product-price"><?php echo $val['price']?></p>
                                    <a class="btn btn-effect btn-outline-dark"
                                        href="<?php echo base_url('cart/AddtoCart/'.$val['product_id'])?>">
                                        Mua ngay
                                    </a>
                                    <img src="https://img.icons8.com/bubbles/70/000000/gift.png"
                                        style="margin-left: 20px;">
                                </div>
                            </div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="container-fluid">
            <div class="row bg-white ">
                <div class="col-md-4 text-dark">
                    <h5 class="display5">
                        Đồ án môn Phát Triển Ứng Dụng Web
                    </h5>
                    <hr class="bg-dark">
                    <p>
                        Tên đề tài : Web bán thiết bị điện tử.
                    </p>
                    <p>
                        Số lượng thành viên nhóm : 2
                    </p>
                    <p>
                        Giáo viên hướng dẫn : Thầy Vũ Minh Sang
                    </p>
                    <img src="https://img.icons8.com/doodle/48/000000/facebook-new.png">
                    <img src="https://img.icons8.com/dusk/48/000000/instagram-new.png">
                    <img src="https://img.icons8.com/dusk/48/000000/email.png">
                </div>
                <div class="col-md-4">
                    <hr class="bg-dark">
                    <h6 class="display6">
                        Thành viên 1
                    </h6>
                    <hr class="bg-dark">
                    <p>
                        Tên : Nguyễn Sỹ Cảnh Hưng
                    </p>
                    <p>
                        MSSV : 17520545
                    </p>
                    <p>
                        Nhóm Trưởng
                    </p>
                </div>
                <div class="col-md-4">
                    <hr class="bg-dark">
                    <h6 class="display6">
                        Thành viên 2
                    </h6>
                    <hr class="bg-dark">
                    <p>
                        Tên : Nguyễn Tấn Tài
                    </p>
                    <p>
                        MSSV : 17520999
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/aos.js"></script>
    <script src="<?php echo base_url(); ?>public/js/template.js"></script>
    <script type="text/javascript">
    AOS.init();
    </script>
    <script>

    </script>
</body>

</html>