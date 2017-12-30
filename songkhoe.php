<div id="news-container">
	<h1><b>SỐNG KHỎE</b></h1>
 <div id='noidung'> 
        <div id="newest" class="row">
 	<?php
	 $dt->select('select * from bangtin where idnhom = 2 order by idtin desc limit 1');
	 if ($r=$dt->fetch()){
		 $id=$r['idtin'];
		 $idn=$r['idnhom'];
		 $tieude=$r['tieude'];
		 $trichdan=$r['trichdan'];
	 ?>
			<a href="newsdetail.php?idn=<?php echo $idn ?>&id=<?php echo $id ?>"><img src="<?php echo $r['anhtrichdan']  ?>" width="600" height="300"  style="float:left;"/></a>
	<?php
		 echo "<b><big><a href = 'newsdetail.php?idn=$idn&id=$id'>$tieude</a></b></big>";
		 echo "<i><br><br>$trichdan<br><br></i>";
	 }
			 ?>
	 </div>
	 <h2><i>Tin cũ hơn</i></h2>
	 <?php
	 $dt->select("select * from bangtin where idnhom = 2 and idtin !='$id' order by ngaydang desc limit 10");
		while ($r=$dt->fetch()){
		 $id=$r['idtin'];
		 $idn=$r['idnhom'];
		 $tieude=$r['tieude'];
		 $trichdan=$r['trichdan'];
			?>
	<div id="others" class="row">
			<a href="newsdetail.php?idn=<?php echo $idn ?>&id=<?php echo $id ?>"><img src="<?php echo $r['anhtrichdan']  ?>" width="360" height="180"  style="float:left;"/></a>
	<?php
		 echo "<b><big><a href = 'newsdetail.php?idn=$idn&id=$id'>$tieude</a></b></big>";
		 echo "<i><br><br>$trichdan<br><br></i>";
	 
			 ?>
	 </div>
	 <?php
		}
	 ?>
	</div>
</div>
			