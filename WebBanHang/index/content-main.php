	
<div id="main">
<!----------------------------------------------------------------------------------------->
<?php
// duong ke ngang nuoc hoa hot------------------------------------------------------------
	echo "<h2 class='title'><span>NƯỚC HOA HOT</span></h2>";
  ?>

<table border="0" cellpadding="2" cellspacing="0" >
    <tr>
    <?php
                // lấy ra tất cả sản phẩm trong bảng sản phẩm, sắp xếp theo ngày đăng mới nhất, giới hạn 8 sản phẩm thôi
        $sql=mysqli_query($conn,"select * from all_product where type_product = 10");

               // khởi tạo biến đếm với giá trị ban đầu = 0
        $dem=0;
        while ($row = mysqli_fetch_array($sql)){
	?>
    <td width="220px" align="center">
    <a href="chitiet.php?id=<?php echo $row['id_product'];?>">
    <?php
      echo'
		  <span class="roll" ></span> 
		  <img src="../images/'.$row["link_product"].'">
		  	<br> '.$row['name_product'].'<br>
               <b>'.number_format($row['price_product']).' '."".' '."đ".'</b></a>

			   </a>
          </td>';// <span class="roll" la hieu ung jquery cho san pham>
          $dem ++;   // mỗi lần in ra 1 sản phẩm thỳ biến đếm lại cộng thêm 1
          if ($dem%4==0) // nếu show ra 4 sản phẩm 
          echo "</tr><tr>";  // thì in ra cái </tr> để kết thúc 1 hàng, và in tiếp <tr> để bắt đầu 1 hàng nữa.
        }
     ?></table>
<!------------------------------------------------NUOCHOAMOI--------------------------------------------------> 
  <?php
	echo "<h2 class='title'><span>NƯỚC HOA MỚI</span></h2>";
  ?>

  <table border="0" cellpadding="2" cellspacing="0" >
    <tr>
    <?php
                // lấy ra tất cả sản phẩm trong bảng sản phẩm, sắp xếp theo ngày đăng mới nhất, giới hạn 8 sản phẩm thôi
        $sql=mysqli_query($conn,"select * from all_product where type_product = 11");

               // khởi tạo biến đếm với giá trị ban đầu = 0
        $dem=0;
        while ($row = mysqli_fetch_array($sql)){
	?>
    <td width="220px" align="center">
    <a href="chitiet.php?id=<?php echo $row['id_product'];?>">
    <?php
      echo'
		  <span class="roll" ></span> 
		  <img src="../images/'.$row["link_product"].'">
		  	<br> '.$row['name_product'].'<br>
               <b>'.number_format($row['price_product']).' '."".' '."đ".'</b></a>

			   </a>
          </td>';// <span class="roll" la hieu ung jquery cho san pham>
          $dem ++;   // mỗi lần in ra 1 sản phẩm thỳ biến đếm lại cộng thêm 1
          if ($dem%4==0) // nếu show ra 4 sản phẩm 
          echo "</tr><tr>";  // thì in ra cái </tr> để kết thúc 1 hàng, và in tiếp <tr> để bắt đầu 1 hàng nữa.
        }
     ?></table>
     
     
 <?php //đường kẻ ngang nước hoa khác............................................ ?>
  <?php
	echo "<h2 class='title'><span>NƯỚC HOA KHÁC</span></h2>";
  ?>
  
   <table border="0" cellpadding="2" cellspacing="0" >
    <tr>
    <?php
                // lấy ra tất cả sản phẩm trong bảng sản phẩm, sắp xếp theo ngày đăng mới nhất, giới hạn 8 sản phẩm thôi
        $sql=mysqli_query($conn,"select * from all_product where type_product = 12");

               // khởi tạo biến đếm với giá trị ban đầu = 0
        $dem=0;
        while ($row = mysqli_fetch_array($sql)){
	?>
    <td width="220px" align="center">
    <a href="chitiet.php?id=<?php echo $row['id_product'];?>">
    <?php
      echo'
		  <span class="roll" ></span> 
		  <img src="../images/'.$row["link_product"].'">
		  	<br> '.$row['name_product'].'<br>
               <b>'.number_format($row['price_product']).' '."".' '."đ".'</b></a>

			   </a>
          </td>';// <span class="roll" la hieu ung jquery cho san pham>
          $dem ++;   // mỗi lần in ra 1 sản phẩm thỳ biến đếm lại cộng thêm 1
          if ($dem%4==0) // nếu show ra 4 sản phẩm 
          echo "</tr><tr>";  // thì in ra cái </tr> để kết thúc 1 hàng, và in tiếp <tr> để bắt đầu 1 hàng nữa.
        }
     ?></table>
   
     
     
     </div><!--end main-->
