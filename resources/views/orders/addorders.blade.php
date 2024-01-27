<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datecreation" ).datepicker({
        dateFormat: 'dd/mm/yy'
    });
    $("#datecreation").datepicker("setDate", new Date());
  } );
  </script>
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <a href="{{ url('/orders/index') }}" class="btn btn-secondary mb-3">Quay lại</a>
    <h3>Thêm Đơn Hàng</h3>

    <form action="{{ url('/orders/save') }}" method="post" class="mt-3">
        @csrf

        <div class="mb-3">
            <label for="datecreation" class="form-label">Ngày Tạo</label>
            <input type="text" class="form-control" name="datecreation" id="datecreation">
        </div>

        <div class="mb-3">
            <label class="form-label">Trạng Thái</label>
            <div>
                <input type="radio" name="status" value="paid" checked> Đã Thanh Toán
                <input type="radio" name="status" value="unpaid"> Chưa Thanh Toán
            </div>
        </div>

        <div class="mb-3">
            <label for="payments" class="form-label">Hình Thức Thanh Toán</label>
            <select name="payments" id="payments" class="form-select">
                <option value="cash">Tiền Mặt</option>
                <option value="visa">Visa Card</option>
                <option value="mastercard">Master Card</option>
                <option value="paypal">Paypal</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="customerid" class="form-label">Mã Khách Hàng</label>
            <input type="text" class="form-control" name="customerid" id="customerid">
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
