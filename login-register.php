<?php
	session_start();
	include 'database.php';
 	$dt = new Database;

function max_cartid(){
    GLOBAL $dt;
    $array = array('-1');
    $dt->select("SELECT iduser FROM user");
    while( $r=$dt->fetch() )
    {
      array_push( $array, $r['iduser'] );
    }
    return max($array);
}

	if($_POST["flagRegister"]==1)
	{
		$id = max_cartid()+1;
		$lastname = $_POST["lastname"];
		$firstname = $_POST["firstname"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$dt->command("INSERT INTO user VALUES ('$id', '$email', '$password', '$firstname', '$lastname')");
		$_SESSION['name'] = $firstname;
		$result = "Chúc mừng bạn đã đăng kí thành công";
  		echo($result);
	}

?>