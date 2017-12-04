<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/bnews/inc/header.php';?>
<div class="leftpanel">
	<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/bnews/inc/left_bar.php';?>
</div>
<div class="rightpanel">
	<div class="rightbody">
		<h1 class="title">Tin tức</h1>
		<div class="items-new">
			<ul>
			<?php
			$query = "SELECT * FROM news";
			$result = $mysqli-> query($query);
			while($arNews = mysqli_fetch_assoc($result)){
				$id_news  =$arNews['id_news'];
				$preview_text = $arNews['preview_text'];
				$picture = $arNews['picture'];
				$name = $arNews['name'];
			?>
				<li>
					<h2>
						<a href="chitiet.php?id_detail=<?php echo $id_news?>" title=""><?php echo $name?></a>
					</h2>
					<div class="item">
						<a href="chitiet.php?id_detail=<?php echo $id_news?>" title=""><img src="/bnews/templates/bnews/images/tmp/<?php echo $picture?>" alt="" /></a>
						<p><?php echo $preview_text?></p>
						<div class="clr"></div>
					</div>
				</li>
			<?php
			}
			?>	
			</ul>
			
			<div class="paginator">
				<a href="">Trang 1</a> | 
				<a href="" class="active">Trang 2</a> |
				<a href="">Trang 3</a> |
				<a href="">Trang 4</a>
			</div>
		</div>
	</div>
</div>
<div class="clr"></div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/bnews/inc/footer.php';?>			
			
