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
	$conn = mysqli_connect("localhost","thachtua","01666151112","nuochoa") or die("Không thể kết nối CSDL");
	mysqli_set_charset($conn,'utf8');
	include("header.php");
	include("menu.php");
?>
		
<div id="main">
<?php
		if(isset($_REQUEST['btTimkiem']))
		{
			$timkiem = $_GET['timkiem']; // lấy giá trị từ form
			// lệnh tìm kiếm
			$sql = "select * from all_product where name_product like '%$timkiem%' "; // lẹnh sql
			$result = mysqli_query($conn,$sql); // thực hiện lệnh myslqi_query
			if($result==0)
				echo "không có sản phẩm cho tìm kiếm bạn vừa nhập";

			if(!$timkiem)
			{
				echo "Vui Lòng nhập từ khóa tìm kiếm!";
			}
			else
			{
				echo "<h2 class='title'><span> SẢN PHẨM : $timkiem </span></h2>";
				?>
                     <table border="0" cellpadding="2" cellspacing="0" >
                        <tr>
                        <?php
                            
                            $dem=0;
                            while ($row = mysqli_fetch_array($result))
							{ 
							 $linkanh = "../images/".$row['link_product'];
							 
						?>
							<td width="220px" align="center">
							<a href="chitiet.php?id=<?php echo $row['id_product']; ?>">
                        <?php
                          	echo'
                              <span class="roll" ></span>
                              <img src='.$linkanh.' /> 
                                <br> '.$row['name_product'].'<br>
                                   <b>'.number_format($row['price_product']).' '."".' '."VNĐ".'</b></a>
                    
                                   </a>
                              </td>';
                              $dem ++;   // mỗi lần in ra 1 sản phẩm thỳ biến đếm lại cộng thêm 1
                              if ($dem%4==0) // nếu show ra 4 sản phẩm 
                              echo "</tr><tr>";  // thì in ra cái </tr> để kết thúc 1 hàng, và in tiếp <tr> để bắt đầu 1 hàng nữa.
                            }
                         ?></table>
                       
				<?php
			}
		}
?>  
     </div><!--end main-->
<?php
	
	echo'<div id="clear"></div>';
	include("footer.php");
	
?>





</div><!--end wrapper-->
</body>
</html>