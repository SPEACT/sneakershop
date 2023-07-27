@extends('layouts.admin')

@section('content')

    <div class="card-header">
        <h3 class="card-title">Sản phẩm</h3>
    </div>
    <div class="card-body">

        <form action="" method="get" class="mb-3">
            <div class="row">
                <div class="col-4">
                    <input type="search" name="keywords" id="" class="form-control"
                        placeholder="Từ khóa tìm kiếm ..." value="{{ request()->keywords }}">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Số lượng</th>
                    <th>Danh mục</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($productList))
                    @foreach ($productList as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->product_name }}</td>
                            <td><img src="{{ $value->product_image }}" alt="" style="width:120px;height: 120px;">
                            </td>
                            <td>{{ number_format($value->product_price, 0, '', ',') }}đ</td>
                            <td></td>
                            <td>{{ $value->product_quantity }}</td>
                            <td>{{ $value->category->cate_name }}</td>
                            <td><a href="{{ route('admin.products.edit', ['id' => $value->id]) }}" class=""><i
                                        class="bi bi-pencil-square fs-4 text-primary mx-2"></i></a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa')"
                                    href="{{ route('admin.products.delete', ['id' => $value->id]) }}"><i
                                        class="bi bi-trash-fill fs-4 text-danger mx-2"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">Không có người dùng</td>
                    </tr>
                @endif
            </tbody>

        </table>
        {{ $productList->links() }}
    </div>
@endsection
