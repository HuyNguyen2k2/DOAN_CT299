<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Đơn Đặt Hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            max-width: 800px;
        }
        .order-details {
            font-size: 18px;
        }
        .product-list {
            margin-top: 20px;
        }
        .product {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .product img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Chi Tiết Đơn Đặt Hàng #12345</h2>
        <div class="order-details">
            <p><strong>Ngày đặt hàng:</strong> 10/11/2023</p>
            <p><strong>Trạng thái:</strong> Đang xử lý</p>
            <p><strong>Tổng tiền:</strong> $100.00</p>
            <p><strong>Địa chỉ giao hàng:</strong> 123 Đường ABC, Thành phố XYZ</p>
        </div>
        <div class="product-list">
            <div class="product">
                <img src="product1.jpg" alt="Sản phẩm 1">
                <div>
                    <p><strong>Tên sản phẩm:</strong> Sản phẩm 1</p>
                    <p><strong>Số lượng:</strong> 2</p>
                    <p><strong>Giá:</strong> $50.00</p>
                </div>
            </div>
            <div class="product">
                <img src="product2.jpg" alt="Sản phẩm 2">
                <div>
                    <p><strong>Tên sản phẩm:</strong> Sản phẩm 2</p>
                    <p><strong>Số lượng:</strong> 1</p>
                    <p><strong>Giá:</strong> $30.00</p>
                </div>
            </div>
            <!-- Thêm thông tin sản phẩm khác tại đây -->
        </div>
    </div>
</body>
</html>