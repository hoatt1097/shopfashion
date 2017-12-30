<?php
	include 'database.php';
  	$dt = new Database;
	date_default_timezone_set('Asia/Ho_Chi_Minh');
function max_replyid(){
    GLOBAL $dt;
    $array = array('-1');
    $dt->select("SELECT idrep FROM reply");
    while( $r=$dt->fetch() )
    {
      array_push( $array, $r['iduser'] );
    }
    return max($array);
}
	$id = $_GET['id'];
	$text = $_POST['txtreply'];
	$idcmt = $_GET['idcmt'];
	$now = date('Y-m-d H:i:s');
	$idreply = max_replyid()+1;


	//truyền iduser vào $iduser - thay cho '1'
	$dt->command("INSERT into reply values($max_replyid, '1', '$text', '$now', '$idcmt')");
	header("location:product.php?id=$id");
?>