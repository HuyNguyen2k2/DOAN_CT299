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
                    <div class="row shop_wrapper grid_list ">
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/cay-dua-canh-nen-do.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Cây Dứa Cảnh Nến</a></h5>
                                        <h6>130.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Cây thường được trưng và tặng trong dịp tết với ý nghĩa phong thủy mang đến may mắn và tài lộc. Ngoài ra trong phong thủy 12 con giáp thì cây rất hợp với người tuổi Sửu, giúp mang đến vận khí tốt cho gia chủ.     
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/cay-kim-tien.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Cây Kim Tiền</a></h5>
                                        <h6>89.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Chính vì đặc điểm phát triển mạnh và cây nhìn rất màu mỡ, nên người ta tin rằng những ai sở hữu loại cây này sẽ có được sự thịnh vượng, may mắn và tiền tài. Vì vậy mà cây Kim Tiền đại luôn là lựa chọn số một cho các phòng khách, phòng hội họp, văn phòng công sở ...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/cay-luoi-ho-thai.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Cây Lưỡi Hổ</a></h5>
                                        <h6>69.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Cây lưỡi hổ Thái kèm chậu men trắng dễ chăm sóc, nhỏ gọn, xinh xinh, phù hợp để kệ sách, bàn làm việc, bàn học, tuần tưới nước chỉ 2 lần    
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image col-lg-3 col-sm-12 col-md-6">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/cay-mong-rong.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview col-lg-6 col-sm-12 col-md-6">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Cây Móng Rồng</a></h5>
                                        <h6>64.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Hoa móng rồng thường trồng leo tường, tạo cổng vòng, trồng trong vườn, trồng leo ban công, cây leo giàn,... Hoa thơm dùng để ủ quần áo, đặt trong phòng khác, phòng ngủ, dùng để chế sáp bôi môi. Quả thơm ăn được. Lá đun nước uống, giúp lợi sữa. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/sen-da-mini.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Sen Đá Mini Kèm Chậu</a></h5>
                                        <h6>50.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Cây sen đá là loài rất dễ sống, không đòi hỏi được chăm sóc thường xuyên, mang ý nghĩa về một tình yêu bền chặt, trọn đời, vĩnh cửu. Cây là lựa chọn lý tưởng để trưng bày trên bàn làm việc, ngoài ban công hay bếp.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/cam-nhung.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Cây Cẩm Nhung</a></h5>
                                        <h6>39.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Cây Cẩm Nhung (tên khoa học: Fittonia) là loại cây cảnh để bàn làm việc có vẻ đẹp hết sức độc đáo. Không những thế, chúng còn mang một giá trị phong thủy hết sức tốt lành với may mắn, tài lộc, thịnh vượng đến cho gia chủ…    
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/xuong-rong-tai-tho.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Xương Rồng Tai Thỏ</a></h5>
                                        <h6>36.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Xương Rồng Tai Thỏ là một trong những giống xương rồng đẹp, độc và lạ mắt. Xương Rồng Tai Thỏ còn là một lựa chọn phù hợp cho góc học tập nhỏ của bạn.
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/xuong-rong-astro.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Xương Rồng Astro</a></h5>
                                        <h6>79.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Xương rồng Astro là loại dễ chăm, siêng sinh con nên rất phù hợp cho các bạn vừa mới tập chơi hoặc các bạn đag có nhu cầu sưu tầm, nhân giống.    
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/xuong-rong-nui.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Xương Rồng Núi</a></h5>
                                        <h6>66.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Cây xuất xứ Đà Lạt, đã thuần khí hậu, tự nhiên, không kích thuốc, siêu khoẻ đẹp. Cây cần rất nhiều ánh sáng mặt trời, thoáng gió, mát mẻ nhưng không chịu đc nắng gắt.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/sen-da-hong-ha-lan.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Sen Đá Hồng Hà Lan</a></h5>
                                        <h6>39.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Sen đá có ý nghĩa cho một tình bạn, tình yêu vĩnh cửu theo thời gian. Ngoài ra về phong thủy nó còn mang ý nghĩa sung túc và đầm ấm trong gia đình. Cây phù hợp để trang trí khách sạn, quán cà phê, bàn làm việc, góc học tập, cửa sổ....    
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/sen-da-kim-cuong.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Sen Đá Kim Cương Trắng</a></h5>
                                        <h6>49.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Trong khi hầu hết các loại cây mọng nước thích nhiều nắng, sen đá kim cương trắng lại thích nghi hơn với điều kiện bóng râm, thường phát triển dưới tán cây bụi hoặc trên đá.    
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-custom product-area col-12">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.php">
                                        <img src="img/cay-de-ban/xuong-rong-trung-chim.jpg" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-item-text">
                                        <h5> <a href="shop-details.php">Xương Rồng Trứng Chim Lớn</a></h5>
                                        <h6>29.000 VNĐ</h6>
                                    </div>      
                                    <div class="add-action-listview d-flex">
                                        <ul class="product__item__pic__hover-1">
                                            <li><a href="#"><i class="fa fa-money"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="desc-content">
                                        Xương rồng trứng chim lớn là loại xương rồng bụi với hình tròn nhỏ như trứng chim. Cây khoẻ đẻ nhiều con và ra hoa màu hồng nhỏ rất xinh xắn thích hợp để bàn học cho con hay bàn làm việc 
                                    </p>
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
        </div>
    </section>
    <!-- Product Section End -->

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