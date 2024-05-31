<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn!=null) {
    echo 'Kết nối thành công Database';
}else
	echo 'Kết nối Database failed ';
?>