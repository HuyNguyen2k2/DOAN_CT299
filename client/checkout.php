<!DOCTYPE html>
<html lang="vi-VN">
  
<?php
  require_once '../boostrap.php';

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
                        <div class="breadcrumb__option">
                            <a href="#">Giỏ hàng</a>
                            <span>Thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h6>
              <span class="icon_tag_alt"></span> Đã có mã giảm giá?
              <a href="shoping-cart.html">nhấn tại đây</a> để lấy mã giảm giá
            </h6>
          </div>
        </div>
        <div class="checkout__form">
          <h4>Chi tiết đơn hàng</h4>
          <form action="#">
            <div class="row">
              <div class="col-lg-8 col-md-6">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Họ và tên đệm<span>*</span></p>
                      <input type="text" required/>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Tên<span>*</span></p>
                      <input type="text" required/>
                    </div>
                  </div>
                </div>
                <div class="checkout__input">
                  <p>Địa chỉ<span>*</span></p>
                  <input
                    type="text"
                    placeholder="Số nhà / Đường"
                    class="checkout__input__add"
                    required
                  />
                  <input type="text" placeholder required="Xã / Phường / Thị trấn" />
                </div>
                <div class="checkout__input">
                  <p>Tỉnh / Thành phố<span>*</span></p>
                  <input type="text" required/>
                </div>
                <div class="checkout__input">
                  <p>Huyện / Quận<span>*</span></p>
                  <input type="text" required/>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Điện thoại<span>*</span></p>
                      <input type="number" required/>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Email<span>*</span></p>
                      <input type="email" required/>
                    </div>
                  </div>
                </div>

                <!-- Tao tai khoan -->
                <div class="checkout__input__checkbox">
                  <label for="acc">
                    Tạo tài khoản?
                    <input
                      type="checkbox"
                      id="acc"
                      data-toggle="collapse"
                      data-target="#create_account"
                      aria-expanded="false"
                      aria-controls="create_account"
                      required
                    />
                    <span class="checkmark"></span>
                  </label>
                </div>
                

                <div class="collapse" id="create_account">
                  <p>
                    Để tạo tạo khoản vui lòng nhập thông tin bên dưới. Nếu khách
                    hàng đã có tài khoản vui lòng đăng nhập
                  </p>
                  <div class="checkout__input">
                    <p>Mật khẩu tài khoản<span>*</span></p>
                    <input type="password" required/>
                  </div>
                </div>
                <!-- Ket thuc tao tai khoan -->
                
                <!-- Van chuuyen den dia chi khac -->
                <div class="checkout__input__checkbox">
                  <label for="diff-acc">
                    Vận chuyển đơn hàng đến địa chỉ khác?
                    <input type="checkbox" id="diff-acc" data-toggle="collapse"
                    data-target="#other_place_ship"
                    aria-expanded="false"
                    aria-controls="collapseExample"/>
                    <span class="checkmark" id="order-place"></span>
                  </label>
                </div>
                <div class="checkout__input collapse" id="other_place_ship">
                    <p>Địa chỉ<span>*</span></p>
                    <input id="order-place-input-required" type="text" placeholder="Ghi đầy đủ địa chỉ" />
                </div>

                <!-- Ket thuc van chuyen den dia chi khac -->

                <div class="checkout__input">
                  <p>Lưu ý khi vận chuyển<span>*</span></p>
                  <input
                    type="text"
                    placeholder="Lưu ý về đơn hàng hoặc lưu ý khi vận chuyển."
                  />
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="checkout__order">
                  <h4>Đơn hàng</h4>
                  <div class="checkout__order__products">
                    Sản phẩm <span>Giá</span>
                  </div>
                  <ul>
                    <li>Cây móng rồng <span>64.000 VNĐ</span></li>
                    <li>Cây cẩm nhung <span>39.000 VNĐ</span></li>
                    <li>Xương rồng tai thỏ <span>36.000 VNĐ</span></li>
                  </ul>
                  <div class="checkout__order__subtotal">
                    Tổng:<span>139.000 VNĐ</span>
                  </div>
                  <div class="checkout__order__subtotal">
                    Phí vận chuyển: <span>26.000 VNĐ</span>
                  </div>
                  
                  <div class="checkout__order__total">
                    Thành tiền:<span>165.000 VNĐ</span>
                  </div>
                  <p>Vui lòng chọn hình thức thanh toán</p>
                  <div class="checkout__input__checkbox">
                    <label for="cash">
                      Tiền mặt
                      <input type="checkbox" id="cash"/>
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="checkout__input__checkbox">
                    <label for="momo">
                      Ví điện tử momo
                      <input type="checkbox" id="momo" data-toggle="collapse" data-target="#momo-code"/>
                      <span class="checkmark" ></span>
                    </label>
                    <div id="momo-code" class="checkout__input collapse">
                      <p>Mã giảm momo</p>
                      <input type="text"/>
                    </div>
                  </div>
                  <button id="checkout-btn" type="submit" class="site-btn">Đặt hàng</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Checkout Section End -->
  <!-- Modal -->
  <div class="modal fade" id="momo-payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Quét QR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
              <img src="img/qr_code/qr_code1.png" alt="">
              <p>Vui lòng mở momo và quét QR code trong vòng <span id="count-down-time">200</span> giây</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- ......................................................................................-->
      <!-- Kết thúc phần xử lí -->


<!-- Footer -->
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
