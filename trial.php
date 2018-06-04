<?php
include 'database.php';
  $dt = new Database;
  $dx = new Database;
  date_default_timezone_set('Asia/Ho_Chi_Minh');
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
echo max_cthd() +1;
?>