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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/shopfashion.css">
  </head>
  <body>
  <?php  
      include 'header.php';
  ?>
      
    <section id="slider" class="clearfix">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/slideshow_1.jpg" alt="">
          </div>
          <div class="item">
            <img src="images/slideshow_2.jpg" alt="">
          </div>
          <div class="item">
            <img src="images/slideshow_3.jpg" alt="">
          </div>
          <div class="item">
            <img src="images/slideshow_4.jpg" alt="">
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
    </section>
    
    <div class="policies">
      <div class="container clearfix">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
              <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                  <img src="images/icon/policies_icon_1.png" alt="ega-fashion-magazine">
                </div>
                <h4>Miễn phí giao hàng</h4>
                <p class="notopmargin">Nhận hàng trong vòng 3 ngày</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                  <img src="images/icon/policies_icon_2.png" alt="ega-fashion-magazine">
                </div>
                <h4>Quà tặng</h4>
                <p class="notopmargin">Nhiều quà tặng và ưu đãi hấp dẫn</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                  <img src="images/icon/policies_icon_3.png" alt="ega-fashion-magazine">
                </div>
                <h4>Bảo đảm chất lượng</h4>
                <p class="notopmargin">Sản phẩm đã dược kiểm định</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                  <img src="images/icon/policies_icon_4.png" alt="ega-fashion-magazine">
                </div>
                <h4>HOTLINE: <a href="tel:01657790513">0165 779 0513</a></h4>
                <p class="notopmargin">Dịch vụ hỗ trợ bạn 24/7</p>
              </div>
            </div>
        </div>
      </div> 
    </div>
    
    <div class="container">
      <div class="tech_store_index_col_1 colection">
        <div class="block_title">
          <h2>THỜI TRANG NỮ</h2>
        </div>
        <ul>
          <li>
            <a href="" title="" itemprop="4">Váy đầm</a>
          </li>
          <li>
            <a href="" title="" itemprop="6">Áo khoác nữ</a>
          </li>
          <li>
            <a href="" title="" itemprop="5">Đồ mặc nhà</a>
          </li>
        </ul>
        <div class="row">
          <div class="col-xs-12 index_col_products">
            <div class="row">
              <?php
                $i = 0;
                $dt -> select("SELECT * FROM product WHERE category_id = 4 or category_id = 5 or category_id = 6 ");
                while( $r = $dt->fetch())
                {
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
                  if($i < 12)
                  {
              ?>

              <div class="product_single col-xs-6 col-md-3">
                <div class="product product_one clearfix ">
                  <div class="product-image">
                    <img src="<?=$link?>" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" itemprop="<?=$image_id?>" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                    <?php
                      if($sale != 0)
                      {
                    ?>
                        <div class="sale-flash">-<?=$sale?>%</div>
                    <?php
                      }
                    ?>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3>
                            <a href="" itemprop="<?=$image_id?>" title="<?=$name?>">
                            <p><?=$name?></p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins><?=$price?></a></ins>
                        </div>
                  </div>
                </div>
              </div>
              <?php    
                  $i = $i + 1;
                  }          
                }
              ?>
            </div>
          </div>
        </div>
      </div>

      <div class="tech_store_index_col_2 colection">
        <div class="block_title">
          <h2>THỜI TRANG NAM</h2>
        </div>
        <ul>
          <li>
            <a href="#" title="" itemprop="7">Áo thun nam</a>
          </li>
          <li>
            <a href="#" title="" itemprop="8">Quần Jean nam</a>
          </li>
          <li>
            <a href="#" title="" itemprop="9">Áo vest nam</a>
          </li>
        </ul>
        <div class="row">
          <div class="hidden-xs hidden-sm col-md-3 index_col_banner_wrap left">
            <div class="interactive_banner">
              <div class="interactive_img">
                <img src="images/thoi-trang-nam-cao-cap-1.jpg" alt="">
                <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
              </div>
              <div class="interactive_overlay">
                <div class="">
                  <div class="interactive_content">
                    <h2>
                      THỜI TRANG NAM 2017
                    </h2>
                    <p class="">Thời trang nam cao cấp, quyến rũ và cá tính</p>
                    <div class="btn_see_all">
                     <a href="category.php?id=2&sortby=default" >Xem tất cả</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 index_col_products">
          <div class="row">
            <?php
                $j = 0;
                $dt -> select("SELECT * FROM product WHERE category_id = 7 or category_id = 8 or category_id = 9 ");
                while( $r = $dt->fetch() )
                {
                  $name = $r["name"];
                  $symbol = 'đ';
                  $symbol_thousand = '.';
                  $decimal_place = 0;
                  $price = number_format($r["price"], $decimal_place, '', $symbol_thousand).$symbol;
                  if( $r["price"] == "null" )
                  {
                    $price = "Liên hệ mua hàng";
                  }
                  $link = $r["image_link"];  
                  $sale = $r["sale"];
                  $image_id = $r["image_id"];
                  if( $j < 6 )
                  {
              ?>

              <div class="product_single col-xs-6 col-md-4">
                <div class="product product_one clearfix ">
                  <div class="product-image">
                    <img src="<?=$link?>" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" itemprop="<?=$image_id?>" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                    <?php
                      if($sale != 0)
                      {
                    ?>
                        <div class="sale-flash">-<?=$sale?>%</div>
                    <?php
                      }
                    ?>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3>
                            <a href="" itemprop="<?=$image_id?>" title="<?=$name?>">
                            <p><?=$name?></p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins><?=$price?></a></ins>
                        </div>
                  </div>
                </div>
              </div>
              <?php   
                  $j = $j + 1;
                  }           
                }
              ?>
            
          </div>
        </div>
      </div>
      </div>
      
      <div class="tech_store_index_col_3 colection">
        <div class="block_title">
          <h2>PHỤ KIỆN</h2>
        </div>
        <ul>
          <li>
            <a href="#" title="" itemprop="10">Phụ kiện nam</a>
          </li>
          <li>
            <a href="#" title="" itemprop="11">Phụ kiện nữ</a>
          </li>
        </ul>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 index_col_products">
            <div class="row">
              
              <?php
                $k = 0;
                $dt -> select("SELECT * FROM product WHERE category_id = 10 or category_id = 11 ");
                while( $r = $dt->fetch() )
                {
                  $name = $r["name"];
                  $symbol = 'đ';
                  $symbol_thousand = '.';
                  $decimal_place = 0;
                  $price = number_format($r["price"], $decimal_place, '', $symbol_thousand).$symbol;
                  if( $r["price"] == "null" )
                  {
                    $price = "Liên hệ mua hàng";
                  }
                  $link = $r["image_link"];  
                  $image_id = $r["image_id"];
                  $sale = $r["sale"];
                  if( $k < 8)
                  {
              ?>

              <div class="product_single col-xs-6 col-md-3">
                <div class="product product_one clearfix ">
                  <div class="product-image">
                    <img src="<?=$link?>" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" itemprop="<?=$image_id?>" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                    <?php
                      if($sale != 0)
                      {
                    ?>
                        <div class="sale-flash">-<?=$sale?>%</div>
                    <?php
                      }
                    ?>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="" itemprop="<?=$image_id?>" title="<?=$name?>">
                            <p><?=$name?></p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins><?=$price?></a></ins>
                        </div>
                  </div>
                </div>
              </div>
              <?php   
                    $k = $k + 1;                  
                  }           
                }
              ?>

          </div>
        </div>

        <div class="hidden-xs hidden-sm col-md-3 index_col_banner_wrap left">
            <div class="interactive_banner">
              <div class="interactive_img">
                <img src="images/phu-kien.jpg" alt="">
              </div>
              <div class="interactive_overlay3">
                <div class="">
                  <div class="interactive_content3">
                    <h2>
                      PHỤ KIỆN THỜI TRANG
                    </h2>
                    <p class="">Hợp với thời trang cao cấp, tạo cho bạn thêm tự tin, tỏa sáng</p>
                    <div class="btn_see_all">
                     <a href="category.php?id=3&sortby=default" >Xem tất cả</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

      </div>
      </div>
    </div>
  
    <div class="container">
      <div class="brand_title">
        <h2>THƯƠNG HIỆU</h2>
      </div>
      <div class="brand_content">
        <div class="row">
          <img src="images/icon/popular_brand_img_2.png" alt="">
          <img src="images/icon/popular_brand_img_3.png" alt="">
          <img src="images/icon/popular_brand_img_4.png" alt="">
          <img src="images/icon/popular_brand_img_5.png" alt="">
          <img src="images/icon/popular_brand_img_6.png" alt="">
          <img src="images/icon/popular_brand_img_7.png" alt="">
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
  </body>
</html>