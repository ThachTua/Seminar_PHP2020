
<?php

 // so san pham da add vao cart
	$prd = 0;
	if(isset($_SESSION['cart']))
	{
		$prd = count($_SESSION['cart']);
	}
?>
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
	include("ketnoi.php");
?>
<div id="header">
	<div id="header-top">
    <?php
		ini_set('display_errors', 0);
		echo'
		<a href="login.php"><span>ĐĂNG NHẬP |</span></a> 
		<a href="dangki.php"><span> ĐĂNG KÍ |</span></a>
		<a href="dangxuat.php"><span> ĐĂNG XUẤT |</span></a>
		 ';
		 echo ''
		
		
	?>
     <div class="welcome" align="right"	> <span style="color:#300">Xin chào: <b style="color:#C00"><?php echo $_SESSION['user']; ?>|</b></span> </div>
     <!--<div align="right"><a href="home.php"><span><b>Quản trị Admin</b></span></a></div>-->
	</div><!--end headertop-->
    <div class="header_logo">
		<span><a href="index.php"><img src="../images/logo.png"></a></span>
    </div> <!--end header_logo-->
    <div class="search">
		<form class="searchform" action="search.php" method="get">
		<input class="s" onfocus="if (this.value == 'Tìm kiếm …') {this.value = '';}" onblur="if (this.value == '') {this.value =		 		'Tìm kiếm …';}" type="text" name="timkiem" value="Tìm kiếm …" />
 		<input class="searchsubmit" name="btTimkiem" type="submit" value="" />
		</form>
	</div><!--------end search------->
    <div class="shopping_cart">
    <div class="logo_cart">
    	<span class="logo_cart_span">
        	<img src="../images/shoppingcart.png"> <b>CART</b>
			<strong><?php echo $prd; ?></strong>
        </span><!--end logo_cart_span-->
        <span class="strong_clickhere"><a href="shopping-cart.php"><img src="../images/viewcart.png"></a></span>
    </div><!---end logocart----->
    



    
    </div><!--------end giohang------->
</div><!--end header-->

