<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order_save</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/aos.css?v=<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/template.css?v=<?php echo time(); ?>"
        type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="nav">
            <?php require_once 'template/navbar.php'?>
        </div>
    </header>
    <div class="jumbotron text-center">
        <h1 class="display-3">Đơn Đặt Hàng Của Bạn Đã Thành Công!</h1>
        <p class="lead"> Bạn có thể xem mail xác nhận <a href="https://mail.google.com/"> Tại Đây </a></p>
        <hr>
        <p class="lead">
            Nếu bạn muốn tiếp tục mua sắm ?
            <a class="btn btn-primary btn-sm" href="<?php echo base_url()?>" role="button">Continue to
                homepage</a>
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/aos.js"></script>
    <script src="<?php echo base_url(); ?>public/js/template.js"></script>
    <script type="text/javascript"></script>
</body>

</html>