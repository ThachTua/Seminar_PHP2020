

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
            include ("ketnoi.php");
            include("left.php");
        ?>
</div>

<div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Quản trị viên</h5>
      <span>Quản lý admin</span> </div>
    <div class="horControlB menu_action">
      <ul>
 <?php
		include ("ketnoi.php");
		
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
     
            <!---------------------center---------------------------------->
<?php
include("ketnoi.php");
$id=$_GET['id'];

if(isset($_POST['ok']))
{
	$e = $p = $l = "";
 
 if($_POST['password'] != $_POST['repassword'])
 {
  $errorPass= "Password and re-password is not correct";
 }
 else
 {
  if($_POST['password'] != "")
  {
   $p=$_POST['password'];
  }
  
 }
 if($_POST['email'] == "")
 {
  $errorEmail= "Please enter your email";
 }
 else
 {
  $e=$_POST['email'];
 }
if(  $_POST['level'] =="")
{
	$errorLevel="chon level";
	
}
else
{
	$l=$_POST['level'];
}
 
  //$sql="update account set password='".$p."', level='".$l."',email='".$e."' where id_account='".$id."'";
  $sql="update account set password='$p',level='$l',email='$e' where id_account=$id";
          if(mysqli_query($conn,$sql))
						{
							echo "cập nhật thành công";
              header("location:home.php");  
						}
						else
						{
							echo "cập nhật thất bại";
              header("location:edit_admin.php"); 
						}
 
}
/*
$sql="select * from account where id_account='".$id."'";
$query=mysqli_query($conn,$sql) or die ('Cannot select menu'.mysqli_error($conn));
$row=mysqli_fetch_array($query);*/
?>
            
            
            
            
     <div class="wrapper">
      <div class="widget">
           <div class="title">
			<h6>Cập nhật tài khoản</h6>
		</div>
		
		 
      <form id="form" class="form" enctype="multipart/form-data" method="post" action="edit_admin.php?id= <?php echo $id ?>">
          <fieldset>
          
           <div class="formRow">
               
                <label class="formLeft" for="param_cat">Level:<span class="req">*</span></label>
                <div class="formRight">
                    <select name="level" _autocheck="true" id="param_cat" class="left">
                        <option value="">level</option>
                        <option value='Member'>Member</option>
                        <option value='Admin'>Admin </option>
                    </select>
                                
                    <?php
                        echo isset($errorLevel) && $errorLevel != "" ? $errorLevel: "";
                    ?>
                    <span name="cat_autocheck" class="autocheck"></span>
                    <div name="cat_error" class="clear error"></div>
                </div>
                <div class="clear"></div>
            </div>
                        
                 <div class="formRow">
                	<label for="param_username" class="formLeft">Password:<span class="req">*</span></label>
                     <?php
                        echo isset($errorPass) && $errorPass != "" ? $errorPass: "";
                 		?>
                	<div class="formRight">
                		<span class="oneTwo"><input type="password" _autocheck="true" id="param_password" name="password">
                   </span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"></div>
                	</div>
                	<div class="clear"></div>
                </div>
                
                
                 <div class="formRow">
                	<label for="param_username" class="formLeft">Nhập lại mật khẩu:<span class="req">*</span></label>
                	<div class="formRight">
                		<span class="oneTwo"><input type="password" _autocheck="true" id="param_re_password" name="repassword"></span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"></div>
                	</div>
                	<div class="clear"></div>
                </div>
                
                <div class="formRow">
                	<label for="param_username" class="formLeft">Email:<span class="req">*</span></label>
                    <?php
                            echo isset($errorEmail) && $errorEmail != "" ? $errorEmail: "";
                        ?>
                	<div class="formRight"><span class="oneTwo">
                	  <input type="text" _autocheck="true" id="param_re_password2" name="email" value="">
                	</span><span class="autocheck" name="name_autocheck"></span>
               		  <div class="clear error" name="name_error"></div>
                	</div>
                	<div class="clear"></div>
                </div>
                
                <div class="formSubmit">
	           			<input type="submit" class="redB" name="ok" value="Cập nhật">
	           	</div>
          </fieldset>
      </form>       
       </div>
  </div>     
            
</body>
</html>