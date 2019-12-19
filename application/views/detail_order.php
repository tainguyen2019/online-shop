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
            <h2> CHI TIẾT ĐƠN HÀNG</h2>
        </div>
        <div>
            <h4> ĐƠN HÀNG SỐ <?php echo $detail_order[0]['order_id']?></h4>
        </div>
        <div class="order-table">
            <table class="table table-striped ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Số lượng</th> 
                        <th scope="col">Giá bán</th>                    
                        <th scope="col">Giảm giá</th> 
                        <th scope="col">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($detail_order as $val)
                    {?>
                    <tr>
                        <th scope="row"><?php echo $val['product_name']?></th>
                        <td><?php echo $val['quantity']?></td>
                        <td><?php echo $val['price']?></td>
                        <td><?php echo $val['discount']?></td>
                        <td><?php echo number_format($val['amount'], 0, '', '.') . ' VND';?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <h3 class="total" style="float : right">TỔNG TIỀN : 
            <?php echo number_format($detail_order[0]['total'], 0, '', '.') . ' VND';?></h3>
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