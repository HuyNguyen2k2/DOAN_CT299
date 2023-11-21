<?php
require_once '../boostrap.php';
require_once _DIR_ROOT.'/database/connect.php';

// Số lượng trang qui định
$limitPages = 3;

// Số lượng sản phẩm trên mỗi trang
$productsPerPage = 1;

// Tổng số sản phẩm
$sqlTotalProducts = "SELECT COUNT(*) FROM san_pham";
$totalProducts = $conn->query($sqlTotalProducts)->fetch_row()[0];

// Tổng số trang
$totalPages = ceil($totalProducts / $productsPerPage);

// Trang hiện tại
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Xác định vị trí bắt đầu và kết thúc của các sản phẩm trên trang hiện tại
$start = ($currentPage - 1) * $productsPerPage;
$end = $start + $productsPerPage - 1;

// Lấy danh sách sản phẩm cho trang hiện tại
$sqlCurrentProducts = "SELECT * FROM san_pham LIMIT $start, $productsPerPage";
$result_current = $conn->query($sqlCurrentProducts)->fetch_all();
$uploadDir = _WEB_ROOT."/admin/public/imgs/img_product/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/product.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid black;
        }

        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }

        .btn-editProduct,
        .btn-deleteProduct {
            border: 1px solid #fff;
            padding: 2px 10px;
            color: #fff;
            background-color: #7fad39;
            border-radius: 5px;
            margin: 0 5px;
            text-decoration: none;
        }

        th {
            background-color: #7fad39;
            color: white;
        }

        .col-ImgSp {
            width: 35%;
        }

        .pagination {
            display: flex;
            justify-content: center;
            padding-top: 30px;
        }

        .pagination a {
            padding: 10px;
            margin: 0 5px;
            border: 1px solid #ddd;
            text-decoration: none;
            color: #333;
        }

        .pagination a.active {
            background-color: #7fad39;
            color: white;
        }
    </style>
</head>
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
                    <form action="" method="post">
                        <select name="categoryId" class="select-value" id="categoryId">
                            <?php
                            $sqlCategories = "SELECT * FROM loai";
                            $result_all = $conn->query($sqlCategories)->fetch_all();
                            foreach ($result_all as $key => $item) {
                                echo '<option name="nameCatagory" value="' . $item[0] . '">' . $item[1] . '</option>';
                            }
                            ?>
                        </select>
                        <input class="btn-search" name="confirmFilterCategory" type="submit" value="Tim kiem">
                    </form>
                </div>
                <form action="" method="post">
                    <div class="wrap-input">
                        <input type="text" name="searchKeyword" value="Nhap ten san pham...">
                        <input class="btn-search" type="submit" value="Tim kiem">
                    </div>
                </form>
            </div>
        </div>

        <table>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Mô tả</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tùy chỉnh</th>
            </tr>

            <?php
            // Hiển thị sản phẩm (có thể trong vòng lặp foreach)
                foreach ($result_current as $item) {
                    echo '
                        <tr>
                            <td class="col-idSp">SP' . $item[0] . '</td>
                            <td class="col-NameSp">' . $item[2] . '</td>
                            <td class="col-ImgSp"><img style="width: 30%; padding: 5px 0;" src="' . $uploadDir . $item[4] . '" alt=""></td>
                            <td class="col-des">' . $item[3] . '</td>
                            <td class="col-quantity">' . $item[5] . '</td>
                            <td class="col-Pric">' . $item[6] . ' vnđ</td>
                            <form action="index.php?idPage=edit_product" method="post">
                                <input type="hidden" name="id" value="' . $item[0] . '">
                                <input type="hidden" name="name" value="' . $item[2] . '">
                                <input type="hidden" name="price" value="' . $item[6] . '">
                                <input type="hidden" name="quantity" value="' . $item[5] . '">
                                <input type="hidden" name="des" value="' . $item[3] . '">
                                <td class="col-edit">
                                    <input type="submit" name="btn-editProduct" value="Sửa" class="btn-editProduct">
                                    <a href="' . _WEB_ROOT . '/admin/handler/delete-product.php?handler=delete&&id=' . $item[0] . '" name="btn-deleteProduct" value="Xóa" class="btn-deleteProduct">Xóa</a>
                                </td>
                            </form>
                        </tr>';
                }
            ?>
        </table>

        <div class="pagination">
            <?php
                if($currentPage > 1){
                    echo '<a href="?idPage=product&&page='.($currentPage - 1).'" class="pre"><</a>';
                }
            ?>
            
            <?php for ($i = $currentPage; $i < $currentPage+$limitPages; $i++) : ?>
                <a href="?idPage=product&&page=<?= $i ?>" class="<?= ($currentPage == $i) ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php
                if($currentPage < $totalPages){
                    echo '<a href="?idPage=product&&page='.($currentPage + 1).'" class="next">></a>';
                }
            ?>
            
        </div>
    </div>
</body>
</html>
