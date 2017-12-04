<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/admin/inc/header.php';?>
<!-- Form elements -->    
<div class="grid_12">
	<?php
	if(isset($_POST	['them'])){
		$tentin = $_POST['tentin'];
		$danhmuctin = $_POST['danhmuc'];
		$picture = $_POST[hinhanh]['name'];
		$preview_text = $_POST['mota'];
		$detail_text = $_POST['chitiet'];
	$query = "INSERT INTO news()";
	}
	
	?>
	<div class="module">
		 <h2><span>Thêm tin tức</span></h2>
			
		 <div class="module-body">
			<form action="" enctype="multipart/form-data" method="POST">
				<p>
					<label>Tên tin</label>
					<input type="text" name="tentin" value="" class="input-medium" />
				</p>
				<p>
					<label>Danh mục tin</label>
					<select  name="danhmuc" class="input-short">
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
					</select>
				</p>
				<p>
					<label>Hình ảnh</label>
					<input type="file"  name="hinhanh" value="" />
				</p>
				<p>
					<label>Mô tả</label>
					<textarea name="mota" value="" rows="7" cols="90" class="input-medium"></textarea>
				</p>
				<p>
					<label>Chi tiết</label>
					<textarea  name="chitiet" value="" rows="7" cols="90" class="input-long"></textarea>
				</p>
				<fieldset>
					<input class="submit-green" name="them" type="submit" value="Thêm" /> 
					<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/admin/inc/footer.php';?>
