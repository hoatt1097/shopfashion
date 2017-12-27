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
    
    <title>cart</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
      .button {
          display: inline-block;
          position: relative;
          cursor: pointer;
          outline: none;
          white-space: nowrap;
          margin: 5px;
          padding: 0 22px;
          font-size: 14px;
          height: 40px;
          line-height: 40px;
          background-color: #00c5bb;
          color: #FFF;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 1px;
          border: none;
          text-align: center;
          float: right;
      }
      .qty {
        width: 40px;
        text-align: center;
      }
      .cart-product-name a, .product-name a {
          font-weight: bold;
          font-size: 13px;
          color: #333;
      }
      .remove {
          font-size: 14px;
          color: #FF0000;
      }
      .cart-product-thumbnail a {
          display: block;
          width: 68px;
      }
      .cart-product-thumbnail img {
          display: block;
          width: auto;
          max-width: 100%;
          height: auto;
          border: 2px solid #EEE;
      }
    </style>
  </head>
  <body>
  <?php  
      include 'header.php';
  ?>
    <div class="container clearfix">
      <div class="">
          <div class="table-responsive">
            <table class="table ">
              <thead>
                <tr>
                  <th class="cart-product-remove">&nbsp;</th>
                  <th class="cart-product-thumbnail">&nbsp;</th>
                  <th class="cart-product-name">Sản phẩm</th>
                  <th class="cart-product-price">Đơn giá</th>
                  <th class="cart-product-quantity">Số lượng</th>
                  <th class="cart-product-subtotal">Thành tiền</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $sum_price_built = 0;
                $dt -> select("SELECT * FROM product,cart WHERE product.id = cart.product_id ");
                while( $r = $dt->fetch() )
                {
                  $sum_price_built = $sum_price_built + $r["sum_price"];
                  $name = $r["name"];
                  
                  $symbol = 'đ';
                  $symbol_thousand = '.';
                  $decimal_place = 0;
                  $price = number_format($r["price"], $decimal_place, '', $symbol_thousand).$symbol;

                  if( $r["price"] == "0" )
                  {
                    $price = "Liên hệ mua hàng";
                  }
                  $link = $r["image_link"];  
                  $sale = $r["sale"];
                  $image_id = $r["image_id"];
                  $color_choose = $r["color_choose"];
                  $size_choose = $r["size_choose"];
                  $amount = $r["amount"];

                  $sum_price = number_format($r["sum_price"], $decimal_place, '', $symbol_thousand).$symbol;

                  $sum_price_built_vnd = number_format($sum_price_built, $decimal_place, '', $symbol_thousand).$symbol;
              ?>  
                <tr class="cart_item">
                  <td class="cart-product-remove">
                    <a itemprop="<?=$r["id"]?>" class="remove" title="Bỏ sản phẩm này"><i class="fa fa-trash"></i></a>
                  </td>

                  <td class="cart-product-thumbnail">
                    <a href="" itemprop="<?=$r["image_id"]?>"><img src="<?=$link?>" alt="<?=$name?>"></a>
                  </td>

                  <td class="cart-product-name">
                    <a href="" itemprop="<?=$r["image_id"]?>"><?=$name?></a>
                    <p><?=$color_choose?> / <?=$size_choose?></p>
                  </td>

                  <td class="cart-product-price">
                    <span class="amount"><?=$price?></span>
                  </td>

                  <td class="cart-product-quantity">
                    <div class="quantity clearfix">
                      <p style="padding-left: 25px;"><?=$amount?></p>   
                    </div>
                  </td>

                  <td class="cart-product-subtotal">
                    <span class="amount"><?=$sum_price?></span>
                  </td>
                </tr>
                
                <?php
                  }
                ?>
                
                <tr style="text-align:center;">
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><h4>Tổng tiền </h4></td>
                  <td><span class="amount color lead"><strong><?=$sum_price_built_vnd?></strong></span></td>
                </tr>
              </tbody>
            </table>

          </div>
          <div class="row clearfix">
            <div class="col-xs-12 col-sm-6">
                <a style="display: block; line-height: 45px; font-size: 16px;" href="/collections/all">
                  <i class="fa fa-reply"></i>
                  Tiếp tục mua hàng</a>
              </div>
            <div class="col-sm-6 col-xs-12">
              <button name="update" class="button fright">
                <i class="fa fa-refresh"></i> Cập nhật giỏ hàng
              </button>
              <button class="cart_checkout_btn button fright" title="Tiến hành đặt hàng" type="button">
                <i class="fa fa-money"></i>THANH TOÁN
              </button>
            </div>
          </div>
      </div>
</div>

  <?php
    include 'footer.php';
  ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/shopfashion.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".remove").click(function(){
          var id_remove = $(".remove").attr("itemprop");
          $.ajax({
            url : "remove-cart.php",
            type : 'post',
            dataType : 'text',
            data : {
                "id_remove"    : id_remove
            },
            success : function(result) {
              alert(result);
              window.location.replace("cart.php");
            }
          });
        });

        $(".cart-product-thumbnail a").click(function(){
          var image_id =  $(this).attr("itemprop");
          $(this).attr('href', 'product.php?id=' + image_id);
        })
        $(".cart-product-name a").click(function(){
          var image_id =  $(this).attr("itemprop");
          $(this).attr('href', 'product.php?id=' + image_id);
        })

      });
    </script>
  </body>
</html>