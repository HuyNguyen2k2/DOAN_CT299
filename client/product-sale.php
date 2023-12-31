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
                  <input type="text" placeholder="Tên cây cảnh" />
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
                <a href="#">Giảm giá</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Edit code here -->
    <div>
      <!-- Stick element -->
      <div class="sticky-top">
        <div class="container">
          <div class="row">
            <select id="selectest" class="mdb-select md-form col-md-2 mx-3">
              <option value="" disabled selected>Chọn loại</option>
              <option value="1">Sản phẩm khuyến mãi</option>
              <option value="2">Mã khuyến mãi</option>
            </select>
            <select class="mdb-select md-form col-md-2 mx-3">
              <option value="" disabled selected>Sắp xếp</option>
              <option value="2">Giá Cao xuống thấp</option>
              <option value="2">Giá thấp xuống cao</option>
            </select>
            <select class="mdb-select md-form col-md-2 mx-3">
              <option value="" disabled selected>Ngày hết hạn</option>
              <option value="2">Hôm nay</option>
              <option value="2">> 1 ngày</option>
              <option value="2">> 1 Tuần</option>
              <option value="">> nửa tháng</option>
              <option value="">> 1 tháng</option>
            </select>

            <!-- Search form -->
            <form
              class="form-inline d-flex justify-content-center md-form form-sm active-green mt-2 col-md-4 mx-3"
            >
              <input
                class="form-control form-control-sm mr-3 w-75"
                type="text"
                placeholder="Search"
                aria-label="Search"
              />
              <i class="fa fa-search" aria-hidden="true"></i>
            </form>
          </div>
        </div>
      </div>
      <!-- Stick element -->
      <section class="featured spad">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title">
                <img src="img/sale/flash.gif" alt="flash sale" />
                <img src="img/sale/giaSoc.png" alt="gia soc" />
              </div>
              <div class="featured__controls">
                <ul>
                  <li class="active" data-filter="*">Tất cả</li>
                  <li data-filter=".cay-de-ban">Cây để bàn</li>
                  <li data-filter=".cay-day-leo">Cây dây leo</li>
                  <li data-filter=".cay-tet">Cây tết</li>
                  <li data-filter=".cay-thuy-sinh">Cây thủy sinh</li>
                  <li data-filter=".cay-trong-nha">Cây trong nhà</li>
                  <li data-filter=".cay-ngoai-vuon">Cây ngoài vườn</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="featured__filter">
            <div class="row">
              <div
                class="col-lg-3 col-md-4 col-sm-6 mb-2 mix cay-trong-nha cay-de-ban"
              >
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/suong-rong-da-mini.jpg"
                  >
                    <div class="product__discount__percent">-10%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Sương rồng đá mini</a></h5>
                    <div class="product__item__price">
                      45.000 VNĐ <span>50.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-trong-nha">
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/cay-de-vuong-van-phong.jpg"
                  >
                    <div class="product__discount__percent">-20%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây đế vương</a></h5>
                    <div class="product__item__price">
                      360.000 VNĐ <span>450.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <div
                class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-de-ban cay-trong-nha"
              >
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/cay-dua-canh-nen.jpg"
                  >
                    <div class="product__discount__percent">-15%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây dứa cảnh nến</a></h5>
                    <div class="product__item__price">
                      110.000 VNĐ <span>130.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <div
                class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-day-leo cay-ngoai-vuon"
              >
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/cay-giot-suong.jpg"
                  >
                    <div class="product__discount__percent">-25%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây sen đá giọt sương</a></h5>
                    <div class="product__item__price">
                      112.000 VNĐ<span>150.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <div
                class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-thuy-sinh cay-de-ban cay-trong-nha"
              >
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/cay-lan-y-thuy-sinh-dep.jpg"
                  >
                    <div class="product__discount__percent">-10%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây lan ý thủy sinh</a></h5>
                    <div class="product__item__price">
                      135.000 VNĐ<span>150.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-ngoai-vuon">
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/cay-ngu-gia-bi.jpg"
                  >
                    <div class="product__discount__percent">-5%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây ngũ gia bì</a></h5>
                    <div class="product__item__price">
                      90.000 VNĐ<span>95.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <!-- -------------------Viet moi -->
              <div
                class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-de-ban cay-trong-nha"
              >
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/tung-bong-lai.jpg"
                  >
                    <div class="product__discount__percent">-15%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây tùng bồng lai</a></h5>
                    <div class="product__item__price">
                      129.000 VNĐ<span>150.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <div
                class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-trong-nha cay-de-ban"
              >
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/sen-da-do-la.jpg"
                  >
                    <div class="product__discount__percent">-5%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây sen đá Dollar</a></h5>
                    <div class="product__item__price">
                      90.000 VNĐ<span>95.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <div
                class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-thuy-sinh cay-trong-nha cay-de-ban"
              >
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/ngoc-ngan.jpg"
                  >
                    <div class="product__discount__percent">-19%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây ngọc ngân</a></h5>
                    <div class="product__item__price">
                      125.000 VNĐ<span>155.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-ngoai-vuon">
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/cay-mai-van-phuc.jpg"
                  >
                    <div class="product__discount__percent">-11%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây mai vạn phúc</a></h5>
                    <div class="product__item__price">
                      88.000 VNĐ<span>99.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <div
                class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-tet cay-ngoai-vuon"
              >
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/cay-hoa-hai-duong.jpg"
                  >
                    <div class="product__discount__percent">-15%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây hoa hải đường</a></h5>
                    <div class="product__item__price">
                      306.000 VNĐ<span>360.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
              <div
                class="col-lg-3 col-md-4 col-sm-6 mb-3 mix cay-day-leo cay-tet cay-ngoai-vuon"
              >
                <div class="product__discount__item">
                  <div
                    class="product__discount__item__pic set-bg"
                    data-setbg="img/sale/cay-bach-lan-duong.jpg"
                  >
                    <div class="product__discount__percent">-13%</div>
                    <ul class="product__item__pic__hover">
                      <li>
                        <a href="#"><i class="fa fa-money"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__discount__item__text">
                    <h5><a href="#">Cây bạch lan dương</a></h5>
                    <div class="product__item__price">
                      261.000 VNĐ<span>299.000 VNĐ</span>
                    </div>
                  </div>
                  <div
                  class="progress progress-style"
                  style="height: 20px; margin-bottom: 10px"
                >
                  <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <p class="text-muted">Còn 5 ngày</p>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- End edit -->

    <?php
      require_once 'blocks/footer.php';
    ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
