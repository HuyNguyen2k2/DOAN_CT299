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
                        <div class="breadcrumb__option none-after">
                            <a href="#">Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Liên hệ</h4>
                        <p>+01-3-8888-6868</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Địa chỉ</h4>
                        <p>Quận Thủ Đức,TP.HCM</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Giờ mở cửa</h4>
                        <p>07:00 am đến 2:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>thegioicaycanhNLU@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="col-lg-12">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.258927212624!2d106.78567238152027!3d10.86790033428018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9672b7efd0893fc4!2zxJDhuqFpIEjhu41jIE7DtG5nIEzDom0!5e0!3m2!1svi!2s!4v1604126585524!5m2!1svi!2s"
                height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="map-inside">
                <i class="icon_pin"></i>
                <div class="inside-widget">
                    <h4>TP.HCM</h4>
                    <ul>
                        <li>Liên hệ: +12-345-6789</li>
                        <li>Địa chỉ:Trường ĐH Nông Lâm,Quận Thủ Đức, TP.HCM</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Đóng góp ý kiến</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Họ tên:">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Email:">
                    </div>
                    <div class="col-lg-12 text-center">
    <textarea placeholder="Ý kiến của bạn là:"></textarea>
    <button type="submit" class="site-btn" data-toggle="modal" data-target="#notify-submit">Gửi</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="notify-submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog forget-dialog" role="document">
        <div class="modal-content forget-content">
        <div class="modal-header forget-header">
    <h5 class="modal-title forget-title text-center" id="exampleModalLongTitle">Cập nhật thông tin</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="x">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
            <div class="modal-body forget-body">
                <div>
                    <p>Thông tin đã được cập nhật, cảm ơn bạn vì đã mua hàng</p>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-primary forget-send">ĐÓNG</button>
            </div>
        </div>
        </div>
    </div>
   
    <!-- Contact Form End -->

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


    </script>


</body>

</html>