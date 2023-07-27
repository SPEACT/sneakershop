@extends('layouts.admin')

@section('content')
    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">Sửa người dùng</h3>
        </div>
        @if (session('msg'))
            <h3 class="card-title">{{ session('msg') }}</h3>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">Dữ liệu không hợp lệ vui lòng kiểm tra lại</div>
        @endif

        <form action="{{ route('admin.users.post-edit') }}" method="post">
            <div class="card-body">

                <div class="mb-3">
                    <label for="">Họ và tên</label>
                    <input type="text" class="form-control" name="name" placeholder="Họ và tên..."
                        value="{{ old('name') ?? $getUser->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email"
                        placeholder="Email..."value="{{ old('email') ?? $getUser->email }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input type="hidden" name="id" value="{{ $getUser->id }}" class="d-none">
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password..."value="">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" id="" placeholder="Số điện thoại ..."
                        value="{{ $getUser->phone }}">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" id="" placeholder="Địa chỉ ..."
                        value="{{ $getUser->address }}">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Chức vụ</label>
                    <select name="role_id" id="" class="form-control">
                        <option value="#">Chọn</option>
                        @if (!empty($allGroup))
                            {
                            @foreach ($allGroup as $item)
                                <option value="{{ $item->id }}"
                                    {{ old('role_id') == $item->id || $getUser->role_id == $item->id ? 'selected' : false }}>
                                    {{ $item->name }}</option>
                            @endforeach
                        @endif
                        }
                    </select>
                    @error('role_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- <div class="mb-3">
        <label for="">Trạng thái</label>
         <select name="status" id="" class="form-control">
             <option value="0" {{ old('status') == 0|| $getUser->status==0?'selected':false }}>Chưa kích hoạt</option>
             <option value="1" {{ old('status') == 1|| $getUser->status==1?'selected':false }}>Kích hoạt</option>
            
         </select>
        @error('status')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> --}}
            </div>
            <div class="card-footer">

                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-warning">Quay lại</a>
                @csrf
            </div>

        </form>
    @endsection
