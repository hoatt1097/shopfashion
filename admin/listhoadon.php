<?php 
  include 'database.php';
  $dt = new Database;
  $dx = new Database;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.2.1.min.js
">
    <title>List product</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin_users.css">
    <link rel="stylesheet" type="text/css" href="common.css">

    <style type="text/css" media="screen">
      .vertical-menu {
          width: 100%;
          height: 600px;
          overflow-y: auto;
      }
      th {
        text-align: center;
      }
      td img {
        max-width: 54px;
        height: auto;
      }
      th:nth-child(2), td:nth-child(2) {
        width: 20%;
      }
      th:nth-child(3), td:nth-child(3) {
        width: 5%;
      }

      td img:hover {
        max-width: 100px;
        height: auto;
      }
      .showdialog:hover {
        cursor: pointer;  
      }
      .mydialog {
        width: 90%; 
        height: 600px;
        border: 1px dotted black;  
        overflow-y: auto;
      }
      .dialog_image img{
        width: 90%;
        height: auto;
      }
      .title {
        padding-top: 15px;
        font-size: 16px;
      }
       .span1{
        font-weight: 600;
        margin-right: 5px;  
      }
      .red {
        color: red;
      }


      /*dialog*/
      .info_shop p{
        margin: 0px;
      }
      .col-md-1 {

      }
      .cthd-row {
        border: solid 1px grey;
      }
      .a {
        border-right: solid 1px grey;
        height: 40px;
        text-align: center;
      }
      .cthd {
        padding: 0 10px;
      }
    </style>
  </head>
  <body>
      <header class="container-fluid">
        <div class="row">
            <h2>Quản lý admin</h2>
              <div class="row login_logout" >
                <a class="login" title="Account" href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>&nbsp;
                   admin
                </a>
                <a class="logout" title="Logout" href="#">
                  <i class="fa fa-sign-out"></i>
                </a>
              </div>  
          </div>
      </header>
      <div class="container-fluid">
        <div class="row">
          <div class="menu col-xs-3 col-sm-3 col-lg-3">
             <div class="list-group">
              <ul>
                <li><a class="list-group-item" href="../shopfashion.php" title="Homepage"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Trang chủ</a></li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Quản lý người dùng</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="admin_users.php"><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Users</a>
                    <li><a class="list-group-item roles child" href="listadmin.php"><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Admin</a>
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Quản lý sản phẩm</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="listproducts.php?product=allproduct" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách sản phẩm</a>
                    <li><a class="list-group-item roles child" href="listproducts.php?product=empty" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Các sản phẩm đã hết</a  >
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Lập báo cáo</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="admin_users.html" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Báo cáo tồn</a>
                    <li><a class="list-group-item roles child" href="admin_roles.html" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Báo cáo doanh thu</a  >
                    <li><a class="list-group-item roles child" href="baocaocongno.php?id=all" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Báo cáo công nợ</a  >
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Quản lý chung</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="list_ncc.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách nhà cung cấp</a>
                    <li><a class="list-group-item users child" href="listhoadon.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách hóa đơn</a>
                    <li><a class="list-group-item users child" href="list_phieuchi.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách phiếu chi</a>
                  </ul>
                </li>
              </ul>
            </div>
          </div> 
          <div class="content col-xs-9 col-sm-9 col-lg-9">
            <div class="container">
              <div class="header-content">
                <h2>Danh sách hóa đơn</h2>
              </div>
              <div class="content-content vertical-menu">
                <table>
                  <tr>
                    <th>Số HD</th>
                    <th>Ngày tạo</th>
                    <th>Nhân viên</th>
                    <th>Khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Phí giao hàng</th>
                    <th>Giá trị</th>
                    <th>Chỉnh sửa</th>
                  </tr>
              <?php
                $i = 0;
                $dt -> select("SELECT * FROM hoadon");
                while( $r = $dt->fetch())
                {
                  $i = $i + 1;
                  $sohd = $r["sohd"];
                  $ngay = $r["ngay"];
                  $nhanvien = $r["nhanvien"];
                  $khachhang = $r["khachhang"];
                  $sodienthoai = $r["sodienthoai"];
                  $diachi = $r["diachi"];

                  $symbol = 'đ';
                  $symbol_thousand = '.';
                  $decimal_place = 0;
                  $phigiaohang = number_format($r["tienship"], $decimal_place, '', $symbol_thousand).$symbol; 
                  $giatri = number_format($r["giatri"], $decimal_place, '', $symbol_thousand).$symbol; 

                  $thanhtoan = intval(strval($r["giatri"]+40000));
                  $thanhtoan = number_format($thanhtoan, $decimal_place, '', $symbol_thousand).$symbol; 

                  $mydialog = "mydialog".$sohd;

              ?>
                  <tr>
                    <td><?=$sohd?></td>
                    <td><?=$ngay?></td>
                    <td><?=$nhanvien?></td>
                    <td><?=$khachhang?></td>
                    <td><?=$sodienthoai?></td>
                    <td><?=$diachi?></td>
                    <td><?=$phigiaohang?></td>
                    <td><?=$giatri?></td>
                    <td style="text-align: center;">
                      <li onclick = "showdialog(<?=$sohd?>)" class="showdialog"><a title="Chi tiết hóa đơn"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                      <li><a href="" title="<?=$product?>" class="remove" itemprop="<?=$r["id"]?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
                    </td>
                  </tr> 
                  <div>
                    <dialog id="<?="$mydialog"?>" class="mydialog" style="top:1px;">
                        <button onclick = "closedialog(<?=$sohd?>)" style="float:right">Close</button>
                        <div class="info_shop">
                          <b>Shop thời trang ShopFashion</b>
                          <p>Trường đại học Công Nghệ Thông Tin</p>
                          <p>Điện thoại: 0165.779.0513</p>
                        </div>
                        <center><h1><b>Phiếu bán hàng</b></h1></center>
                        <div class="row">
                          <div class="col-md-6"></div>
                          <div class="col-md-6">
                            <div class="">
                              <span class="span1"> Số hóa đơn: </span> 
                              <span class="span2"><?=$sohd?></span>
                            </div>
                            <div class="">
                              <span class="span1"> Ngày: </span> 
                              <span class="span2"><?=$ngay?></span>
                            </div>
                          </div>
                        </div>
                        <div class="info_shop">
                            <div class="">
                              <span class="span1"> Khách hàng: </span> 
                              <span class="span2"><?=$khachhang?></span>
                            </div>
                            <div class="">
                              <span class="span1"> Địa chỉ: </span> 
                              <span class="span2"><?=$diachi?></span>
                            </div>
                            <div class="">
                              <span class="span1"> Số điện thoại: </span> 
                              <span class="span2"><?=$sodienthoai?></span>
                            </div>
                            <div class="">
                              <span class="span1"> Nhân viên: </span> 
                              <span class="span2"><?=$nhanvien?></span>
                            </div>
                            <div class="">
                              <span class="span1"> Chi tiết hóa đơn: </span> 
                            </div>
                        </div>
                        <div class="cthd">
                          <div class="row cthd-row">
                            <div class="col-md-1 a"><b>STT</b></div>     
                            <div class="col-md-3 a"><b>Tên hàng</b></div>
                            <div class="col-md-1 a"><b>SL</b></div>  
                            <div class="col-md-2 a"><b>Đơn giá</b></div>  
                            <div class="col-md-2 a"><b>Tổng cộng</b></div>
                            <div class="col-md-1 a"><b>Ghi chú</b></div> 
                            <div class="col-md-2 a"><b>Thành tiền</b></div>      
                          </div>
                        <?php 
                          $t = 0;
                          $dx -> select("SELECT * FROM cthd,product WHERE cthd.idsanpham = product.id AND cthd.sohd = $sohd");
                          while( $r = $dx->fetch())
                          {
                            $t += 1;
                            $soluong = $r["soluong"];
                            $mau = $r["mau"];
                            $sum_price = number_format($r["sum_price"], $decimal_place, '', $symbol_thousand).$symbol; 
                            $name = $r["name"];
                            $price = number_format($r["price"], $decimal_place, '', $symbol_thousand).$symbol; 

                        ?>
                          <div class="row cthd-row">
                            <div class="col-md-1 a"><?=$t?></div>     
                            <div class="col-md-3 a"><?=$name?></div>
                            <div class="col-md-1 a"><?=$soluong?> Cái</div>  
                            <div class="col-md-2 a"><?=$price?></div>  
                            <div class="col-md-2 a"><?=$sum_price?></div>
                            <div class="col-md-1 a">.....</div>  
                            <div class="col-md-2 a"><?=$sum_price?></div>      
                          </div>
                        <?php
                          }
                        ?>
                          <div class="row cthd-row">
                            <div class="col-md-6 "></div>
                            <div class="col-md-4 a"><b>Tổng cộng: </b></div>     
                            <div class="col-md-2 a"><?=$giatri?></div>
                          </div>
                          <div class="row cthd-row">
                            <div class="col-md-6 "></div>
                            <div class="col-md-4 a"><b>Phí vận chuyển(Nếu có): </b></div>  
                            <div class="col-md-2 a">40.000đ</div>
                          </div>
                          <div class="row cthd-row">
                            <div class="col-md-6 "></div>
                            <div class="col-md-4 a"><b>Thanh toán: </b></div>     
                            <div class="col-md-2 a"><?=$thanhtoan?></div>
                          </div>
                        </div>

                        <div class="row " style="margin-bottom: 50px; padding-top: 20px">
                            <div class="col-md-6" style="text-align: center;"><i>Chữ kí khách hàng</i></div>
                            <div class="col-md-6" style="text-align: center;"><i>Chữ kí cửa hàng</i></div>     
                        </div>
                        
                    </dialog>
                  </div>
              <?php
                }
              ?>
                  
                </table>
                <p class="amount" style="display: none"><?=$i?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".remove").click(function(){
          var id_remove = $(this).attr("itemprop");
          var get = $(this).attr("title");
          $.ajax({
            url : "removeproduct.php",
            type : 'post',
            dataType : 'text',
            data : {  
                "id_remove"    : id_remove
            },
            success : function(result) {

            }
          }); 

        });

        var i = parseInt($(".amount").text());
        $(".content-content").before("<p>Danh sách có " + i + " hóa đơn</p>");

      }); 

      function showdialog(sohd){
        document.getElementById("mydialog" + sohd).show();
      }
      
      function closedialog(sohd){
        document.getElementById("mydialog" + sohd).close();
      }

      
    </script>
  </body>
</html>