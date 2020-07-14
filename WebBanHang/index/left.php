 <?php
  session_start();
?>

 <div id="leftSide" style="padding-top:30px;"> 
    
    <!-- Account panel -->
    
    <div class="sideProfile"><a href="home.php" title="" class="profileFace"><img width="40" src="public/admin/images/user.jpg"><span style="color:#300">Xin chào: <b style="color:#C00"><?php echo $_SESSION['user']; ?></b></span> <strong>Đại học Công nghệ Thông tin</strong></a>
      <div class="clear"></div>
    </div>
    <div class="sidebarSep"></div>
    <!-- Left navigation -->
    
    <div id='cssmenu'>
      <ul> <!--active-->
        <li class='active'><a href='home.php'><span>Home</span></a></li>
        <li class='has-sub'><a href='product.php'><span>Sản phẩm </span></a> </li>
        <li class='has-sub'><a href='home.php'><span>Tài khoản</span></a></li>
        <li class='has-sub'><a href="logout.php"> <img alt="" src="public/admin/images/icons/topnav/logout.png"> <span>Đăng xuất</span> </a></li>
      </ul>
    </div>

</div>

  <div class="clear"></div>