
<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vườn Nước Hoa</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="../jquery/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../js/jssor.slider.min.js"></script>
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="public/admin/crown/css/main1.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $(document).ready(function() {
        // OPACITY OF BUTTON SET TO 0%
        $(".roll").css("opacity","0");
         
        // ON MOUSE OVER
        $(".roll").hover(function () {
         
        // SET OPACITY TO 70%
        $(this).stop().animate({
        opacity: .7
        }, "slow");
        },
         
        // ON MOUSE OUT
        function () {
         
        // SET OPACITY BACK TO 50%
        $(this).stop().animate({
        opacity: 0
        }, "slow");
        });
});
</script>
</head>

<?php
            

            if(isset($_POST['ok'])) {
                $email = $phone = "";$name = $_SESSION['user'];
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
               if($_POST['address'] == ""){
                    $errorAddress = "Vui lòng nhập địa chỉ, để chúng tôi có thể giao hàng cho bạn!";
               }else{
                    $address = $_POST['email'] ;
               }

               if($name && $phone  && $email && $diachi){
                    include ("ketnoi.php");
                    $kh = mysqli_query($conn,"SELECT * FROM account where name ='".$_SESSION['user']."'");
                    $idacc = mysqli_fetch_array($kh);
                    $kh1 = mysqli_query($conn,"SELECT * FROM customer ");
                    $demkh = mysqli_num_rows($kh1)+1;
                    $sqlkh = "insert into customer (id_customer,id_acc,name,address,phone,email) VALUES ('$demkh','$idacc[1]','$name','$diachi','$phone','$email')";
                    $k=mysqli_query($conn,$sqlkh);

                    $dh = mysqli_query($conn,"SELECT * FROM bill ");
                    $demdh = mysqli_num_rows($dh)+1;
                    $a="Đơn hàng ".$demdh;
                    $b=date("Y-m-d");
                    $sqldh1 = "insert into bill (id_bill,name_bill,id_customer,order_date) VALUES ('$demdh','$a','$demkh','$b')";
                    $q1=mysqli_query($conn,$sqldh1);
                    foreach($_SESSION['cart'] as $id =>$prd)
                    {
                      $arr_id[] = $id;
                    }
                      $sum_all = 0;
                      $str_id = implode(',',$arr_id);
                      $item_query = "SELECT * FROM  all_product WHERE id_product IN ($str_id) ORDER BY id_product ASC";
                      $item_result = mysqli_query($conn,$item_query) or die ('Cannot select table!');
                      while ($rows = mysqli_fetch_array($item_result))
                      {
                        $sum_all += $rows['price_product']*$_SESSION['cart'][$rows['id_product']];
                        $c=$_SESSION['cart'][$rows['id_product']];
                        $d=$rows['price_product']*$_SESSION['cart'][$rows['id_product']];
                         $sqlct = "insert into bill_detail (id_bill,id_product,amount,price) VALUES ('$demdh','$rows[0]','$c','$d')";
                        $ct= mysqli_query($conn,$sqlct); 
                      }
                        $sqldh2 = "insert into bill (total_price) VALUES ($sum_all)";
                        $q2=mysqli_query($conn,$sqldh2);

                        echo "<script language='javascript'>";
                        echo "alert('Đặt hàng thành công')";
                        echo "</script>";
                        $_SESSION['cart'] = NULL;
                        //header("location:index.php");
               }
             }
        ?>
<?php
  if(empty($_SESSION['user']))
  {
    echo "<b style='color:#DD0000' >Bạn chưa đăng nhập!<br> Để đặt hàng bạn cần"."<a href='login.php'> đăng nhập</a>!!</b>";
  }
?>

