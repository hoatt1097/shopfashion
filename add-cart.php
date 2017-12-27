<?php 
  include 'database.php';
  $dt = new Database;

function max_cartid(){
    GLOBAL $dt;
    $array = array('-1');
    $dt->select("SELECT id FROM cart");
    while( $r=$dt->fetch() )
    {
      array_push( $array, $r['id'] );
    }
    return max($array);
}

  $id = max_cartid() + 1;
  $id_product = $_POST["id_product"];
  $id_product = substr($id_product,8);
  $color_choose = $_POST["color_choose"];
  $size_choose = $_POST["size_choose"];
  $amount = $_POST["amount"];
  $price = $_POST["price"];
  $sum_price = $price * $amount;

  $dt -> select("SELECT COUNT(product_id) as count FROM cart WHERE product_id = $id_product ");
  $r = $dt->fetch();
  $count = $r['count'];
  if( $count != 0)
  {
  	$dt -> select("SELECT * FROM cart WHERE product_id = $id_product ");
  	$r = $dt->fetch();
  	$amount = $amount + $r["amount"];
  	$sum_price = $sum_price +$r["sum_price"];
  	$dt->command(" UPDATE cart SET amount = $amount, sum_price = $sum_price WHERE product_id = $id_product ");
  }
  else
  {
  	$dt->command("INSERT INTO cart VALUES ('$id', '$id_product', '$color_choose', '$size_choose', '$amount','$sum_price')");
  }

  $result = "Thêm giỏ hàng thành công";
  echo($result);
?>