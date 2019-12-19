<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('template/header.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url('public/css/admin/AdminPage.css'); ?>">
  <title>Trang admin</title>
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
  <?php include_once('template/navigation.php') ?>
  <div class="row flex-grow-1 m-0">
    <?php include_once('template/sidebar.php') ?>
    <div class="col-md-10 h-100">
      <h1>Chi tiết đơn hàng</h1>
      <hr>
      <h5>Đơn hàng số <?php echo $order->order_id ?></h5><br>
      <p>Ngày tạo :  <?php echo $order->create_date ?></p><br>
      <table class="table">
        <thead>
          <tr>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá bán</th>
            <th>Giảm giá</th>
            <th>Thành tiền</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($details as $detail) { ?>
          <tr>
            <td><?php echo $detail['product_name']?></td>
            <td><?php echo $detail['quantity']?></td>
            <td><?php echo $detail['price']?></td>
            <td><?php echo ($detail['discount'] * 100).' % '; ?></td>
            <td><?php echo number_format($detail['amount'], 0, '', '.') . ' VND'; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
      <h5 class="float-right m-5">Tổng tiền:   <?php echo number_format($order->total, 0, '', '.') . ' VND'; ?></h5><br>
    </div>
</body>
</html>