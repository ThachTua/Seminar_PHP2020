

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
            if(isset($_POST['ok'])) {
               $name = $email = $pass = $level = "";$diachi=$_POST['address'];
               if($_POST['username'] == ""){
                    $errorName = "Vui long nhap ten";
               }else{
                    $name = $_POST['username'] ;
               }
               if($_POST['email'] == ""){
                    $errorEmail = "Vui long nhap email";
               }else{
                    $email = $_POST['email'] ;
               }
               if($_POST['level'] == ""){
                    $errorLevel = "Vui chon level";
               }else{
                    $level = $_POST['level'] ;
               }
               if($_POST['password'] != ""){
                    if($_POST['repassword'] != $_POST['password']){
                        $errorPass = "Password khong trung nhau";
                    }else{
                        $pass = $_POST['password'];
                    }
               }else{
                    $errorPass = "Vui long nhap password";
               }
               if($name && $level && $pass && $email){
                    
                    $query = mysqli_query("SELECT * FROM account where email ='".$email."'");
                    $totalCheck = mysqli_num_rows($query);
                    if($totalCheck > 0){
                        echo "<p>Email đã tồn tại trong database</p>";
                    }
					     else{
                    $sq="select * from account";
                    $k=mysqli_query($conn,$sq);
                    $count=mysqli_num_rows($k)+1;

                    $sql = "insert into account (id_account,name,email,password,level,address) VALUES('$count','$name','$email','$pass','$level','$diachi')";

                        if(mysqli_query($conn,$sql)==true)
            						{
            							echo "Thêm thành công";
            						}
                        else
                        {	
            							echo "that bai";
            						}
						
                        header("location:home.php");   
                    }
               }
            }
        ?>          

<div class="wrapper">
      <div class="widget">
           <div class="title">
			<h6> Thêm mới Tài khoản</h6>
			</div>

	<form id="form" class="form" enctype="multipart/form-data" method="post" action="add.php">
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
                	<label for="param_username" class="formLeft" >Username:<span class="req">*</span></label>
                     <?php
                        echo isset($errorName) && $errorName != "" ? $errorName: "";
                    ?>
                	<div class="formRight">
                		<span class="oneTwo"><input type="text" _autocheck="true" value="" id="param_username" name="username"></span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"></div>
                	</div>
                	<div class="clear"></div>
                </div>
                
                 <div class="formRow">
                	<label for="param_username" class="formLeft">Password:<span class="req">*</span></label>
                    <?php
                        echo isset($errorPass) && $errorPass != "" ? $errorPass: "";
                    ?>
                	<div class="formRight">
                		<span class="oneTwo"><input type="password" _autocheck="true" id="param_password" name="password"></span>
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
                	<div class="formRight">
                		<span class="oneTwo"><input type="text" _autocheck="true"  name="email"></span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"></div>
                	</div>
                	<div class="clear"></div>
                </div>

                 <div class="formRow">
                  <label for="param_username" class="formLeft">Địa chỉ:</label>
                  <div class="formRight">
                    <span class="oneTwo"><input type="text" _autocheck="true"  name="address"></span>
                    <span class="autocheck" name="name_autocheck"></span>
                    <div class="clear error" name="name_error"></div>
                  </div>
                  <div class="clear"></div>
                </div>
                
                <div class="formSubmit">
	           			<input type="submit" class="redB" name="ok" value="Thêm mới">
	           	</div>
          </fieldset>
      </form>
      
      
      </div>
</div>
</body>
</html>