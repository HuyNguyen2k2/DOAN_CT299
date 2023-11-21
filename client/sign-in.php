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
                            <!-- <li><a href="#">Hoa Chậu</a></li>
                            <li><a href="#">Đất Trồng Cây</a></li>
                            <li><a href="#">Dụng Cụ Làm Vườn</a></li>
                            <li><a href="#">Chậu Cảnh</a></li>
                            <li><a href="#">Tiểu Cảnh</a></li> -->
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
                        <span>Đăng nhập</span>
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
            <div class="row sign__in">
                <div class="col-lg">
                    <div class="sign__in__form">
                        <form   method="POST" action="sign-in.php">
                            <button><a href="sign-in.php" class="btn-dn">ĐĂNG NHẬP</a></button>
                            <button><a href="sign-up.php" class="btn-dk">ĐĂNG KÝ</a></button>
                            <br>
                            <input type="email" name="email" id="email" placeholder="Nhập email" required>
                            <br>
                            <input type="password" name="password" id="password" placeholder="Mật khẩu" required>
                            <br>
                            <input type="submit" name="submit" id="submit" value="ĐĂNG NHẬP"><br>
                            <button type="button" class=" forget-pass" data-toggle="modal" data-target="#change-pass">Quên Mật Khẩu</button>
                            <h4>Hoặc đăng nhập với</h4>
                            <a href="#" class="face"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign In Section End -->
   
    <!-- Dialog Forget Password -->
    <!-- Dialog Email -->
    <div class="modal fade" id="change-pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog forget-dialog" role="document">
        <div class="modal-content forget-content">
            <div class="modal-header forget-header">
            <h5 class="modal-title forget-title" id="exampleModalLongTitle">Quên Mật Khẩu?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="x">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body forget-body">
                <h5 class="forget-h5">Vui lòng nhập Email bạn đã đăng kí để lấy lại mật khẩu</h5>
                <input type="email" name="mail" id="mail" class="forget-mail" placeholder="thegioicaycanhNLU@gmail.com">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary forget-send" data-toggle="modal" data-target="#notify-forget">GỬI</button>
            </div>
        </div>
        </div>
    </div>
    <!-- Dialog Notify -->
    <div class="modal fade" id="notify-forget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog forget-dialog" role="document">
        <div class="modal-content forget-content">
            <div class="modal-header forget-header">
            <h5 class="modal-title forget-title" id="exampleModalLongTitle">Quên Mật Khẩu?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="x">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body forget-body">
                <!-- <h5 class="forget-h5">Vui lòng nhập Email bạn đã đăng kí để lấy lại mật khẩu</h5> -->
                <div>
                    <p>Email đã được gửi, bạn vui lòng kiểm tra hộp thư để cập nhật thông tin</p>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary forget-send">ĐÓNG</button>
            </div>
        </div>
        </div>
    </div>
    <!-- Dialog Forget Password End -->

    <?php
        require_once 'blocks/footer.php'
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
 
 
</body>

</html>

<?php
// Thông tin kết nối CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htqlcaycanh";
session_start();
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}



// Xử lý đăng nhập khi nhận được dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Truy vấn kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM khach_hang WHERE KH_EMAIL = '$email' AND KH_MATKHAU = '$password'";

    $result = $conn->query($sql)->fetch_all();

    if (count($result) > 0) {
        // Đăng nhập thành công
        $_SESSION["tree_acc"]=json_encode($result);
        
        echo "
            <script>
                location.replace('./index.php');
            </script>
        ";
    } else {     
        echo "
            <script>                       
                swal('Đăng nhập thất bại', 'Sai tên đăng nhập hoặc mật khẩu. Vui lòng thử lại ', 'error');
                document.addEventListener('keydown', (e) => {
                    if(e.which === 116){
                        
                        location.replace('./sign-up.php');
                    }
                });
            </script>
        ";
    }      
} 

// Đóng kết nối CSDL
$conn->close();
?>        