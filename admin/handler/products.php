<?php

require_once '../../boostrap.php';
require_once _DIR_ROOT.'/database/connect.php';
require_once 'functions.php';

$type = $_POST["categoryProduct"];
$nameProduct = $_POST["name-product"];
$quantityProduct = $_POST["quantity-product"];
$priceProduct = $_POST["price-product"];
$desProduct = $_POST["des-product"];
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

if(!empty($nameProduct) || !empty($priceProduct) ||  $imgOk){
    $sql = " INSERT INTO `san_pham` (`SP_MA`, `L_MA`, `SP_TEN`, `SP_MOTA`, `SP_HinhAnh`, `SP_SoLuong`, `SP_Gia`) VALUES 
    (NULL, '".$type."', '".$nameProduct."', '".$desProduct."', '".$img."', '".$quantityProduct."', '".$priceProduct."'); ";
    $isSucces = add($sql);
    if($isSucces){
        alert('Them thanh cong!');
        redirect("/admin/index.php?idPage=product", true);
    }else{
        alert('Them that bai!');
        redirect("/admin/index.php?idPage=add_product", true);
    }
}else{
    alert('Ten va gia khong rong!');
    redirect("/admin/index.php?idPage=add_product", true);
}



function add($sql) {
    global $conn;
    $result = $conn->query($sql);

    if($result){
        return true;
    }
    return false;
}

function delete($sql) {
    global $conn;
    $result = $conn->query($sql);

    if($result){
        return true;
    }
    return false;
}


?>