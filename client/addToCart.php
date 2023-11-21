<?php
// addToCart.php
session_start();

// Kiểm tra xem ID sản phẩm có được cung cấp không
if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    // Thực hiện bất kỳ logic máy chủ cần thiết, chẳng hạn như thêm sản phẩm vào giỏ hàng
    // Bạn có thể muốn xác minh ID sản phẩm và xử lý các thao tác cơ sở dữ liệu ở đây

    // Ví dụ: Thêm ID sản phẩm vào mảng giỏ hàng phiên
    $_SESSION['cart'][] = $productId;

    // Gửi phản hồi trở lại cho máy chủ
    echo json_encode(['status' => 'success', 'message' => 'Sản phẩm đã được thêm vào giỏ hàng.']);
} else {
    // Gửi phản hồi lỗi nếu không có ID sản phẩm được cung cấp
    echo json_encode(['status' => 'error', 'message' => 'ID sản phẩm không được cung cấp.']);
}
?>
