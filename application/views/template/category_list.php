<nav class="navbar navbar-dark  hamburger">
    <button class ="navbar-toggler btn hamburger-btn 
    " type="button" data-target="#list-category" data-toggle="collapse"
    aria-controls="hamburger" aria-expanded ="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"  style="font-size:36px" ></i>
    <!--<i class="fa fa-times" aria-hidden="true"></i>  -->
    </button>   
    
    <!-- collapsible content-->
    <div class="collapse navbar-collapse " id="list-category">
      <ul class="nav col-12">
          <li class=" col-3 acitve">
                  <div class="product-items contain-img full-size">
                    <a href="<?php echo base_url();?>product/show_products/1" class="full-size">
                     <span class="category-img">
                     <img src="<?php echo base_url(); ?>public/images/navigation-products-headphone.jpg" alt="1">               
                     </span>                      
                      <span class="category-name">TAI NGHE</span>
                    </a>
                  </div>
          </li>
          <li class="col-3">
               <div class="product-items contain-img full-size">
                  <a href="<?php echo base_url();?>product/show_products/2" class="full-size">
                    <span class="category-img">
                     <img src="<?php echo base_url(); ?>public/images/navigation-products-mice.jpg" alt="2">               
                     </span>                      
                    <span class="category-name">MOUSE</span>
                  </a>
                </div>
          </li>
          <li class=" col-3">
                <div class="product-items contain-img full-size">
                  <a href="<?php echo base_url();?>product/show_products/4" class="full-size">
                    <span class="category-img">
                     <img src="<?php echo base_url(); ?>public/images/navigation-products-keyboard.jpg" alt="3">               
                     </span>                      
                      <span class="category-name">BÀN PHÍM</span>
                  </a>
                </div>
          </li>
          <li class=" col-3">
              <div class="product-items contain-img full-size">
                  <a href="<?php echo base_url();?>product/show_products/3" class="full-size">
                    <span class="category-img">
                     <img src="<?php echo base_url(); ?>public/images/navigation-products-speaker.png" alt="4">               
                     </span>                      
                      <span class="category-name">LOA</span>
                  </a>                
              </div>
          </li>
      </ul>
    </div>
    </nav>