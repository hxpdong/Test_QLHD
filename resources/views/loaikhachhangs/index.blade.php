<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<h1>Loại Khách Hàng</h1>
<a href="/khachhang">
    <button type="button" class="btn btn-info">
        Danh sách khách hàng
    </button>
</a>
<hr>
<table>
    <tr>
        <th>ID</th>
        <th>Mã</th>
        <th>Tên loại</th>
        <th>ID_CSS</th>
    </tr>
    @foreach ($loaikhachhangs as $loai)
    
        <tr>
            <!--<td><a href="/khachhangs/{{$loai->LOAIKHACHHANG_ID}}">{{ $loai->LOAIKHACHHANG_ID }}</a></td>-->
            <td>{{ $loai->LOAIKHACHHANG_ID }}</td>
            <td>{{ $loai->LOAIKHACHHANG_MA }}</td>
            <td>{{ $loai->LOAIKHACHHANG_TEN }}</td>
            <td>{{ $loai->LOAIKHACHHANG_ID_CSS }}</td>
            <td>
                <a href="/loaikhachhangs/{{$loai->LOAIKHACHHANG_ID}}">
                    <button type="button" class="btn btn-info">
                        Chi tiết
                    </button>
                </a>
            </td>
        </tr>
    
    @endforeach
</table>