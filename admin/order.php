<!DOCTYPE html>
<html>
<head>
    <style>
        h2{
            padding-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
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

        /* tr:nth-child(even) {
            background-color: #f2f2f2;
        } */

        .pad{
            padding: 5px 0;
        }
    </style>
</head>
<body>

<h2>Quản Lý Đơn Đặt Hàng</h2>

<div class="filter-section pad">
    <label for="filterDate">Lọc theo ngày:</label>
    <input type="date" id="filterDate" name="filterDate">
</div>

<div class="filter-section pad">
    <label for="filterStatus">Lọc theo trạng thái:</label>
    <select name="filterStatus" id="filterStatus">
        <option value="all">Tất cả</option>
        <option value="Chờ xử lý">Chờ xử lý</option>
        <option value="Đang giao hàng">Đang giao hàng</option>
        <option value="Hoàn thành">Hoàn thành</option>
        <option value="Hủy">Hủy</option>
    </select>
</div>

<table>
    <thead>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt hàng</th>
            <th>Tổng giá trị</th>
            <th>Trạng thái</th>
            <th>Tùy chọn</th> <!-- Cột Tùy chọn -->
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>DH12345</td>
            <td>2023-11-09</td>
            <td>$150.00</td>
            <td>
                <select name="status">
                    <option value="Chờ xử lý">Chờ xử lý</option>
                    <option value="Đang giao hàng">Đang giao hàng</option>
                    <option value="Hoàn thành">Hoàn thành</option>
                    <option value="Hủy">Hủy</option>
                </select>
            </td>
            <td>
                <button onclick="updateStatus('DH12345')">Cập nhật</button>
                <a href="detail-order.php?orderId=DH12345">Xem chi tiết</a>
            </td>
        </tr>
        <tr>
            <td>DH12345</td>
            <td>2023-11-09</td>
            <td>$150.00</td>
            <td>
                <select name="status">
                    <option value="Chờ xử lý">Chờ xử lý</option>
                    <option value="Đang giao hàng">Đang giao hàng</option>
                    <option value="Hoàn thành">Hoàn thành</option>
                    <option value="Hủy">Hủy</option>
                </select>
            </td>
            <td>
                <button onclick="updateStatus('DH12345')">Cập nhật</button>
                <a href="detail-order.php?orderId=DH12345">Xem chi tiết</a>
            </td>
        </tr>
        <!-- Các dòng khác -->
    </tbody>
</table>

<script>
    const filterDateInput = document.getElementById('filterDate');
    const filterStatusSelect = document.getElementById('filterStatus');
    const tableBody = document.querySelector('table tbody');

    // Thêm sự kiện lọc khi ngày hoặc trạng thái thay đổi
    filterDateInput.addEventListener('change', applyFilters);
    filterStatusSelect.addEventListener('change', applyFilters);

    // Hàm áp dụng bộ lọc
    function applyFilters() {
        const selectedDate = filterDateInput.value;
        const selectedStatus = filterStatusSelect.value;
        
        // Đoạn code này bạn cần viết để lọc và hiển thị đơn đặt hàng dựa trên ngày và trạng thái đã chọn
        // Ví dụ: bạn có thể sử dụng AJAX để gửi yêu cầu lên máy chủ và nhận kết quả trả về để cập nhật bảng
        // Sau khi lọc dữ liệu, bạn có thể cập nhật nội dung bảng trong phần tbody

        // Ví dụ cách bạn có thể cập nhật dữ liệu trong bảng (bạn cần thay thế dữ liệu này bằng dữ liệu thực tế)
        tableBody.innerHTML = `
            <tr>
                <td>DH12345</td>
                <td>2023-11-09</td>
                <td>$150.00</td>
                <td>Chờ xử lý</td>
                <td>
                    <button onclick="updateStatus('DH12345')">Cập nhật</button>
                    <a href="detail-order.php?orderId=DH12345">Xem chi tiết</a>
                </td>
            </tr>
            <!-- Các dòng khác -->
        `;
    }

    // Hàm cập nhật trạng thái
    function updateStatus(orderId) {
        // Đoạn code này bạn cần viết để cập nhật trạng thái đơn đặt hàng (thông qua AJAX hoặc các phương pháp khác)
    }
</script>

</body>
</html>
