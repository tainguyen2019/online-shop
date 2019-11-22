<nav class="navbar navbar-dark  hamburger">
    <button class ="navbar-toggler btn hamburger-btn 
    " type="button" data-target="#list-category" data-toggle="collapse"
    aria-controls="hamburger" aria-expanded ="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"  style="font-size:36px" ></i>
    <!--<i class="fa fa-times" aria-hidden="true"></i>  -->
    </button>   
    <form class="form-inline">
      <input type="search" class="form-control search-text" placeholder="Nhập tên sản phẩm" aria-label="Search">
      <button class="btn btn-outline-primary "><i class="fa fa-search" style="font-size:36px"></i></button>
    </form>
    <!-- collapsible content-->
    <div class="collapse navbar-collapse " id="list-category">
      <ul class="nav col-12">
          <li class="nav-item col-3 acitve">
                  <div class="product-items contain-img full-size">
                    <a href="<?php echo base_url();?>product/show_products/Headphone" class="full-size">
                     <span class="category-img">
                     <img src="<?php echo base_url(); ?>public/images/other_images/navigation-products-headphone.jpg" alt="1">               
                     </span>                      
                      <span class="category-name">TAI NGHE</span>
                    </a>
                  </div>
          </li>
          <li class="nav-item col-3">
               <div class="product-items contain-img full-size">
                  <a href="<?php echo base_url();?>product/show_products/Mouse" class="full-size">
                    <span class="category-img">
                     <img src="<?php echo base_url(); ?>public/images/other_images/navigation-products-mice.jpg" alt="2">               
                     </span>                      
                    <span class="category-name">MOUSE</span>
                  </a>
                </div>
          </li>
          <li class="nav-item col-3">
                <div class="product-items contain-img full-size">
                  <a href="<?php echo base_url();?>product/show_products/Keyboard" class="full-size">
                    <span class="category-img">
                     <img src="<?php echo base_url(); ?>public/images/other_images/navigation-products-keyboard.jpg" alt="3">               
                     </span>                      
                      <span class="category-name">BÀN PHÍM</span>
                  </a>
                </div>
          </li>
          <li class="nav-item col-3">
              <div class="product-items contain-img full-size">
                  <a href="<?php echo base_url();?>product/show_products/Speaker" class="full-size">
                    <span class="category-img">
                     <img src="<?php echo base_url(); ?>public/images/other_images/navigation-products-speaker.png" alt="4">               
                     </span>                      
                      <span class="category-name">LOA</span>
                  </a>                
              </div>
          </li>
      </ul>
    </div>
    </nav>