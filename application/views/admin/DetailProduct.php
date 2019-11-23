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
      <h3><?php echo $product->ProductName ?></h3>
      <h5>Thông số kỹ thuật</h5>
      <?php
      foreach ($descriptions as $description) { ?>
      <i class="fas fa-check m-2"></i>
      <?php
        echo $description['DescriptionName'] . ' : ' . $description['Information'] . '<br/>';
      }
      ?>
      <h5>Hình ảnh mô tả</h5>
      <?php
      foreach ($images as $image) { ?>
      <img src="<?php echo base_url('public/images/' . $image['Image'])  ?>"
        class="w-25 h-25 m-4 p-4 border border-success">
      <?php } ?>
    </div>
  </div>
</body>


</html>