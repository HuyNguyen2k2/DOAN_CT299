<link rel="stylesheet" href="./css/add_product.css">

<div class="back" style="display: inline-block;font-size: 30px;"><a href="index.php?idPage=product"><i class="fa fa-reply"></i></a></div>

<?php
require_once '../boostrap.php';
require_once _DIR_ROOT.'/database/connect.php';

?>

<div class="body__product">

    <form action="<?php echo _WEB_ROOT?>/admin/handler/edit-product.php" enctype="multipart/form-data" onsubmit="return true" method="post" id="add-product-form">

        <h2 class="body__product-title">CHINH SUA THONG TIN SAN PHAM</h2>

        <div class="address-save">
            <input type="hidden" name="id-product" value="<?php echo $_POST['id'] ?>">
            <div class="wrap-input">
                <label for="name-product">Tên sản phẩm</label>
                <input type="text" name="name-product" value="<?php echo $_POST['name'] ?>" ">
            </div>
            <div class="wrap-input">
                    <label for="quantity-product">Số lượng sản phẩm</label>
                    <input type="number" name="quantity-product" value="<?php echo $_POST['quantity'] ?>">
            </div>
            <div class="wrap-input">
                    <label for="price-product">Giá sản phẩm</label>
                    <input type="text" name="price-product" value="<?php echo $_POST['price'] ?>"">
            </div>
            <div class="wrap-input">
                    <label for="des-product">Mô tả sản phẩm</label>
                    <input type="text" name="des-product" value="<?php echo $_POST['des'] ?>"">
            </div>
            <div class="wrap-input">    
                <label for="img1-product">Ảnh sản phẩm</label>
                <input type="file" name="img_product_1" ">
            </div>
            <div class="wrap-input btn">    
                <input type="submit" name="confirmAddProduct" value="Sửa" class="btn-add-product">
            </div>
        </div>
    </form>


</div>