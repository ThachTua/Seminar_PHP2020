
<link rel="stylesheet" type="text/css" href="public/admin/crown/css/phantrang.css"/>

	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input type="checkbox" name="titleCheck" id="titleCheck"></span>
			<h6>
				Danh sách sản phẩm			
			</h6>
		 	<div class="num f12">Số lượng: <b></b></div>
		</div>
		
		<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
			
			
			<thead>
				<tr>
					
					<td style="width:60px;">Mã số</td>
					<td>Tên</td>
					<td>Giá</td>
					<td style="width:75px;">Ngày tạo</td>
					<td style="width:120px;" colspan="2">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="6">
<div class="phan_page">
	<?php
	ini_set('display_errors', 0);
	$product_query = "SELECT * FROM all_product";
	$product_size=8;
	$product_result = mysqli_query($conn,$product_query) or die ('Cannot select table!');
	$product_rows = mysqli_num_rows($product_result);
	//tinh so trang
	if($product_rows > $product_size)
		$page = ceil($product_rows/$product_size);
	else 
		$page = 0;
	if(isset($_GET['page']) && (int)$_GET['page'])
		$product_start = $_GET['page'];
	else
		$product_start = 1;
	
?>
<div class="percent_page">
<?php

	if($page==0)
	{
		echo '<ul>';
		}
		else
		{	
		echo '<ul>';
		}

?>

<?php

		if($_GET['page']>1)
		{
			echo '<li><a class="number_page" href="product.php?page='.($_GET['page']-1).'" ><b>&lt;&lt;</b></a></li>';}
		
		$page_cr=($page/$product_rows)+1; 
		
		for($i=1;$i<=$page;$i++) 
		{ 	
				if($i==$_GET['page'])
				{
					echo "<li><b><font  color='#ed1c2e' >".$i."</font></b></li>";
				}
				else
				 echo "<li><a class='number_page' href='product.php?page=".($i)."'>$i&nbsp;</a></li>";
		
		}
		if($_GET['page']<$page)
		{
			echo '<li><a href="product.php?page='.($_GET['page']+1).'" ><b>&gt;&gt;</b></a></li>';
		}
		

?>
</ul>
</div><!--end phan_page-->
</div><!--end phan_page-->
					</td>
				</tr>
			</tfoot>
            
            
			
			<tbody class="list_item">
			    
			     <tr >
                   <?php
				
						include("ketnoi.php");
						
					?>
                    <?php
					$x = ($product_start - 1)*$product_size;
					$product="select * from all_product limit $x,$product_size ";
					$product_res=mysqli_query($conn,$product) or die ('Cannot select admin'.mysqli_error($conn));		
					while($product_items=mysqli_fetch_assoc($product_res))
					{
						echo "<tr>";
					echo "<td class='textC'>".$product_items['id_product']."</td>";
					echo "<td>";
					echo '<div class="image_thumb">
						<img height="50" src="../images/'.$product_items["link_product"].'">
						<div class="clear">'.'</div></div>';
					
					
					echo '<a target="_blank" title="" class="tipS" >
					    <b>'.$product_items['name_product'].'</b>'.'</a>';
					
					
					echo '<div class="f11">
					 <b style="color:blue "> Đã bán:'.$product_items['buyed'].' | Xem:'.$product_items['view'].' 	'.' </a>'.'</div>'	;			
					
					
                    
					
						
					echo "</td>";
					
					echo '<td class="textR"><b style="color:red">'.number_format($product_items['price_product']).' '."".' '."đ".'</td>';
							
							
						
					 echo  '<td class="textC">'.$product_items['date_update'].' '."".''.'</td>';
					
					echo "<td class='option textC'>
						<a title='Xem chi tiết sản phẩm' class='tipS'  href='edit_product.php?ten_sp=".$product_items['id_product']."'>
								<img src='public/admin/images/icons/color/edit.png'>edit
						 </a>
						 </td>";
						 
						
					echo "<td class='option textC'>
						<a class='tipS verify_action' title='Xóa' href='dele_product.php?id=".$product_items['id_product']."'>
						    <img src='public/admin/images/icons/color/delete.png'>delete
						</a>
					</td>";
					echo "</tr>";
					}
					?>
				</tr>
				
		   </tbody>
			
		</table>
	</div>
	


