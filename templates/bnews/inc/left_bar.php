<h2>Danh mục tin</h2>
<ul>
	<?php
	$query = "SELECT * FROM cat";
	$result = $mysqli-> query($query);
	while($arCatagory=mysqli_fetch_assoc($result)){
		$nameCat = $arCatagory['name'];
		$id_cat = $arCatagory['id_cat'];
	?>
	<li><a href="danhmuc.php?id_cat=<?php echo $id_cat;?>&nameCat=<?php echo $nameCat?>"><?php echo $nameCat;?></a></li>
	<?php
	}
	?>
</ul>
