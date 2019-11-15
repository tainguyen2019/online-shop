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
     <img src="<?php echo base_url(); ?>public/images/other_images/jsss-homepage-desktop.png.imgw.1888.1888.jpeg" alt="panel">
     <div id ="intro-panel">
     <div id="title" >
          <h1 class="title-text">Âm Thanh Sống Động</h1>
          <p class="sub-title-text">Đẳng cấp Hiện đại và Chân thực trong từng tiếng động</p>
     </div>
     </div>
     </div>
     <div class="khoangtrang"></div>
     <div class="cart-container float-right">
     
     <a href="<?php echo base_url(); ?>Cart/GotoCart">
     <img src="https://img.icons8.com/cute-clipart/48/000000/shopping-cart.png">
     <span>Your's Cart</span>
     </a>
     </div>
     <div class="khoangtrang"></div>
     <div class="content">
<div class="sidebar float-left" >
 <div id="accordion">
  <div class="card card-size border-none">
    <div class="card-header bg-white border-bottom-none" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-size" data-toggle="collapse" data-target="#collapseOne" aria-expanded="flase" aria-controls="collapseOne">
          LOẠI SẢN PHẨM
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body column">
           <ul>
           <?php
           foreach($show_category as $val)
           {
           ?>
                <li>
                <label class="checkbox-inline"> 
                    <input type="checkbox" class="checkbox-form border-primary category" value="">
                    <span class="checkmark"></span>       
                    <p class="filter-text"><?=$val['CategoryName']?></p>
               </label>
               </li>
           <?php }?>
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
      <?php
        foreach($show_brand as $key=>$val)
        {
      ?>
              <li>
               <label class="checkbox-inline"> 
                    <input type="checkbox" class="checkbox-form border-primary brand" value="">
                    <span class="checkmark"></span>       
                    <p class="filter-text"><?php echo $val['Infomation']?></p>
               </label>
               </li>
        <?php }?>
           </ul>       
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
      <!--     
      <input type="hidden" id="hidden_minimun_price" value="0">
           <input type="hidden" id="hidden_maximum_price" value="5000000">
           <p id="price-show">0 - 5000000</p>-->
           <p>
             <input type="text" readonly id="amount" style="color : #f6932f ; border : 0 ;font-weight : bold;">
           </p>
           <div id="price_range"></div>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
       
          <div class="main-content  float-right">
            <div class="list-product">
            <?php
              foreach($show_product as $key=>$val)
              {
          ?>
          <div class="card product-card">
            <img class="card-img-top bg-light img-product-effect" src="<?php echo base_url(); ?>public/images/chuot/chuot1-1.jpg" alt="Chuột có dây Genius DX-125 Đen">
            <div class="card-body card-body-size">
               <h5 class="card-title"><?=$val->ProductName?></h5>
               <p class="card-text"><?=$val->Cost?></p>
               <a href="<?php echo base_url(); ?>Cart/arr_id_select/<?=$val->ProductID?>" class="btn btn-effect btn-primary">Mua ngay</a>
            </div>
          </div>
          <?php }?>
            </div>
            <div class="pagination-box">
                <?=$this->pagination_bootstrap->render()?>
            </div> 
          </div>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function()
    {
      $('#price_range').slider{
        range : true,
        min : 0,
        max : 5000000,
        values : [0,5000000],
        slide: function(event,ui)
        {
          $('#amount').val("$"+ui.values[0]+"- $"+ui.values[1]);
        } 
      }
    });
    </script>
</body>
</html>

