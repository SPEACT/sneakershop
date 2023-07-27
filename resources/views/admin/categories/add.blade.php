@extends('layouts.admin')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Danh Mục</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" class="form-control" name="cate_name" id=""
                        placeholder="Tên danh mục ...">
                    @error('cate_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Ảnh danh mục</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="file_upload" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
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

    {{-- <form action="" method="post" enctype="multipart/form-data">
       <div class="mb-3">
           <label for="">Tên danh mục</label>
           <input type="text" class="form-control" name="cate_name" placeholder="Tên danh mục..."value="{{ old('cate_name')}}">
           @error('cate_name')
           <span class="text-danger">{{ $message }}</span>
           @enderror
       </div>
       <div class="mb-3">
           <label for="">Anh danh muc</label>
           <input type="file" class="form-control" name="file_upload">
       </div>

       <button type="submit" class="btn btn-primary">Thêm mới</button>
       <a href="{{ route('admin.groups.home') }}" class="btn btn-warning">Quay lại</a>
       @csrf
    </form> --}}
@endsection
