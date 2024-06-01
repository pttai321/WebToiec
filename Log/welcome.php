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
    <title>Home</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <!-- Thanh menu -->
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a>Chào mừng, <?php echo $_SESSION['username']; ?>!</a></li>
            <li><a href="logout.php">Đăng xuất</a></li>
        </ul>
    </nav>

    <!-- Slide -->
    <div class="slider">
        <img src="../Anh/Part1.png" alt="Slide 1" width="20%">
        <img src="../Anh/Part1b.png" alt="Slide 2">
        <img src="../Anh/Part1.png" alt="Slide 3">
    </div>

    <!-- Thẻ div chứa 4 sản phẩm -->
    <div class="product-container">
        <div class="product">
            <a href="../User/Part1/ShowPart1.php">Part 1</a>
        </div>
        <div class="product">Product 2</div>
        <div class="product">Product 3</div>
        <div class="product">Product 4</div>
        <div class="product">Product 5</div>
    </div>
</body>
</html>
