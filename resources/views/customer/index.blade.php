@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <a href="{{ url('customer/index') }}" class="btn btn-secondary mb-3">Quay lại</a>
<div class="container mt-4">

<div class="container mt-4">
    <h2>Quản Lý Khách Hàng</h2>

    <div class="row">
        <div class="col-md-6">
            <!-- Biểu mẫu tìm kiếm bằng từ khóa -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Tìm Kiếm Theo Tên Khách Hàng</h5>
                    <form action="{{url('/customer/searchByKeyword')}}" method="get">
                        <div class="mb-3">
                            
                            <input type="text" class="form-control" id="keyword" name="keyword" value="{{isset($keyword) ? $keyword : ''}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- Bảng danh sách khách hàng -->
    <div class="card">
        <div class="card-body">
        <a href="{{url('customer/add')}}" class="btn btn-success">Thêm Khách Hàng</a>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Địa Chỉ</th>
                        <th>Ngày Sinh</th>
                        <th>Số Điện Thoại</th>
                        <th>Chi Tiết</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->address}}</td>
                        <td>{{$customer->birthday}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>
                            <a href="{{url('/customer/orders/'.$customer->id)}}" class="btn btn-info btn-sm">Đơn Hàng</a>
                        </td>
                        <td>
                        <a href="{{url('/customer/delete/'.$customer->id)}}" 
                        onclick="return confirm('Are u Sure?')"  class="btn btn-success btn-sm">Xoá</a>
                            <a href="{{url('/customer/edit/'.$customer->id)}}" class="btn btn-primary btn-sm">Sửa</a>
                        </td>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('custom-css')
<style>
    .card {
        background-color: #f8f9fa;
        border-radius: 0.25rem;
    }
    .card-title {
        color: #007bff;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-info {
        color: #fff;
    }
</style>
@endsection
