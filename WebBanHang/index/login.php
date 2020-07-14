<?php
    session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login.info </title>
  <style>
   input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
   
</head>

<body>
<h1>Đăng nhập tài khoản</h1>
    <?php
            $email = $password = "";
            if(isset($_POST['ok'])){
                if(!isset($_POST['username']) || $_POST['username'] == NULL){
                    echo "<p>Vui lòng nhập họ tên đầy đủ<p>";
                }else{
                    $email = $_POST['username'];
                }
                if(!isset($_POST['password']) || $_POST['password'] == NULL){
                    echo "<p>Mật khẩu không được bỏ trống<p>";
                }else{
                    $password = $_POST['password'];
                }
                if($email && $password){
                    //Connect database;
 					include "ketnoi.php";
                    $login = "select *from account WHERE email='".$email."' and password='".($password)."'";//cần thiết cần mã hóa md5
					         $login_res=mysqli_query($conn,$login) or die ('Cannot select account'.mysqli_error($conn));
                    $total = mysqli_num_rows($login_res);
                    if($total != 0){
                        $userInfo = mysqli_fetch_assoc($login_res);
                        $_SESSION['user'] = $userInfo['name'];
                        $_SESSION['level'] = $userInfo['level'];
                        if($_SESSION['level']=="Admin"||$_SESSION['level']=="admin")
                        {
                          header("location:home.php");//admin/admin.php

                        }
                        else
                         header("location:index.php");//admin/admin.php
                    }else{
                        echo "<p>Email or password không đúng !!!</p>";  
                    }
                }
                          
            }
?>
<div class="container">
    <form action="login.php" method="post">
      <label for="uname"><b>Username</b></label>
      <input type="text" name="username" size="25" placeholder="Enter Password" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name='ok'>Login</button>
      
      </form>
</div>

</body>
</html>
