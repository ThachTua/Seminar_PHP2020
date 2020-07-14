

<link rel="stylesheet" type="text/css" href="public/admin/crown/css/main1.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script >
  $(document).ready(function(){
    $("#kiemtra").blur(function(){
      var u=$(this).val();
      $.post("kiemtradangki.php",{mail:u}, function(data){
      if(data==0)
      {
        $("#nhacloi").html("Email bạn nhập hợp lệ");
        $("#nhacloi").css("color", "blue");
      }
      else
      {
        $("#nhacloi").html("Email bạn vừa nhập đã tồn tại, vui lòng nhập lại!");
        $("#nhacloi").css("color", "red");
      }
      });
    });
  });
</script>

<?php
            if(isset($_POST['ok'])) {
               $name = $email = $pass = $phone = "";
               $diachi=$_POST['address'];
               if($_POST['username'] == ""){
                    $errorName = "Vui lòng nhập tên";
               }else{
                    $name = $_POST['username'] ;
               } 
               if($_POST['phone'] == ""){
                    $errorPhone = "Vui lòng nhập số điện thoại";
               }else{
                    $phone = $_POST['phone'] ;
               }
               if($_POST['email'] == ""){
                    $errorEmail = "Vui lòng nhập email";
               }else{
                    $email = $_POST['email'] ;
               }
              
               if($_POST['password'] != ""){
                    if($_POST['repassword'] != $_POST['password']){
                        $errorPass = "Password không trùng nhau";
                    }else{
                        $pass = $_POST['password'];
                    }
               }else{
                    $errorPass = "Vui lòng nhập password";
               }
               if($name && $phone && $pass && $email){
                    include ("ketnoi.php");
                    $query = mysqli_query($conn,"SELECT * FROM account where email ='".$email."'");
                    $totalCheck = mysqli_num_rows($query);
                    if($totalCheck > 0){
                        echo "<p>Email đã tồn tại trong database</p>";
                    }
					         else{
                    $sq="select * from account";
                    $k=mysqli_query($conn,$sq);
                    $count=mysqli_num_rows($k)+1;//tra ve so dong trong bang

                     $sql = "insert into account (id_account,name,phone,email,password,level,address,id) VALUES('$count','$name','$phone','$email','$pass','member','$diachi',1)";
                       $kq= mysqli_query($conn,$sql);
              						if($kq)
                          {
              							echo "Đăng kí thành công" ;
                            header("location:login.php");
                          }
                          else
                						{
  							             echo "Đăng kí không thành công, đăng kí lại nhé!";
                             header("localtion:dangki.php");
                            }
						
						
                           
                    }
               }
            }
        ?>          
<div class="wrapper">
      <div class="widget">
           <div class="title">
      <h6> ĐĂNG KÍ</h6>
      </div>

	<form id="form" class="form" enctype="multipart/form-data" method="post" action="dangki.php">
          <fieldset>
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
                  <label for="param_username" class="formLeft" >Số điện thoại:<span class="req">*</span></label>
                     <?php
                        echo isset($errorPhone) && $errorPhone != "" ? $errorPhone: "";
                    ?>
                  <div class="formRight">
                    <span class="oneTwo"><input type="text" _autocheck="true" value="" id="param_username" name="phone"></span>
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
                  <div id="nhacloi"></div>
                	<div class="formRight">
                		<span class="oneTwo"><input type="text" _autocheck="true"  name="email" id="kiemtra"></span>
                    <div id="nhacloi"></div>              		
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
	           			<input type="submit" class="redB" name="ok" value="Đăng Kí">
	           	</div>
          </fieldset>
      </form>
      
      
      </div>
</div>
