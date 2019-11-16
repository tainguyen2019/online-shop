<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('template/header.php') ?>
  <title>Admin Products</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once('template/navigation.php') ?>
  <div class="row flex-grow-1 m-0">
    <?php include_once('template/sidebar.php') ?>
    <div class="col-md-10 bg-light">
      <!-- Records -->
      <?php
      echo "Total records: " . $total . "<br />";
      echo "Page: " . $page . "<br />";
      echo "Total pages: " . $total_pages . "<br />";
      ?>

      <?php
      foreach ($records as $record) {
        ?>
        <p>ID: <?php echo $record['ProductID'] ?> Name: <?php echo $record['ProductName'] ?></p>
      <?php
      }
      ?>

    <!-- Pagination -->
      <?php
      $prev_page = $page > 1 ? $page - 1 : FALSE;
      $next_page = $page < $total_pages ? $page + 1 : $page."#";

      $prev_page_url = base_url("admin/products/".($prev_page ? '?page=' . $prev_page : '#'));
      $next_page_url = base_url("admin/products/?page=".$next_page);
      ?>

      <!-- Prev -->
      <a href="<?php echo $prev_page_url ?>">Prev</a>

      <!-- Pages -->
      <?php
      for ($i = 1; $i <= $total_pages; $i++) {
        $page_url = base_url("admin/products/".($i != $page ? "?page=" . $i : '#'));
        ?>
        <a href="<?php echo $page_url ?>"><?php echo $i ?></a>
      <?php
      }
      ?>

      <!-- Next -->
      <a href="<?php echo $next_page_url ?>">Next</a>
    </div>
  </div>
  <?php include_once('template/footer.php') ?>
</body>

</html>
