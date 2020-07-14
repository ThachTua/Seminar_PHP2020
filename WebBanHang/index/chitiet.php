<?php
	session_start();
?>
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
	ini_set('display_errors', 0);
	include ("ketnoi.php");
	include("header.php");
	include("menu.php");
	
	?>
<div id="main_chitiet">
<?php
		$id = $_GET['id'];
		$items_query = "SELECT * FROM all_product WHERE id_product = ".$id;
		$items_result = mysqli_query($conn,$items_query) or die ('Cannot select table!');
		$rows = mysqli_fetch_array($items_result);
?>
<h2 class='title'><span><?php echo $rows['name_product']; ?></span></h2>
<div class="chitiet_trai">
<?php
	echo "<ul>";
		echo "<li><img src='../images/".$rows["link_product"]."'/></li>";
	echo "</ul>";
?>
</div><!-----end trai----->
<div class="chitiet_giua">
<?php
	echo"<ul>";
		echo  "<li><p class='chitiet_gia'> ".number_format($rows['price_product'])." VNĐ </p></li>";
		echo  "<li><strong>".$rows['type']."</strong></li>";
		echo 	"<br/>";
		echo "<li>".$rows['name_product']."</li>";
		echo "<li><strong>Nước hoa: </strong> ".$rows['sex_product']."</li>";
		echo "<li><strong>Sản xuất: </strong>".$rows['since_product']."</li>";
		echo "<li><strong>Mô tả: </strong>".$rows['describe_product']."</li>";

		echo "<li><strong>Nhà thiết kế: </strong> ".$rows['designer_product']."</li>";
		echo "<li>SIZE: 100ml</li> ";
		echo "<li>Số lượng<select name='soluong'>";
		echo "<option value='1'>1</option>";
		echo "<option value='2'>2</option>";
		echo "<option value='3'>3</option>";
		echo "<option value='4'>4</option>";
		echo "<option value='5'>5</option>";
		echo "</select></li>"
?>
		<!--<form method="get">
			<input type="checkbox" name="" id="100ml" value="100ml">100ml
        	<select>
            	<option id="100ml" value="">100ml</option>	
           	  <option id="50ml" value="">50ml</option>  -->
            <!--</select>-->
        
        <!--</form>-->
<?php	
		;
	echo "	<li>";
?>
			<a href="addcart.php?id=<?php echo $rows['id_product']; ?>">
<?php          echo " <img src='../images/addtocart.png'/><a>
			</li>";
		
	echo"</ul>";
?>

</div><!-----end giua----->

<div class="chitiet_phai"></div><!---end phai------->
</div><!---end main------->
    <?php

	echo'<div id="clear"></div>';
	include("footer.php");
	
?>
</div><!--end wrapper-->
</body>
</html>