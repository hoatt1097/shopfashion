<?php 
  include 'database.php';
  $dt = new Database;
  $id_remove = $_POST["id_remove"];

  $dt -> command("DELETE FROM user WHERE iduser = $id_remove");

  $result = "Xóa thành công";
  echo($result);
?>