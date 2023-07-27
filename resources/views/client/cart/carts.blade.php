@extends('layouts.client')

@section('content')
    <div class="container">
        {{-- <div class="row d-flex justify-content-center align-items-center h-100"> --}}
        {{-- <div class="col"> --}}
        <p><span class="h2">Giỏ hàng</span><span class="h4">({{ $cart->total_quantity }} sản phẩm trong giỏ
                hàng)</span></p>
        <div class="card mb-4">
            <div class="card-body p-4">
                @if (!empty($cart->items))
                    @foreach ($cart->items as $key => $value)
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <img src="{{ $value['product_image'] }}" class="img-fluid" alt="Generic placeholder image">
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div>
                                    <p class="small text-muted mb-4 pb-2">Tên sản phẩm</p>
                                    <p class="lead fw-normal mb-0">{{ $value['product_name'] }}</p>
                                </div>
                            </div>

                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="small text-muted mb-4 pb-2">Số lượng</p>
                                    {{-- <p class="lead fw-normal mb-0">{{ $value['product_price'] }}</p> --}}

                                    <form action="{{ route('cart.update', ['id' => $value['id']]) }}" method="GET"
                                        class="d-flex flex-row">
                                        {{-- <input type="number" name="product_quantity"
                                                    value="{{ $value['product_quantity'] }}"> --}}
                                        <input id="form1" type="number" min="0" name="product_quantity"
                                            value="{{ $value['product_quantity'] }}" type="number"
                                            class="form-control form-control-sm" style="width: 50px;" />

                                        <input type="submit" class="btn btn-danger btn-sm mb-2" value="Update">
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="small text-muted mb-4 pb-2">Giá tiền</p>
                                    <p class="lead fw-normal mb-0">
                                        {{ number_format($value['product_price'], 0, '', ',') }}đ</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="small text-muted mb-4 pb-2">Thành tiền</p>
                                    <p class="lead fw-normal mb-0">
                                        {{ number_format($value['product_price'] * $value['product_quantity'], 0, '', ',') }}đ
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-1 d-flex justify-content-center">
                                <div>

                                    <td class="text-center"><a href="{{ route('cart.remove', ['id' => $value['id']]) }}"><i
                                                class="bi bi-x-square fs-4 text-danger"></i></a>
                                    </td>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="card mb-5">
                        <div class="card-body p-4">

                            <div class="float-end">
                                <p class="mb-0 me-5 d-flex align-items-center">
                                    <span class="small text-muted me-2">Tổng tiền:</span> <span
                                        class="lead fw-normal">{{ number_format($cart->total_price, 0, '', ',') }}
                                        đ</span>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-end">

                        <a href="{{ route('checkout.checkout') }}" class="btn btn-primary mx-3">Đặt hàng</a>
                        <a href="{{ route('home') }}" class="btn btn-primary mx-3">Cửa hàng</a>
                        <a href="{{ route('cart.clear') }}" class="btn btn-danger">Xóa tất cả</a>
                    </div>
                @else
                    <p>Giỏ hàng trống</p>
                    <a href="{{ route('home') }}" class="btn btn-primary mx-3">Cửa hàng</a>
                @endif

            </div>


        </div>
    </div>
@endsection
