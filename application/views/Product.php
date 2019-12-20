<?php
$query = explode("/", $_SERVER["REQUEST_URI"]);
$url = explode("?", $query[4]);
$category_id = $url[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Product</title>
  <?php require_once "template/top.php"; ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/product.css?v=<?php echo time(); ?>" type="text/css">
</head>

<body>
  <header>
    <?php include_once "template/navbar.php" ?>
    <?php include_once 'template/category_list.php' ?>
  </header>
  <div id="product-panel">
    <img src="<?php echo base_url(); ?>public/images/image-panel-<?php echo $category_id ?>.jpeg" alt="panel">

  </div>
  <div class="khoangtrang"></div>
  <div class="alert-add-success">
    <?php
    if ($this->session->flashdata('add_success')) {
      echo '<div class="alert alert-success" style="width: 85%;
           margin: 10px auto;"role="alert">'
        . '<strong>'.$this->session->flashdata('add_success').'</strong>'.
        '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
        '</div>';
    }
    ?>
  </div>
  <div class="khoangtrang"></div>
  <div class="content">
    <div class="sidebar float-left">
      <form action="<?php echo base_url('product/show_products/' . $category_id) ?>" method="GET">
        <input type="submit" class="btn btn-info btn-large btn-outline-info btn-submit" value="LỌC"
          style="margin-left: 70px;">
        <div id="accordion">
          <div class="card card-size border-none">
            <div class="card card-size border-none">
              <div class="card-header bg-white border-bottom-none" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-size collapsed" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="false" aria-controls="collapseOne">
                    THƯƠNG HIỆU
                  </button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body column">
                  <ul>
                    <li>
                      <label class="checkbox-inline">
                        <input type="radio" name="brand" class="checkbox-form border-primary brand" value="">
                        <span class="checkmark"></span>
                        <p class="filter-text brand-text">Chọn Tất Cả</p>
                      </label>
                    </li>
                    <?php
                    foreach ($show_brand as $key => $val) {
                    ?>
                    <li>
                      <label class="checkbox-inline">
                        <input type="radio" name="brand" class="checkbox-form border-primary brand"
                          value="<?= $val['brand_name'] ?>">
                        <span class="checkmark"></span>
                        <p class="filter-text brand-text"><?= $val['brand_name'] ?></p>
                      </label>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
            <!-- 
          <div class="card card-size border-none">
            <div class="card-header bg-white border-bottom-none" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-size collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  GIÁ
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body column">
              <div class="slidecontainer">
               
              <input type="hidden" id="hidden_minimun_price" value="0">
                  <input type="hidden" id="hidden_maximum_price" value="5000000">
                  <p id="price-show">0 - 5000000</p>
                  <p>
                    <input type="text" name="price" id="amount" style="color : #f6932f ; border : 0 ;font-weight : bold;">
                  </p>
                  <div id="price_range"></div>
              </div>
              </div>
            </div>
            -->
          </div>
        </div>
      </form>
    </div>
    <div class="main-content  float-right">
      <div class="list-product">
        <?php
        if ($total_products > 0) {
          foreach ($show_product as $key => $val) {
        ?>
        <div class="card product-card">
          <a href="<?php echo base_url('product/show_product_info/' . $val['product_id']) ?>">
            <img class="card-img-top bg-light img-product-effect"
              src="<?php echo base_url('public/images/' . $val['image']); ?>" alt="Chuột có dây Genius DX-125 Đen">
          </a>
          <div class="card-body card-body-size" style="position : relative">
            <strong class="card-title product-name"><?php echo $val['product_name'] ?></strong>
            <p class="card-text product-price"><?php echo number_format($val['price'], 0, '', '.') . ' VND'; ?></p>
            <a class="btn btn-effect btn-outline-primary"
              href="<?php echo base_url('cart/AddtoCart/' . $val['product_id']) ?>">
              <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 20px"></i>
              Mua ngay
            </a>
          </div>
        </div>
        <?php } ?>

      </div>
      <div class="pagination-container">
        <ul class="pagination">
          <?php
          $pre_page = $page > 1 ? $page - 1 : $page;
          $next_page = $page < $total_pages ? $page + 1 : $page;
          $search = '&brand=' . $brand;
          $pre_url = base_url('product/show_products/' . $category_id . '?page=' . $pre_page . $search);
          $next_url = base_url('product/show_products/' . $category_id . '?page=' . $next_page . $search);
          ?>
          <li class="page-item">
            <a class="page-link" href="<?php echo $pre_page ?>">
              <</a> </li> <?php
                          for ($i = 1; $i <= $total_pages; $i++) {
                            $url_page = base_url('product/show_products/' . $category_id . '?page=' . $i . $search);
                          ?> <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                <a class="page-link" href="<?php echo $url_page ?>"><?php echo $i ?></a>
          </li>
          <?php } ?>
          <li class="page-item">
            <a class="page-link" href="<?php echo $next_page ?>">></a>
          </li>
        </ul>
      </div>
      <?php } else { ?>
      <p> KHÔNG TÌM THẤY SẢN PHẨM </p>
      <?php } ?>
    </div>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/template.js"></script>
  <script src="<?php echo base_url(); ?>public/js/product.js"></script>
</body>

</html>