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
	ini_set('display_errors', 0 );
	$conn = mysqli_connect("localhost","thachtua","01666151112","nuochoa") or die("Không thể kết nối CSDL");
	mysqli_set_charset($conn,'utf8');
	include("header.php");
	include("menu.php");
?>
    <div id="main">
<h2 class='title'><span>NƯỚC HOA NAM</span></h2>
<h3 class="h3_nuochoanam">NƯỚC HOA NAM – ĐẲNG CẤP PHÁI MẠNH QUYẾN RŨ ĐAM MÊ</h3>
<p class="p_nuochoanam">Cũng có nhu cầu làm đẹp như phái yếu, <strong>Nước hoa nam</strong> được xem như là 1 loại hình sản phẩm làm đẹp mà bất kỳ đấng mày râu nào cũng mong muốn sở hữu, nó gần như trở thành 1 biểu tượng hoàn hảo cũng như đẳng cấp dành cho phái mạnh. <strong>Những mùi hương nước hoa cho nam giới</strong> không đa dạng cũng như phổ biến như phái đẹp nhưng chúng lại tập trung vào sự nam tính, mạnh mẽ và quyến rũ của đàn ông.</p>
<div class="phan_page">
	<?php
	ini_set('display_errors', 0);
	$product_query = "SELECT * FROM all_product where type_product = 1 or sex_product = 'Nam'";
	$product_size = 12;
	$product_result = mysqli_query($conn,$product_query) or die ('Cannot select table!');
	$product_rows = mysqli_num_rows($product_result);
	//tinh so trang
	if($product_rows > $product_size)
		$page = ceil($product_rows/$product_size);
	else 
		$page = 0;
	if(isset($_GET['page']) && (int)$_GET['page'])
		$product_start = $_GET['page'];
	else
		$product_start = 1;
	
?>
<div class="percent_page">
<?php

	if($page==0)
	{
		echo '<ul>';
		}
		else
		{	
		echo '<ul>';
		}

?>

<?php

		if($_GET['page']>1)
		{
			echo '<li><a class="number_page" href="menu-wfb.php?page='.($_GET['page']-1).'" ><b>&lt;&lt;</b></a></li>';}
		
		$page_cr=($page/$product_rows)+1; 
		
		for($i=1;$i<=$page;$i++) 
		{ 	
				if($i==$_GET['page'])
				{
					echo "<li><b><font  color='#ed1c2e' >".$i."</font></b></li>";
				}
				else
				 echo "<li><a class='number_page' href='menu-wfb.php?page=".($i)."'>$i&nbsp;</a></li>";
		
		}
		if($_GET['page']<$page)
		{
			echo '<li><a href="menu-wfb.php?page='.($_GET['page']+1).'" ><b>&gt;&gt;</b></a></li>';
		}
		

?>
</ul>
</div><!--end phan_page-->
</div><!--end phan_page-->
<table border="0" cellpadding="2" cellspacing="0" >
    <tr>
<?php
	$x = ($product_start - 1)*$product_size;
	$product_query = "SELECT * FROM all_product where type_product = 1 or sex_product = 'Nam' limit $x,$product_size";
	$product_result = mysqli_query($conn,$product_query) or die ('Cannot select table!');
	$dem = 0;
	while ($product_rows = mysqli_fetch_array($product_result,MYSQLI_ASSOC))
	{
?>
			<td width="220px" align="center">
		    <a href="chitiet.php?id=<?php echo $product_rows['id_product']; ?>">
<?php
		echo'
		  	<span class="roll" ></span>
		  	<img src="../images/'.$product_rows["link_product"].'"/>
			<br/>
			'.$product_rows["name_product"].'
		 	</a>
		  	</br>
		  	<strong>'.number_format($product_rows["price_product"]).' VNĐ</strong>
          	</td>';
          	$dem ++;   // mỗi lần in ra 1 sản phẩm thỳ biến đếm lại cộng thêm 1
          	if ($dem%4==0) // nếu show ra 4 sản phẩm 
          	echo "</tr><tr>";  // thì in ra cái </tr> để kết thúc 1 hàng, và in tiếp <tr> để bắt đầu 1 hàng nữa.
	}
?>
</table>
</div><!--end main--> 
<?php
	echo'<div id="clear"></div>';
	include("footer.php");	
?>
</div><!--end wrapper-->
</body>
</html>