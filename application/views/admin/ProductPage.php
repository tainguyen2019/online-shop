<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('template/header.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url('public/css/admin/AdminPage.css'); ?>">
  <title>Trang sản phẩm</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once('template/navigation.php'); ?>
  <div class="row flex-grow-1 m-0">
    <?php include_once('template/sidebar.php') ?>
    <div class="col-md-10 bg-light">
      <h1>Thông tin sản phẩm</h1>
      <hr>
      <form method="get" action="<?php echo base_url('admin/products'); ?>">
        <div class="row">
          <div class="col-md-5">
            <label for="category" class="col-md-4">Loại sản phẩm: </label>
            <select class="custom-select col-md-5 rounded " id="category" name="category">
              <option value="0" selected>Tất cả sản phẩm</option>
              <?php foreach ($categories as $category) {?>
              <option value="<?php echo $category['category_id']; ?>"
                <?php if($category['category_id'] == $cate) echo 'selected' ?>>
                <?php echo $category['category_name']; ?>
              </option>
              <?php } ?>
            </select><br />
          </div>
          <div class="col-md-5">
            <label for="product_name" class="col-md-4">Tên sản phẩm: </label>
            <input class="col-md-6 rounded" type="text" name="query" value="<?php echo $query ?>">
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>

      <a href="<?php echo base_url('admin/products/new'); ?>" class="float-right mr-4" title="Thêm mới">
        <i class="fas fa-plus"></i>
      </a>
      <?php if ($total_products > 0) { ?>
      <p class="font-weight-bold m-2 text-success">Tìm thấy <?php echo $total_products ?> sản phẩm</p>
      <?php }else{ ?>
      <p class="font-weight-bold mt-2 p-3 text-success">Không tìm thấy sản phẩm phù hợp</p>
      <?php } ?>
      <table class="table">
        <thead>
          <tr>
            <th>Tên sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
					foreach ($records as $record) { ?>
          <tr>
            <td>
              <a href="<?php echo base_url('admin/products/detail?id=' . $record['product_id']) ?>"
                class="text-decoration-none" title="Xem chi tiết">
                <?php echo $record['product_name'] ?>
              </a>
            </td>
            <td><?php echo $record['category_name'] ?></td>
            <td><?php echo $record['quantity'] ?></td>
            <td><?php echo number_format($record['price'], 0, '', '.') . ' VND'; ?></td>
            <td>
              <a href="<?php echo base_url('admin/products/edit?id=' . $record['product_id']) ?>"
                class="text-decoration-none m-4" title="Sửa">
                <i class="far fa-edit"></i>
              </a>
              <a href="<?php echo base_url('admin/products/delete?id=' . $record['product_id']) ?>"
                class="text-decoration-none" title="Xóa" onclick="return confirm('Bạn muốn xóa sản phẩm này ? ')">
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
						$search = '&query='.urlencode($query).'&category='.$cate;
						$pre_url = base_url('admin/products/?page=' . $pre_page.$search);
						$next_url = base_url('admin/products/?page=' . $next_page.$search);
						?>
            <li class="page-item"><a class="page-link" href="<?php echo $pre_url ?>">
                <</a> </li> <?php for ($i = 1; $i <= $total_pages; $i++) {
							$url_page = base_url('admin/products/?page=' . $i.$search);
							?> <li class="page-item <?php if ($i == $page) echo 'active'; ?>"><a class="page-link"
                    href="<?php echo $url_page ?>"><?php echo $i; ?></a></li>
            <?php } ?>
            <li class="page-item"><a class="page-link" href="<?php echo $next_url ?>">></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</body>

</html>