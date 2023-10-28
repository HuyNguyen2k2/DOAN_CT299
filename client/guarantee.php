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
                        <div class="breadcrumb__option ">
                            <a href="user.html">Người dùng</a>
                            <a href="order-detail.html">Chi tiết đơn hàng</a>
                            <span>Bảo hành</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<!-- Bao hang -->
      <!-- Sign In Section Begin -->
      <section class="sign-in spad">
        <div class="container">
            <div class="title-all">Thông tin đổi trả</div>
            <div class="guarantee_wrap sign__in sign__up">
               
                    <div class="sign__in__form sign__up__form">
                        <form action="">
                            <input type="email" name="mail" id="mail" placeholder="Email (*)" required><br>
                            <input type="number" name="order-id" id="order-id" placeholder="Mã đơn hàng" required><br>
                            <input type="text" name="guarantee-title" id="guarantee-title" placeholder="Tiêu đề">
                            <textarea name="description" id="description" cols="30" rows="10" placeholder="Mô tả" required></textarea>
                            <button id="add-img" type="button">Thêm ảnh</button>
                            <input type="submit" name="submit" id="submit" value="Gửi"><br>
                        </form>
                    </div>
                
            </div>
        </div>
    </section>
    <!-- Sign In Section End -->

<!-- End Bao hang -->

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