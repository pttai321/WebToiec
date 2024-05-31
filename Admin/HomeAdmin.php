<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng </title>
</head>
<body>
    <h1>Chào mừng,Admin <?php echo $_SESSION['username']; ?>!</h1>
    <p>Bạn đã đăng nhập thành công.</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
