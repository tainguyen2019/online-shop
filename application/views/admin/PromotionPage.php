<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('template/header.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url('public/css/admin/AdminPage.css'); ?>">
  <title>Trang khuyến mãi</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once('template/navigation.php'); ?>
  <div class="row flex-grow-1 m-0">
    <?php include_once('template/sidebar.php') ?>
    <div class="col-md-10 bg-light">
      <h1>Thông tin khuyến mãi</h1>
      <hr>
      <a href="<?php echo base_url('admin/promotions/new'); ?>" class="float-right mr-4" title="Thêm mới">
        <i class="fas fa-plus"></i>
      </a>
      <table class="table">
        <thead>
          <tr>
            <th>Mã code</th>
            <th>Tên sản phẩm</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày kết thúc</th>
            <th>Giảm giá</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($promotions as $promotion) { ?>
            <tr>

              <td><?php echo $promotion['promotion_code'] ?></td>
              <td><?php echo $promotion['product_name'] ?></td>
              <td><?php echo $promotion['valid_date'] ?></td>
              <td><?php echo $promotion['expiry_date'] ?></td>
              <td><?php echo ($promotion['discount'] * 100) . ' % '; ?></td>
              <td>
                <a href="<?php echo base_url('admin/promotions/edit?promotion_code=' . $promotion['promotion_code']) ?>" class="text-decoration-none m-4" title="Sửa">
                  <i class="far fa-edit"></i>
                </a>
                <a href="<?php echo base_url('admin/promotions/delete?promotion_code=' . $promotion['promotion_code']) ?>" class="text-decoration-none" title="Xóa">
                  <i class="far fa-trash-alt"></i>
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
            $pre_url = base_url('admin/promotions/?page=' . $pre_page);
            $next_url = base_url('admin/promotions/?page=' . $next_page);
            ?>
            <li class="page-item">
              <a class="page-link" href="<?php echo $pre_url ?>">
                <</a> </li> <?php for ($i = 1; $i <= $total_pages; $i++) {
                              $url_page = base_url('admin/promotions/?page=' . $i);
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