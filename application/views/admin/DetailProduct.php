<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('template/header.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url('public/css/admin/AdminPage.css'); ?>">
  <title>Trang admin</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once('template/navigation.php') ?>
  <div class="row flex-grow-1 m-0">
    <?php include_once('template/sidebar.php') ?>
    <div class="col-md-10 bg-light h-100">
      <h1>Chi tiết sản phẩm</h1>
      <hr>
      <h3 class="mb-4 p-2"><?php echo $product->product_name ?></h3>
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo base_url('public/images/' . $product->image) ?>" class="m-2 p-2 w-75 h-75"><br>
        </div>
        <div class="col-md-6">
          <i class="fas fa-check m-2 p-2"></i>Giá bán : <?php echo $product->price ?> <br>
          <i class="fas fa-check m-2 p-2"></i> Thương hiệu : <?php echo $brand ?> <br>
          <i class="fas fa-check m-2 p-2"></i> Mô tả : <?php echo $product->description ?> <br>
        </div>
      </div>
    </div>
</body>
</html>