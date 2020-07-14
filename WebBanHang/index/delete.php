<?php
  if(isset($_GET['id']) && $_GET['id'] != null ) {
  	include "ketnoi.php";
	
     $del = "DELETE FROM account WHERE id_account ='".$_GET['id']."'";
     mysqli_query($conn,$del) or die ('Cannot select account'.mysqli_error($conn));
     echo "Xóa thành công";
  }
?>