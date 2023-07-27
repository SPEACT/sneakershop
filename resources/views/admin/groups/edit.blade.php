@extends('layouts.admin')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa Danh Mục</h3>
      </div>
   @if ($errors->any())
    <div class="alert alert-danger">Dữ liệu không hợp lệ vui lòng kiểm tra lại</div>
   @endif
   <div class="card-body row">
  
   <form action="{{ route('admin.groups.post-edit') }}" method="post">
       <div class="form-group mb-3">
           <label for="">Tên danh mục</label>
           <input type="text" class="form-control" name="name" placeholder="Tên danh mục..." value="{{ old('name') ?? $getGroup->name}}">
           @error('name')
           <span class="text-danger">{{ $message }}</span>
           @enderror
       </div>
       <div class="card-footer">

       <button type="submit" class="btn btn-primary">Thêm mới</button>
       <a href="{{ route('admin.groups.home') }}" class="btn btn-warning">Quay lại</a>
       @csrf
</div>
</div>

    </form>
</div>

@endsection