<!DOCTYPE html>
<html lang="vi-VN">

<?php
    require_once '../boostrap.php';
    require_once _DIR_ROOT.'/database/connect.php';

    require_once 'blocks/head.php';
    require_once 'blocks/header.php';
?>

<body>
    
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh Mục</span>
                        </div>
                        <ul>
                        <?php
                            $sql = "SELECT * FROM loai";
                            $result_all = $conn->query($sql)->fetch_all();

                            foreach($result_all as $item){
                                echo '
                                    <li><a href="#">'.$item[1].'</a></li>
                                ';
                            }
                        ?>
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
                                <h5>0345755444</h5>
                                <span>Hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg relative_pos" data-setbg="img/hero/hinh3.jpg">
                        <div class="blur"></div>
                        <div class="hero__text relative_pos">
                            <span>DỄ CHĂM SÓC</span>
                            <h2>Xanh mát <br> không gian</h2>
                            <p>Vận chuyển miễn phí và nhanh chóng</p>
                            <a href="#" class="primary-btn">MUA NGAY</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    
    <!-- Begin banner top -->
    <section class="container ">
        <div class=" banner_top row set-bg" data-setbg="img/banner/bg1.png">
            <div class="col-lg-12">
                <h2>Thế Giới Cây Cảnh</h2>
                <div class="row ">
                    <p>Uy tính</p>
                    <p>Chất lượng</p>
                    <p>Tiện lợi</p>
                </div>
            </div>
        </div>
    </section>

     <!-- Breadcrumb Section Begin -->
     <!-- <section class="breadcrumb-section ">
        <div class="container">
          <div class="row set-bg" data-setbg="img/banner/bg1.png">
            <div class="col-lg-12 text-center">
                <div class="title ">
                    <h2>Thế giới cây cảnh</h2>
                </div>
                <div class="row ">
                    <p>Uy tính</p>
                    <p>Chất lượng</p>
                    <p>Tiện lợi</p>
                </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- Breadcrumb Section End -->
  
    <!-- End of banner top-->
    <!-- Categories Section Begin -->
    <section class="sale-intro container">
            <div class="section-title">
                <h4 class="tit-box">
                    <a href="product-sale.html">Nổi bật</a>
                </h4>
            </div>
            
            <div class="row sale">
                <div class="categories__slider owl-carousel">

                    <style>
                        .product__discount__item__pic{
                            position: relative;
                        }

                        .img_product{
                            position: absolute;
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                        }
                    </style>
                    <?php

                        $sql = "SELECT * FROM san_pham sp JOIN loai l ON sp.L_MA = l.L_MA"; // Giả sử có trường noi_bat để đánh dấu sản phẩm nổi bật
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="col-lg-3">';
                                echo '<div class="product__discount__item">';
                                echo '<div class="product__discount__item__pic set-bg" data-setbg="' . _WEB_ROOT.'/admin/public/imgs/img_product/'.$row['SP_HinhAnh'] . '">';
                                echo '<ul class="product__item__pic__hover">';
                                echo '<li><a href="./handler/add_cart.php?idProduct='.$row['SP_MA'].'" onclick=""><i class="fa fa-shopping-cart"></i></a></li>';
                                echo '</ul>';
                                echo '</div>';
                                echo '<div class="product__discount__item__text">';
                                echo '<span>' . $row['L_TEN'] . '</span>';
                                echo '<h5><a href="#">' . $row['SP_TEN'] . '</a></h5>';
                                echo '<div class="product__item__price">' . number_format($row['SP_Gia']) . ' VNĐ</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo "Không có sản phẩm nổi bật";
                        }

                        $conn->close();
                    ?>
                </div>
            </div>
        
    </section>
    <!-- Categories Section End -->

      <!-- Banner Begin -->
    <div class="banner" style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="">
                        <img src="img/banner/cay-ngoai-vuon.png" alt="">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="">
                        <img src="img/banner/cay-trong-nha.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

     <!-- Latest Product Section Begin -->
     <section class="latest-product spad container">
        
            <div class="section-title">
                <h4 class="tit-box">
                    <a href="">Xem Thêm</a>
                </h4>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Mới nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/featured/cay-phu-quy.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <!-- Phần này chưa đổi tiếng việt nè -->
                                        <h6>Cây phú quý</h6> 
                                        <span>120.000 VNĐ</span>
                                    </div>
                                </a>
                                
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/featured/co-dong-tien.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cỏ đồng tiền</h6>
                                        <span>98.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/featured/cay-mat-cat-300.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây mật cật</h6>
                                        <span>150.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cay-bong-nho-110.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây bông nho</h6>
                                        <span>110.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cay-hong-anh.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây hồng anh</h6>
                                        <span>199.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cay-kim-ngan-499.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây kim ngân</h6>
                                        <span>499.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Đánh giá cao nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cuc-tan-an-do-35.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây cúc tần Ấn Độ</h6>
                                        <span>35.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/luoi-ho-thai-69.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây lưỡi hổ thái</h6>
                                        <span>69.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/featured/xuong-rong-tai-tho.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Xương Rồng tai thỏ</h6>
                                        <span>36.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/cay-de-ban/xuong-rong-nui.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Xương rồng núi</h6>
                                        <span>66.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/cay-de-ban/cay-mong-rong.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây móng rồng</h6>
                                        <span>64.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/featured/cay-binh-an.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây bình an</h6>
                                        <span>149.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Dành cho bạn</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/cay-de-ban/xuong-rong-astro.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây xương rồng Astro</h6>
                                        <span>79.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/truc-day-leo-110.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Trúc dây leo</h6>
                                        <span>110.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/tieu-thao-xoan-19.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây tiểu thảo xoắn</h6>
                                        <span>39.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cay-anh-duong.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây ánh dương</h6>
                                        <span>250.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cam-tu-mai-30.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây cẩm tú mai</h6>
                                        <span>30.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cay-bong-trang-90.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây bông trang</h6>
                                        <span>90.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
    </section>
    <!-- Latest Product Section End -->

    <section class="from-blog spad container">
       
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="tit-box">
                            <a href="blog.html">Bài blog mới nhất</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/cay-kim-tien-bi-vang-la.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>Tháng 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cây kim tiền bị vàng lá</a></h5>
                            <p>Cây xanh hiện đã là một phần không thể thiếu đối với mỗi không gian từ nhà ở cho đến văn phòng nhất là đối với những thành phố đông đúc như: Hồ Chí Minh và…</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/cay-trong-trong-nha-tang-tham-my.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> Tháng Chín 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Những cây trồng trong nhà giúp tăng thẩm mĩ</a></h5>
                            <p>Trong nhà của bạn không thể thiếu cây xanh phải không. Cây xanh mang đến không gian sống trong lành, thư thái và thoải mái. Cây xanh còn giúp…</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/cham-soc-cay-thuy-sinh.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>Tháng Chín 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Chăm sóc cây thủy sinh đúng cách</a></h5>
                            <p>Cây thủy sinh có 2 loại một là loại sống dưới nước ở mặt đáy thường là một số loại rêu, tảo…Loại 2 là loại chỉ có phần rễ được tiếp xúc…</p>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>

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
    <script type="text/javascript" src="https://unpkg.com/smooth-scrollbar@8.5.2/dist/smooth-scrollbar.js"></script>
   
    <script src="js/main.js"></script>
   


</body>

</html>
