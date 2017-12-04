<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/admin/inc/header.php';?>
<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="addNews.php" class="button">
			<span>Thêm tin <img src="/bnews/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>

<div class="grid_12">
	<!-- Example table -->
	<div class="module">
		<h2><span>Danh sách tin</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:4%; text-align: center;">ID</th>
						<th>Tên</th>
						<th style="width:20%">Danh mục</th>
						<th style="width:16%; text-align: center;">Hình ảnh</th>
						<th style="width:11%; text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="align-center">1</td>
						<td><a href="">Hoa Phong Lan</a></td>
						<td>Khai trương</td>
						<td align="center"><img src="/bnews/templates/admin/images/tmp/hoa1.jpg" class="hoa" /></td>
						<td align="center">
							<a href="">Sửa <img src="/bnews/templates/admin/images/pencil.gif" alt="edit" /></a>
							<a href="">Xóa <img src="/bnews/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
					</tr>
					<tr>
						<td class="align-center">2</td>
						<td><a href="">Hoa Tỉ muội</a></td>
						<td>Khai trương</td>
						<td align="center"><img src="/bnews/templates/admin/images/tmp/hoa2.jpg" class="hoa" /></td>
						<td align="center">
							<a href="">Sửa <img src="/bnews/templates/admin/images/pencil.gif" alt="edit" /></a>
							<a href="">Xóa <img src="/bnews/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
					</tr>
					<tr>
						<td class="align-center">3</td>
						<td><a href="">Hoa Violet</a></td>
						<td>Hoa kỷ niệm</td>
						<td align="center"><img src="/bnews/templates/admin/images/tmp/hoa3.jpg" class="hoa" /></td>
						<td align="center">
							<a href="">Sửa <img src="/bnews/templates/admin/images/pencil.gif" alt="edit" /></a>
							<a href="">Xóa <img src="/bnews/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
					</tr>
					<tr>
						<td class="align-center">4</td>
						<td><a href="">Hoa thủy tiên</a></td>
						<td>Hoa tình yêu</td>
						<td align="center"><img src="/bnews/templates/admin/images/tmp/hoa4.jpg" class="hoa" /></td>
						<td align="center">
							<a href="">Sửa <img src="/bnews/templates/admin/images/pencil.gif" alt="edit" /></a>
							<a href="">Xóa <img src="/bnews/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
					</tr>
					<tr>
						<td class="align-center">5</td>
						<td><a href="">Hoa cẩm chướng</a></td>
						<td>Hoa hạnh phúc</td>
						<td align="center"><img src="/bnews/templates/admin/images/tmp/hoa5.jpg" class="hoa" /></td>
						<td align="center">
							<a href="">Sửa <img src="/bnews/templates/admin/images/pencil.gif" alt="edit" /></a>
							<a href="">Xóa <img src="/bnews/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
					</tr>
				   
				</tbody>
			</table>
			</form>
		 </div> <!-- End .module-table-body -->
	</div> <!-- End .module -->
		 <div class="pagination">           
			<div class="numbers">
				<span>Trang:</span> 
				<a href="">1</a> 
				<span>|</span> 
				<a href="">2</a> 
				<span>|</span> 
				<span class="current">3</span> 
				<span>|</span> 
				<a href="">4</a> 
				<span>|</span> 
				<a href="">5</a> 
				<span>|</span> 
				<a href="">6</a> 
				<span>|</span> 
				<a href="">7</a>
				<span>|</span> 
				<a href="">8</a> 
				<span>|</span> 
				<a href="">9</a>
				<span>|</span> 
				<a href="">10</a>   
			</div> 
			<div style="clear: both;"></div> 
		 </div>
	
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/templates/admin/inc/footer.php';?>
