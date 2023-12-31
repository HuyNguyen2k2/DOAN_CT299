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
                        <span>Mua sắm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danh Mục</h4>
                            <ul>
                                <li><a href="#">Cây để bàn</a></li>
                                <li><a href="#">Cây dây leo</a></li>
                                <li><a href="#">Cây tết</a></li>
                                <li><a href="#">Cây thủy sinh</a></li>
                                <li><a href="#">Cây trong nhà</a></li>
                                <li><a href="#">Cây ngoài vườn</a></li>
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Giá</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="900">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Kích Thước</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Lớn
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Trung Bình
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Nhỏ
                                    <input type="radio" id="small">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Rất nhỏ
                                    <input type="radio" id="tiny">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Mới Nhất</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic img-1">
                                                <img src="img/cay-de-ban/cam-nhung.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Cây Cẩm Nhung</h6>
                                                <span>39.000 VNĐ</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic img-1">
                                                <img src="img/cay-de-ban/sen-da-mini.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Sen Đá Mini</h6>
                                                <span>50.000 VNĐ</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic img-1">
                                                <img src="img/cay-de-ban/cay-mong-rong.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Cây Móng Rồng</h6>
                                                <span>64.000 VNĐ</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic img-1">
                                                <img src="img/cay-de-ban/cam-nhung.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Cây Cẩm Nhung</h6>
                                                <span>39.000 VNĐ</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic img-1">
                                                <img src="img/cay-de-ban/sen-da-mini.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Sen Đá Mini</h6>
                                                <span>29.000 VNĐ</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic img-1">
                                                <img src="img/cay-de-ban/cay-mong-rong.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Cây Móng Rồng</h6>
                                                <span>64.000 VNĐ</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sắp xếp</span>
                                    <select>
                                        <option value="0">Mới Nhất</option>
                                        <option value="0">Giá Cả</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> sản phẩm đã tìm thấy</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <a href="shop-grid.php"><span class="icon_grid-2x2"></span></a>
                                    <a href="shop-list.php"><span class="icon_ul"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/cay-dua-canh-nen-do.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="shop-details.html">Cây Dứa Cảnh Nến</a></h6>
                                    <h5>130.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/cay-kim-tien.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Cây Kim Tiền</a></h6>
                                    <h5>89.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/cay-luoi-ho-thai.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Cây Lưỡi Hổ</a></h6>
                                    <h5>69.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/cay-mong-rong.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Cây Móng Rồng</a></h6>
                                    <h5>64.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/sen-da-mini.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Sen Đá Mini Kèm Chậu</a></h6>
                                    <h5>50.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/cam-nhung.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Cây Cẩm Nhung</a></h6>
                                    <h5>39.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/xuong-rong-tai-tho.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Xương Rồng Tai Thỏ</a></h6>
                                    <h5>36.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/xuong-rong-astro.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Xương Rồng Astro</a></h6>
                                    <h5>79.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/xuong-rong-nui.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Xương Rồng Núi</a></h6>
                                    <h5>66.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/sen-da-hong-ha-lan.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Sen Đá Hồng Hà Lan</a></h6>
                                    <h5>39.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/sen-da-kim-cuong.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Sen Đá Kim Cương Trắng</a></h6>
                                    <h5>49.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/xuong-rong-trung-chim.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-money"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Xương Rồng Trứng Chim Lớn</a></h6>
                                    <h5>29.000 VNĐ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

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