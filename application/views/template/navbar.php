<div class="global-nav">
  <div class="nav-container">
    <div class="left">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">
        <h2 class="logo display2">BRAND</h2>
      </a>
      <form class="form-search" action="<?php echo base_url('Home/search') ?>" method="POST">
        <input type="search" name="product_name" class="search-text" placeholder=" Nhập tên sản phẩm">
        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"
            style="font-size:36px"></i></button>
      </form>
    </div>
    <div class="right">
      <ul class="utility-items nav">
        <li class="nav-item">
          <!--điều hướng đến trang đăng nhập-->
          <a href="#" class="nav-link login">
            <img src="https://img.icons8.com/cotton/32/000000/user-male--v1.png">
            TÀI KHOẢN
          </a>
          <ul class="sub-list">
            <?php if ($this->session->userdata('isLogged') == false) { ?>
            <li class="sub-list-item">
              <a href="<?php echo base_url(); ?>Login/index" class="items">ĐĂNG NHẬP</a>
            </li>
            <li class="sub-list-item">
              <a href="<?php echo base_url(); ?>Login/index/register" class="items">TẠO TÀI KHOẢN</a>
            </li>
            <?php } else { ?>
            <li class="sub-list-item">
              <a href="<?php echo base_url(); ?>Order/GotoOrderView" class="items">XEM ĐƠN HÀNG</a>
            </li>
            <li class="sub-list-item">
              <a href="<?php echo base_url(); ?>login/logout" class="items">ĐĂNG XUẤT</a>
            </li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item">
          <!--điều hướng đến trang giỏ hàng-->
          <a href="<?php echo base_url(); ?>Cart/" class="nav-link login">
            <img src="https://img.icons8.com/cotton/32/000000/shopping-cart--v1.png">
            GIỎ HÀNG
          </a>
          <span class="show_total_items"><?php echo $this->cart->total_items() ?></span>
        </li>

      </ul>
    </div>
  </div>
</div>