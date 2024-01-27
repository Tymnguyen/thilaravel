@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <a href="{{ url('customer/index') }}" class="btn btn-secondary mb-3">Quay lại</a>
<div class="container mt-4">
    <h2>Quản Lý Đơn Hàng</h2>

    <!-- Thêm nút Thêm Đơn Hàng -->
    <a href="{{ url('/orders/addorders/' . $customerid) }}" class="btn btn-success mb-2">Thêm Đơn Hàng</a>

    <!-- Bảng danh sách đơn hàng -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Ngày Tạo</th>
                    <th>Trạng Thái</th>
                    <th>Thanh Toán</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->datecreation }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->payments }}</td>
                        <td>
                        <a href="{{url('/orders/delete/'.$customerid . '-'.$order->id)}}" 
                        onclick="return confirm('Are u Sure?')"  class="btn btn-success btn-sm">Xoá</a>
                            <a href="{{url('/orders/edit/'.$order->id)}}" class="btn btn-primary btn-sm">Sửa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Hiển thị số lượng đơn hàng -->
    <p>Hóa đơn: {{ $count }}</p>
</div>
@endsection
@section('custom-css')
<style>
    .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
    }
</style>
@endsection
