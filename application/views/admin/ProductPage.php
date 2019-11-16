<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <title>ProductPage</title>
</head>

<body>
    <?php 
    echo "Total records: ".$total."<br />";
    echo "Page: ".$page."<br />";
    echo "Total pages: ".$total_pages."<br />";
    ?>

    <?php
    foreach ($records as $record) {
    ?>
        <p>ID: <?php echo $record['ProductID']?> Name: <?php echo $record['ProductName']?></p>
    <?php 
    }
    ?>

    <?php
        $prev_page = $page > 1 ? $page - 1 : FALSE;
        $next_page = $page < $total_pages ? $page + 1 : FALSE;
        
        $prev_page_url = $prev_page ? 'product?page='.$prev_page : '#';
        $next_page_url = $next_page ? 'product?page='.$next_page: '#';
    ?>

    <!-- Prev -->
    <a href="<?php echo $prev_page_url?>">Prev</a>

    <!-- Pages -->
    <?php
    for ($i = 1; $i <= $total_pages; $i++) {
        $page_url = $i != $page ? "product?page=".$i : '#';
    ?>
        <a href="<?php echo $page_url?>">Page <?php echo $i?></a>
    <?php 
    } 
    ?>

    <!-- Next -->
    <a href="<?php echo $next_page_url?>">Next</a>
</body>

</html>
