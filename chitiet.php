<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/bnews/inc/header.php';?>
<div class="leftpanel">
	<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/bnews/inc/left_bar.php';?>
</div>
<div class="rightpanel">
	<div class="rightbody">
	<?php
	$id_detail = $_GET['id_detail'];
	$queryDetail = "SELECT *FROM news WHERE id_news = {$id_detail}";
	$resultDetail = $mysqli->query($queryDetail);
	$arDetail = mysqli_fetch_assoc($resultDetail);
	?>
		<h1 class="title"><?php echo $arDetail['name']?></h1>
		<div class="items-new">
			<div class="new-detail">
				<?php echo $arDetail['detail_text']?>
			</div>
		</div>
		
		<h2 class="title" style="margin-top:30px;color:#BBB">Tin tức liên quan</h2>
		<div class="items-new">
			<ul>
				<li>
					<h2>
						<a href="chitiet.php?id_detail=1" title="Trung Quốc điều thêm 17 tàu đến khu vực giàn khoan">Trung Quốc điều thêm 17 tàu đến khu vực giàn khoan</a>
					</h2>
					<div class="item">
						<a href="chitiet.php?id_detail=1" title="Trung Quốc điều thêm 17 tàu đến khu vực giàn khoan"><img src="/bnews/templates/bnews/images/tmp/hinh1.jpg" alt="Trung Quốc điều thêm 17 tàu đến khu vực giàn khoan"></a>
						<p>Để bảo vệ giàn khoan, Trung Quốc đã điều thêm 17 tàu các loại so với hôm trước, sẵn sàng đâm va vào tàu Việt Nam.</p>
						<div class="clr"></div>
					</div>
				</li>
				<li>
					<h2>
						<a href="chitiet.php?id_detail=2" title="Trọng tài - vết đen của kỳ World Cup sôi động ">Trọng tài - vết đen của kỳ World Cup sôi động </a>
					</h2>
					<div class="item">
						<a href="chitiet.php?id_detail=2" title="Trọng tài - vết đen của kỳ World Cup sôi động "><img src="/bnews/templates/bnews/images/tmp/hinh2.jpg" alt="Trọng tài - vết đen của kỳ World Cup sôi động "></a>
						<p>World Cup 2014 chưa đi hết lượt đầu vòng bảng nhưng các trọng tài đẳng cấp FIFA đã có tới bốn trận bị chỉ trích dữ dội.</p>
						<div class="clr"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="clr"></div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/bnews/inc/footer.php';?>	