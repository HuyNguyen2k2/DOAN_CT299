<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài viết</title>
    <link href="img/icon/icon-logo.png" rel="shortcut icon">

    
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<?php
    require_once '../boostrap.php';

    require_once 'blocks/head.php';
    require_once 'blocks/header.php';

?>

<body>
    
     <!-- Header Section End -->
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
                        <div class="breadcrumb__option none-after">
                            <a href="#">Bài viết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Tìm kiếm...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Danh Mục</h4>
                            <ul>
                                <li><a href="#">Tất Cả</a></li>
                                <li><a href="#">Chăm Sóc Cây (20)</a></li>
                                <li><a href="#">Trồng Cây (5)</a></li>
                                <li><a href="#">Lợi Ích Của Cây (9)</a></li>
                                <li><a href="#">Trang Trí Cây (10)</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Tin Tức Mới</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/3-loai-cay-duoc-tang-trong-noen.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>3 loại cây được tặng trong Noel</h6>
                                        <span>THÁNG SÁU 05, 2020</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/cach-cham-soc-hoa-hong.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Cách chăm sóc hoa hồng</h6>
                                        <span>THÁNG BA 05, 2019</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/cach-chon-dao-tet.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Cách chọn đào tết</h6>
                                        <span>THÁNG TƯ 12, 2020</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Tìm Kiếm Nhiều</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Bạch Mã Hoàng Tử</a>
                                <a href="#">Dâu Tây</a>
                                <a href="#">Kim Tiền</a>
                                <a href="#">Lưỡi Hổ</a>
                                <a href="#">Mai</a>
                                <a href="#">Đẹp</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/cay-trong-trong-nha-tang-tham-my.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Tháng Chín 22,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 8</li>
                                    </ul>
                                    <h5><a href="blog-details.html">Những cây trồng trong nhà giúp tăng thẩm mĩ</a></h5>
                                    <p>Trong nhà của bạn không thể thiếu cây xanh phải không. Cây xanh mang đến không gian sống trong lành, thư thái và thoải mái. Cây xanh còn giúp…</p>
                                    <a href="blog-details.html" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/cay-kim-tien-bi-vang-la.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Tháng Tám 4,2020</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Cây kim tiền bị vàng lá</a></h5>
                                    <p>Cây xanh hiện đã là một phần không thể thiếu đối với mỗi không gian từ nhà ở cho đến văn phòng nhất là đối với những thành phố đông đúc như: Hồ Chí Minh và…</p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/cham-soc-cay-thuy-sinh.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Tháng Chín 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Chăm sóc cây thủy sinh đúng cách</a></h5>
                                    <p>Cây thủy sinh có 2 loại một là loại sống dưới nước ở mặt đáy thường là một số loại rêu, tảo…Loại 2 là loại chỉ có phần rễ được tiếp xúc…</p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/cong-dung-cay-luoc-vang.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Tháng Mười Một 27,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Công dụng cây lược vàng</a></h5>
                                    <p>Cây Lược Vàng đến biết đến là cây thuốc có nhiều công dụng, rất hữu ích cho sức khỏe của con người. Bài viết giới thiệu đôi nét về…</p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/nhung-cay-treo-tren-ban-cong-dep.png" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Tháng Mười 12,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Những cây treo trên ban công</a></h5>
                                    <p>Ban công là không gian để làm đẹp cho ngôi nhà của bạn, giúp bạn cảm thấy sảng khoái sau những giờ làm việc mệt nhọc. Trồng cây cảnh…</p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/cay-trong-trong-nha-duoi-muoi.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Tháng Bảy 15,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Cây trồng trong nhà đuổi muỗi
                                    </a></h5>
                                    <p>Muỗi là một trong những loại côn trùng mang đến nhiều bệnh tật cho sức khỏe của con người. Muỗi thích hợp với những nơi ẩm ướt, không sạch…</p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    <!-- Popup footer -->

    <?php
        require_once 'blocks/footer.php';
    ?>
    
    <!-- Footer Section End -->

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