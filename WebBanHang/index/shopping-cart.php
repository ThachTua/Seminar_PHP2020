
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
	include("ketnoi.php");
	include("header.php");
	include("menu.php");
?>
<?php //cap nhat lai gia khi nhap vao so luong
	if(isset($_POST['update_cart']))
	{
		foreach($_POST['num'] as $id => $prd)//prd la gia tri nhap vao.moi id tuong ung voi so luong nhap vao
		{
			if(($prd == 0) and (is_numeric($prd)))//nhap vao =0 thi xoa san pham do di
			{
				unset($_SESSION['cart'][$id]);
			}
			elseif(($prd > 0) and (is_numeric($prd)))//nhap vao so luong >0  thi tiep tuc tinh
			{
				$_SESSION['cart'][$id] = $prd;
			}
		}
	}
?>
<form method="post">
	<div class="main-shopping">
<p class="cart_info">
	<?php 
	if($_SESSION['cart'] != NULL) 
		{
			echo "<strong>Thông tin chi tiết giỏ hàng!</strong>";
		} 
		else
			{
				echo"Bạn chưa thêm sản phẩm vào giỏ hàng nào sao bạn không vào <a href='index.php'>đây</a> để thêm vào sản phẩm!";
			} 
			?>
				
			</p>
		<table cellpadding="1" cellspacing="1" border="1" width="800px" align="center">
        	<tr align="center" bgcolor="#DDDDDD">
            	<td>Mã sản phẩm</td>
                <td>Hình ảnh</td>
                <td>Tên</td>
                <td>Giá</td>
                <td>Số lượng</td>
                <td> Thành tiền</td>
                <td> Xóa sản phẩm</td>
            </tr>
<?php
	$sum_all = 0;
	if($_SESSION['cart'] != NULL)
	{
		foreach($_SESSION['cart'] as $id =>$prd)
		{
			$arr_id[] = $id;
		}
		$str_id = implode(',',$arr_id);
		$item_query = "SELECT * FROM  all_product WHERE id_product IN ($str_id) ORDER BY id_product ASC";
		$item_result = mysqli_query($conn,$item_query) or die ('Cannot select table!');
		while ($rows = mysqli_fetch_array($item_result))
		{
?>
			<tr height="100px">
            <td align="center"><?php echo $rows['id_product'] ?></td>
            <td><img src="../images/<?php echo $rows['link_product']; ?>"></td>
            <td align="center"><font color="#33CCCC"><a href="chitiet.php?id=<?php echo $rows['id_product']; ?>"><?php echo $rows['name_product']; ?></a></font></td>
            <td align="center"><font color="#DD0000"><?php echo number_format($rows['price_product']);?> VNĐ</font></td>
            <td align="center">
            <input type="text" name ="num[<?php echo $rows['id_product']; ?>]" value="<?php echo $_SESSION['cart'][$rows['id_product']]; ?>" size="3"/>
            </td>
            <td align="center"> <font color="#DD0000"><?php echo number_format($rows['price_product']*$_SESSION['cart'][$rows['id_product']]); ?> VNĐ</font></td>
            <td align="center"><a href="delcart.php?id=<?php echo $rows['id_product']; ?>"><span class="del_product"><img src="../images/Delete-icon.png"></span></a></td>
            </tr>

<?php
$sum_all += $rows['price_product']*$_SESSION['cart'][$rows['id_product']];
		}
	}
?>
</table>

<?php
	if(empty($_SESSION['user']))
	{
		echo "<b style='color:#DD0000' >Bạn chưa đăng nhập!<br> Để mua hàng bạn cần"."<a href='login.php'> đăng nhập</a>!!</b>";

	}

?>

<p align="center" class="update_cart"><input type="submit" name="update_cart" value="Cập nhật giỏ hàng"/></p><!--end update-cart--->
<p align="center" class="sum_money">Tổng tiền của giỏ hàng:<font color="#DD0000" size="+2"><?php echo number_format($sum_all); ?> VNĐ</font></p>
<div align="center" class="link_continue">&gt;&gt;<a href="index.php"> Tiếp tục add cart</a> &gt;&gt; <a href="delcart.php?id=0">Xóa giỏ hàng </a> &gt;&gt; 
</div><!--end link_continue---->
<div class="formSubmit">
	<p align='center'><a href='checkout.php'><strong style='font-size: 23px'>ĐẶT HÀNG NGAY</strong></a></p>
</div>

</form>
</div><!--end main shopping--> 
<?php
	echo'<div id="clear"></div>';
	include("footer.php");	
?>
</div><!--end wrapper-->
</body>
</html>