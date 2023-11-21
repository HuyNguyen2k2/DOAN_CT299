<!DOCTYPE html>
<html lang="vi-VN">

<?php

    require_once 'blocks/head.php';
    require_once 'blocks/header.php'
?>

<body>
  <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh Mục</span>
                        </div>
                        <ul>
                            
                            <li><a href="#">Cây để bàn</a></li>
                            <li><a href="#">Cây dây leo</a></li>
                            <li><a href="#">Cây tết</a></li>
                            <li><a href="#">Cây thủy sinh</a></li>
                            <li><a href="#">Cây trong nhà</a></li>
                            <li><a href="#">Cây ngoài vườn</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="Tên cây cảnh">
                                <button type="submit" class="site-btn">TÌM KIẾM</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84353535355</h5>
                                <span>Hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Hero Section End -->

  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="img/banner/bg1.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Thế Giới Cây Cảnh</h2>
                    <div class="breadcrumb__option">
                        <span>Đăng kí</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
    <!-- Sign In Section Begin -->
    <section class="sign-in spad">
        <div class="container">
            <div class="row sign__in sign__up">
                <div class="col-lg">
                    <div class="sign__in__form sign__up__form">
                    <form onsubmit="return validateForm();" method="post" action="sign-up.php">
                            <button><a href="sign-in.php" class="btn-dn">ĐĂNG NHẬP</a></button>
                            <button><a href="sign-up.php" class="btn-dk">ĐĂNG KÍ</a></button><br>
                            <input type="text" name="fname" id="input-fname"  placeholder="Họ Tên (*)" required><br>
                            <input type="date" name="birth" id="input-birth" placeholder="Ngày Sinh"><br>
                            <input type="number" name="phone" id="input-phone" class="input-field" placeholder="Điện Thoại (*)" required><br>
                            <!-- Thêm phần tử mới để hiển thị thông báo lỗi -->
                            <span id="phoneError" style=" color: red;float: left;text-align: right;margin-left: 20px;margin-top: 5px;margin-bottom: -15px;"></span>
                            <input type="email" name="mail" id="input-mail" placeholder="Email (*)" required><br>                    
                            <input type="password" name="pass1" id="input-pass1" placeholder="Mật Khẩu" required><br>
                            <input type="password" name="pass2" id="input-pass2" class="input-field" placeholder="Nhập Lại Mật Khẩu" required><br>
                            <span id="passError" style=" color: red;float: left;text-align: right;margin-left: 20px;margin-top: 5px;margin-bottom: -15px;"></span>
                            <input type="submit" name="submit" id="input-submit" value="ĐĂNG KÝ"><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign In Section End -->

    <?php
        require_once 'blocks/footer.php';
    ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
   
    
   

    <script>
function validateForm() {
    var phoneNumber = document.getElementById("input-phone").value;
    var password1 = document.getElementById("input-pass1").value;
    var password2 = document.getElementById("input-pass2").value;
    var email = document.getElementById("input-mail").value;
    var phoneError = document.getElementById("phoneError");
    var passError = document.getElementById("passError");

    // Kiểm tra số điện thoại có đúng định dạng không
    if (phoneNumber.length !== 10) {
        phoneError.innerHTML = "Số điện thoại không hợp lệ";
        document.getElementById("input-phone").classList.add("error-field");
        return false;
    } else {
        phoneError.innerHTML = "";
        document.getElementById("input-phone").classList.remove("error-field");
    }

    // Kiểm tra mật khẩu nhập lại
    if (password1 !== password2) {
        passError.innerHTML = "Mật khẩu không khớp";
        document.getElementById("input-pass2").classList.add("error-field");
        return false;
    } else {
        passError.innerHTML = "";
        document.getElementById("input-pass2").classList.remove("error-field");
    }

    // Nếu tất cả các trường hợp lệ, cho phép gửi yêu cầu đến máy chủ
    return true;
}
</script>
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
            $sql_cart = "INSERT INTO gio_hang (gh_ma, kh_ma) VALUES (null, ) ";

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
</body>

</html>