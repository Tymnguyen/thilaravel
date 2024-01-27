@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datecreation").datepicker({
            dateFormat: 'dd/mm/yy'
        });
    });
</script>
<a href="{{ url('/orders/index') }}" class="btn btn-secondary">Quay Lại</a>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sửa Đơn Hàng</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/orders/update') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="datecreation">Ngày Tạo</label>
                                            <input type="text" name="datecreation" id="datecreation" class="form-control"
                                                value="{{ DateTime::createFromFormat('Y-m-d', $orders->datecreation)->format('d/m/Y') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status">Trạng Thái</label>
                                            <div>
                                                <input type="radio" name="status" value="paid"
                                                    {{ $orders->status == 'paid' ? 'checked' : '' }}> Đã Thanh Toán
                                                <br>
                                                <input type="radio" name="status" value="unpaid"
                                                    {{ $orders->status == 'unpaid' ? 'checked' : '' }}> Chưa Thanh Toán
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="payments">Hình Thức Thanh Toán</label>
                                            <select name="payments" id="payments" class="form-control">
                                                <option value="cash" {{ $orders->payments == 'cash' ? 'selected' : '' }}>Tiền
                                                    Mặt</option>
                                                <option value="visa" {{ $orders->payments == 'visa' ? 'selected' : '' }}>Visa
                                                    Card</option>
                                                <option value="mastercard" {{ $orders->payments == 'mastercard' ? 'selected' : '' }}>
                                                    Master Card
                                                </option>
                                                <option value="paypal" {{ $orders->payments == 'paypal' ? 'selected' : '' }}>Paypal
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="customerid">Mã Khách Hàng</label>
                                            <input type="text" name="customerid" class="form-control"
                                                value="{{ $orders->customerid }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <input type="hidden" name="id" value="{{ $orders->id }}">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
