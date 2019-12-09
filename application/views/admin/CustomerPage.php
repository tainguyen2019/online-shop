<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('template/header.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url('public/css/admin/AdminPage.css'); ?>">
  <title>Trang khách hàng</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once('template/navigation.php'); ?>
  <div class="row flex-grow-1 m-0">
    <?php include_once('template/sidebar.php') ?>
    <div class="col-md-10 bg-light">
      <h1>Thông tin khách hàng</h1>
      <hr>
      <form method="get" action="<?php echo base_url('admin/customer'); ?>">
        <input class="col-md-4 rounded" type="text" name="query" value="<?php echo $query ?>">
        <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
      </form>

      <?php if ($total_customers > 0) { ?>
        <p class="font-weight-bold m-2 text-success">Tìm thấy <?php echo $total_customers ?> khách hàng</p>
      <?php } else { ?>
        <p class="font-weight-bold mt-2 p-3 text-success">Không tìm thấy khách hàng phù hợp</p>
      <?php } ?>
      <table class="table">
        <thead>
          <tr>
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Mật khẩu</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($records as $record) { ?>
            <tr>

              <td><?php echo $record['customer_name'] ?></td>
              <td><?php echo $record['phone'] ?></td>
              <td><?php echo $record['address'] ?></td>
              <td><?php echo $record['email'] ?></td>
              <td><?php echo $record['password'] ?></td>
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
            $search = '&query=' . urlencode($query);
            $pre_url = base_url('admin/customers/?page=' . $pre_page . $search);
            $next_url = base_url('admin/customers/?page=' . $next_page . $search);
            ?>
            <li class="page-item">
              <a class="page-link" href="<?php echo $pre_url ?>">
                <</a> </li> <?php for ($i = 1; $i <= $total_pages; $i++) {
                              $url_page = base_url('admin/customers/?page=' . $i . $search);
                              ?> 
            <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
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