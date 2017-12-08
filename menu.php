
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
    <link rel="stylesheet" type="text/css" href="menu.css">
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
                <p class="col-xs-8" id="amount_product"></p>
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
              </div>
              <div class="product_single col-xs-6 col-md-3">
                <div class="product product_one clearfix ">
                  <div class="product-image">
                    <img src="images/xanh-1-0636086650350562651.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                    <div class="sale-flash">- 66%</div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Đầm lenin 4 túi thương hiệu Khánh Linh - Màu xanh">
                            <p>Đầm lenin 4 túi thương hiệu Khánh Linh - Màu xanh</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins><a href="/lien-he" pd_sold_out="/dam-lenin-4-tui-thuong-hieu-khanh-linh-mau-xanh" class="pd_no_price contact_for_pd">Liên hệ mua hàng</a></ins>
                        </div>
                  </div>
                </div>
              </div>

              <div class="product_single col-xs-6 col-md-3">
                <div class="product ">
                  <div class="product-image">
                    <img src="images/trang-1-0636054082543242809.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Đầm Đuôi Cá Form Suông Màu Trắng TP61">
                            <p>Đầm Đuôi Cá Form Suông Màu Trắng TP61</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">315.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>

              <div class="product_single col-xs-6 col-md-3">
                <div class="product">
                  <div class="product-image">
                    <img src="images/tim-1-0636010025286033752.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Đầm dây Hàn Quốc hoa tím đính nút">
                            <p>Đầm dây Hàn Quốc hoa tím đính nút</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">199.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>

              <div class="product_single col-xs-6 col-md-3">
                <div class="product">
                  <div class="product-image">
                    <img src="images/den-1-0636008271386029189.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Đầm công sở xòe nhấn eo sát nách">
                            <p>Đầm công sở xòe nhấn eo sát nách</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">299.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>

              <div class="product_single col-xs-6 col-md-3">
                <div class="product">
                  <div class="product-image">
                    <img src="images/do-1-0636207801668764682.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Bộ mặc nhà Nutica lai cách điệu QN-TN màu đô">
                           <p>Bộ mặc nhà Nutica lai cách điệu QN-TN màu đô</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">199.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>

              <div class="product_single col-xs-6 col-md-3">
                <div class="product">
                  <div class="product-image">
                    <img src="images/xanhsoc-1-0635935674125854622.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Đồ mặc nhà Jumsuit cổ V sọc xanh Twins">
                            <p>Đồ mặc nhà Jumsuit cổ V sọc xanh Twins</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">350.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>

              <div class="product_single col-xs-6 col-md-3">
                <div class="product product_one clearfix">
                  <div class="product-image">
                    <img src="images/hong-1-cm.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Đồ mặc nhà áo tay con, quần short - Sọc hồng KIR24116/12147">
                            <p>Đồ mặc nhà áo tay con, quần short - Sọc hồng KIR24116/12147</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">129.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>

              <div class="product_single col-xs-6 col-md-3">
                <div class="product">
                  <div class="product-image">
                    <img src="images/xanh-1-0636011521638009955.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Jumsuit cổ V sọc xanh Twins">
                           <p>Jumsuit cổ V sọc xanh Twins</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">99.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>
              <div class="product_single col-xs-6 col-md-3">
                <div class="product">
                  <div class="product-image">
                    <img src="images/xanh-1-0636030480335378891.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Áo khoác kiểu bóng chày in hình cô gái màu xanh">
                           <p>Áo khoác kiểu bóng chày in hình cô gái màu xanh</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">150.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>
              <div class="product_single col-xs-6 col-md-3">
                <div class="product">
                  <div class="product-image">
                    <img src="images/do-1-0636046279689386571.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Áo khoác nỉ in chữ ADIDAS màu đỏ">
                           <p>Áo khoác nỉ in chữ ADIDAS màu đỏ</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">300.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>
              <div class="product_single col-xs-6 col-md-3">
                <div class="product">
                  <div class="product-image">
                    <img src="images/xanh-2-0636028970049926215.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Áo khoác thun cotton chấm bi màu xanh">
                           <p>Áo khoác thun cotton chấm bi màu xanh</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">250.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>
              <div class="product_single col-xs-6 col-md-3">
                <div class="product">
                  <div class="product-image">
                    <img src="images/trang-1-0636046279710446608.jpg" alt="">
                    <div class="quick_action clearfix">
                      <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                      <a href="" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                    </div>
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Áo khoác kaki 2 lớp in hình cô gái màu trắng">
                           <p>Áo khoác kaki 2 lớp in hình cô gái màu trắng</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">150.000đ</ins>
                        </div>
                  </div>
                </div>
              </div>

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
                      <li class="product-filter-item product-filter-item--check-box ">
                        <a href="javascript:void(0)">
                          <label>
                            <input type="checkbox">
                            Spandex 
                          </label>
                        </a>
                      </li>             
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
                            500.000₫ - 1.000.000₫
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
    <script src="js/menu.js"></script>
  </body>
</html>
