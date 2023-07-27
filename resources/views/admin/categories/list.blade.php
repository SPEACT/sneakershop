@extends('layouts.admin')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Danh Mục Sản Phẩm</h3>
    </div>
    @if (session('msg'))
        <div class="alert alert-success">{{ session('msg') }}</div>
    @endif
    <div class="card-body">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th>Tên danh mục</th>
                    <th>Hình ảnh</th>
                    <th>Thời gian</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($categoryList))
                    @foreach ($categoryList as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->cate_name }}</td>
                            <td><img src="{{ $value->cate_image }}" style="width: 120px;height:120px" alt=""> </td>
                            <td>{{ $value->created_at }}</td>

                            <td><a href="{{ route('admin.category.edit', ['id' => $value->id]) }}" class=""><i
                                        class="bi bi-pencil-square fs-4 text-primary mx-2"></i></a>
                                <a href="{{ route('admin.category.delete', ['id' => $value->id]) }}"><i
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
    </div>
@endsection
