<?php 
  include 'database.php';
  $dt = new Database;
  date_default_timezone_set('Asia/Ho_Chi_Minh');
function max_userid(){
    GLOBAL $dt;
    $array = array('-1');
    $dt->select("SELECT iduser FROM user");
    while( $r=$dt->fetch() )
    {
      array_push( $array, $r['iduser'] );
    }
    return max($array);
}

  $iduser = max_userid() + 1;
  $email = $_POST["email"];
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $password = $_POST["password"];
  $ngaysinh = $_POST["ngaysinh"];
  $ngay = date('Y/m/d H:i:s');

  $dt->command("INSERT INTO user VALUES ('$iduser', '$email', '$password', '$firstname', '$lastname','$ngay','$ngaysinh')");
  $result = "Thêm User thành công";
  return $result;
?>