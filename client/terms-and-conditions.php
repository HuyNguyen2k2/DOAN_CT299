<!DOCTYPE html>
<html lang="vi-VN">

<?php
    require_once 'blocks/head.php';
    require_once 'blocks/header.php'
?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.html"><img src="img/banner/bieutuong_off.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">Tổng:<span>150.000đ</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="sign-in.html"><i class="fa fa-user"></i>Đăng Nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Trang Chủ</a></li>
                <li><a href="./shop-grid.html">Mua sắm</a></li>
                <li><a href="./product-sale.html">Giảm giá</a></li>
                <li><a href="./blog.html">Bài viết</a></li>
                <li><a href="./contact.html">Liên hệ</a></li>
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
                <li><i class="fa fa-envelope"></i> thegioicaycanhNLU.com</li>
                <li>Miễn Phí Giao Hàng Cho Các Đơn Từ 499.000đ</li>
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
                                <li><i class="fa fa-envelope"></i> thegioicaycanhNLU.com</li>
                                <li>Miễn Phí Giao Hàng Cho Các Đơn Từ 499.000đ</li>
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
                                <a href="#"><i class="fa fa-user"></i> Đăng Nhập</a>
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
                        <a href="./index.html"><img src="img/banner/bieutuong_off.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Trang Chủ</a></li>
                            <li><a href="./shop-grid.html">Mua sắm</a></li>
                            <li><a href="./product-sale.html">Giảm giá</a></li>
                            <li><a href="./blog.html">Bài viết</a></li>
                            <li><a href="./contact.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">Tổng:<span>150.000 VNĐ</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
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
                            <a href="#">Điều khoản và điều kiện</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Sign In Section Begin -->
    <section class="Terms-and-conditions">
        <div class="TAD-Container">
            <h5 class="title-all">Điều khoản và điều kiện</h5>
            <p>       <b>Thế giới cây cảnh</b> duy trì Website này như một dịch vụ cung cấp cho khách hàng, bao gồm nhưng không giới hạn các cá nhân, tổ chức sử dụng dịch vụ hoặc hợp tác kinh doanh với chúng tôi (sau đây gọi là Bạn). Khi sử dụng Website này và bất kỳ sản phẩm/dịch vụ nào tại đây (gọi sau đây gọi là Dịch vụ) có nghĩa là Bạn đã chấp nhận và đồng ý tuân theo bản Điều khoản sử dụng này. Ngoài ra khi sử dụng các Dịch vụ cụ thể của chúng tôi, Bạn phải tuân theo các điều khoản và điều kiện riêng áp dụng cho Dịch vụ đó theo từng thời điểm.

            </p>
            <p><b>1. Sử dụng hợp pháp</b>
                Bạn phải chấp nhận rằng Bạn sẽ không được phép có bất cứ hành vi nào có thể hiểu rằng Bạn đã, đang hoặc sẽ tổ chức kinh doanh dưới bất kỳ hình thức bao gồm nhưng không giới hạn như đề nghị hoặc chào hàng, bán hàng, cho thuê, cấp phép, trưng bày, giao hàng, quảng cáo và khuyến mãi trực tiếp hoặc gián tiếp bất kỳ sản phẩm, dịch vụ, dữ liệu, thông tin, hình ảnh có nội dung vi phạm pháp luật hiện hành và thuần phong mỹ tục Việt Nam; Bạn không được tham gia vào bất cứ hoạt động nào liên quan đến việc phát tán, xuất bản hoặc chuyển các loại email không mong muốn (thư rác) đến người dùng khác trong hệ thống trên Website như thông tin khuyến mãi, quảng cáo.
        </p>
            <p><b>2. Sự tuân thủ</b>
                Thế giới cây cảnh có quyền hợp pháp yêu cầu Bạn tuân thủ những Điều khoản sử dụng, Chính sách bảo mật hoặc Thỏa thuận sử dụng tương ứng khi sử dụng Dịch vụ. Nếu xác định được Bạn vi phạm những điều khoản và điều kiện này, Thế giới cây cảnh có thể đơn phương chấm dứt hoặc đình chỉ ngay lập tức việc: (1) Sử dụng Dịch vụ; (2) Thỏa thuận sử dụng Dịch vụ; (3) Truy cập Website này. Chúng tôi cũng có quyền thông báo các hoạt động này bị nghi ngờ vi phạm qui định với cơ quan chức trách hoặc bên thứ ba. Thế giới cây cảnh cũng có thể hợp tác với với cơ quan pháp luật để hỗ trợ điều tra và truy tố các hoạt động vi phạm pháp theo quy định. Nếu Bạn muốn thông báo bất kỳ hành động vi phạm những điều khoản này, vui lòng liên hệ với chúng tôi.
         </p>
            <p><b>3. Liên kết website của bên thứ ba</b>
                Website này có thể kết nối đến những website của các bên thứ ba. Thế giới cây cảnh cung cấp những đường dẫn để thực hiện các kết nối này nhằm đem đến sự thuận tiện cho Bạn. Những website của nhà cung cấp hoặc quảng cáo này được sở hữu bởi những tổ chức có hoạt động độc lập. Chúng tôi không chịu trách nhiệm, xác nhận hay có nghĩa vụ đối với bất kỳ nội dung, quảng cáo, các sản phẩm có sẵn từ các website đó. Thêm nữa, Bạn xác nhận và đồng ý rằng Thế giới cây cảnh sẽ không chịu trách nhiệm hoặc có nghĩa vụ, trực tiếp hoặc gián tiếp, đối với bất kỳ thiệt hại hoặc tổn thất nào liên quan tới việc sử dụng hay căn cứ vào nội dung, sản phẩm hoặc dịch vụ hiện có trên bất kỳ website đó. Bạn nên tìm hiểu kỹ về các nhà cung cấp trước khi thực hiện bất kỳ giao dịch nào với bên thứ ba.
        </p>
            <p><b>4. Quyền sở hữu trí tuệ</b>
                Tất cả hình ảnh, biểu tượng, và tất cả các nội dung khác (gọi tắt là Nội dung) tại Website này thuộc sở hữu của Thế giới cây cảnh hoặc các tổ chức, cá nhân khác được trích dẫn một cách hợp pháp. Chúng tôi cho phép Bạn xem, tải về và in Nội dung khi:
      	– Bạn chỉ sử dụng cho mục đích cá nhân chứ không phải cho mục đích thương mại.
      	– Bạn không sao chép, xuất bản hoặc sử dụng lại Nội dung.
      	– Bạn không chỉnh sửa Nội dung.
      	– Bạn không di chuyển bất kỳ bản quyền, thương hiệu và các Nội dung độc quyền khác trên Website.
      Ngoại trừ việc cho phép rõ ràng như trên, nghiêm cấm mọi việc sao chép, điều chỉnh hoặc sử dụng lại Nội dung Website mà không có sự cho phép trước bằng văn bản của Thế giới cây cảnh . Để yêu cầu sử dụng Nội dung, Bạn có thể liên hệ với chúng tôi. Nếu được chấp thuận, Bạn phải bảo đảm là việc sử dụng Nội dung Website của Bạn sẽ phù hợp với Quy định này và việc sử dụng này không vi phạm quyền, lợi ích của các cá nhân, tổ chức khác hoặc vi phạm hợp đồng, nghĩa vụ luật pháp của cá nhân, tổ chức khác.
      </p>
            <p><b>5. Loại trừ trách nhiệm</b>
                Thế giới cây cảnh tuyên bố loại trừ trách nhiệm theo các quy định tại Điều khoản miễn trừ.
           </p>
            <p><b>6. Bồi thường</b>
                Bạn có nghĩa vụ bồi thường cho Thế giới cây cảnh hoặc bất cứ bên thứ ba nào cho toàn bộ hay bất cứ thiệt hại thực tế nào mà phần lỗi được xác định là do Bạn khi xảy ra một trong các tình huống dưới đây:<br>
          	– Vi phạm các Điều khoản sử dụng này hoặc Chính sách bảo mật hoặc các Thỏa thuận sử dụng Dịch vụ khác của chúng tôi.<br>
          	– Vi phạm các quy định và pháp luật hiện hành gây thiệt hại cho chúng tôi.<br>
          	– Sự vô ý hoặc hành vi cố ý làm sai của Bạn, hoặc nhân viên và đại lý của Bạn gây ảnh hưởng/thiệt hại đến chúng tôi.<br>
        	– Xâm phạm quyền sở hữu trí tuệ hoặc quyền lợi hợp pháp của bất kỳ cá nhân, tổ chức nào; tranh chấp trong việc quảng cáo, khuyến mãi, phân phối hàng hóa của Bạn gây thiệt hại đến chúng tôi.
          </p>
            <p><b>7. Truy cập vào khu vực có mật khẩu</b>
                Chỉ những người được Thế giới cây cảnh ủy quyền hợp pháp hoặc cho phép bằng văn bản mới được thực hiện việc truy cập và sử dụng những khu vực được bảo vệ bằng mật khẩu của Website. Những cá nhân, tổ chức cố ý xâm nhập vào vùng này tuỳ từng mức độ có thể sẽ bị khởi kiện hay tố cáo theo pháp luật hiện hành.
        </p>

            <p><b>8. Chính sách bảo mật</b>
                Tất cả những thông tin nhập vào Website này được áp dụng theo Chính sách bảo mật của Thế giới cây cảnh .
         </p>
            <p><b>9. Sửa đổi Điều khoản sử dụng</b>
                Thế giới cây cảnh có thể thay đổi, điều chỉnh Điều khoản sử dụng này theo quyết định của mình mà không cần thông báo cho Bạn. Bạn có thể xem những thông tin mới cập nhật vào bất cứ lúc nào tại Website này. Nếu Bạn tiếp tục sử dụng Dịch vụ có nghĩa là Bạn chấp nhận và đồng ý tuân theo Điều khoản sử dụng mới được cập nhật.
       </p>
            <p><b>10. Thu thập thông tin khách hàng</b>
                Để sử dụng được các dịch vụ của Thế giới cây cảnh . Bạn phải cung cấp các thông tin cá nhân cần thiết. Chúng tôi cũng lưu trữ bất kỳ thông tin nào Bạn nhập trên Website hoặc gửi đến chúng tôi. Những thông tin đó sẽ được sử dụng cho mục đích phản hồi yêu cầu của Bạn, đưa ra những ý kiến tư vấn pháp lý‎ phù hợp cho từng vụ việc, nâng cao chất lượng dịch vụ và liên lạc với Bạn khi cần.
           </p>
            <p><b>11. Sử dụng thông tin</b>
                Mục đích của việc thu thập thông tin là nhằm xây dựng một hệ thống khách hàng toàn diện của Thế giới cây cảnh , nhằm hướng tới nâng tầm chất lượng dịch vụ, chất lượng chăm sóc khách hàng tốt nhất. Vì thế, việc sử dụng thông tin sẽ phục vụ những hoạt động sau:<br>
         	– Cung cấp một số tiện ích, dịch vụ hỗ trợ khách hàng;<br>
         	– Nâng cao chất lượng dịch vụ khách hàng của chúng tôi;<br>
         	– Giải quyết các vấn đề, tranh chấp phát sinh liên quan đến việc sử dụng Website;<br>
         	– Ngăn chặn những hoạt động vi phạm pháp luật Việt Nam.
         </p>
            <p><b>12. Chia sẻ thông tin</b>
                Thế giới cây cảnh  biết rằng thông tin về Bạn là một phần rất quan trọng trong việc kinh doanh và chúng sẽ không được bán, trao đổi cho bất kỳ một bên thứ ba nào khác. Chúng tôi sẽ không chia sẻ thông tin khách hàng trừ những trường hợp cụ thể sau đây:
          	– Để bảo vệ Thế giới cây cảnh  và các bên thứ ba khác: Chúng tôi chỉ đưa ra thông tin cá nhân khi tin chắc rằng việc đưa những thông tin đó là phù hợp với luật pháp, bảo vệ quyền lợi, tài sản của người sử dụng dịch vụ, của chúng tôi và các bên thứ ba khác.<br>
          	– Theo yêu cầu phù hợp với pháp luật Việt Nam từ một cơ quan chức năng có thẩm quyền hoặc khi chúng tôi tin rằng việc làm đó là cần thiết và phù hợp nhằm tuân theo các yêu cầu của pháp l‎uật.<br>
          	– Trong những trường hợp còn lại, chúng tôi sẽ có thông báo cụ thể cho Bạn khi phải tiết lộ thông tin cho một bên thứ ba và thông tin này chỉ được cung cấp khi được sự phản hồi đồng ‎ý‎ từ phía Bạn.<br>
          Nó chắc chắn không bao gồm việc bán, chia sẻ dẫn đến việc làm lộ thông tin cá nhân của Bạn vì mục đích thương mại, vi phạm những cam kết được đặt ra trong quy định của Chính sách này.
          </p>
            <p><b>13. Quy định bảo hành sản phẩm</b><br>
                	– Sản phẩm thuộc danh mục được bảo hành<br>
                	– Sản phẩm bị lỗi kỹ thuật do chủ của hàng.<br>
                	– Phiếu bảo hành còn nguyên vẹn, không chắp vá, không bị gạch xóa hay sửa chữa, bôi bẩn.<br>
                	– Phiếu bảo hành đầy đủ thông tin: mã sản phẩm, tên khách hàng sử dụng, địa chỉ, ngày mua.<br>
                	– Thời gian áp dụng bảo hành có hiệu lưc từ khi nhận hàng đến lúc yêu cầu bảo hành không được quá 3 ngày. 
            </p>
        </div>
    </section>
    <!-- Sign In Section End -->

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