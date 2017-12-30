<?php
	include 'database.php';
  	$dt = new Database;
	date_default_timezone_set('Asia/Ho_Chi_Minh');
function max_cmtid(){
    GLOBAL $dt;
    $array = array('-1');
    $dt->select("SELECT idcmt FROM comment");
    while( $r=$dt->fetch() )
    {
      array_push( $array, $r['iduser'] );
    }
    return max($array);
}
	$text = $_POST['txtcomment'];
	$id = $_GET['id'];
	$now = date('Y-m-d H:i:s');
	$idcmt = max_cmtid()+1;
	//truyền iduser vào $iduser - thay cho '1'
	$dt->command("INSERT into comment values($idcmt, '1', '$text', '$now', '$id')");
	header("location:product.php?id=$id");
?>