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
                        <form action="">
                            <button><a href="sign-in.php" class="btn-dn">ĐĂNG NHẬP</a></button>
                            <button><a href="sign-up.php" class="btn-dk">ĐĂNG KÍ</a></button><br>
                            <input type="text" name="fname" id="fname" placeholder="Họ Tên (*)" required><br>
                            <input type="date" name="birth" id="birth" placeholder="Ngày Sinh"><br>
                            <input type="number" name="phone" id="phone" placeholder="Điện Thoại (*)" required><br>
                            <input type="email" name="mail" id="mail" placeholder="Email (*)" required><br>
                            <select name="city" id="city">
                                <option value="">Tỉnh/Thành phố (*)</option>
                                <option value="254">An Giang</option>
                                <option value="255">Bà Rịa - Vũng Tàu</option>
                                <option value="256">Bắc Giang</option>
                                <option value="257">Bắc Kạn</option>
                                <option value="258">Bạc Liêu</option>
                                <option value="259">Bắc Ninh</option>
                                <option value="260">Bến Tre</option>
                                <option value="261">Bình Định</option>
                                <option value="262">Bình Dương</option>
                                <option value="263">Bình Phước</option>
                                <option value="264">Bình Thuận</option>
                                <option value="265">Cần Thơ</option>
                                <option value="266">Cà Mau</option>
                                <option value="267">Cao Bằng</option>
                                <option value="268">Đà Nẵng</option>
                                <option value="269">Đắk Lắk</option>
                                <option value="270">Đắk Nông</option>
                                <option value="271">Điện Biên</option>
                                <option value="272">Đồng Nai</option>
                                <option value="273">Đồng Tháp</option>
                                <option value="274">Gia Lai</option>
                                <option value="275">Hải Phòng</option>
                                <option value="276">Hà Nội</option>
                                <option value="277">Hà Giang</option>
                                <option value="278">Hà Nam</option>
                                <option value="279">Hà Tĩnh</option>
                                <option value="280">Hải Dương</option>
                                <option value="281">Hậu Giang</option>
                                <option value="282">Hòa Bình</option>
                                <option value="283">Hưng Yên</option>
                                <option value="284">Khánh Hòa</option>
                                <option value="285">Kiên Giang</option>
                                <option value="286">Kon Tum</option>
                                <option value="287">Lai Châu</option>
                                <option value="288">Lâm Đồng</option>
                                <option value="289">Lạng Sơn</option>
                                <option value="290">Lào Cai</option>
                                <option value="291">Long An</option>
                                <option value="292">Nam Định</option>
                                <option value="293">Nghệ An</option>
                                <option value="294">Ninh Bình</option>
                                <option value="295">Ninh Thuận</option>
                                <option value="296">Phú Thọ</option>
                                <option value="297">Quảng Bình</option>
                                <option value="298">Quảng Nam</option>
                                <option value="299">Quảng Ngãi</option>
                                <option value="300">Quảng Ninh</option>
                                <option value="301">Quảng Trị</option>
                                <option value="302">Sóc Trăng</option>
                                <option value="303">Sơn La</option>
                                <option value="304">Thành phố Hồ Chí Minh</option>
                                <option value="305">Tây Ninh</option>
                                <option value="306">Thái Bình</option>
                                <option value="307">Thái Nguyên</option>
                                <option value="308">Thanh Hóa</option>
                                <option value="309">Thừa Thiên Huế</option>
                                <option value="310">Tiền Giang</option>
                                <option value="312">Trà Vinh</option>
                                <option value="313">Tuyên Quang</option>
                                <option value="314">Vĩnh Long</option>
                                <option value="315">Vĩnh Phúc</option>
                                <option value="316">Yên Bái</option>
                                <option value="317">Phú Yên</option>
                            </select><br>
                            <input type="text" name="district" id="district" placeholder="Quận/ Huyện">
                            <input type="text" name="warm" id="warm" placeholder="Xã/ Phường/ Thị trấn">
                            <input type="text" name="address" id="address" placeholder="Địa Chỉ Chi Tiết">
                            <input type="password" name="pass" id="pass" placeholder="Mật Khẩu" required><br>
                            <input type="password" name="pass" id="pass" placeholder="Nhập Lại Mật Khẩu" required><br>
                            <input type="submit" name="submit" id="submit" value="ĐĂNG KÝ"><br>
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