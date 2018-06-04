<?php 
  include 'database.php';
  $dt = new Database;
  $dx = new Database;
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

function max_cthd(){
    GLOBAL $dx;
    $array = array('-1');
    $dx->select("SELECT id FROM cthd"); 
    while( $r=$dx->fetch() )
    {
      array_push( $array, $r['id'] );
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

  $dt->command("INSERT INTO hoadon VALUES ('$sohd', '$ngay', '$nhanvien', '$khachhang', '$sodienthoai','$diachi','$tienship','$vat','$giatri')");

  $dt -> select("SELECT * FROM cart ");
  while( $r = $dt->fetch() )
  {
    $id = max_cthd() + 1;
    $idsanpham = $r["product_id"];
    $size = $r["size_choose"];
    $mau = $r["color_choose"];
    $soluong = $r["amount"];
    $sum_price = $r["sum_price"];
    $dt->command("INSERT INTO cthd VALUES ('$id','$sohd', '$idsanpham', '$soluong', '$mau', '$size', '$sum_price')");
  }

  $dt->command("DELETE FROM cart ");

?>