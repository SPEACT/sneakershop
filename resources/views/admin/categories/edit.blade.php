@extends('layouts.admin')

@section('content')
<div class="card card-primary">

<div class="card-header">
    <h3 class="card-title">Sửa danh mục</h3>
  </div>
@if ($errors->any())
<div class="alert alert-danger">Dữ liệu không hợp lệ vui lòng kiểm tra lại</div>
@endif

   <form action="{{ route('admin.category.post-edit', ['id'=>$getCategory->id]) }}" method="post" enctype="multipart/form-data">
    <div class="card-body">
      @csrf

       
    <div class="mb-3">
           <label for="">Tên danh mục</label>
           <input type="text" class="form-control" name="cate_name" placeholder="Tên danh mục..."value="{{ old('cate_name') ?? $getCategory->cate_name}}">
           @error('cate_name')
           <span class="text-danger">{{ $message }}</span>
           @enderror
       </div>
       <div class="mb-3">
           <label for="">Ảnh danh muc</label>
           <input type="file" class="form-control" name="file_upload" value="{{ $getCategory->cate_image }}">
           <img src="{{ $getCategory->cate_image }}" style="width: 120px;height:120px" alt="">     
          </div>
        </div>
        <div class="card-footer">

       <button type="submit" class="btn btn-primary">Sửa mới</button>
       <a href="{{ route('admin.groups.home') }}" class="btn btn-warning">Quay lại</a>
</div>

    </form>
</div>
@endsection