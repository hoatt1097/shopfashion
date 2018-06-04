<?php 
  include 'database.php';
  $dt = new Database;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    
    <title>Login Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="huong-dan-tinh-size.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css" media="screen"> 
        .clearfix{
            clear: both;
        }
    </style>
  </head>
  <body>
    <?php
      include 'header.php';
    ?>
    <div class="clearfix">
      
    </div>
    <section id="content"> 
      <div class="container clearfix">
        <div class="page_title">
            <h1>
                Hướng dẫn bảo quản
            </h1>
        </div>
        <p>Cất đồ shop riêng quần áo khác, tốt nhất là để trong giấy lụa hay các loại vải khác. Nếu bạn để chúng trong ngăn kéo thì hãy dùng giấy hay vải phủ lại để ngăn gỗ tiếp xúc với chúng.</p>

        <p>Mẹo giúp bảo quản đồ shop của bạn.</p>

        <p>Nếu bạn muốn giữ màu sắc đồ shop lâu hơn, sau khi giặt lần đầu tiên, bạn hãy ngâm đồ shop trong giấm trắng mười phút rồi xả lại.<br>
        Phơi khô đồ shop tự nhiên, không được phơi bằng lò sưởi, máy sấy quần áo hay máy sấy tóc, tránh phơi trực tiếp dưới ánh nắng mặt trời<br>
        Không nên dùng thuốc tẩy trắng để làm trắng đồ shop, nó làm mất màu vải, làm màu đen trông như màu vàng. Hãy dùng bột giặt có chất tẩy trắng.<br>
        Luôn đọc nhãn hướng dẫn sử dụng trên đồ shop.</p>

        <p><strong>Giặt đồ shop:</strong><br>
        - Hãy giặt đồ shop trường xuyên và bảo quản trong các điều kiện hoàn hảo bởi vì khi bạn sử dụng thì mồ hôi và các vết bẩn trên sợi vải sẽ ảnh hưởng không tốt tới sức khoẻ của bạn.</p>

        <p>- Giặt đồ shop không nên ngâm lâu quá 5 phút</p>

        <p>- Không để nhiệt độ giặt vướt quá 30oC</p>

        <p>- Phơi khô đồ shop cần tránh xa nguồn nhiệt trực tiếp như lò sưởi, bếp lửa và kể cả là ánh sáng mặt trời sẽ khiến cho đồ shop bị phai màu.</p>

        <p>- Không nên sấy đồ shop.</p>

        <p>Tốt hơn là giặt tay đồ shop của bạn, nhưng bạn có thể giặt máy cho nhanh, nhưng dù bằng cách nào thì bạn cũng phải chú ý đặc biệt đến chúng.</p>
    </div>
    </section>
    <?php 
      include 'footer.php';
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>