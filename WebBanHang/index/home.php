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
      <h5>Quản trị viên</h5>
      <span>Quản lý admin</span> </div>
    <div class="horControlB menu_action">
      <ul>
        
        <?php
		
		echo "<li><a href='add.php'>";
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

						<!--center-->
  <div class="wrapper">
  <?php
	
	include("admin.php");
	?>
  
  </div>

</html>
