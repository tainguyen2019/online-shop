<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('template/header.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url('public/css/admin/AdminPage.css'); ?>">
  <title>Trang quản lý đơn hàng</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once('template/navigation.php'); ?>
  <div class="row flex-grow-1 m-0">
    <?php include_once('template/sidebar.php') ?>
    <div class="col-md-10 bg-light">
      <h1>Thông tin đơn hàng</h1>
      <hr>
      <table class="table">
        <thead>
          <tr>
            <th>Mã đơn hàng</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Địa chỉ giao</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $status;
          foreach ($records as $record) {
            if ($record['status'] == 1) {
              $status = 'Đang xử lý';
            } else if ($record['status'] == 2) {
              $status = 'Được xác nhận';
            } else
              $status = 'Bị hủy';
            ?>
            <tr>

              <td><?php echo $record['order_id'] ?></td>
              <td><?php echo $record['create_date'] ?></td>
              <td><?php echo $record['write_date'] ?></td>
              <td><?php echo $record['address'] ?></td>
              <td><?php echo number_format($record['total'], 0, '', '.') . ' VND'; ?></td>
              <td><?php echo $status ?></td>
              <td>
                <?php if($record['status'] == 1){ ?>
                <a href="<?php echo base_url('admin/orders/confirm?id=' . $record['order_id']) ?>" class="text-decoration-none m-4" title="Xác nhận">
                <i class="fa fa-check-circle"></i>
                </a>
                <a href="<?php echo base_url('admin/orders/cancel?id=' . $record['order_id']) ?>" class="text-decoration-none m-4" title="Hủy bỏ">
                <i class="fas fa-window-close"></i>
                </a>
                <?php } ?>
                <a href="<?php echo base_url('admin/orders/detail?id=' . $record['order_id']) ?>"
                  class="text-decoration-none m-4" title="Xem chi tiết">
                  <i class="fas fa-info-circle"></i>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="float-right mr-2">
        <nav>
          <ul class="pagination">
            <?php
            $pre_page = $page > 1 ? $page - 1 : $page;
            $next_page = $page < $total_pages ? $page + 1 : $page;
            $pre_url = base_url('admin/orders/?page=' . $pre_page);
            $next_url = base_url('admin/orders/?page=' . $next_page);
            ?>
            <li class="page-item">
              <a class="page-link" href="<?php echo $pre_url ?>">
                <</a> </li> <?php for ($i = 1; $i <= $total_pages; $i++) {
                              $url_page = base_url('admin/orders/?page=' . $i);
                              ?> <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                  <a class="page-link" href="<?php echo $url_page ?>"><?php echo $i; ?></a>
            </li>
          <?php } ?>
          <li class="page-item"><a class="page-link" href="<?php echo $next_url ?>">></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</body>

</html>