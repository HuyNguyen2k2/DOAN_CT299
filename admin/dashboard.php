<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/dashboard.css">
  <title>Thống kê sản phẩm</title>
</head>
<body>
  <div id="app">
    <h1>Thống kê sản phẩm</h1>
    
    <!-- Lọc theo giá -->
    <label for="priceFilter">Lọc theo giá:</label>
    <select id="priceFilter">
      <option value="0-50">0-50</option>
      <option value="51-100">51-100</option>
      <option value="101-200">101-200</option>
      <!-- Thêm các tùy chọn khác nếu cần -->
    </select>

    <!-- Lọc theo loại sản phẩm -->
    <label for="categoryFilter">Lọc theo loại sản phẩm:</label>
    <select id="categoryFilter">
      <option value="electronics">Electronics</option>
      <option value="clothing">Clothing</option>
      <!-- Thêm các tùy chọn khác nếu cần -->
    </select>

    <!-- Sản phẩm bán nhiều nhất -->
    <div id="mostSoldProduct">
      <h2>Sản phẩm bán nhiều nhất</h2>
      <p id="mostSoldProductName">Tên sản phẩm: </p>
      <p id="mostSoldProductQuantity">Số lượng bán: </p>
    </div>

    <!-- Danh sách sản phẩm -->
    <div id="productList">
      <!-- Danh sách sản phẩm sẽ được hiển thị ở đây -->
    </div>
  </div>

    <script src="./js/dashboard.js"></script>
</body>
</html>