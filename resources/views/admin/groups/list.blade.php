@extends('layouts.admin')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Chức vụ</h3>
    </div>
    @if (session('msg'))
        <div class="alert alert-success">{{ session('msg') }}</div>
    @endif
    </form>
    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th>Tên</th>
                    <th>Thao tác
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($groupList))
                    @foreach ($groupList as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td><a href="{{ route('admin.groups.edit', ['id' => $value->id]) }}" class=""><i
                                        class="bi bi-pencil-square fs-4 text-primary mx-2"></i></a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa')"
                                    href="{{ route('admin.groups.delete', ['id' => $value->id]) }}"><i
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
