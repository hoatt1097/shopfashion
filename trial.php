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
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
  </head>
    <body>
    <!--Header ============================================= -->
      <header id="header" class="">
        <div class="header-wrap">
          <div class="container">
            <div id="logo">
               <h1>
                 <a href="shopfashion.php" title="">
                   <img src="images/icon/logo.png" alt="">
                 </a>
               </h1>
            </div>
            <div  class="navbar-default" role="navigation">
             <ul class="nav navbar-nav">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SẢN PHẨM <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1.1 </a>
                       </li>
                   </ul>
               </li>
               <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THỜI TRANG NỮ <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li><a href="#">Menu 1.1</a></li>
                       <li class="divider"></li>
                       <li><a href="#">Menu 1.1</a></li>
                       <li class="divider"></li>
                       <li>
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1.1 </a>
                       </li>
                   </ul>
               </li>
               <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THỜI TRANG NAM <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li><a href="#">Menu 1.1</a></li>
                       <li class="divider"></li>
                       <li><a href="#">Menu 1.1</a></li>
                       <li class="divider"></li>
                       <li>
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1.1 </a>
                       </li>
                   </ul>
               </li>
               <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ĐỒ THỂ THAO <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li><a href="#">Menu 1.1</a></li>
                       <li class="divider"></li>
                       <li><a href="#">Menu 1.1</a></li>
                       <li class="divider"></li>
                       <li>
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1.1 </a>
                       </li>
                   </ul>
               </li>
               <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ÁO KHOÁC <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li><a href="#">Menu 1.1</a></li>
                       <li class="divider"></li>
                       <li><a href="#">Menu 1.1</a></li>
                       <li class="divider"></li>
                       <li>
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1.1 </a>
                       </li>
                   </ul>
               </li>
               <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">TẠP CHÍ <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li><a href="#">Menu 1.1</a></li>
                       <li class="divider"></li>
                       <li><a href="#">Menu 1.1</a></li>
                       <li class="divider"></li>
                       <li>
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1.1 </a>
                       </li>
                   </ul>
               </li>
            </ul>
          </div>
    
            <div class="header_icon">
              <div class="header_reseach">
                <a href="#"><img src="images/icon/search.png" alt="" style="width: 22px"></a>
                <i class=""></i>
              </div>
              <div class="header_login">
                <a href="#"><img src="images/icon/user.png" alt="" style="width: 17px"></i></a>
              </div>
              <div class="top-cart-blog">
                <a href="#"><img src="images/icon/shop-cart-icon.png" alt="" style="width: 22px"></a>
              </div>
            </div>          
          </div>
        </div>          
      </header>

      <section id="slider" class="clearfix">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/slideshow_1.jpg" alt="">
          </div>
          <div class="item">
            <img src="images/slideshow_2.jpg" alt="">
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
      <div class="colection_group">
        <div class="block_title">
          <h2>VÁY ĐẦM</h2>
        </div>
        <div class="row">
          <div class="col-xs-12 index_col_products">
            <div class="row">

              <div class="product_single col-xs-6 col-md-3">
                <div class="product product_one clearfix ">
                  <div class="product-image">
                    <img src="images/xanh-1-0636086650350562651.jpg" alt="">
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
                    <img src="images/den-1-0636035755811073828.jpg" alt="">
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Đầm suông sọc dọc cổ tim dạo phố">
                           <p>Đầm suông sọc dọc cổ tim dạo phố</p>
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
                    <img src="images/den-1-0636076495781764590.jpg" alt="">
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Đầm công sở đuôi cá phối ren - Màu đen">
                            <p>Đầm công sở đuôi cá phối ren - Màu đen</p>
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
                    <img src="images/trang-1-0636244126898506067.jpg" alt="">
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Đầm ren sát nách GAVIYA màu trắng">
                            <p>Đầm ren sát nách GAVIYA màu trắng</p>
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
                    <img src="images/0636070378462650840.jpg" alt="">
                  </div>
                  <div class="product-desc">
                        <div class="product-title">
                          <h3 itemprop="name">
                            <a href="#" title="Đầm hoa công sở kaki thun Mary & Beauty">
                           <p>Đầm hoa công sở kaki thun Mary & Beauty</p>
                            </a>
                          </h3>
                        </div>
                        <div class="product-price">
                          <ins itemprop="Price">499.000đ</ins>
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
      <div class="subscribe_group">
        <div class="row">
          <div class="subscribe_group_left">
            <h5>
              <i class="fa fa-envelope-o"></i>
              <span class="nocolor"> ĐĂNG KÍ NHẬN TIN KHUYẾN MÃI </span>
            </h5>
            <form class="form_subscribe">
              <div class="input-group divcenter">
                <input type="email" value="" placeholder="Nhập email của bạn" class="form-control required email" style="height: 37px; width: 450px; padding: 4px 5px; border-right: 0; box-shadow: none;">
                <span class="input-group-btn">
                  <button type="" class="btn ">
                    <i class="fa fa-paper-plane-o"></i>
                  </button>
                </span>
              </div>
            </form>
          </div>
          <div class="subscribe_group_right">
            <a href="#" title="" class="si-facebook social-icon">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#" title="" class="si-gplus social-icon ">
              <i class="fa fa-google-plus"></i>
            </a>
            <a href="#" title="" class="si-twitter social-icon">
              <i class="fa fa-twitter"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer" class="dark">
      <div class="container">
        <div class="style1">
          <div class="row">
            <div class="prefoorerone">
              <a href="#" title="">
                <img src="images/icon/footer_logo.png" alt="">
              </a>
              <p>Mua hàng trực tuyến mang lại sự tiện lợi, lựa chọn đa dạng hơn và các dịch vụ tốt hơn cho người tiêu dùng. The Fashion được triển khai với mong muốn trở thành trung tâm mua sắm trực tuyến số 1 tại Việt Nam</p>
            </div>
            <div class="prefoorerone">
              <div class="">
                <h4>Liên hệ</h4>
                <p>Kênh mua sắm trực tuyến giá tốt hàng đầu Việt Nam. Nơi bạn yên tâm mua sắm hàng chính hãng, giá tốt nhất. Miễn phí giao hàng toàn quốc</p>
                <address>
                  <p>
                    <img alt="address" src="images/icon/Maps-icon.png">
                    <i class="fa "></i>
                    <span> B133, tổ 6, Khu phố 4, quận 9, TP HCM</span> 
                  </p>
                  <p>
                    <img alt="phone" src="images/icon/Phone-icon.png">
                    <a href="tel:01657790513">01657790513</a></p>
                  <p>
                    <img alt="email" src="images/icon/Places-mail-message-icon.png">
                    <a href="mailto:hoatt1097@gmail.com">hoatt1097@gmail.com</a></p>
                </address>
              </div>
            </div>
            <div class="prefoorerone">
              <div class="">
                <h4 class="">Giới thiệu</h4>
                <ul class="widget_content" style="display: block;">
                  <li><a href="/collections/all">Sản phẩm</a></li>
                  <li><a href="/vay-dam">Váy đầm</a></li>
                  <li><a href="/do-mac-nha">Đồ mặc nhà</a></li>
                  <li><a href="/do-the-thao-nu">Đồ thể thao</a></li>
                  <li><a href="/ao-khoac">Áo khoác</a></li>
                  <li><a href="/magazine">Tạp chí</a></li>
                  <li><a href="/dep">Blog</a></li>
                </ul>
              </div>
            </div>
            <div class="prefoorerone">
              <div class="widget widget_links clearfix">
                <h4 class="widget_trigger">Hướng dẫn</h4>
                <ul class="widget_content">
                  <li><a href="cau-hoi-thuong-gap.php">Câu hỏi thường gặp</a></li>
                  <li><a href="huong-dan-tinh-size.php">Hướng dẫn cách tính size</a></li>
                  <li><a href="chinh-sach-doi-tra.php">Chính sách đổi trả</a></li>
                  <li><a href="huong-dan-bao-quan.php">Hướng dẫn bảo quản</a></li>
                  <li><a href="huong-dan-thanh-toan.php">Hướng dẫn thanh toán</a></li>
                  <li><a href="huong-dan-bao-quan.php">Hướng dẫn mua hàng</a></li>
                  <li><a href="chinh-sach-giao-hang.php">Chính sách giao hàng</a></li>
                </ul>
              </div>
            </div>
            <div class="prefoorerone">
              <div class="">       
                <h4>Chứng nhận</h4>
                <img src="images/payment_img.png" alt="">
                <a href="#" title="">
                  <img src="images/register_img.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          <p>Bản quyền thuộc về Trần Thiện Hòa</p>
        </div>
      </div>
    </footer>
    <!--Header ============================================= -->
    <!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>