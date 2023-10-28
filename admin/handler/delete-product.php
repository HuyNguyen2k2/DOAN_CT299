<?php

require_once '../../boostrap.php';
require_once _DIR_ROOT.'/database/connect.php';
require_once 'functions.php';

if(isset($_GET["handler"])){
    $get_id = $_GET["id"];
    $sql = " DELETE FROM san_pham WHERE sp_ma = ".$get_id." ";
    $isSucces = delete($sql);
    if($isSucces){
        alert('Xoa thanh cong!');
        redirect("/admin/index.php?idPage=product", true);
    }else{
        alert('Khong the xoa!');
        redirect("/admin/index.php?idPage=product", true);
    }
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