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

<body>
<div id="wrapper">
<?php
	include("ketnoi.php");
	include("header.php");
	include("menu.php");
?>
	<h2 class='title'><span>ĐỊA CHỈ MUA NƯỚC HOA CHÍNH HÃNG</span></h2>
			<h4 id="h4_left">DANH MỤC NƯỚC HOA<h4>
			<div id="sitebar_left">
				<ul class="sitebar_boy">
							<?php
								$submenu_query ="SELECT * FROM submenu where parent = 3";
								$submenu_res = mysqli_query($conn,$submenu_query) or die ('Cannot select menu1');
								while ($submenu_items = mysqli_fetch_array($submenu_res))
								{
									echo '<a href="menu-wfb.php"><li>'.$submenu_items["sub_name"].'</li></a>';
								}
							?>	
				</ul>
				<ul class="sitebar_girl">
					<?php
								$submenu_query ="SELECT * FROM submenu where parent = 4";
								$submenu_res = mysqli_query($conn,$submenu_query) or die ('Cannot select menu1');
								while ($submenu_items = mysqli_fetch_array($submenu_res))
								{
									echo '<a href="menu-wfg.php"><li>'.$submenu_items["sub_name"].'</li></a>';
								}
					?>					
				</ul>
				<ul class="sitebar_girl">
							<?php
								$submenu_query ="SELECT * FROM submenu where parent = 5";
								$submenu_res = mysqli_query($conn,$submenu_query) or die ('Cannot select menu1');
								while ($submenu_items = mysqli_fetch_array($submenu_res))
								{
									echo '<a href="menu-product-different.php"><li>'.$submenu_items["sub_name"].'</li></a>';
								}
							?>	
				</ul>
			</div>


						<div id="sitebar_right">
							<strong>1. Nguồn gốc xuất xứ các sản phẩm tại <em>Vuonnuochoa.com</em> ?</strong><br/>
							<p>Tất cả các sản phẩm được nhập chính gốc tại hệ thống cửa hàng<em> Sephora</em> ( <em>http://www.sephora.fr/</em> ) – một tập đoàn hàng đầu của Pháp chuyên cung cấp nước hoa và mỹ phẩm và có hơn 1.300 cửa hàng tại 27 quốc gia trên thế giới.</p>
							<strong>2. Nguyên liệu và thành phần của các dòng nước hoa tại <em>Vuonnuochoa.com</em>?</strong><br/>
							<p>Tinh dầu thơm pha chế tinh xảo được chiết xuất từ các nguyên liệu thiên nhiên có sẵn tại khu vực châu Âu, còn các sản phẩm cùng thương hiệu trên thị trường lại sử dụng hương liệu và nguyên liệu hóa học. Mùi hương an toàn và ổn định: do nồng độ cồn bên trong chia nước hoa chiếm lượng cực nhỏ và khi sử dụng, sản phẩm sẽ không bị biến mùi dưới tác động của thời tiết hay thân nhiệt. Nên hương thơm sẽ được lưu lại cực kỳ sang trọng và quý phái.</p>
							<strong>3. Chất lượng và độ lưu hương của các sản phẩm tại <em>Vuonnuochoa.com</em></strong><br/>
							<p>Để chắc chắn đưa ra những sản phẩm tốt và chất lượng cao nhất, chúng tôi đã tìm mua và nghiên cứu 3 loại nước hoa từ 3 nơi khác nhau là : Thái Lan, Singapore và Pháp để so sánh. Kết quả thấy được vô cùng thuyết phục! Nước hoa được sản xuất tại một số nước Châu Á có tỉ lệ tinh dầu thấp hơn rất nhiều so với các dòng nước hoa được sản xuất tại Pháp. Nước hoa Pháp có đầy đủ 3 tầng hương là: hương đầu, hương giữa và hương cuối. Khi sử dụng cả 3 tầng hương thơm này luôn nối tiếp và hòa quyện nhau tạo ra hương thơm rõ ràng, sắc nét và kéo dài 3 ngày và thậm chí vài tháng trên quần áo! Để có thể đảm bảo được độ an toàn cho sức khỏe người tiêu dùng, nước hoa Pháp đạt được các tiêu chuẩn Châu Âu vô cùng khắt khe và hoàn toàn không gây kích ứng da kể cả làn da nhạy cảm hay da em bé. Nước hoa Pháp quả thực là một sự lựa chọn vô cùng tuyệt vời cho những ai thích sử dụng và đam mê nước hoa!</p>
							<strong>4. Tại sao ở <em>Vuonnuochoa.com</em> bán giá cao hơn các nơi khác?</strong><br/>
						<p>Có một số sản phẩm made in USA, UK, Spain, Italy, v,v… với giá thành thấp hơn so với các sản phẩm xuất xứ tại Pháp. Bởi vì thực tế với nhiều lý do thương mại, có một số thương hiệu quyết định đặt nhà sản xuất và phân phối ngay tại các quốc gia đó để tiết kiệm chi phí vận chuyển, giảm được giá thành và chủ động kênh phân phối. Nhưng hơn hết, Pháp vẫn được coi là cái nôi của ngành công nghiệp nước hoa, và tiêu chuẩn nước hoa sản xuất tại Pháp vô cùng nghiêm ngặt nên chất lượng mang tính tuyệt đối, vì thế giá cả bao giờ cũng cao hơn so với các sản phẩm được sản xuất tại các thị trường khác. Hiện tại có rất nhiều trang web kinh doanh buôn bán nước hoa mang thương hiệu chính hãng nhưng chỉ bán với giá từ vài trăm đến một triệu đồng chai dung tích 100ml hoặc là giá chỉ bằng 1 nửa so với hàng chuẩn Authentic tại Pháp. Nếu tìm hiểu kỹ bạn sẽ nhận thấy rằng luôn luôn và mãi mãi chỉ có nước hoa thật giá tốt chứ không hề có nước hoa thật giá rẻ!</p>
						<strong>5. Cam kết của <em>Vuonnuochoa.com</em></strong><br/>
						<p>Chúng tôi luôn luôn đặt chất lượng của sản phẩm vào vị trí hàng đầu. Bởi hơn ai hết chúng tôi là người hiểu rõ nhất những tác hại khó lường trước của nước hoa giả, nước hoa nhái có nguồn gốc không rõ ràng trên thị trường sẽ ảnh hưởng không ít đến sức khỏe và sự an toàn của bạn! Chúng tôi kinh doanh và phát triển dựa trên sự tín nhiệm của khách hàng.<br/><strong>Do đó, chúng tôi cam kết các sản phẩm bán ra tại Vuonnuochoa.com là hàng sản xuất chính hãng của Pháp, nên các bạn có thể hoàn toàn yên tâm và hài lòng về chất lượng.</strong></p>
						<strong><h2>Lời kết</h2></strong><br/>
						<p>Bên cạnh mục đích đem hàng thật, hàng chính hãng từ Pháp chuyển về Việt Nam, thì lý do chủ yếu mà chúng tôi xây dựng website với mục đích chia sẻ sở thích và đam mê. Vì thế chúng tôi luôn sẵn sàng đón nhận ý kiến, đóng góp của những người tiêu dùng thông thái! Thân ái và trân trọng!</p>
						<strong><em>Vuonnuochoa.com</em> địa chỉ bán nước hoa chính hãng uy tín.</strong><br/>					
						</div>
<?php 
	echo'<div id="clear"></div>';
	include("footer.php");
	
?>
</div><!--end wrapper-->
</body>
</html>