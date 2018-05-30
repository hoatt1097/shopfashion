<?php 
  include 'database.php';
  $dt = new Database;
  $id_remove = $_POST["id_remove"];

  $dt -> command("DELETE FROM product WHERE id = $id_remove");
  $return = "Xóa thành công"
  return $result;
?>