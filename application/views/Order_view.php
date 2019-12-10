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
                        <th scope="col">Địa chỉ</th>                    
                        <th scope="col">Tổng tiền</th> 
                        <th scope="col">Trạng thái đơn hàng</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($sale_order as $key=>$val)
                    {?>
                    <tr>
                        <th scope="row"><?=$val['order_id']?></th>
                        <td><?php echo $val['create_date']?></td>
                        <td><?php echo $val['address']?></td>
                        <td><?php echo $val['total']?></td>
                        <td><?php if($val['total'] == 1)
                        echo "Đang xử lí";
                        else echo "Đã giao";
                        ?></td>
                        <td>
                            <a href="<?echo base_url('Order/del_order/'.$val['order_id'])?>"
                            onclick="return confirm('Bạn muốn xoa đơn hàng này ? ')"
                            ><i class="fas fa-trash-alt" style="color : red; font-size : 20px; margin-right : 10px"></i></a>
                            <a href="#"><i class="fas fa-info-circle" style="color : blue; font-size : 20px;"></i></a>
                        </td>
                    </tr>
                    <?php }?>
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