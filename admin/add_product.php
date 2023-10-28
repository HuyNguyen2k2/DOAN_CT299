<link rel="stylesheet" href="./css/add_product.css">

<div class="back" style="display: inline-block;font-size: 30px;"><a href="index.php?idPage=product"><i class="fa fa-reply"></i></a></div>

<?php
    require_once '../boostrap.php';
    require_once _DIR_ROOT.'/database/connect.php';
?>

<div class="body__product">

    <form action="<?php echo _WEB_ROOT?>/admin/handler/products.php" enctype="multipart/form-data" onsubmit="return true" method="post" id="add-product-form">

        <h2 class="body__product-title">THEM SAN PHAM</h2>

        <div class="address-save">
            <div class="wrap-input">
                <label for="category-product">Chọn loại</label>
                <select name="categoryProduct" id="" class="select-catalog-list">
                    <?php
                    $sql = "SELECT * FROM loai";
                    $result_all = $conn->query($sql)->fetch_all();
                
                    foreach($result_all as $item){
                        echo '
                            <option value="'.$item[0].'">'.$item[1].'</option>
                        ';
                    }
                        
                    ?>
                    
                </select>
            </div>
            <div class="wrap-input">
                <label for="name-product">Tên sản phẩm</label>
                <input type="text" name="name-product" ">
            </div>
            <div class="wrap-input">
                    <label for="quantity-product">Số lượng sản phẩm</label>
                    <input type="number" name="quantity-product"">
            </div>
            <div class="wrap-input">
                    <label for="price-product">Gía sản phẩm</label>
                    <input type="text" name="price-product" ">
            </div>
            <div class="wrap-input">
                    <label for="des-product">Mô tả sản phẩm</label>
                    <input type="text" name="des-product" ">
            </div>
            <div class="wrap-input">    
                <label for="img1-product">Ảnh sản phẩm</label>
                <input type="file" name="img_product_1" ">
            </div>
            <div class="wrap-input btn">    
                <input type="submit" name="confirmAddProduct" value="Them san pham" class="btn-add-product">
            </div>
        </div>
    </form>

</div>