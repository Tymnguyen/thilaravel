@extends('layouts.app')

@section('content')
<a href="{{ url('/orders/index') }}" class="btn btn-secondary ml-2 mb-5">Quay Lại</a>
<div class="col-md-12">
    <!-- Biểu mẫu tìm kiếm bằng đơn hàng -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Tìm Kiếm Theo Đơn Hàng</h5>
            <form action="{{url('/orders/searchByOrders')}}" method="get">
                <div class="mb-3">
                    
                    <input type="text" class="form-control" id="key" name="key" value="{{isset($key) ? $key : ''}}">
                </div>
                <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DATECREATION</th>
                        <th>STATUS</th>
                        <th>PAYMENTS</th>
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


