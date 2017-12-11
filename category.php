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
    
    <title>Menu</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="category.css">
    <link rel="stylesheet" type="text/css" href="shopfashion.css">
  </head>
  <body>
  <?php  
      include 'header.php';
  ?>
    <div class="container">
      <div class="collection_banner">
        <img src="//bizweb.dktcdn.net/100/160/934/themes/599978/assets/col_all_banner.jpg?1512385957126" alt="Tất cả sản phẩm">
      </div>
      <div class="tech_store_index_col_1 colection">
        <div class="row">
          <div class="col-xs-9 index_col_products">
            <div class="row">
              <div class="row info">
                <p class="col-xs-7" id="amount_product"></p>
                <div class="text-right col-xs-4">
                  <p>Sắp xếp theo: </p>
                  <select class="form-control sort" onchange="sortby(this)">
                    <option value="default">Mặc định</option>
                    <option value="price-asc">Giá tăng dần</option>
                    <option value="price-desc">Giá giảm dần</option>
                    <option value="alpha-asc">Từ A-Z</option>
                    <option value="alpha-desc">Từ Z-A</option>
                    <option value="created-desc">Mới đến cũ</option>
                    <option value="created-asc">Cũ đến mới</option>
                  </select>
                </div>
                <button class="col-xs-1 btnsort">Xem</button>
              </div>

              <?php
                $menu_id = $_GET['id'];
                switch ($menu_id)
                {

                   case 1:
                   $dt -> select("SELECT * FROM product WHERE category_id = 4 or category_id = 5 or category_id = 6");
                   break;

                   case 2:
                  $dt -> select("SELECT * FROM product WHERE category_id = 7 or category_id = 8 or category_id = 9");
                   break;

                   case 3:
                   $dt -> select("SELECT * FROM product WHERE category_id = 11 or category_id = 10");
                   break;

                   case 'Sản phẩm khuyến mãi':
                   $dt -> select("SELECT * FROM product WHERE sale > 0");
                   break;

                   case 'all':
                   $dt -> select("SELECT * FROM product");
                   break;

                  default:
                   $dt -> select("SELECT * FROM product WHERE category_id = $menu_id");
                   break;
                }
                  while( $r = $dt->fetch() )
                  {
                    $name = $r["name"];
                    $price = $r["price"];
                    if( $r["price"] == "null" )
                    {
                      $price = "Liên hệ mua hàng";
                    }
                    $link = $r["image_link"];  
                    $sale = $r["sale"];
                    $image_id = $r["image_id"];
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
                  }
              ?>
            </div>
          </div>
          <div id="collection_sidebar" class="nobottommargin sidebar right col-md-3 col-xs-12">
          <!-- BEGIN: panel -->
            <div class="panel-group filter_group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <a data-toggle="collapse" href=""><h4 class="panel-title">
                    LỌC SẢN PHẨM<i class="fa fa-angle-down"></i>
                    </h4></a>
                </div>
                <div id="filter_group" class="panel-collapse collapse in">
                  <!-- BEGIN: Vendor filter -->
                  <div class="group1 widget_links clearfix product-filter-group product-filter--by-THƯƠNG HIỆU">
                    <a href="" data-toggle="collapse"><h4 class="group_1">THƯƠNG HIỆU<i class="fa-angle-down fa"></i></h4></a>
                    <ul id="filter_group_1" class="panel-collapse collapse in filter_list">
                      
                          <?php
                            $dt -> select("SELECT DISTINCT brand FROM product ");
                            while( $r = $dt->fetch() )
                            {
                              $brand = $r["brand"];
                          ?>
                              <li class="product-filter-item product-filter-item--check-box ">
                                <a href="javascript:void(0)">
                                  <label>
                                    <input type="checkbox">
                                    <?=$brand?> 
                                  </label>
                                </a>
                              </li> 
                          <?php
                            }
                          ?>
                                    
                    </ul>
                  </div>
                  <!-- END: Vendor filter -->

                  <!-- BEGIN: Type filter -->
                  <div class="widget_links clearfix product-filter-group product-filter--by-LOẠI SẢN PHẨM">
                    <a href="" data-toggle="collapse"><h4 class="group_2">LOẠI SẢN PHẨM<i class="fa-angle-down fa"></i></h4></a>
                    <ul id="filter_group_2" class="panel-collapse collapse in filter_list">
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="checkbox">
                            Đồ thể thao nữ 
                          </label>
                        </a>
                      </li>              
                    </ul>
                  </div>
                  <!-- END: Type filter -->
                
                  <!-- BEGIN: Price filter -->
                  
                  <div class="widget_links clearfix product-filter-group product-filter--by-price">
                    <a href="" data-toggle="collapse"><h4 class="group_3">KHOẢNG GIÁ<i class="fa-angle-down fa"></i></h4></a>
                    <ul id="filter_group_3" class="panel-collapse collapse in filter_list"> 
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="checkbox">
                            Dưới 100.000₫
                          </label>
                        </a>
                      </li>
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="checkbox">
                             100.000₫ - 300.000₫
                          </label>
                        </a>
                      </li>
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="checkbox">
                             300.000₫ - 500.000₫
                          </label>
                        </a>
                      </li>
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="checkbox">
                            500.000₫ - 1000.000₫
                          </label>
                        </a>
                      </li>
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="checkbox">
                             Trên 1.000.000₫ 
                          </label>
                        </a>
                      </li>         
                    </ul>
                  </div>
                  
                  <!-- END: Price filter -->

                  <!-- BEGIN: Tag_Custom_2 filter -->
                  <div class="widget_links clearfix  product-filter-group product-filter--by-chatlieu">
                    <a href="" data-toggle="collapse"><h4 class="group_4">CHẤT LIỆU<i class="fa-angle-down fa"></i></h4></a>
                    <ul id="filter_group_4" class="panel-collapse collapse in filter_list"> 
                      <li class="product-filter-item product-filter-item--check-box"><a href=""><label><input type="checkbox" class="chatlieu"> Thun </label></a></li>     
                    </ul>
                  </div>
                  
                  <!-- END: Tag_Custom_2 filter -->
                </div>
              </div>
            </div>
          <!-- END: panel -->
          <!-- BEGIN: Sidebar -->
            <div class="sidebar-widgets-wrap">
              <div class="">
                    <!-- sidebar collection 1 -->
    
                <div class="widget clearfix">
                  
                  <div class="widget_title">
                    <h4><a href="/vay-dam">SẢN PHẨM MỚI</a></h4>
                  </div>
                  <div class="widget_content">
                    
                    <div class="spost clearfix">
                      <div class="entry-image">
                        <a href="/dam-lenin-4-tui-thuong-hieu-khanh-linh"><img src="//bizweb.dktcdn.net/thumb/small/100/160/934/products/xanh-1-0636086650350562651.jpg?v=1491039262493" alt="Đầm lenin 4 túi thương hiệu Khánh Linh"></a>
                      </div>
                      <div class="entry-c">
                        <div class="entry-title">
                          <h4><a href="/dam-lenin-4-tui-thuong-hieu-khanh-linh">Đầm lenin 4 túi thương hiệu Khánh Linh</a></h4>
                        </div>
                        <ul class="entry-meta">
                          <li class="color">
                             <ins>380.000₫ </ins>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                    <div class="spost clearfix">
                      <div class="entry-image">
                        <a href="/dam-suong-tay-lo-hoa-tiet-tam-giac-xanh-la"><img src="//bizweb.dktcdn.net/thumb/small/100/160/934/products/trang-1-0636054082543242809.jpg?v=1491021115430" alt="Đầm Đuôi Cá Form Suông Màu Trắng TP61"></a>
                      </div>
                      <div class="entry-c">
                        <div class="entry-title">
                          <h4><a href="/dam-suong-tay-lo-hoa-tiet-tam-giac-xanh-la">Đầm Đuôi Cá Form Suông Màu Trắng TP61</a></h4>
                        </div>
                        <ul class="entry-meta">
                          <li class="color">
                            <ins>159.000₫ </ins>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                    <div class="spost clearfix">
                      <div class="entry-image">
                        <a href="/dam-day-han-quoc-hoa-tim-dinh-nut"><img src="//bizweb.dktcdn.net/thumb/small/100/160/934/products/tim-1-0636010025286033752.jpg?v=1491020711473" alt="Đầm dây Hàn Quốc hoa tím đính nút"></a>
                      </div>
                      <div class="entry-c">
                        <div class="entry-title">
                          <h4><a href="/dam-day-han-quoc-hoa-tim-dinh-nut">Đầm dây Hàn Quốc hoa tím đính nút</a></h4>
                        </div>
                        <ul class="entry-meta">
                          <li class="color">
                            <ins>135.000₫ </ins>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                </div>

                    <!-- end recent product -->
                 <!-- most popular -->
    
                <div class="widget clearfix">
                  
                  <div class="widget_title">
                    <h4><a href="/do-mac-nha">SẢN PHẨM NỔI BẬT</a></h4>
                  </div>
                  <div class="widget_content">
                    
                    <div class="spost clearfix">
                      <div class="entry-image">
                        <a href="/do-bo-mac-nha-cham-bi"><img src="//bizweb.dktcdn.net/thumb/small/100/160/934/products/hong-1-0636160126097674967.jpg?v=1491038895137" alt="Đồ bộ mặc nhà chấm bi"></a>
                      </div>
                      <div class="entry-c">
                        <div class="entry-title">
                          <h4><a href="/do-bo-mac-nha-cham-bi">Đồ bộ mặc nhà chấm bi</a></h4>
                        </div>
                        <ul class="entry-meta">
                          <li class="color">
                            <ins>320.000₫ </ins>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                    <div class="spost clearfix">
                      <div class="entry-image">
                        <a href="/bo-mac-nha-nutica-lai-cach-dieu-qn-tn-mau-do"><img src="//bizweb.dktcdn.net/thumb/small/100/160/934/products/do-1-0636207801668764682.jpg?v=1491038668820" alt="Bộ mặc nhà Nutica lai cách điệu QN-TN màu đô"></a>
                      </div>
                      <div class="entry-c">
                        <div class="entry-title">
                          <h4><a href="/bo-mac-nha-nutica-lai-cach-dieu-qn-tn-mau-do">Bộ mặc nhà Nutica lai cách điệu QN-TN màu đô</a></h4>
                        </div>
                        <ul class="entry-meta">
                          <li class="color">
                            <ins>320.000₫ </ins>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                    <div class="spost clearfix">
                      <div class="entry-image">
                        <a href="/set-do-thun-quan-lung-paris-xanh-reu-034-09"><img src="//bizweb.dktcdn.net/thumb/small/100/160/934/products/xanh-1-0636044503903011567.jpg?v=1491036342063" alt="Set đồ thun quần lửng Paris xanh rêu 034-09"></a>
                      </div>
                      <div class="entry-c">
                        <div class="entry-title">
                          <h4><a href="/set-do-thun-quan-lung-paris-xanh-reu-034-09">Set đồ thun quần lửng Paris xanh rêu 034-09</a></h4>
                        </div>
                        <ul class="entry-meta">
                          <li class="color">
                            <ins>320.000₫ </ins>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                </div>

                    <!-- end most popular -->
              </div>
            </div>
          <!-- END: Sidebar -->
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
    <script src="js/category.js"></script>
    <script src="js/shopfashion.js"></script>
  </body>
</html>
