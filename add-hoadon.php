<?php 
  include 'database.php';
  $dt = new Database;
  date_default_timezone_set('Asia/Ho_Chi_Minh');

function max_sohd(){
    GLOBAL $dt;
    $array = array('-1');
    $dt->select("SELECT sohd FROM hoadon"); 
    while( $r=$dt->fetch() )
    {
      array_push( $array, $r['sohd'] );
    }
    return max($array);
}

  $sohd = max_sohd() + 1;
  $ngay = date('Y/m/d H:i:s');
  $nhanvien = "admin";
  $khachhang = $_POST["name"];
  $sodienthoai = $_POST["phone"];
  $diachi = $_POST["address"];
  $tienship = "40000";
  $vat = "0.1";
  $giatri = $_POST["sum_price"];

  $dt->command("INSERT INTO hoadon VALUES ('$sohd', '$ngay', '$nhanvien', '$khachhang', '$sodienthoai','$diachi','$giatri','$vat','$giatri')");

  $dt -> select("SELECT * FROM cart ");
  while( $r = $dt->fetch() )
  {
    $idsanpham = $r["product_id"];
    $size = $r["size_choose"];
    $mau = $r["color_choose"];
    $soluong = $r["amount"];
    $dt->command("INSERT INTO cthd VALUES ('$sohd', '$idsanpham', '$soluong', '$mau', '$size')");
  }

  $dt->command("DELETE FROM cart ");

?>