<body>
<div class="wrapper">
      <div class="widget">
           <div class="title">
      <h6>THÔNG TIN ĐẶT HÀNG CỦA BẠN</h6>
      </div>
  <form id="form" class="form" enctype="multipart/form-data" method="post" action="checkout.php">
          <fieldset>
                
                
                 <div class="formRow">
                  <label for="param_username" class="formLeft" >Họ tên nhận hàng:<span class="req">*</span></label>
                     <?php
                        echo isset($errorName) && $errorName != "" ? $errorName: "";
                    ?>
                  <div class="formRight">
                    <span class="oneTwo">
                      <input type="text" _autocheck="true" id="param_username" name ="username" value="<?php echo $_SESSION['user']; ?>"/>
                    </span>
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
                  <label for="param_username" class="formLeft">Thông tin sản phẩm:</label>
                    
                  <div class="formRight">

                    <div class="main-shopping">

                    <table cellpadding="1" cellspacing="1" border="1" width="800px" align="center">
          <tr align="center" bgcolor="#DDDDDD">
              <td>Mã sản phẩm</td>
                <td>Hình ảnh</td>
                <td>Tên</td>
                <td>Giá</td>
                <td>Số lượng</td>
                <td>Thành tiền</td>
            </tr>
                    <?php
                          include "ketnoi.php";
                          $sum_all = 0;
                          if($_SESSION['cart'] != NULL)
                          {
                            foreach($_SESSION['cart'] as $id =>$prd)
                            {
                              $arr_id[] = $id;
                            }
                            $str_id = implode(',',$arr_id);
                            $item_query = "SELECT * FROM  all_product WHERE id_product IN ($str_id) ORDER BY id_product ASC";
                            $item_result = mysqli_query($conn,$item_query) or die ('Cannot select table!');
                            while ($rows = mysqli_fetch_array($item_result))
                            {
                        ?>
                              <tr height="100px">
                                    <td align="center"><?php echo $rows['id_product'] ?></td>
                                    <td><img src="../images/<?php echo $rows['link_product']; ?>"></td>
                                    <td align="center"><font color="#33CCCC"><a href="chitiet.php?id=<?php echo $rows['id_product']; ?>"><?php echo $rows['name_product']; ?></a></font></td>
                                    <td align="center"><font color="#DD0000"><?php echo number_format($rows['price_product']);?> VNĐ</font></td>
                                    <td align="center">
                                    <?php echo $_SESSION['cart'][$rows['id_product']]; ?>
                                    </td>
                                    <td align="center"> <font color="#DD0000"><?php echo number_format($rows['price_product']*$_SESSION['cart'][$rows['id_product']]); ?> VNĐ</font></td>
                                    
                              </tr>

                        <?php
                          $sum_all += $rows['price_product']*$_SESSION['cart'][$rows['id_product']];
                            }
                          echo "<tr><td colspan='2'><b>Tổng tiền</b></td>";
                         
                        ?>
                          <td align="center" class="sum_money"><font color="#DD0000" size="+2">
                            <?php echo number_format($sum_all); ?> VNĐ</font></td>
                        <?php 
                        echo "</td></tr>";
                          }
                        ?>
                    </table>
                  </div>
                  </div>
                  <div class="clear"></div>
                </div>
                
                <div class="formRow">
                  <label for="param_username" class="formLeft">Email:<span class="req">*</span></label>
                    <?php
                    echo isset($errorEmail) && $errorEmail != "" ? $errorEmail: "";
                  ?>

                  <div class="formRight">
                    <span class="oneTwo"><input type="text" _autocheck="true"  name="email" id="kiemtra"></span>            
                    <span class="autocheck" name="name_autocheck"></span>
                    <div class="clear error" name="name_error"></div>
                  </div>
                  <div class="clear"></div>
                </div>
                

                <div class="formRow">
                  <label for="param_username" class="formLeft">Địa chỉ:<span class="req">*</span></label>
                  <?php
                    echo isset($errorAddress) && $errorAddress != "" ? $errorAddress: "";
                  ?>
                  <div class="formRight">
                    <span class="oneTwo"><input type="text" _autocheck="true"  name="address"></span>
                    <span class="autocheck" name="name_autocheck"></span>
                    <div class="clear error" name="name_error"></div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div class="formSubmit">

                <?php
                  if(isset($_SESSION['user']) && $_SESSION['cart']!=NULL)
                  {
                ?>                  
                  <input type="submit" class="redB" name="ok" value="ĐẶT HÀNG">
                <?php
                  }
                  else
                     echo "Bạn cần mua sắm <a href='index.php'> tại đây </a>";
                ?>
              </div>
          </fieldset>
      </form>
      </div>
</div>
</body>
</html>