<?php

// Kiểm tra xem form đã được gửi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $fname = $_POST["fname"];
    $phone = $_POST["phone"];
    $email = $_POST["mail"];
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $confirmPassword = $_POST["confirm_pass"];

    // Kiểm tra xác nhận mật khẩu
    if ($password !== $confirmPassword) {
        echo "Xác nhận mật khẩu không khớp.";
        exit();
    }

    // Kiểm tra email hợp lệ
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email không hợp lệ.";
        exit();
    }

    // Kiểm tra số điện thoại hợp lệ
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "Số điện thoại không hợp lệ.";
        exit();
    }

    // Kết nối đến cơ sở dữ liệu (thay đổi thông tin kết nối phù hợp với cấu hình của bạn)
    $conn = new mysqli("localhost", "root", "", "htqlcaycanh");

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    // Chuẩn bị câu truy vấn
    $sql = "INSERT INTO khach_hang (kh_ma, kh_ten, kh_sdt, kh_diachi, kh_email, kh_taikhoan, kh_matkhau) 
            VALUES (null, '$fname', '$phone', null, '$email', '$username', '$password')";

    // Thực thi câu truy vấn
    $result = $conn->query($sql);

    // Kiểm tra xem câu truy vấn đã thành công hay không
    if ($result) {
        echo '<script>alert("Đăng ký thành công!"); window.location.href="http://localhost:3000/Code_CT299_Nhom01/client/sign-in.php";</script>';
        exit();
    } else {
        echo "Có lỗi xảy ra khi thực hiện đăng ký: " . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
} else {
    // Nếu không phải là phương thức POST, chuyển hướng về trang đăng ký
    header("Location: sign-up.php");
    exit();
}
?>
