<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/admin/inc/header.php';?>
<!-- Form elements -->    
<div class="grid_12">

	<div class="module">
		<?php 
		$id_edit = $_GET['id_edit'];
		$sql = "SELECT * FROM cat WHERE id_cat = {$id_edit}";
		$ketqua2 = $mysqli -> query($sql);
		$arCat = mysqli_fetch_assoc($ketqua2);
		$name = $arCat['name'];
		if(isset($_POST['sua'])){
			$name = $_POST['tendanhmuc'];
			$query = "UPDATE cat
						SET name ='{$name}'
						WHERE id_cat = {$id_edit}";
			$ketqua = $mysqli -> query($query);
			if($ketqua){
				header("LOCATION:index.php?msg=Sửa thành công");
			}
			else{
				echo "Có lỗi khi sửa rồi bé ";
			}
		}
		?>
		 <h2><span>Sửa danh mục</span></h2>
		 <div class="module-body">
			<form action="" enctype="multipart/form-data" method="POST">
				<p>
					<label>Tên danh mục</label>
					<input type="text" name="tendanhmuc" value="<?php echo $name?>" class="input-medium" />
				</p>
				<fieldset>
					<input class="submit-green" name="sua" type="submit" value="Sửa" /> 
					<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/admin/inc/footer.php';?>
