@extends('layouts.admin')

@section('content')
   <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm Vai trò</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form  action="" method="post">
      <div class="card-body">
        <div class="form-group">
          <label for="">Tên danh mục</label>
          <input type="text" class="form-control" name="name" id="" placeholder="Tên danh mục ..." value="{{ old('name') }}">
          @error('name')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <a href="{{ route('admin.groups.home') }}" class="btn btn-warning">Quay lại</a>
        @csrf
      </div>
    </form>
  </div>
  
@endsection