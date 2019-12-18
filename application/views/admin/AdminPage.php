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
		<div class="col-md-10 bg-light">
			<h1>Trang chủ</h1>
			<hr>
			<div class="row">
				<div class="col card bg-success m-2">
					<div class="card-body text-center ">
						<h5 class="font-weight-bold mb-4">ĐÃ BÁN</h5>
						<p class="font-weight-bold text-white mb-4"><?= $product_card ?> sản phẩm</p>
						<p class="font-weight-bold">Tháng này</p>
					</div>
				</div>
				<div class="col card bg-warning m-2">
					<div class="card-body text-center ">
						<h5 class="font-weight-bold mb-4">DOANH THU</h5>
						<p class="font-weight-bold text-white mb-4"><?= number_format($revenue_card, 0, '', '.') . ' VND' ?></p>
						<p class="font-weight-bold">Tháng này</p>
					</div>
				</div>
				<div class="col card bg-primary m-2">
					<div class="card-body text-center ">
						<h5 class="font-weight-bold mb-4">KHÁCH HÀNG</h5>
						<p class="font-weight-bold text-white mb-4"><?= $customer_card ?> lượt khách</p>
						<p class="font-weight-bold">Tháng này</p>
					</div>
				</div>
				<div class="col card bg-danger m-2">
					<div class="card-body text-center ">
						<h5 class="font-weight-bold mb-4">ĐƠN HÀNG</h5>
						<p class="font-weight-bold text-white mb-4"><?= $order_card ?> đơn hàng</p>
						<p class="font-weight-bold">Tháng này</p>
					</div>
				</div>
			</div>
			<div class="row" id="chart">
				<?=$chart ?>
			</div>
		</div>
	</div>
</body>

</html>