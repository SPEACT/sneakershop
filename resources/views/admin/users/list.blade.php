@extends('layouts.admin')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Khách hàng</h3>
    </div>
    <div class="card-body">
        {{-- 
   @if (session('msg'))
       <div class="alert alert-success">{{ session('msg') }}</div>
   @endif --}}
        {{-- <x-package-alert/> --}}



        <hr>
        <form action="" method="get" class="mb-3">
            <div class="row">
                {{-- <div class="col-3">
                    <select class="form-control" name="status" id=""value="{{ request()->status }}">
                        <option value="0">Tất cả trạng thái</option>
                        <option value="active" {{ request()->status == 'active' ? 'selected' : false }}>Kích hoạt</option>
                        <option value="inactive" {{ request()->status == 'inactive' ? 'selected' : false }}>Chưa kích hoạt
                        </option>
                    </select>
                </div> --}}
                {{-- <div class="col-3">
                    <select class="form-control" name="group_id" id="">
                        <option value="0">Tất cả nhóm</option>
                        @if (!empty(getAllGroups()))
                            @foreach (getAllGroups() as $item)
                                <option value="{{ $item->id }}"
                                    {{ request()->group_id == $item->id ? 'selected' : false }}>
                                    {{ $item->name }}</option>
                            @endforeach
                        @endif

                    </select>
                </div> --}}
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
                    <th><a href="">Tên</a></th>
                    <th><a href="">Email</a></th>
                    <th width="10%">Mật khẩu</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Chức vụ</th>
                    <th><a href="">Thời gian</a></th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($userlist))
                    @foreach ($userlist as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td width="10%">{{ $value->password }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ $value->address }}</td>
                            <td>{{ $value->role_id }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td><a href="{{ route('admin.users.edit', ['id' => $value->id]) }}" class=""><i
                                        class="bi bi-pencil-square fs-4 text-primary mx-2"></i></a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa')"
                                    href="{{ route('admin.users.delete', ['id' => $value->id]) }}"><i
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
        {{ $userlist->appends(request()->all())->links() }}
    </div>
@endsection
