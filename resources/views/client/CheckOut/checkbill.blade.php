@extends('layouts.client')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Đơn hàng của bạn</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="row">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="5%">STT</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Phương thức thanh toán</th>
                            <th>Ngày đặt</th>

                        </tr>
                    </thead>
                    @if (!empty($bill))
                        @foreach ($bill as $key => $value)
                            <tbody>
                                <tr>
                                    <td>MDH-{{ $value->order_id }}</td>
                                    <td>{{ $value->orders->order_name }}</td>
                                    <td>{{ $value->orders->order_email }}</td>
                                    <td>{{ $value->orders->order_address }}</td>
                                    <td>{{ $value->orders->order_phone }}</td>
                                    <td>{{ get_ttttt($value->orders->status) }}</td>
                                    <td>{{ $value->orders->created_at }}</td>

                                    <td width="1%"><a
                                            href="{{ route('checkout.CheckProduct', ['id' => $value->order_id]) }}"><i
                                                class="bi bi-receipt text-dark fs-4"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    @else
                        <tr>
                            <td>Không có đơn hàng nào</td>
                        </tr>
                    @endif
                </table>
            </div>


        </div>
    @endsection
