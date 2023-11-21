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
           
                <span>Trang của tôi</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- User Section -->
    <div class="container">
        <div class="row my-2 user__border">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active nav-link-2">Tài Khoản</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#messages" data-toggle="tab" class="nav-link nav-link-2">Đổi Mật Khẩu</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link nav-link-2">Đơn Hàng</a>
                    </li>
                    <li class="nav-item">
                      <a href="" data-target="#my-coupon-code" data-toggle="tab" class="nav-link nav-link-2">Mã khuyến mãi</a>
                  </li>
                    <li class="nav-item">
                      <a href="" data-target="#like" data-toggle="tab" class="nav-link nav-link-2">Yêu Thích</a>
                  </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <!-- <h5 class="mb-3">Thông Tin Tài Khoản</h5> -->
                        <div class="row">
                            <div class="col-md-12">
                            <header>
                                <h1>HỒ SƠ CỦA TÔI</h1>
                                <div class="content">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
                            </header>
                            <form action="./handler/update_profile.php" id="formAcount" class="formAcount validate clearfix">
                                <div class="form-group clearfix">
                                    <div class="row">
                                        <label class="col-md-3 control-label"> Họ tên: <span>(*)</span></label>
                                        <div class="col-lg-6 col-md-9">
                                            <input type="text" id="fullName" name="fullName" value="<?php echo isset($_SESSION["tree_acc"])?json_decode($_SESSION["tree_acc"])[0][1]:"" ?>" placeholder="Họ tên" class="validate[required,minSize[4],maxSize[32]] form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="row">
                                        <label class="col-md-3 control-label">Điện thoại: <span></span></label>
                                        <div class="col-lg-6 col-md-9">
                                            <input type="text" id="mobile" name="mobile" value="<?php echo isset($_SESSION["tree_acc"])?json_decode($_SESSION["tree_acc"])[0][2]:"" ?>" placeholder="Điện thoại" class="validate[required,custom[phone]] form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="row">
                                        <label class="col-md-3 control-label">Email: <span>(*)</span></label>
                                        <div class="col-lg-6 col-md-9">
                                            <input type="text" id="email" name="email" value="<?php echo isset($_SESSION["tree_acc"])?json_decode($_SESSION["tree_acc"])[0][5]:"" ?>" placeholder="Email" class="validate[required,custom[email]] form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="row">
                                        <label class="col-md-3 control-label">Địa chỉ: <span>(*)</span></label>
                                        <div class="col-lg-6 col-md-9">
                                            <input type="text" id="address" name="address" value="<?php echo isset($_SESSION["tree_acc"])?json_decode($_SESSION["tree_acc"])[0][3]:"" ?>" placeholder="Địa chỉ" class="validate[required] form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="row">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-lg-6 col-md-9">
                                        <input type="submit" class="btn-update" value="CẬP NHẬT">                                   
                                        </button>
                                    </div>
                                </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="tab-pane" id="messages">
                      <!-- <h5 class="mb-3">Thông Tin Tài Khoản</h5> -->
                      <div class="row">
                          <div class="col-md-12">
                          <header>
                              <h1>THAY ĐỔI MẬT KHẨU</h1>
                              <div class="content">Bạn nên cập nhật mật khẩu thường xuyên vì lí do bảo mật</div>
                          </header>
                          <form id="formAcount" class="formAcount validate clearfix">
                              <div class="form-group clearfix">
                                  <div class="row">
                                      <label class="col-md-3 control-label"> Mật khẩu cũ: </label>
                                      <div class="col-lg-6 col-md-9">
                                          <input type="password" id="pass" name="pass" class="validate[required,minSize[4],maxSize[32]] form-control input-sm">
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group clearfix">
                                  <div class="row">
                                    <label class="col-md-3 control-label"> Mật khẩu mới: </label>
                                    <div class="col-lg-6 col-md-9">
                                        <input type="password" id="pass" name="pass" class="validate[required,minSize[4],maxSize[32]] form-control input-sm">
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group clearfix">
                                  <div class="row">
                                    <label class="col-md-3 control-label"> Xác nhận mật khẩu: </label>
                                    <div class="col-lg-6 col-md-9">
                                        <input type="password" id="pass" name="pass" class="validate[required,minSize[4],maxSize[32]] form-control input-sm">
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group clearfix">
                                  <div class="row">
                                  <label class="col-md-3 control-label"></label>
                                  <div class="col-lg-6 col-md-9">
                                      <button type="submit" class="btn-update">LƯU                                     
                                      </button>
                                  </div>
                              </div>
                              </div>
                          </form>
                          </div>
                      </div>
                      <!--/row-->
                  </div>
                    <div class="tab-pane myorder__style" id="edit">
                      <!-- <div class="heading">Đơn hàng của tôi</div> -->
                      <div class="inner">
                          <table>
                              <thead>
                                  <tr>
                                      <th>Mã đơn hàng</th>
                                      <th>Ngày mua</th>
                                      <th>Sản phẩm</th>
                                      <th>Tổng tiền</th>
                                      <th>Trạng thái đơn hàng</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>
                                          <a href="order-detail.html">673617832</a>
                                      </td>
                                      <td>30/10/2020</td>
                                      <td>Cây Cẩm Nhung</td>
                                      <td>90.000 VNĐ</td>
                                      <td>Giao hàng thành công</td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <a href="#">219844147</a>
                                      </td>
                                      <td>12/04/2020</td>
                                      <td>Cây Xương Rồng Tai Thỏ</td>
                                      <td>156.000 VNĐ</td>
                                      <td>Giao hàng thành công</td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <a href="#">972084147</a>
                                      </td>
                                      <td>09/09/2019</td>
                                      <td>Cây Bạch Mã Hoàng Tử</td>
                                      <td>350.000 VNĐ</td>
                                      <td>Đã hủy</td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <a href="/sales/order/view/404252736">404252736</a>
                                      </td>
                                      <td>14/04/2018</td>
                                      <td>Cây Hạnh Phúc</td>
                                      <td>172.000 VNĐ</td>
                                      <td>Đã hủy</td>
                                  </tr>                                            
                              </tbody>
                          </table>
                      </div>
                    </div>
                    <div class="tab-pane myorder__style " id="my-coupon-code">
                      <!-- <div class="heading">Đơn hàng của tôi</div> -->
                      <div class="inner">
                          <table>
                              <thead>
                                  <tr>
                                     
                                      <th>Tên mã giảm giá</th>
                                      <th>Loại mã</th>
                                      <th>Thời hạn</th>
                                      
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      
                                      <td>Giảm 50% phí vận chuyển</td>
                                      <td>Miễn phí vận chuyển</td>
                                      <td>Còn 8 ngày</td>
                                  </tr>
                                  <tr>
                                   
                                  <td>Giảm 90% khi thanh toán bằng momo</td>
                                  <td>Giảm giá momo</td>
                                  <td>Còn 2 ngày</td>
                                  </tr>
                                  <tr>
                                  
                                  <td>Giảm 50% tất cả đơn hàng trên 1 TR VNĐ</td>
                                  <td>Giảm giá %</td>
                                  <td>Còn 1 ngày</td>
                                  </tr>
                                  <tr>
                                   
                                    <td>Giảm 10% tất cả đơn hàng VNĐ</td>
                                    <td>Giảm giá %</td>
                                    <td>Còn 1 ngày</td>
                                    </tr>                                        
                              </tbody>
                          </table>
                      </div>
                    </div>
                   
                    <div class="tab-pane " id="like">
                      <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product__item">
                              <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/cay-mong-rong.jpg">
                                  <ul class="product__item__pic__hover">
                                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                      <li><a href="#"><i class="fa fa-retweet"></i></a></li>
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
                                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                      <li><a href="#"><i class="fa fa-retweet"></i></a></li>
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
                            <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/xuong-rong-tai-tho.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
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
                              <div class="product__item__pic set-bg" data-setbg="img/cay-de-ban/cam-nhung.jpg">
                                  <ul class="product__item__pic__hover">
                                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                      <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                      <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                  </ul>
                              </div>
                              <div class="product__item__text">
                                  <h6><a href="#">Cây Cẩm Nhung</a></h6>
                                  <h5>39.000 VNĐ</h5>
                              </div>
                          </div>
                      </div>
                      </div>
                    </div>
                      <!--/row-->
                </div>
                
            </div>
            <div class="col-lg-4 order-lg-1 text-center img-2">
              <div class="img-ava">
                <img src="./img/user/avata-default.png" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                <label class="load-ava">
                  <span class="custom-file-control">Đổi Ảnh</span>
                  <input type="file" id="file" class="custom-file-input">
                  
                </label>
              </div>
                <h6 class="mt-2"><?php echo isset($_SESSION["tree_acc"])?json_decode($_SESSION["tree_acc"])[0][1]:"" ?></h6>
                <a href="./handler/delete_session.php">Đăng xuất</a>
            </div>
        </div>
    </div>
    <!-- User Section End -->

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

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js"></script>
  <script>
    $(document).ready(function(){
        $("#formAcount").validate({
            rules: {
                fullname: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                cityID: {
                  required: true
                },
                district: {
                  required: true
                },
                ward: {
                  required: true
                },
                address:  {
                  required: true
                }
            },
            messages: {
              fullname: {
                    required: "Xin vui lòng nhập tên"
                },
                email: {
                    required: "Xin vui lòng nhập email",
                    email: "Email không hợp lệ, xin vui lòng nhập lại"
                },
                cityID: {
                  required: "Xin chọn tỉnh/thành phố"
                },
                district: {
                  required: "Xin vui lòng nhập quận/huyện"
                },
                ward: {
                  required: "Xin vui lòng nhập xã/ phường/ thị trấn"
                },
                address:  {
                  required: "Xin vui lòng nhập địa chỉ"
                }
            }
        });
    });
</script>
</body>
</html>
