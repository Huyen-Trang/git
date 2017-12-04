<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/admin/inc/header.php';?>
<!-- Form elements -->    
<div class="grid_12">
	<?php 
		if(isset($_POST['them'])){
			$name = $_POST['tendanhmuc'];
			$query = "INSERT INTO cat(name) VALUES('{$name}')";
			$ketqua = $mysqli->query($query);
			if($ketqua){
				//echo "Thêm thành công";
				header("LOCATION: index.php?msg=Thêm thành công");
			}
			else {
				echo "Có lỗi rồi bé ơi";
			}
		}
	?>

	<div class="module">
		 <h2><span>Thêm danh mục</span></h2>
			
		 <div class="module-body">
			<form action="" enctype="multipart/form-data" method="POST">
				<p>
					<label>Tên danh mục</label>
					<input type="text" name="tendanhmuc" value="" class="input-medium" />
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
