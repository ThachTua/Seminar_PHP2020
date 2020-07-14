<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vườn Nước Hoa</title>
<link rel="stylesheet" type="text/css" href="/WebBanHang/style.css"/>
<script type="text/javascript" src="/WebBanHang/jquery/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="/WebBanHang/js/jssor.slider.min.js"></script>
<script type="text/javascript" src="/WebBanHang/js/jquery-1.9.1.min.js"></script>

<script>	
	$(document).ready(function() {
				// OPACITY OF BUTTON SET TO 0%
				$(".roll").css("opacity","0");
				 
				// ON MOUSE OVER
				$(".roll").hover(function () {
				 
				// SET OPACITY TO 70%
				$(this).stop().animate({
				opacity: .7
				}, "slow");
				},		
					 
				// ON MOUSE OUT
				function () {
				 
				// SET OPACITY BACK TO 50%
				$(this).stop().animate({
				opacity: 0
				}, "slow");
				});
});
</script>
</head>
<body>

<div id="wrapper">
<?php
	include ("ketnoi.php");
	include ("header.php");	
	include("menu.php");
	include("banner.php");
	include("content-main.php");
	echo'<div id="clear"></div>';
	include("footer.php");
?>
</div><!--end wrapper-->
</body>
</html>