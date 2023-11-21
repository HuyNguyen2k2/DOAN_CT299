<?php
// Thông tin kết nối CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htqlcaycanh";

// Kết nối tới CSDL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối CSDL thất bại: " . $conn->connect_error);
}

// Xử lý đăng nhập khi nhận được dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Truy vấn kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM khach_hang WHERE KH_EMAIL = '$email' AND KH_MATKHAU = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Đăng nhập thành công
      // echo "<a href="./index.php"">Trang Chủ</a>";
        header("Location: ./index.php");
        exit; // Dừng thực thi script hiện tại
    } else {
        // Đăng nhập thất bại
        
        echo "Tên đăng nhập hoặc mật khẩu không chính xác!";
    }
} 

// Đóng kết nối CSDL
$conn->close();
?>
//
