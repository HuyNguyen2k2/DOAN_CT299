<!DOCTYPE html>
<html lang="en">

<style>
    h2{
        padding-bottom: 20px;
    }

    .btn-edit {
    border: 1px solid #fff;
    padding: 5px 10px;
    color: #fff;
    background-color: #7fad39;
    border-radius: 5px;
}
</style>

<?php
    require_once '../boostrap.php';
    require_once _DIR_ROOT.'/database/connect.php';

    
?>

<body>

<h2>Sửa thông tin sản phẩm</h2>

<p>Sửa tên danh mục:</p>
<form action="<?php echo _WEB_ROOT?>/admin/handler/category.php" method="get" class="edit-category">
    <input name="nameCategory" type="text" placeholder="Nhập tên cần sửa" value="<?php echo isset($_GET["nameCategory"])? $_GET["nameCategory"]:"" ?>">
    <input type="submit" class="btn-edit" name="handler-edit" value="Sửa" />
    <input type="hidden" name="idTree" value="<?php echo isset($_GET["idTree"])? $_GET["idTree"]:""?>">
    <input type="hidden" name="handler" value="edit">
</form>
    
</body>
</html>