<?php
// Kết nối đến cơ sở dữ liệu
require_once '..\Database\connectDBtructiep.php';


// Kiểm tra xem form đã được gửi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form và làm sạch chúng
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Câu lệnh SQL để chèn dữ liệu người dùng mới vào bảng Account
    $sql = "INSERT INTO Account (username, email, password) VALUES ('$username', '$email', '$password')";
    // Thực thi câu lệnh SQL
    if ($conn->query($sql) === TRUE) {
        echo "Đăng ký thành công!";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
$conn->close();
?>
