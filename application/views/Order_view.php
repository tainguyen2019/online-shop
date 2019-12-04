<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang xem đơn hàng</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/order_view.css?v=<?php echo time(); ?>"
        type="text/css">
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
    <div class="container-fluid">
        <div class="title">
            <i class="fas fa-users" style="font-size : 24px"></i>
            <span><small>Tài khoản của</small></span>
            <p class="name-user"><?php echo $user_info[0]['customer_name']?></p>
        </div>
        <h3> ĐƠN HÀNG CỦA TÔI</h3>
        <div class="order-table">
            <table class="table table-striped ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Ngày mua</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Trạng thái đơn hàng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/aos.js"></script>
    <script src="<?php echo base_url(); ?>public/js/template.js"></script>
    <script type="text/javascript"></script>
    </body> 
    </html >