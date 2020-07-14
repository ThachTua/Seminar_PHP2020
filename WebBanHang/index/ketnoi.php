<?php 
	/*$conn = mysqli_connect("localhost","root","","webbanhang") or die("Không thể kết nối CSDL");
	mysqli_set_charset($conn,'utf8');*/
	$SERVER = "localhost";
	$USERNAME = "thachtua";
	$PASSWORD = "01666151112";
	$DBNAME = "nuochoa";
	$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD);
	if (!$conn ){
	    die("không nết nối được vào MySQL server");
	}
	mysqli_select_db($conn,$DBNAME);
	mysqli_query($conn,"SET NAMES 'utf8'");
?>