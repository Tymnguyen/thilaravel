<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $("#birthday").datepicker({
        dateFormat: 'dd/mm/yy',
        changeYear: true, // Enable year dropdown
        yearRange: 'c-100:c+0' // Allow selecting from 100 years ago to the current year
    });
});

  </script>
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <a href="{{ url('/customer/index') }}" class="btn btn-secondary mb-3">Quay lại</a>
    <h3>Thêm Khách Hàng</h3>

    <form action="{{ url('/customer/save') }}" method="post" class="mt-3">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Tên Khách Hàng</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Địa Chỉ</label>
            <input type="text" class="form-control" name="address" id="address">
        </div>

        <div class="mb-3">
            <label for="birthday" class="form-label">Ngày Sinh</label>
            <input type="text" class="form-control" name="birthday" id="birthday">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Số Điện Thoại</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
