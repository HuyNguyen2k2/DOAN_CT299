<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Lấy dữ liệu từ form
    $username = $_POST["username"];
    $password = $_POST["pass"];

    // Kết nối đến cơ sở dữ liệu (thay đổi thông tin kết nối phù hợp với cấu hình của bạn)
    $conn = new mysqli("localhost", "root", "", "htqlcaycanh");

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    // Chuẩn bị câu truy vấn
    $sql = "SELECT * FROM khach_hang WHERE kh_taikhoan = '$username'";
    
    // Thực thi câu truy vấn
    $result = $conn->query($sql);

    // Kiểm tra xem có dữ liệu hay không
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Kiểm tra xem khóa "kh_matkhau" có tồn tại trong mảng hay không
        if (isset($user["KH_MATKHAU"])) {
            // Kiểm tra mật khẩu
            if ($password == $user["KH_MATKHAU"]) {
                // Đăng nhập thành công
                // Bạn có thể thực hiện các hành động cần thiết ở đây

                // Sử dụng JavaScript để hiển thị thông báo và chuyển hướng trang
                echo "<script>alert('Đăng nhập thành công!'); window.location.href='http://localhost:3000/Code_CT299_Nhom01/client/index.php';</script>";
            } else {
                // Mật khẩu không đúng
                echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu.');</script>";
            }
        } else {
            // Key 'kh_matkhau' không tồn tại trong mảng
            echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu.');</script>";
        }
    } else {
        // Tên đăng nhập không tồn tại
        echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu.');</script>";
    }

    // Đóng kết nối
    $conn->close();
} else {
    // Nếu không phải là phương thức POST, chuyển hướng về trang đăng nhập
    header("Location: sign-in.php");
    exit();
}
?>
