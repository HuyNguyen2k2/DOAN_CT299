<?php

require_once '../boostrap.php';
require_once _DIR_ROOT.'/database/connect.php';

if (isset($_POST['deleteSelected'])) {
    if (!empty($_POST['selectedProducts'])) {
        $selectedProducts = $_POST['selectedProducts'];

        foreach ($selectedProducts as $productId) {
            // Thực hiện truy vấn xóa dựa trên $productId
            $sql = "DELETE FROM san_pham WHERE SP_MA = $productId";
            $result = $conn->query($sql);

            if ($result) {
                echo "Xóa sản phẩm có mã sản phẩm: SP$productId thành công.<br>";
            } else {
                echo "Lỗi xảy ra khi xóa sản phẩm có mã sản phẩm: SP$productId.<br>";
            }
        }
    } else {
        echo "Không có sản phẩm nào được chọn để xóa.";
    }
}

// Chuyển hướng người dùng về trang danh sách sản phẩm sau khi xóa
header("Location: index.php?idPage=product");
exit();

?>