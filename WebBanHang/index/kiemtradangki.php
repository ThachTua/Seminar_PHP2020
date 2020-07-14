<?php
	include "ketnoi.php";
	$mail=$_POST["mail"];
	$sql="select * from account where email='$mail'";
	$qr=mysqli_query($conn,$sql) or die ('Cannot select table!');
	$r=mysqli_num_rows($qr);
	echo $r;
?>