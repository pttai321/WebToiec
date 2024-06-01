<?php
// Kết nối cơ sở dữ liệu
require_once '..\Database\connectDBtructiep.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form và làm sạch chúng
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Câu lệnh SQL để kiểm tra thông tin đăng nhập
    $sql = "SELECT id, username, password FROM Account WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    // Kiểm tra xem có dòng dữ liệu nào trả về không
    if ($result->num_rows > 0) {
        // Lấy dữ liệu dòng trả về
        $row = $result->fetch_assoc();
        
        // Lưu trữ thông tin người dùng vào session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        
        // Chuyển hướng đến trang welcome.php
        header("location: welcome.php");
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu.";
    }
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>
