<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<?php require_once "template/top.php"; ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/product.css" type="text/css">
</head>
<body>
     <div id="product-panel">
     <?php include_once "template/navbar.php" ?>
     <img src="<?php echo base_url(); ?>public/images/slide_show-4.jpeg" alt="panel">
     <div id ="intro-panel">
     <div id="title" >
          <h1 class="title-text">Chuyển động tinh tế</h1>
          <p class="sub-title-text">Tốc dộ di chuyển vượt trội ,thiết kế thời thượng, kiểu dáng hiện đại</p>
     </div>
     </div>
     </div>
     <div class="khoangtrang"></div>
     <a class="cart-container float-right" href="<?php echo base_url(); ?>cart/gotocart" >
     <img src="https://img.icons8.com/cute-clipart/48/000000/shopping-cart.png">
     <span>Your's Cart</span>
     </a>
     <div class="khoangtrang"></div>
     <div class="content">
<div class="sidebar float-left" >
 <div id="accordion">
  <div class="card card-size border-none">
    <div class="card-header bg-white border-bottom-none" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-size" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          KẾT NỐI
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body column">
           <ul>
                <li>
                <label class="checkbox-inline"> 
                    <input type="checkbox" class="checkbox-form border-primary" value="">
                    <span class="checkmark"></span>       
                    <p class="filter-text">CÓ DÂY</p>
               </label>
               </li>
               <li>
               <label class="checkbox-inline"> 
                    <input type="checkbox" class="checkbox-form border-primary" value="">
                    <span class="checkmark"></span>       
                    <p class="filter-text">KHÔNG DÂY</p>
               </label>
               </li>
           </ul>       
      </div>
    </div>
  </div>
  <div class="card card-size border-none">
    <div class="card-header bg-white border-bottom-none" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-size collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          THƯƠNG HIỆU 
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body column">
      <ul>
                <li>
                <label class="checkbox-inline"> 
                    <input type="checkbox" class="checkbox-form border-primary" value="">
                    <span class="checkmark"></span>       
                    <p class="filter-text">Genius</p>
               </label>
               </li>
               <li>
               <label class="checkbox-inline"> 
                    <input type="checkbox" class="checkbox-form border-primary" value="">
                    <span class="checkmark"></span>       
                    <p class="filter-text">Zadez</p>
               </label>
               </li>
               <li>
               <label class="checkbox-inline"> 
                    <input type="checkbox" class="checkbox-form border-primary" value="">
                    <span class="checkmark"></span>       
                    <p class="filter-text">Logitech</p>
               </label>
               </li>
               <li>
               <label class="checkbox-inline"> 
                    <input type="checkbox" class="checkbox-form border-primary" value="">
                    <span class="checkmark"></span>       
                    <p class="filter-text">Anitech</p>
               </label>
               </li>
               <li>
               <label class="checkbox-inline"> 
                    <input type="checkbox" class="checkbox-form border-primary" value="">
                    <span class="checkmark"></span>       
                    <p class="filter-text">Microsoft</p>
               </label>
               </li>
           </ul>       
      </div>
    </div>
  </div>
  <div class="card card-size border-none">
    <div class="card-header bg-white border-bottom-none" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-size collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
           ĐỘ PHÂN GIẢI QUANG HỌC
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body column">  
      <div class="slidecontainer">
            <input type="range" min="1" max="4000" val="1"
            class="slider" id="dophangiai">
          </div>
      </div>
    </div>
  </div>
  <div class="card card-size border-none">
    <div class="card-header bg-white border-bottom-none" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-size collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          GIÁ
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body column">
      <div class="slidecontainer">
           <input type="hidden" id="hidden_minimun_price" value="0">
           <input type="hidden" id="hidden_maximum_price" value="5000000">
           <p id="price-show">200000 - 5000000</p>
           <div id="price_range"></div>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
          </div>
          <div class="main-content list-product float-right">
          <div class="card product-card" data-product-category="chuot" 
          data-product-name="Chuột-có-dây-Genius-DX125-Đen" 
          data-filter-val ="co-day DX-125 Genius den chuot">
               <img class="card-img-top bg-light img-product-effect" src="<?php echo base_url(); ?>public/images/chuot/chuot1-1.jpg" alt="Chuột có dây Genius DX-125 Đen">
             <div class="card-body card-body-size">
               <h5 class="card-title">Genius DX-125</h5>
               <p class="card-text">Chuột có dây Genius DX-125 Đen</p>
               <a href="#" class="btn btn-effect btn-primary">Mua ngay</a>
             </div>
          </div>
          <div class="card product-card" data-product-category="chuot" 
          data-product-name="Chuột-dây-rút-ZadezM218" 
          data-filter-val ="co-day M218 Zadez trang chuot">
               <img class="card-img-top bg-light" src="<?php echo base_url(); ?>public/images/chuot/chuot2-1.jpg" alt="Chuột dây rút Zadez M218">
             <div class="card-body card-body-size">
             <h5 class="card-title">Zadez M218</h5>
               <p class="card-text">Chuột dây rút Zadez M218</p>
               <a href="#" class="btn btn-effect btn-primary">Mua ngay</a>
             </div>
          </div>
          <div class="card product-card" data-product-category="chuot" 
          data-product-name="Chuột-Gaming-Zadez-G610M-Đen" 
          data-filter-val ="co-day G610M Zadez den chuot">
               <img class="card-img-top bg-light" src="<?php echo base_url(); ?>public/images/chuot/chuot3-1.jpg" alt="Chuột Gaming Zadez G-610M Đen">
             <div class="card-body card-body-size">
             <h5 class="card-title">Zadez G-610M </h5>
               <p class="card-text">Chuột Gaming Zadez G-610M Đen</p>
               <a href="#" class="btn btn-effect btn-primary">Mua ngay</a>
             </div>
          </div>
          <div class="card product-card" >
               <img class="card-img-top bg-light" src="<?php echo base_url(); ?>public/images/chuot/chuot4-1.jpg" alt="Chuột Gaming Zadez GT - 613M">
             <div class="card-body card-body-size">
             <h5 class="card-title">Zadez GT-613M</h5>
               <p class="card-text">Chuột Gaming Zadez GT - 613M</p>
               <a href="#" class="btn btn-effect btn-primary">Mua ngay</a>
             </div>
          </div>
          <div class="card product-card" >
               <img class="card-img-top bg-light" src="<?php echo base_url(); ?>public/images/chuot/chuot5-1.jpg" alt="Chuột Gaming Logitech G102 Đen">
             <div class="card-body card-body-size">
             <h5 class="card-title">Logitech G102</h5>
               <p class="card-text">Chuột Gaming Logitech G102 Đen</p>
               <a href="#" class="btn btn-effect btn-primary">Mua ngay</a>
             </div>
          </div>
          <div class="card product-card" >
               <img class="card-img-top bg-light" src="<?php echo base_url(); ?>public/images/chuot/chuot6-1.jpg" alt="Chuột không dây Genius NX 7010">
             <div class="card-body card-body-size">
             <h5 class="card-title">NX 7010</h5>
               <p class="card-text">Chuột không dây Genius NX 7010</p>
               <a href="#" class="btn btn-effect btn-primary">Mua ngay</a>
             </div>
          </div>
          <div class="card product-card" >
               <img class="card-img-top bg-light" src="<?php echo base_url(); ?>public/images/chuot/chuot7-1.jpg" alt="Chuột không dây Anitech MW315">
             <div class="card-body card-body-size">
             <h5 class="card-title">Anitech MW315</h5>
               <p class="card-text">Chuột không dây Anitech MW315</p>
               <a href="#" class="btn btn-effect btn-primary">Mua ngay</a>
             </div>
          </div>
          <div class="card product-card" >
               <img class="card-img-top bg-light" src="<?php echo base_url(); ?>public/images/chuot/chuot8-1.jpg" alt="Chuột không dây Microsoft 1850">
             <div class="card-body card-body-size">
             <h5 class="card-title">Microsoft 1850</h5>
               <p class="card-text">Chuột không dây Microsoft 1850</p>
               <a href="#" class="btn btn-effect btn-primary">Mua ngay</a>
             </div>
          </div>
  
          </div>
     </div>
<?php
include_once "template/footer.php"
?>
<script src="<?php echo base_url(); ?>public/js/product.js"></script>
