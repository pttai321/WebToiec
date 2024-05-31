<?php
session_start();

// Hủy bỏ tất cả các biến session
$_SESSION = array();

// Hủy bỏ session
session_destroy();

// Chuyển hướng đến trang đăng nhập
header("location: login.html");
exit;
?>
