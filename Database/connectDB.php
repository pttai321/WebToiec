<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Truy vấn dữ liệu
$sql = "SELECT id, name, email FROM table_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị dữ liệu cho mỗi hàng
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Tên: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 kết quả";
}

$conn->close();
?>
