<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vườn Nước Hoa</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="../jquery/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../js/jssor.slider.min.js"></script>
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
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
	include("header.php");
	include("menu.php");
?>


<div id="w">
	<h1 align="center">Gửi Liên Hệ!</h1>
<form id="contactform" name="contact" method="post" action="#">
  <div class="row" align="justify">
    <label for="name">Tên khách hàng: <span class="req">*</span></label>
    <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder="Steve Jobs" required>
  </div>
   
  <div class="row" align="justify">
    <label for="email">Địa chỉ Email: <span class="req">*</span></label>
    <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder="address@domain.com" required>
  </div>
   

   
  <div class="row" align="justify">
    <label for="message">Nội dung: <span class="req">*</span></label>
    <textarea name="message" id="message" class="txtarea" tabindex="4" required></textarea>
  </div>
   
  <div class="center" align="center">
    <input type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Send Message">
  </div>
</form>
</div>






<?php

//VIẾT CODE LIÊN HỆ VÔ ĐÂY
 
?>



<?php
	echo'<div id="clear"></div>';
	include("footer.php");
	
?>






</div><!--end wrapper-->
</body>
</html>