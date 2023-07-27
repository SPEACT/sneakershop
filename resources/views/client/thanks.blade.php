@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="text-center py-3">
            <div class="mt-3">Cảm ơn bạn đã mua hàng !!!</div>
            <div class="mt-3"><a class="text-decoration-none" href="{{ route('checkout.checkBill') }}">Đơn hàng của bạn</a>
                được đặt thành công</div>
            <a href="{{ route('home') }}" class="btn btn-primary text-white mt-3">TIếp tục mua sắm</a>
        </div>
    </div>
@endsection
