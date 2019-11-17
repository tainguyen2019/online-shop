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
            <table class="table">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records as $record) { ?>
                        <tr>
                            <td><?php echo $record['ProductName'] ?></td>
                            <td><?php echo $record['Quantity'] ?></td>
                            <td><?php echo number_format($record['Cost'], 0, '', '.') . ' VND'; ?></td>
                            <td>
                                <a href="#" class="m-4">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="#">
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
                        $pre_url = base_url('admin/products/?page=' . $pre_page);
                        $next_url = base_url('admin/products/?page=' . $next_page);
                        ?>
                        <li class="page-item"><a class="page-link" href="<?php echo $pre_url ?>">&laquo;</a></li>
                        <?php for ($i = 1; $i <= $total_pages; $i++) {
                            $url_page = base_url('admin/products/?page=' . $i);
                            ?>
                            <li class="page-item <?php if($i == $page) echo 'active'; ?>"><a class="page-link" href="<?php echo $url_page ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                        <li class="page-item"><a class="page-link" href="<?php echo $next_url ?>">&raquo;</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>

</html>