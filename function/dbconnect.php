<?php
	//địa chỉ mysql_affected_rows
	$localhost = 'localhost';
	//username
	$username = 'root';
	//password
	$password = '';
	//ten database
	$database = 'bnews';
	//tạo đối tượng (biến) để kết nối
	$mysqli = new mysqli($localhost, $username, $password, $database);
	
	//chuyển sang font chữ
	$mysqli -> set_charset('utf8');
	
	//kiểm tra kết nối, nếu kết nối có lỗi ->trả về true
	if(mysqli_connect_errno()){
		echo 'Có lỗi khi kết nối:'. mysqli_connect_error(); //in ra tên lỗi mình mắc phải
		die(); // dừng trang web
	}
?>