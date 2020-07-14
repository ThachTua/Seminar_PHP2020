<html>
<head>
<link rel="stylesheet" type="text/css" href="public/admin/crown/css/main.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
</head>

<div id="left_content">
 <?php
	include ("ketnoi.php");
	include("left.php");
?>
</div>

<!-- TOP-->


<!--HEAD -->
<div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Sản phẩm</h5>
      <span>Quản lý Sản phẩm</span> </div>
    <div class="horControlB menu_action">
      <ul>
        
        <?php
		include ("ketnoi.php");
		echo "<li><a href='add_product.php'>";
		echo "<img src='public/admin/images/icons/control/16/add.png'>";
		echo "<span>Thêm mới"."</span>";
		echo "</a></li>";
		?>
       
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="line"></div>



 <div id="main_product" class="wrapper">
  <?php
  	include ("ketnoi.php");
	include("sanpham.php");
	?>
  
  </div>

</html>