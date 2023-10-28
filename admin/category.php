<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
  text-align: center;
}

td{
    height: 50px;
}

.btn-add {
    border: 1px solid #fff;
    padding: 5px 10px;
    color: #fff;
    background-color: #7fad39;
    border-radius: 5px;
}

.btn-category{
    border: 1px solid #fff;
    padding: 2px 10px;
    color: #fff;
    background-color: #7fad39;
    border-radius: 5px;
    margin: 0 5px;
}

.col-edit {
    display: flex;
    align-items: center;
    gap: 30px;
    width: 50%;
}

.col-id {
  width: 20%;
}

.col-name {
    width: 50%;
}

.add-category {
    padding: 20px 0;
}

</style>
<body>

<?php
  require_once '../boostrap.php';
  require_once _DIR_ROOT.'/database/connect.php';
?>

<h2>Danh mục sản phẩm</h2>

<form action="<?php echo _WEB_ROOT?>/admin/handler/category.php" method="get" class="add-category">
    <input name="nameCategory" type="text">
    <input type="submit" class="btn-add" name="handler-add" value="Thêm" />
</form>

<table style="width:70%">
  <tr>
    <th>Mã loại</th>
    <th>Tên loại</th>
    <th>Tùy chỉnh</th>
  </tr>
  <?php
    $sql = "SELECT * FROM loai";
    $result_all = $conn->query($sql)->fetch_all();

    foreach($result_all as $item){
      echo '
      <tr>
        <td class="col-id">L0'.$item[0].'</td>
        <td class="col-name">'.$item[1].'</td>
        <td class="col-edit"><a class="btn-category" href="'._WEB_ROOT.'/admin/index.php?idPage=edit_category&&nameCategory='.$item[1].'&&idTree='.$item[0].'">Sửa</a> <a class="btn-category" href="'._WEB_ROOT.'/admin/handler/category.php?handler=delete&&id='.$item[0].'">Xóa</a></td>
      </tr>';
    }
    
  ?>
</table>

</body>
</html>