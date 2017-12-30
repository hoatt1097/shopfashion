<?php 
  include 'database.php';
  $dt = new Database;
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    
    <title>Thời trang</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php
	include('header.php');
	  if (isset($_GET['id']) && isset($_GET['idn'])){
		  $id = $_GET['id'];
		  $idn = $_GET['idn'];
		  $dt->select("SELECT * from nhomtin where idnhom='$idn'");
		  $row = $dt->fetch();
		  $tennhom = $row['tennhom'];
	?>
		<div class="container">
		 <h1><?php echo "<b>$tennhom</b>";?></h1>
			<hr>
		 <div id='noidung'>
		 	
		 	<?php
			 $dt->select("select * from bangtin where idtin='$id'");		 
			 $r=$dt->fetch();
			 $tieude = $r['tieude'];
			 $trichdan = $r['trichdan'];
			 $anh = $r['anhtrichdan'];
			 echo "<h4><big><b>$tieude</b></big></h4>";
			 echo "<h5><i>$trichdan</i></h5>";
			 if ($anh != null)
				 echo "<center><img src='$anh' width='600'></center>";
			 echo "<p align=justify>";
			 echo $r['noidung'];
			 echo "</p>";
			 echo "<h4><i>Xem thêm:</i></h4>";
			 $dt->select("select * from bangtin where idtin != '$id' and idnhom = '$idn' order by ngaydang desc limit 5");
			 while ($row=$dt->fetch()){
				 $id=$row['idtin'];
				 $tieude=$row['tieude'];
				 echo "<a href = 'newsdetail.php?idn=$idn&id=$id'>$tieude</a><br>";
			 }
		}
			  ?>
		 </div>
	    </div>
	<?php
	 	include('footer.php');
	?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>