@extends('layouts.admin')

@section('content')
    {{-- <form action="" method="post">
       <div class="mb-3">
           <label for="">Họ và tên</label>
           <input type="text" class="form-control" name="fullName" placeholder="Họ và tên..." value="{{ old('fullName') }}">
           @error('fullName')
           <span class="text-danger">{{ $message }}</span>
               
           @enderror
       </div>
       <div class="mb-3">
           <label for="">Email</label>
           <input type="text" class="form-control" name="email" placeholder="Email..."value="{{ old('email') }}">
           @error('email')
           <span class="text-danger">{{ $message }}</span>
               
           @enderror
       </div>
       <div class="mb-3">
           <label for="">Nhóm</label>
            <select name="groups_id" id="" class="form-control">
                <option value="#">Chọn nhóm</option>
                @if (!empty($allGroup)){
                    @foreach ($allGroup as $item) 
                        <option value="{{ $item->id }}" {{ old('groups_id') == $item->id?'selected':false }}>{{ $item->name }}</option>
                    @endforeach
                    @endif
                }
            </select>
           @error('groups_id')
           <span class="text-danger">{{ $message }}</span>
           @enderror
       </div>

       <div class="mb-3">
           <label for="">Trạng thái</label>
            <select name="status" id="" class="form-control">
                <option value="0" {{ old('status') == 0?'selected':false }}>Chưa kích hoạt</option>
                <option value="1" {{ old('status') == 1?'selected':false }}>Kích hoạt</option>
               
            </select>
           @error('status')
           <span class="text-danger">{{ $message }}</span>
           @enderror
       </div>

       <button type="submit" class="btn btn-primary">Thêm mới</button>
       <a href="{{ route('admin.users.index') }}" class="btn btn-warning">Quay lại</a>
       @csrf
    </form> --}}
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm người dùng</h3>
        </div>

        <form method="post" action="{{ route('admin.users.post-add') }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Họ và tên</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Họ và tên ..."
                        value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" id="" placeholder="Email ..."
                        value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="" placeholder="password ..."
                        value="{{ old('password') }}">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" id="" placeholder="Số điện thoại ..."
                        value="{{ old('phone') }}">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" id="" placeholder="Địa chỉ ..."
                        value="{{ old('address') }}">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Chức vụ</label>
                    <select name="role_id" id="" class="form-control">
                        <option value="#">Chọn</option>
                        @if (!empty($allGroup))
                            {
                            @foreach ($allGroup as $item)
                                <option value="{{ $item->id }}"
                                    {{ old('role_id') == $item->id ? 'selected' : false }}>
                                    {{ $item->name }}</option>
                            @endforeach
                        @endif
                        }
                    </select>
                    @error('role_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- <div class="form-group mb-3">
                <label for="">Trạng thái</label>
                 <select name="status" id="" class="form-control">
                     <option value="0" {{ old('status') == 0?'selected':false }}>Chưa kích hoạt</option>
                     <option value="1" {{ old('status') == 1?'selected':false }}>Kích hoạt</option>
                    
                 </select>
                @error('status')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> --}}

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-warning">Quay lại</a>
                @csrf
            </div>
        </form>
    </div>
@endsection
