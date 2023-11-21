<!DOCTYPE html>
<html>
<style>
  h2{
    padding-bottom: 20px;
  }

  table {
    border: 1px solid black;
    text-align: center;
    width: 70%;
    border-collapse: collapse;
    margin: 20px auto;
  }

  th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  th {
    background-color: #7fad39;
    color: white;
  }
</style>
<body>

<?php
  require_once '../boostrap.php';
  require_once _DIR_ROOT.'/database/connect.php';
?>

<h2>Loại sản phẩm</h2>

<form action="<?php echo _WEB_ROOT?>/admin/handler/category.php" method="get" class="add-category" >
    <input name="nameCategory" type="text">
    <input type="submit" class="btn-add" name="handler-add" value="Thêm" />
</form>

<table style="width:100%">
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
        <td class="col-id">'.$item[0].'</td>
        <td class="col-name">'.$item[1].'</td>
        <td class="col-edit">
            <a class="btn-category" href="'._WEB_ROOT.'/admin/index.php?idPage=edit_category&&nameCategory='.$item[1].'&&idTree='.$item[0].'">Sửa</a>
            <a class="btn-category" href="'._WEB_ROOT.'/admin/handler/category.php?handler=delete&&idTree='.$item[0].'">Xóa</a>
        </td>
      </tr>';
    }
  ?>
</table>

</body>
</html>