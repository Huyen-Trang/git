<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/admin/inc/header.php'; ?>
<?php
	$id_del = $_GET['id_del'];
	$query = "DELETE FROM cat WHERE id_cat = {$id_del}";
	$ketqua = $mysqli->query($query);
	if($ketqua){
		header("Location: index.php?msg=Xóa thành công");
	}
	else{
		echo "Có lỗi khi xóa rồi bé";
	}
?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/admin/inc/footer.php'; ?>
