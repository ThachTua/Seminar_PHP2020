<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <?php
       //session_start();
    /*if(!isset($_SESSION['user']) || $_SESSION['id'] != 2){
        header("location:login.php");
      }*/

?>
<html>
<head>
 <script type="text/javascript">
    function xacnhan(){
        if(!window.confirm("Bạn có thực sự muốn xóa không ?")){
    		return false;
    	}
    }
</script>
</head>
<body>
<div class="widget">
  <div class="title"> <span class="titleIcon">
    <div class="checker" id="uniform-titleCheck"><span>
      <input type="checkbox" id="titleCheck" name="titleCheck" style="opacity: 0;">
      </span></div>
    </span>
    <h4>Danh sách Thành viên</h4>
  </div>
  <form action="" method="get" class="form" name="filter">
    <table border="2" cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
      <thead>
        <tr align="center">
          <td style="width:80px;">Id</td>
          <td>Name</td>
          <td>Password</td>
          <td>Level</td>
          <td>Email</td>
          <td>Address</td>
          <td style="width:100px;" colspan="2">Action</td>
        </tr>
      </thead>
      <tbody>
        <!-- Filter -->
        
        <tr align="center">
          <?php
				
						include("ketnoi.php");
					?>
          <?php
						$admin_sql=" select *from  account";
						$admin_res=mysqli_query($conn,$admin_sql) or die ('Cannot select account'.mysqli_error($conn));
						
						while($admin_items= mysqli_fetch_assoc($admin_res))
						{
							echo "<tr>";
							echo "<td class='textC'>".$admin_items['id_account']."</td>";
							echo "<td><span  class='tipS'>".$admin_items['name']."</span></td>";
							echo " <td><span  class='tipS'>".$admin_items['password']."</span></td>";

							 if($admin_items['level'] == "Admin" || $admin_items['level'] == "admin"){
                            echo "<td><span  class='tipS'><font color='red'>Admin</a></span></td>";   
                        	}else
                          {
                            echo "<td><span  class='tipS'><font color='#000'>Member</a></span></td>";
                        	}
							echo " <td><span  class='tipS'>".$admin_items['email']."</span></td>";
              echo " <td><span  class='tipS'>".$admin_items['address']."</span></td>";

							
							echo "<td class='option'><a href='edit_admin.php?id=".$admin_items['id_account']."' class='tipS' original-title='Chỉnh sửa'>
							<img src='public/admin/images/icons/color/edit.png'> Edit
							</a></td>
							<td>
							<a href='delete.php?id=".$admin_items['id_account']."' class='tipS verify_action' original-title='Xóa'>
							    <img src='public/admin/images/icons/color/delete.png'>Delete
							</a>
							
							</td>
							
							";

							echo "</tr>";					
						}
						
					?>
        </tr>
      </tbody>
    </table>

  </form>
</div>
</div>
</div>
</body>
</html>

