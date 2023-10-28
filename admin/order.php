<!DOCTYPE html>
<html lang="en">

<style>
    h2 {
        padding-bottom: 30px;
    }

    table, th, td {
        border:1px solid black;
        text-align: center;
    }

    td{
        height: 50px;
    }

    .btn-category{
        border: 1px solid #fff;
        padding: 2px 10px;
        color: #fff;
        background-color: #7fad39;
        border-radius: 5px;
        margin: 0 5px;
    }

    .col-idSp{
        width: 10%;
    }
    .col-NameSp{
        width: 20%;
    }
    .col-NameClient{
        width: 20%;
    }
    .col-fee{
        width: 11%;
    }
    .col-date{
        width: 10%;
    }
    .col-price{
        width: 10%;
    }
    .col-edit{
        
    }

</style>

<body>

    <h2>DANH SÁCH ĐƠN ĐẶT HÀNG</h2>

    <table>
        <tr>
            <th>Mã đơn</th>
            <th>Tên sản phẩm</th>
            <th>Tên người đặt</th>
            <th>Phí giao hàng</th>
            <th>Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Tùy chọn</th>
        </tr>
        <tr>
            <td class="col-idSp"><input type="checkbox" name="checkbox" id=""> DDH001</td>
            <td class="col-NameSp">Mai tứ quý</td>
            <td class="col-NameClient">Hoàng Huy</td>
            <td class="col-fee">15.000</td>
            <td class="col-date">18/10/2023</td>
            <td class="col-price">5.000.000</td>
            <td class="col-edit"><a class="btn-category" href="#">Nhận đơn</a> <a class="btn-category" href="#">Hủy đơn</a></td>
        </tr>
    </table>
    
</body>
</html>