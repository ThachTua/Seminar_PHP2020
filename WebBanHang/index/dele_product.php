<?php
	
  if(isset($_GET['id']) && $_GET['id'] != null ) 
  {
    include ("ketnoi.php");
    $del = "DELETE FROM all_product WHERE id_product ='".$_GET['id']."'";
    $k =	mysqli_query($conn,$del) or die ('Cannot select all_product'.mysqli_error($conn));
    if($k)
     	echo "xóa sản phẩm thành công";
    else
      echo "xoa khong thanh cong";
  }

?>

