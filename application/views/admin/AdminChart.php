<!DOCTYPE HTML>
<html>

<head>
  <script>
    window.onload = function() {

      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light1",
        title: {
          text: "Tình hình bán hàng tháng " + <?php echo @date('m') ?>
        },
        exportEnabled: true,
        axisY: {
          title: "Doanh thu (VND)",
          interval: 500000
        },
        axisX:{
          title: "Loại sản phẩm"
        },
        data: [{
          type: "column",
          dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
      });
      chart.render();

    }
  </script>
</head>

<body>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>