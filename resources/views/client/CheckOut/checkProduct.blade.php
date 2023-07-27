@extends('layouts.client')

@section('content')
    <h1>Giỏ hàng</h1>


    <hr>
    <a href="{{ route('checkout.checkBill') }}" class="btn btn-primary"><i
            class="bi bi-arrow-return-left text-white fs-5"></i></a>
    <table class="table table-bordered">

        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($billPro as $key => $value)
                <tr>
                    <td>{{ $value->product_id }}</td>
                    <td>{{ $value->product->product_name }}</td>
                    <td><img src="{{ $value->product->product_image }}" alt="" style="width: 100px; height: 100px;">
                    </td>
                    <td>{{ $value->product->product_price }}</td>
                    <td>{{ $value->quantity }}</td>
                    <td>{{ $value->quantity * $value->product->product_price }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
