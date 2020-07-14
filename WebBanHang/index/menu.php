
<link rel="stylesheet" type="text/css" href="style.css"/>
<div class="menu-main2">
<?php
	include("ketnoi.php");
?>
<?php
	$menu1_query ="SELECT * FROM menu1";
	$menu1_res = mysqli_query($conn,$menu1_query) or die ('Cannot select menu1'.mysqli_error($conn));
	
		echo "<ul >";
		
		while ($menu1_items = mysqli_fetch_array($menu1_res,MYSQLI_ASSOC))
		{
		
				echo "<li><a href = '".$menu1_items['link_menu']."'>".$menu1_items['menu1_name']."</a><ul>";	
				echo "</ul></li>";
			
			//END 
		
	}echo "</ul>";
	
?>
	

</div> <!--end main2-->
<div class = "under-menu">
	<div class="under-menu-left">
    	<strong>Cam kết nước hoa chính hãng</strong>
    </div><!--end under-menu-left-->

    <div class="under-menu-center">
    	<strong>Hoàn tiền 300% nếu phát hiện hàng FAKE</strong>
    </div><!--end under-menu-center-->

     <div class="under-menu-right">
    	<form action="search1.php" method="get">
     	 <strong>Tìm theo giá</strong>
     	 	<select class="chongia" name=chonkhoanggia>
				<option value="1">Dưới 2 triệu</option>
				<option value="2">2 triệu - 3 triệu</option>
				<option value="3">3 triệu - 4 triệu</option>
				<option value="4">trên 4 triệu</option>
			</select>
			<input type="submit" name="bt_timtheogia" value="Tìm">
	</form>
    </div>


</div><!--end under-menu-->
	

