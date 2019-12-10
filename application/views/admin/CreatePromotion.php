<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('template/header.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url('public/css/admin/AdminPage.css'); ?>">
  <title>Trang thêm khuyến mãi</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once('template/navigation.php') ?>
  <div class="row flex-grow-1 m-0">
    <?php include_once('template/sidebar.php') ?>
    <div class="col-md-10 bg-light">
      <h1>Thêm khuyến mãi</h1>
      <hr>
      <form action="<?php echo base_url('admin/promotions/insert_promotion') ?>" method="post" class="mr-4 text-center" enctype="multipart/form-data">
        <h4>Thông tin khuyến mãi</h4>

        <label for="product" class="col-md-2"> Sản phẩm: </label>
        <select class="custom-select p-2 m-2 col-md-6 rounded form-control-lg" id="product" name="product">
          <?php foreach ($products as $product) { ?>
            <option value="<?php echo $product['product_id']; ?>"><?php echo $product['product_name']; ?></option>
          <?php } ?>
        </select><br />

        <label for="quantity" class="col-md-2">Ngày bắt đầu: </label>
        <input class="p-2 m-2 col-md-6 rounded" type="date" name="valid_date" id="valid_date" required><br />

        <label for="cost" class="col-md-2">Ngày kết thúc: </label>
        <input class="p-2 m-2 col-md-6 rounded" type="date" name="expiry_date" id="expiry_date" required><br />

        <label for="quantity" class="col-md-2">Giảm giá: </label>
        <input class="p-2 m-2 col-md-6 rounded" type="number" name="discount" id="discount" min="1" max="99" required><br />

        <input type="hidden" value="<?php echo $coupon ?>" name="promotion_code">

        <div class="col-md-8 ml-4 p-4 d-inline">
          <button type="submit" class="btn bg-success m-2 text-dark font-weight-bold">Lưu</button>
          <button type="button" class="btn bg-danger m-2 text-decoration-none">
            <a href="<?php echo base_url('admin/promtions') ?>" class="text-decoration-none text-dark font-weight-bold">Hủy</a>
          </button>
        </div>
      </form>

    </div>
    <script>
      $("#expiry_date").change(function() {
        var startDate = document.getElementById("valid_date").value;
        var endDate = document.getElementById("expiry_date").value;

        if ((Date.parse(startDate) >= Date.parse(endDate))) {
          alert("Ngày bắt đầu phải nhỏ hơn ngày kết thúc khuyến mãi");
          document.getElementById("expiry_date").value = "";
        }
      });

      $("#valid_date").change(function() {
        var startDate = document.getElementById("valid_date").value;
        var endDate = document.getElementById("expiry_date").value;

        if ((Date.parse(startDate) >= Date.parse(endDate))) {
          alert("Ngày bắt đầu phải nhỏ hơn ngày kết thúc khuyến mãi");
          document.getElementById("valid_date").value = "";
        }
      });
    </script>
</body>

</html>