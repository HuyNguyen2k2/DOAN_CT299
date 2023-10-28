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
                <a href="#">Mã giảm giá</a>
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
              <option>Sản phẩm khuyến mãi</option>
              <option>Mã khuyến mãi</option>
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
                <img src="img/sale/giamSoc.png" alt="gia soc" />
              </div>
              <!-- Sửa featured_controls thành code_sale_controls -->
              <div class="code_sale_controls">
                <ul>
                  <li class="active" id="addShow_imme" data-filter="*">
                    Tất cả
                  </li>
                  <li data-filter=".code-percen">Mã giảm giá</li>
                  <li data-filter=".code-momo">Mã giảm giá momo</li>
                  <li data-filter=".code-freeship">Miễn phí vận chuyển</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Sửa featured__filter thành code_sale_filter -->
          <div class="code_sale_filter">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-percen">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/coupon-code.png"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-percen">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/coupon-code.png"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-percen">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/coupon-code.png"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-percen">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/coupon-code.png"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- -------------------Viet moi -->
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-momo">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/momo.jpg"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-momo">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/momo.jpg"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-momo">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/momo.jpg"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-momo">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/momo.jpg"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-momo">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/momo.jpg"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-freeship">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/freeship.png"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-freeship">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/freeship.png"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-freeship">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/freeship.png"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-freeship">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/freeship.png"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 mix code-freeship">
                <div class="card mb-3 bg-ligh mx-2" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img
                        src="img/sale/freeship.png"
                        class="card-img full-height"
                        alt="..."
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body row">
                        <div class="col-md-12">
                          <h5 class="card-title none-margin">Giảm 8%</h5>
                          <p class="none-margin"><i>Mã: c683y2</i></p>
                          <p class="card-text none-margin">
                            Giảm tối đa 50.000 VNĐ cho tất cả đơn hàng
                          </p>
                          <div
                            class="progress progress-style none-margin"
                          >
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <p class="text-muted">Còn 5 ngày</p>
                          </div>
                        </div>
                        <div>
                          <button type="button" class="btn btn-success">Lấy mã</button>
                        </div>
                      </div>
                    </div>
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
