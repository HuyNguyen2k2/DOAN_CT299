<?php
session_start();
// Kết nối đến cơ sở dữ liệu. Thay đổi thông tin kết nối theo cấu hình của bạn.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htqlcaycanh";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Xử lý form khi nút "CẬP NHẬT" được nhấn
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $fullName = $_POST["fullName"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    // Sử dụng session hoặc cookie để lấy thông tin về người dùng
    // Đoạn mã dưới đây sử dụng session như trong đoạn mã gốc của bạn
    
    $treeAccData = isset($_SESSION["tree_acc"]) ? json_decode($_SESSION["tree_acc"])[0] : null;

    // Cập nhật thông tin trong cơ sở dữ liệu
    if ($treeAccData) {
        $userId = $treeAccData[0];

        $sql = "UPDATE KHACH_HANG SET KH_TEN='$fullName', KH_SDT='$mobile', KH_EMAIL='$email', KH_DIACHI='$address' WHERE KH_MA=$userId";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Cập nhật thành công');</script>";
        } else {
            echo "<script>alert('Lỗi cập nhật: " . $conn->error . "');</script>";
        }
    }
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>