@extends('layouts.admin')

@section('content')
    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">Sửa sản phẩm</h3>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">Dữ liệu không hợp lệ vui lòng kiểm tra lại</div>
        @endif

        <form action="{{ route('admin.products.post-edit', ['id' => $getProduct->id]) }}" method="post"
            enctype="multipart/form-data">
            <div class="card-body row">
                <div class="col-9">
                    <div class="form-group mb-3">
                        <label for="">Họ và tên</label>
                        <input type="text" class="form-control" name="product_name"
                            placeholder="Tên sản phẩm..."value="{{ old('product_name') ?? $getProduct->product_name }}">
                        @error('product_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Mô tả</label>
                        <textarea name="product_desc" class="form-control" cols="80" rows="10"
                            style="width: 100%;border-radius: 5px;">{{ old('product_desc') ?? $getProduct->product_desc }}</textarea>
                        @error('product_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="">Giá</label>
                        <input type="text" class="form-control" name="product_price"
                            placeholder="Giá..."value="{{ old('product_price') ?? $getProduct->product_price }}">
                        @error('product_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Danh mục</label>
                        <select name="cate_id" id="" class="form-control">
                            <option value="#">Chọn danh mục</option>
                            @if (!empty($allCate))
                                {
                                @foreach ($allCate as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('cate_id') == $item->id || $getProduct->cate_id == $item->id ? 'selected' : false }}>
                                        {{ $item->cate_name }}</option>
                                @endforeach
                            @endif
                            }
                        </select>
                        @error('cate_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Số lượng</label>
                        <input type="text" class="form-control" name="product_quantity"
                            placeholder="Số lượng..."value="{{ old('product_quantity') ?? $getProduct->product_quantity }}">
                        @error('product_quantity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Hình ảnh</label>
                        <input type="file" class="form-control" name="product_image">
                        @error('product_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>



            </div>
            <div class="card-footer">

                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{ route('admin.products.home') }}" class="btn btn-warning">Quay lại</a>
                @csrf
            </div>

        </form>
    </div>
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        CKEDITOR.replace('product_desc');
    </script>
@endsection
