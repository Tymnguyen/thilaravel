<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
  $(function() {
    $("#birthday").datepicker({
      dateFormat: 'dd/mm/yy'
    });
  });
</script>

@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <div class="content mt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Thêm Khách Hàng</h3>
            </div>
            <div class="card-body">
              <a href="{{ url('/customer/index') }}" class="btn btn-secondary mb-3">Quay lại</a>
              <form action="{{ url('/customer/update') }}" method="post" class="mt-3">
                @csrf

                <div class="mb-3">
                  <label for="name" class="form-label">Tên Khách Hàng</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $customer->name }}">
                </div>

                <div class="mb-3">
                  <label for="address" class="form-label">Địa Chỉ</label>
                  <input type="text" class="form-control" name="address" id="address" value="{{ $customer->address }}">
                </div>

                <div class="mb-3">
                  <label for="birthday" class="form-label">Ngày Sinh</label>
                  <input type="text" class="form-control" name="birthday" id="birthday" value="{{ DateTime::createFromFormat('Y-m-d', $customer->birthday)->format('d/m/Y') }}">
                </div>

                <div class="mb-3">
                  <label for="phone" class="form-label">Số Điện Thoại</label>
                  <input type="text" class="form-control" name="phone" id="phone" value="{{ $customer->phone }}">
                </div>

                <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Lưu</button>
                  <input type="hidden" name="id" value="{{ $customer->id }}">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
