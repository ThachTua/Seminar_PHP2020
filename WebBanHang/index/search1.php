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
		
<div id="main">
<?php
		if(isset($_REQUEST['bt_timtheogia']))
		{
			$select_giatri = $_GET['chonkhoanggia']; // lấy giá trị min từ form
			
			// lệnh tìm kiếm
		
			$ten='';

			if($select_giatri=='1') {
					$sql = "select * from all_product where price_product between 100000 and 2000000 ";// lẹnh sql
					$ten='dưới 2 triệu đồng';
				}

			if($select_giatri=='2'){
					$sql = "select * from all_product where price_product between 2000000 and 3000000 ";
					$ten='từ 2 đến 3 triệu đồng';
					}

			if($select_giatri=='3'){
					$sql = "select * from all_product where price_product between 3000000 and 4000000 ";
					$ten='từ 3 đến 4 triệu đồng';
				}

			if($select_giatri=='4'){
					$sql = "select * from all_product where price_product between 4000000 and 2000000000 ";
					$ten='trên 4 triệu đồng';
				}

			$result = mysqli_query($conn,$sql); // thực hiện lệnh myslqi_query
			if($result==0)
				echo "không có sản phẩm cho khoảng giá mà bạn chọn";
			else
			{
				echo "<h2 class='title'><span> sản phẩm $ten là : </span></h2>";
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
 
     </div><!--end main-->
<div id="wrapper">
<?php
	
	echo'<div id="clear"></div>';
	include("footer.php");
	
?>

</div>



</div><!--end wrapper-->
</body>
</html>