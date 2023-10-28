<?php

require_once '../../boostrap.php';
require_once _DIR_ROOT.'/database/connect.php';
require_once 'functions.php';

$id = $_POST["id-product"];
$name = $_POST["name-product"];
$quantity = $_POST["quantity-product"];
$price = $_POST["price-product"];
$des = $_POST["des-product"];

$imgProduct = $_FILES;

$uploadDir = _DIR_ROOT."/admin/public/imgs/img_product/";

$check = checkUploadImg($imgProduct, $uploadDir);

$img = "";
$imgOk = false;
    
if($check == 1){
    alert('Loi kich thuoc!');
    redirect("/admin/index.php?idPage=add_product", true);
}else if($check == 2){
    alert('Loi file!');
    redirect("/admin/index.php?idPage=add_product", true);
}else if($check == 3){
    alert('Loi khi upload!');
    redirect("/admin/index.php?idPage=add_product", true);
}else{
    $img = $check;
    $imgOk = true;
}

if(!empty($name) || !empty($price) ||  $imgOk){
    $sql = " UPDATE `san_pham` SET `SP_TEN`='".$name."',`SP_MOTA`='".$des."',
    `SP_HinhAnh`='".$img."',`SP_SoLuong`='".$quantity."',`SP_Gia`='".$price."' where sp_ma = '".$id."' ";
    // $sql = " INSERT INTO `san_pham` (`SP_MA`, `L_MA`, `SP_TEN`, `SP_MOTA`, `SP_HinhAnh`, `SP_SoLuong`, `SP_Gia`) VALUES 
    // (NULL, '".$type."', '".$nameProduct."', '".$desProduct."', '".$img."', '".$quantityProduct."', '".$priceProduct."'); ";
    $isSucces = edit($sql);
    if($isSucces){
        alert('Sửa thanh cong!');
        redirect("/admin/index.php?idPage=product", true);
    }else{
        alert('Sửa that bai!');
        redirect("/admin/index.php?idPage=add_product", true);
    }
}else{
    alert('Ten va gia khong rong!');
    redirect("/admin/index.php?idPage=add_product", true);
}

function edit($sql) {
    global $conn;
    $result = $conn->query($sql);

    if($result){
        return true;
    }
    return false;
}

?>