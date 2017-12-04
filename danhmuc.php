<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/bnews/inc/header.php';?>
				<div class="leftpanel">
					<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/bnews/inc/left_bar.php';?>
				</div>
				<div class="rightpanel">
					<div class="rightbody">
					<?php
					$id_cat = $_GET['id_cat'];
					$queryCat = "SELECT * FROM cat WHERE id_cat = {$id_cat}";
					$resultCat = $mysqli->query($queryCat);
					$arCat = mysqli_fetch_assoc($resultCat);
					?>
						<h1 class="title">Tin tức >> <?php echo $arCat['name'];?></h1>
						<div class="items-new">
							<ul>
							<?php
							$queryNew = "SELECT * FROM news WHERE id_cat = {$id_cat}";
							$resultNew = $mysqli->query($queryNew);
							while($arNew = mysqli_fetch_assoc($resultNew)){
								$name = $arNew['name'];
								$preview_text = $arNew['preview_text'];
								$id_news = $arNew['id_news'];
								$picture = $arNew['picture'];
							?>
								<li>
									<h2>
										<a href="chitiet.php?id_detail=<?php echo $id_news;?>" title=""><?php echo $name;?></a>
									</h2>
									<div class="item">
										<a href="chitiet.php?id_detail=<?php echo $id_news;?>" title=""><img src="/bnews/templates/bnews/images/tmp/<?php echo $picture;?>" alt="" /></a>
										<p><?php echo $preview_text;?></p>
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