<div class="">
    <h2>Xin chào {{ $auth->name }}</h2>
    <p>Cảm ơn bạn đã đặt hàng ở shop chúng tôi, vui lòng kiểm tra lại thông tin</p>

    <table>
        <tr>
            <td>Họ tên</td>
            <td>{{ $auth->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $auth->email }}</td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td>{{ $auth->address }}</td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td>{{ $auth->phone }}</td>
        </tr>
    </table>
    <h2 class="py-4">Đơn hàng của bạn</h2>
    <table class="table">
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên sản phẩm</td>
                <td>Số lượng</td>
                <td>Giá tiền</td>
            </tr>
        </thead>
        @foreach ($cart->items as $key => $value)
            <tbody>
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value['product_name'] }}</td>
                    <td>{{ $value['product_quantity'] }}</td>
                    <td>{{ number_format($value['product_price'], 0, '', ',') }}đ</td>
                </tr>
            </tbody>
        @endforeach


        <div class="product-sum fs-3">Tổng tiền: <span
                class="fs-2 mx-5">{{ number_format($cart->total_price, 0, '', ',') }}đ</span></div>
    </table>



</div>
