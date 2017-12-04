<?php include 'inc/header.php'?>
			<div class="content-left fl">
				<?php include 'inc/left_bar.php'?>
			</div>
			<div class="content-right fr">
				<h3>Thêm dữ liệu</h3>
				<div class="main-content">
					<form action="" method="post">
						Tên tin: <input type="text" name="name" value="" /><br /><br />
						Mô tả: <textarea rows="3" cols="20" name="preview_text"></textarea><br /><br />
						Hình ảnh: <input type="file" name="picture" value="" /><br /><br />
						
						<input type="submit" name="submit" value="Thêm tin" />
					</form>
				</div>
			</div>
<?php include 'inc/footer.php'?>