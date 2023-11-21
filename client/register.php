<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htqlcaycanh";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
                                                                                               
// Kiểm tra khi nhấn nút submit
// Kiểm tra khi nhấn nút submit                                                                                                                                                             
if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];                                                                                                                                                                             
    $birth = $_POST["birth"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $pass1 = $_POST["pass1"];

    

    // Kiểm tra email đã tồn tại trong cơ sở dữ liệu hay chưa
    $checkEmailQuery = "SELECT * FROM khach_hang WHERE kh_email = '$mail'";
    $checkEmailResult = $conn->query($checkEmailQuery);

    if ($checkEmailResult->num_rows > 0) {
        // Email đã tồn tại
        echo "
                        <script>                       
                            swal('Đăng kí thất bại', 'Tên tài khoản đã tồn tại', 'error');
                            document.addEventListener('keydown', (e) => {
                                if(e.which === 116){
                                    location.replace('./sign-up.php');
                                }
                            });
                        </script>
                    ";
    } else {
        // Kiểm tra định dạng email
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo "<script>document.getElementById('email-error').innerHTML = 'Email không hợp lệ';</script>";
        } else {
            // Insert dữ liệu vào bảng trong cơ sở dữ liệu
            $sql = "INSERT INTO khach_hang (kh_ten, kh_ngaysinh, kh_email, kh_matkhau, kh_sdt) VALUES ('$fname', '$birth','$mail', '$pass1', '$phone')";
            if ($conn->query($sql) === TRUE) {
                // Chuyển trang đến sign=in.php
                echo "
                            <script>
                                swal('Đăng kí thành công', 'Tài khoản của bạn đã được tạo, quay lại để đăng nhập nhé', 'success');
                                document.addEventListener('click', () => {
                                        location.replace('./sign-in.php');
                                });
                                document.addEventListener('keydown', (e) => {
                                    if(e.which === 116){
                                        location.replace('./sign-in.php');
                                    }
                                });
                            </script>
                        ";
            } else {
                echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
$conn->close();
?>