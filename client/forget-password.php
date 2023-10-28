<!DOCTYPE html>
<html lang="vi-VN">

<?php
    require_once 'blocks/head.php';
    require_once 'blocks/header.php';
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
                        <span>Đổi mật khẩu</span>
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
                        <form action="">
                            <h3 class="title-all">ĐỔI MẬT KHẨU</h3>
                            <br>
                            <input type="password" name="pass" id="pass" placeholder="Mật khẩu mới" required>
                            <br>
                            <input type="password" name="pass-again" id="pass-again" placeholder="Nhập lại mật khẩu mới" required>
                            <input type="submit" name="submit" id="submit" value="LƯU"><br>
                            <!-- <button type="button" class=" forget-pass" data-toggle="modal" data-target="#change-pass">Quên Mật Khẩu</button>
                            <h4>Hoặc đăng nhập với</h4>
                            <a href="#" class="face"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a> -->
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


</body>

</html>