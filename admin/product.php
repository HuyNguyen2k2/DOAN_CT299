<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="./css/product.css">

<style>
    table, th, td {
        border:1px solid black;
        text-align: center;
    }

    td{
        height: 50px;
    }

    .btn-editProduct,
    .btn-deleteProduct{
        border: 1px solid #fff;
        padding: 2px 10px;
        color: #fff;
        background-color: #7fad39;
        border-radius: 5px;
        margin: 0 5px;
    }

    .col-idSp {
        width: 10%;
    }

    .col-NameSp{
        width: 35%;
    }

    .col-ImgSp{
        width: 15%;
    }
    .col-Price{
        width: 25%;
    }

    .col-edit {
        width: 20%;
    }

</style>

<?php
    require_once '../boostrap.php';
    require_once _DIR_ROOT.'/database/connect.php';
?>

<body>

    <h2>Danh sách sản phẩm</h2>

    <div class="body__product">

        <div class="body__product-top">

        <div class="left">
            <form action="index.php?idPage=add_product" method="post">
                <div class="wrap-input">
                    <input type="submit" name="btn-addProduct" value="Them san pham" class="submit-btn">
                </div>
            </form>
        </div>

        <div class="right">
            <div class="wrap-input">
                <form action="" method="post" >
                    <select name="categoryId" class="select-value" id="">
                        <?php
                        $sql = "SELECT * FROM loai";
                        $result_all = $conn->query($sql)->fetch_all();
                        foreach($result_all as $key=>$item){
                            echo '
                                <option name="nameCatagory" value="'.$item[0].'">'.$item[1].'</option>
                            ';
                        }
                        
                        ?>
                        
                    </select>
                    <input class="btn-search" name="confirmFilterCategory" type="submit" value="Tim kiem">
                </form>
                
            </div>
            <div class="wrap-input">
                <input type="text" placeholder="Nhap ten san pham...">
                <input class="btn-search" type="submit" value="Tim kiem">
            </div>
        </div>

        </div>

        <table>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tùy chỉnh</th>
            </tr>
            <?php
                $sql = "SELECT * FROM san_pham";
                $result_all = $conn->query($sql)->fetch_all();
                $uploadDir = _WEB_ROOT."/admin/public/imgs/img_product/";
                foreach ($result_all as $item){
                    echo '
                    <tr>
                        <td class="col-idSp">SP'.$item[0].'</td>
                        <td class="col-NameSp">'.$item[2].'</td>
                        <td class="col-ImgSp"><img style="width: 50%; padding: 5px 0;" src="'.$uploadDir.$item[4].'" alt=""></td>
                        <td class="col-Pric">'.$item[5].'</td>
                        <td class="col-Pric">'.$item[6].' vnđ</td>
                        <form action="index.php?idPage=edit_product" method="post">
                            <input type="hidden" name="id" value="'.$item[0].'">
                            <input type="hidden" name="name" value="'.$item[2].'">
                            <input type="hidden" name="price" value="'.$item[6].'">
                            <input type="hidden" name="quantity" value="'.$item[5].'">
                            <input type="hidden" name="des" value="'.$item[3].'">
                            <td class="col-edit">
                                <input type="submit" name="btn-editProduct" value="Sửa" class="btn-editProduct">
                                <a href="'._WEB_ROOT.'/admin/handler/delete-product.php?handler=delete&&id='.$item[0].'" name="btn-deleteProduct" value="Xóa" class="btn-deleteProduct">Xóa</a>
                            </td>
                        </form>
                    </tr>
                    ';
                }
            ?>
            
        </table>

        
        
        

    </div>

    <img style="width: 50%; padding: 5px 0;" src="" alt="">
    
</body>
</html>