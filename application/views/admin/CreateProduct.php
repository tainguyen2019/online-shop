<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('template/header.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url('public/css/admin/AdminPage.css'); ?>">
  <title>Trang thêm sản phẩm</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once('template/navigation.php') ?>
  <div class="row flex-grow-1 m-0">
    <?php include_once('template/sidebar.php') ?>
    <div class="col-md-10 bg-light">
      <h1>Thêm sản phẩm</h1>
      <hr>
      <form action="<?php echo base_url('admin/products/insert_product') ?>" method="post" class="mr-4 text-center" enctype="multipart/form-data">
        <h4>Thông tin sản phẩm</h4>
        <label for="product_name" class="col-md-2">Tên sản phẩm: </label>
        <input class="p-2 m-2 col-md-6 rounded" type="text" name="product_name" id="product_name" required autofocus><br />
        <label for="category" class="col-md-2">Loại sản phẩm: </label>
        <select class="custom-select p-2 m-2 col-md-6 rounded form-control-lg" id="category" name="category" onchange="load_brands()">
          <?php foreach ($categories as $category) { ?>
            <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
          <?php } ?>
        </select><br />
        <label for="brand" class="col-md-2">Thương hiệu: </label>
        <select class="custom-select p-2 m-2 col-md-6 rounded form-control-lg" id="brand" name="brand">
        </select><br />

        <label for="quantity" class="col-md-2">Số lượng: </label>
        <input class="p-2 m-2 col-md-6 rounded" type="text" name="quantity" id="quantity" required><br />
        <label for="cost" class="col-md-2">Giá tiền: </label>
        <input class="p-2 m-2 col-md-6 rounded" type="text" name="cost" id="cost" required><br />
        <label for="description" class="col-md-2">Mô tả: </label>
        <textarea class="col-md-6 rounded" name="description" id="description" rows="3" required></textarea><br>
        <label for="images" class="col-md-2">Hình ảnh: </label>
        <input type="file" id="images" name="image" class="col-md-6" required><br>
        <div class="col-md-8 ml-4 p-4 d-inline">
          <button type="submit" class="btn bg-success m-2 text-dark font-weight-bold">Lưu</button>
          <button type="button" class="btn bg-danger m-2 text-decoration-none">
            <a href="<?php echo base_url('admin/products') ?>" class="text-decoration-none text-dark font-weight-bold">Hủy</a>
          </button>
        </div>
      </form>

    </div>

    <script>
      function load_brands() {
        $.ajax({
          url: "<?php echo base_url('admin/products/get_brands_form') ?>",
          type: "get",
          dataType: "text",
          data: {
            "id": $("#category option:selected").attr('value')
          },
          success: function(result) {
            $('#brand').html(result);
          }
        });
      }
      load_brands();
    </script>
</body>

</html>