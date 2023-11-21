<!-- Page Preloder -->
<div id="preloder">
        <div class="loader"></div>
    </div>
    <?php
     session_start();
    
    ?>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/banner/bieutuong_off.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="user.php"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">Tổng:<span>150.000 VNĐ</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="sign-in.php"><i class="fa fa-user"></i>Đăng Nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Trang Chủ</a></li>
                <li><a href="./shop-grid.php">Mua Sắm</a></li>
                <li><a href="./product-sale.php">Giảm giá</a></li>
                <li><a href="./blog.php">Bài Viết</a></li>
                <li><a href="./contact.php">Liên Hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> thegioicaycanh.com</li>
                <li>Miễn Phí Giao Hàng Cho Các Đơn Từ 499.000 VNĐ</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> thegioicaycanh.com</li>
                                <li>Miễn Phí Giao Hàng Cho Các Đơn Từ 499.000 VNĐ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "htqlcaycanh";

                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    if ($conn->connect_error) {
                                    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
                                    }
                                    if (isset($_SESSION["tree_acc"])) {
                                        $value_tree = json_decode($_SESSION["tree_acc"]);
                                        $acc_name = $value_tree[0][1];
                                        
                                        // In ra menu
                                        echo '<div class="menu">';
                                        echo '<div class="menu-item">';
                                        echo '<a href="user.php" class="menu-item-text"><i class="fa fa-user"></i> Chào, ' . $acc_name . '</a>';
                                        echo '</div>';
                                        echo '</div>';
                                        
                                    } else {
                                        echo '<a href="sign-in.php"><i class="fa fa-user"></i> Đăng nhập</a>';
                                    }
                                    
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/banner/bieutuong_off.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Trang Chủ</a></li>
                            <li><a href="./shop-grid.php">Mua sắm</a></li>
                            <li><a href="./product-sale.php">Giảm giá</a></li>
                            <li><a href="./blog.php">Bài viết</a></li>
                            <li><a href="./contact.php">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <!-- <li><a href="user.php"><i class="fa fa-heart"></i> <span>1</span></a></li> -->
                            <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <!-- <div class="header__cart__price">Tổng:<span>150.000 VNĐ</span></div> -->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->