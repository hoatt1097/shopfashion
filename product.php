<?php 
  include 'database.php';
  $dt = new Database;
  $dt2 = new Database;
  $dt3 = new Database;
  $dt4 = new Database;
  $image_id = $_GET['id'];
  $dt -> select("SELECT image_link FROM image WHERE id = $image_id ");
  while( $r = $dt->fetch() )
  {
    $image_link = $r["image_link"];
    $image_link = explode(",", $image_link);
  }
  $dt -> select("SELECT * FROM product WHERE id = $image_id ");
  while( $r = $dt->fetch() )
  {
    $id = $r["id"];
    $name = $r["name"];
    $price_=$r["price"];
    $symbol = 'đ';
    $symbol_thousand = '.';
    $decimal_place = 0;
    $price = number_format($r["price"], $decimal_place, '', $symbol_thousand).$symbol;

    if($r["price"] == "0")
    {
      $price = "Liên hệ mua hàng";
    }
    $brand = $r["brand"];

    $color = $r["color"];
    $color = explode(",", $color);
    $status = $r["status"];
  }
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
    <link rel="stylesheet" type="text/css" href="css/css/product.css">
    <link rel="stylesheet" type="text/css" href="css/css/comment.css">
  </head>
  <body>
  <?php  
    include 'header.php';
  ?>
  
    <div class="container clearfix">
      <div class="row">
        <div class="col-md-5 col-xs-12">
          <div class="product-image product-main-image">
            <div class="slider-wrap">
              <div class="pd_slide nopadding">
                <div class="slide">
                  <img itemprop="photos" src="<?=$image_link[0]?>" alt="">
                </div>
              </div> 
              <div class="pd_slide_thumb owl-carousel owl-theme ega-product-img-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                  <div class="owl-stage">

                    <?php
                      for($i=0;  $i < count($image_link); $i = $i + 1)
                      { 
                    ?>
                    <div class="owl-item active" style="width: 82.4px;">
                      <div class="slide">
                        <div class="img">
                          <img class="ega-product-img" alt="" index="0" src="<?=$image_link[$i]?>">
                        </div>
                      </div>
                    </div>
                    <?php
                      }
                    ?>
                  </div>
                </div>
                <div class="owl-dots disabled"></div>
              </div>
            </div> <!---->
          </div>
        </div>

        <div class="col-md-4 col-xs-6 pd_desc_wrapper">
          <div class="product-desc">
            <div class="page_title">
              <h1 itemprop="name">
                <?=$name?>
              </h1>
              <span class="id_product">Mã SP: <?=$id?></span> 
              <span class="product_vendor">
                Thương hiệu:
                <a href="" title="<?=$brand?>"><?=$brand?></a>
              </span>
            </div>
            <div class="pd_sale_wrapper clearfix">
              <div class="product-price">
                <ins itemprop="<?=$price_?>"><?=$price?></ins> <!----> <!---->
              </div> 
              <div class="clear"></div> 
              <div class="line"></div> 
                <div class="row">
                  <div class="col-xs-12 options_picker color" style="position: relative;">
                    <h6 class="options_header">Màu sắc</h6>
                    <ul>
                      <?php
                        for($i=0;  $i < count($color); $i = $i + 1)
                        { 
                          if($i == 0)
                          {
                      ?>
                            <li class="selected">
                              <span><?=$color[$i]?></span>
                            </li>
                      <?php
                          }
                          else
                          {
                      ?>
                            <li class="">
                              <span><?=$color[$i]?></span>
                            </li>
                      <?php
                        }
                      }
                      ?>
                    </ul>
                  </div>
                  <div class="col-xs-12 options_picker size" style="position: relative;">
                    <h6 class="options_header">Kích thước</h6> 
                    <ul>
                      <li class="selected">
                        <span>s</span>
                      </li>
                      <li class="">
                        <span>m</span>
                      </li>
                      <li class="">
                        <span>l</span>
                      </li>
                      <li class="">
                        <span>xl</span>
                      </li>
                    </ul>
                  </div>
                </div> 
                <div class="quantity_title">
                  <label class="nomargin">Số lượng: </label>
                </div> 
                <div class="quantity clearfix product-quantity">
                  <input type="button" value="-" class="minus"> 
                  <input type="text" id="product_quantity" min="1" name="quantity" value="1" title="Qty" size="4" class="qty"> 
                  <input type="button" value="+" class="plus">
                </div> 
                <div class="clear"></div> 
                <?php
                  if($status != 0)
                  {
                ?>
                    <button type="" data-role="addtocart" class="col-xs-12 button buynow">
                        MUA NGAY
                        <span style="font-size: 12px;">Giao tận nơi hoặc nhận ở cửa hàng</span>
                    </button>
                <?php
                  }
                  else
                  {
                ?>
                    <button type="" class="col-xs-12 btn_noproduct button">
                        CHÁY HÀNG
                        <span style="font-size: 12px;">Liên hệ sau</span>
                    </button>
                <?php    
                  }
                ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-6 pd_policies_wrapper">
          <div class="pd_policies style_2">
            <div class="pd_policies_title">
              <h5>
                CHÍNH SÁCH BÁN HÀNG
              </h5> 
              <span>Áp dụng cho từng ngành hàng</span>
            </div> 
            <ul class="unstyled">

                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="" class="clearfix">
                  <a href="chinh-sach-giao-hang.php">
                    <img src="//bizweb.dktcdn.net/100/160/934/themes/599978/assets/pd_policies_1.png?1512385957126" alt="pd_policies_title_1"> 
                    <div class="policies_tit"> MIỄN PHÍ VẬN CHUYỂN</div> 
                    <div class="policies_descrip"> Quý khách sẽ chọn trong 3 mốc giao hàng: Trước 11 giờ, trước 16 giờ và trước 20 giờ mỗi ngày</div>
                  </a>
                </li> 

                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Đổi trả miễn phí trong 7 ngày" class="clearfix">
                  <a href="chinh-sach-doi-tra.php">
                    <img src="//bizweb.dktcdn.net/100/160/934/themes/599978/assets/pd_policies_2.png?1512385957126" alt="pd_policies_title_2"> 
                    <div class="policies_tit"> ĐỔI TRẢ MIỄN PHÍ</div> 
                    <div class="policies_descrip"> Đổi trả miễn phí tận nhà hoặc tại hệ thống cửa hàng của chúng tôi. Trong trường hợp không có hàng thì hoàn tiền 100%</div>
                  </a>
                </li> 

                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="" class="clearfix">
                  <a href="huong-dan-thanh-toan.php">
                    <img src="//bizweb.dktcdn.net/100/160/934/themes/599978/assets/pd_policies_3.png?1512385957126" alt="pd_policies_title_3"> 
                    <div class="policies_tit"> THANH TOÁN</div> 
                    <div class="policies_descrip"> Thanh toán tại hệ thống cửa hàng, thanh toán khi nhận hàng hoặc Thanh toán bằng thẻ ATM, Visa, MasterCard</div>
                  </a>
                </li>

                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="" class="clearfix">
                  <a href="tel:19001267">
                    <img src="//bizweb.dktcdn.net/100/160/934/themes/599978/assets/pd_policies_4.png?1512385957126" alt="pd_policies_title_4"> 
                    <div class="policies_tit"> HỖ TRỢ MUA NHANH</div> 
                    <div class="policies_descrip"><strong style="color: rgb(0, 197, 187); font-size: 18px;">0165 779 0513</strong><br>
                         từ 8:30 - 22:30 mỗi ngày. Cước phí 1000đ/phút</div>
                  </a>
                </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col_md_80">
           <div class="pd_description tab_product">
            <h3 class="hidden-lg hidden-md tab_mb">
              <a>CHI TIẾT SẢN PHẨM</a> <i class="fa-caret-down fa"></i>
            </h3>
            <ul class="nav nav-tabs clearfix nav-style" role="tablist">
              <li class="active" role="presentation">
                <a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">CHI TIẾT SẢN PHẨM</a>
              </li>
              <li class="" role="tablist">
                <a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">HƯỚNG DẪN BẢO QUẢN</a>
              </li>
              <li class="" role="tablist">
                <a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">BÌNH LUẬN / ĐÁNH GIÁ</a>
              </li>
              <li class="" role="tablist">
                <a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">CHÍNH SÁCH ĐỔI TRẢ</a>
              </li>
            </ul>

            <div class="tab-content">
              
              <div role="tabpanel" class="tab-pane active" id="tab-1">
                <div id="egany-content-edit" data-id="6262142">
                  <p><strong>Điểm nổi bật</strong></p>

                  <ul>
                    <li>Thiết kế trẻ trung, màu sắc tươi mới mang đến bạn gái diện mạo gọn gàng và năng động ngay cả khi ở nhà.</li>
                    <li>Kiểu dáng đơn giản, form lửng thoải mái, tạo cho bạn sự khỏe khoắn, trẻ trung.</li>
                    <li>Họa tiết tinh tế và đẹp mắt đem lại sự đáng yêu, duyên dáng.</li>
                    <li>Chất liệu: cotton thoáng mát, bạn dễ dàng làm việc nhà hay hoạt động một cách tự nhiên, thoải mái.</li>
                    <li>Xuất xứ: Việt Nam.</li>
                  </ul>

                  <p><strong>Kích thước (cm):</strong></p>

                  <ul>
                    <li>Size M: Dài 93; Vai 35; Ngực 80; Eo nhún 50</li>
                    <li>Size L: Dài 94; Vai 36; Ngực 82; Eo nhún 52</li>
                    <li>Size XL: Dài 95; Vai 37; Ngực 84; Eo nhún 54</li>
                  </ul>

                  <p><strong>Lưu ý khi mua</strong></p>

                  <ul>
                    <li>Chúng tôi giao sản phẩm trực tiếp đến khách hàng.</li>
                    <li>Được đổi trả trong vòng 07 ngày.</li>
                  </ul>

                  <p>BST Thời trang sành điệu VNXK cao cấp được thiết kế thời trang, duyên dáng với những chân váy sành điệu, trẻ trung, những chiếc áo kiểu nền nã, hiện đại thực sự là lựa chọn hoàn hảo cho các cô nàng thanh lịch. Được may từ chất liệu vải mềm mịn, thoáng mát, các sản phẩm được tạo nên form dáng chuẩn và đem tới gu thẩm mỹ riêng cho bạn gái mỗi khi diện. Nhanh tay để chọn ngay cho mình bộ trang phục ưng ý nhất nào các nàng!</p>
                </div>
              </div>
              
              <div role="tabpanel" class="tab-pane" id="tab-2">
                
                <p>EGA Underwear sẽ thực hiện việc đổi/trả hàng và hoàn tiền cho khách hàng trong những trường hợp sau.</p>

                <p><strong>Sản phẩm EGA Underwear giao không đúng đơn đặt hàng</strong><br>
                Bạn nghĩ rằng sản phẩm giao cho bạn không đúng với đơn đặt hàng? Hãy liên hệ với chúng tôi càng sớm càng tốt, hệ thống của chúng tôi sẽ kiểm tra nếu hàng của bạn bị gửi nhầm. Trong trường hợp đó, chúng tôi sẽ thay thế đúng mặt hàng bạn yêu cầu (khi có hàng).</p>

                <p><strong>Sản phẩm mua rồi nhưng không ưng ý</strong><br>
                Người mua có thể trả hàng khi không vừa ý trong vòng 7 ngày kể từ ngày nhận hàng, EGA Underwear.vn sẽ đổi sản phẩm cho khách. Sản phẩm muốn đổi hoặc trả yêu cầu phải là sản phẩm không có dấu hiệu đã qua sử dụng và còn nguyên tem, mác, nguyên đai kiện ban đầu</p>

                <p><strong>Sản phẩm mua bị lỗi</strong><br>
                Quý khách vui lòng kiểm tra sản phẩm trước khi thanh toán. Trong trường hợp sản phẩm bị hư hại trong quá trình vận chuyển, quý khách vui lòng từ chối và gửi lại sản phẩm cho EGA Underwear.vn. Đồng thời thông báo cho Trung tâm hỗ trợ khách hàng 0123456789, EGA Underwear.vn sẽ gửi cho quý khách mặt hàng thay thế.</p>

                <p><strong>Điều kiện đổi trả hàng</strong></p>

                <p>Điều kiện về thời gian đổi trả: trong vòng 7 ngày kể từ khi nhận được hàng.</p>

                <p>Điều kiện về sản phẩm:</p>

                <p>- Hàng hóa còn đầy đủ các bộ phận, không có dấu hiệu sử dụng quá nhiều hoặc hỏng hóc.</p>

                <p>- Có đầy đủ các giấy tờ kèm theo (hóa đơn mua hàng, catalogue...) và các linh kiện, tặng phẩm kèm theo (nếu có).</p>

                <p>- Khách hàng chịu chi phí vận chuyển cho việc đổi, trả hàng.</p>

                <p>- Trường hợp không đủ các điều kiện trên thì quyền quyết định đổi, trả hàng thuộc về EGA Underwear.vn</p>
              </div>
              
              <div role="tabpanel" class="tab-pane" id="tab-3">       
                 <form method='POST' action="cmt-submit.php?id=<?php echo $id; ?>">
                  <textarea cols='60' rows='2' name='txtcomment' class='txtcomment' placeholder='Vui lòng nhập bình luận ở đây...' style='padding-left: 10px;'></textarea><br>
                  <button type='submit' name='cmt-submit'>Bình luận</button>
                  </form>
                  <?php
                  $dt->select("select * from comment where idproduct = '$id'");
                  while ($r=$dt->fetch()){
                    $idcmt = $r['idcmt'];
                      $iduser = $r['iduser'];
                    $date = $r['datecmt'];
                    $comment = $r['comment'];
                            $dt2 -> select("select * from user where iduser = $iduser");
                    if($r = $dt2->fetch()){
                      $firstname = $r['firstname'];
                      $lastname = $r['lastname'];
                    }
                    ?>
                  <div class='row'>
                    <div id="comment">
                    <img src="<?php echo 'images/avatar.png'  ?>" width="50" height="50" style="float:left; margin-left: 20px; margin-top: 15px;"/>
                    <div id='inCmt'>
                    <?php
                      echo "<br><b>$firstname $lastname</b>";
                      echo "<br>$comment";
                      echo "<br><small>$date</small>";
                      ?>
                      </div>
                      <form method='POST' action="rep-submit.php?id=<?php echo $id; ?>&idcmt=<?php echo $idcmt; ?>">
                        <textarea cols='53' rows='1' name='txtreply' class='txtreply' placeholder='Vui lòng nhập phản hồi ở đây...' style='margin-left: 70px; padding-left: 10px;'></textarea><br>
                        <button type='submit' name='rep-submit' style="margin-left: 70px;">Trả lời</button>
                        </form>
                      <?php
                      $dt3->select("select * from reply where idcmt = '$idcmt'");
                      while ($r=$dt3->fetch()){
                        $idrep = $r['idrep'];
                          $iduser2 = $r['iduser'];
                        $date2 = $r['daterep'];
                        $reply = $r['reply'];
                                $dt4 -> select("select * from user where iduser = $iduser2");
                        if($r = $dt4->fetch()){
                          $firstname2 = $r['firstname'];
                          $lastname2 = $r['lastname'];
                        }
                      ?>
                        <div class='row' style="margin-left: 45px;">
                        <small><div id="reply">
                          <img src="<?php echo 'images/avatar.png'  ?>" width="50" height="50" style="float:left; margin-left: 20px; margin-top: 10px;"/>
                          <div id='inRep'>
                            <?php
                            echo "<br><b>$firstname2 $lastname2</b>";
                            echo "<br>$reply";
                            echo "<br><small>$date2</small>";
                            ?>
                          </div>
                      </div></small>
                        </div>
                  <?php
                  }
                  ?>
                </div>
                  </div>
                  <?php
                  }
                  ?>
                

              </div>
              
              
              <div role="tabpanel" class="tab-pane" id="tab-4">
                
                <p>EGA Underwear sẽ thực hiện việc đổi/trả hàng và hoàn tiền cho khách hàng trong những trường hợp sau.</p>

                <p><strong>Sản phẩm EGA Underwear giao không đúng đơn đặt hàng</strong><br>
                Bạn nghĩ rằng sản phẩm giao cho bạn không đúng với đơn đặt hàng? Hãy liên hệ với chúng tôi càng sớm càng tốt, hệ thống của chúng tôi sẽ kiểm tra nếu hàng của bạn bị gửi nhầm. Trong trường hợp đó, chúng tôi sẽ thay thế đúng mặt hàng bạn yêu cầu (khi có hàng).</p>

                <p><strong>Sản phẩm mua rồi nhưng không ưng ý</strong><br>
                Người mua có thể trả hàng khi không vừa ý trong vòng 7 ngày kể từ ngày nhận hàng, EGA Underwear.vn sẽ đổi sản phẩm cho khách. Sản phẩm muốn đổi hoặc trả yêu cầu phải là sản phẩm không có dấu hiệu đã qua sử dụng và còn nguyên tem, mác, nguyên đai kiện ban đầu</p>

                <p><strong>Sản phẩm mua bị lỗi</strong><br>
                Quý khách vui lòng kiểm tra sản phẩm trước khi thanh toán. Trong trường hợp sản phẩm bị hư hại trong quá trình vận chuyển, quý khách vui lòng từ chối và gửi lại sản phẩm cho EGA Underwear.vn. Đồng thời thông báo cho Trung tâm hỗ trợ khách hàng 0123456789, EGA Underwear.vn sẽ gửi cho quý khách mặt hàng thay thế.</p>

                <p><strong>Điều kiện đổi trả hàng</strong></p>

                <p>Điều kiện về thời gian đổi trả: trong vòng 7 ngày kể từ khi nhận được hàng.</p>

                <p>Điều kiện về sản phẩm:</p>

                <p>- Hàng hóa còn đầy đủ các bộ phận, không có dấu hiệu sử dụng quá nhiều hoặc hỏng hóc.</p>

                <p>- Có đầy đủ các giấy tờ kèm theo (hóa đơn mua hàng, catalogue...) và các linh kiện, tặng phẩm kèm theo (nếu có).</p>

                <p>- Khách hàng chịu chi phí vận chuyển cho việc đổi, trả hàng.</p>

                <p>- Trường hợp không đủ các điều kiện trên thì quyền quyết định đổi, trả hàng thuộc về EGA Underwear.vn</p>
              </div>
                    
            </div>
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
    <script src="js/product.js"></script>
  </body>
</html>
