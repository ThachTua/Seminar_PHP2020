<html>
<head>
<link rel="stylesheet" type="text/css" href="public/admin/crown/css/main.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
</head>

<body>
<div id="left_content">
  <?php
            include("ketnoi.php");
            include("left.php");
        ?>
</div>

<div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Sản phẩm</h5>
      <span>Thêm mới sản phẩm</span> </div>
    <div class="horControlB menu_action">
      <ul>
        <?php
		include("ketnoi.php");
		
		echo "<li><a href=''>";
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
                
		   <?php
           ini_set('display_errors', 0 );
           include("ketnoi.php");
           if(isset($_POST['ok'])) 
		   {
               $ten=$_POST['ten'];
			  
			  //if($_FILES['linkanh']['name'])
			  {
				  $linkanh=$_FILES['linkanh']['name'];
				  $file_path=$_FILES['linkanh']['tmpname'];
				  $new_path="$linkanh";
				 //$img_path=$new_path;
				 
			  }
			  //else
			  {
				  //$img_path=$img_path;
			  }
			   $gia=$_POST['price'];
			
			   $sq="select * from all_product";
               $k=mysqli_query($conn,$sq);
               $count=mysqli_num_rows($k)+1;

               $b=date("Y-m-d");

			   $sanphammoi="insert into all_product(id_product,name_product,link_product,price_product,date_update) values
			   ('$count',$ten','$linkanh','$gia','$b')";
			   $k=mysqli_query($conn,$sanphammoi);
			    if($k)
			    {
					  //echo 'Thêm thành công!';
					  echo "<script>";
					  echo "alert('Thêm thành công!')";
					  echo "</script>";
					  header("location:product.php");
				}
				// else
					  
					  echo 'Không thêm được!';
			   
            }
			
   
   ?>             
                
                
                
<div class="wrapper">
    
	   	<!-- Form -->
<form enctype="multipart/form-data" method="post" action="add_product.php" id="form" class="form">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img class="titleIcon" src="public/admin/images/icons/dark/add.png">
						<h6>Thêm mới Sản phẩm Ngày <?php echo date("d-m-Y");?></h6>
					</div>
					
				    <ul class="tabs">
		                <li class="activeTab"><a href="#tab1">Thông tin chung</a></li>
		                
		                
					</ul>
					
					<div class="tab_container">
					     <div class="tab_content pd0" id="tab1" style="display: block;">
                         
 <div class="formRow">
	<label for="param_name" class="formLeft">Tên:<span class="req">*</span></label>
    
	<div class="formRight">
		<span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="ten"></span>
		<span class="autocheck" name="name_autocheck"></span>
		<div class="clear error" name="name_error"></div>
	</div>
	<div class="clear"></div>
</div>



<div class="formRow">
	<label class="formLeft">Hình ảnh:<span class="req">*</span></label>
      

	<div class="formRight">
		<div class="left">
    		<input type="file" name="linkanh" id="image" size="25">
		</div>
		<div class="clear error" name="image_error"></div>
	</div>
	<div class="clear"></div>
</div>



<!-- Price -->
<div class="formRow">
	<label for="param_price" class="formLeft">
		Giá :
		<span class="req">*</span>
	</label>
	<div class="formRight">
		<span class="oneTwo">
			<input type="text" _autocheck="true" class="format_number" id="param_price" style="width:100px" name="price">
			<img src="public/admin/crown/images/icons/notifications/information.png"g" style="margin-bottom:-8px" class="tipS" original-title="Giá bán sử dụng để giao dịch">
		</span>
		<span class="autocheck" name="price_autocheck"></span>
		<div class="clear error" name="price_error"></div>
	</div>
	<div class="clear"></div>
</div>



<!-- Price -->





<!-- End tab_container-->
	        		
	        		<div class="formSubmit">
	           			<input type="submit" class="redB" name="ok" value="Thêm mới">
	           			
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>
<div class="clear mt30"></div>



</body>
</html>