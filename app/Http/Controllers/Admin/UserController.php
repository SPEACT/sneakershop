<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

// use DB;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $users;
    public function __construct()
    {
        $this->users = new Users;
    }

    public function getUser(Request $request)
    {
        $userlist = Users::orderBy('created_at', 'DESC')->search()->paginate(4);
     
        return view('admin.users.list', compact('userlist'));
    }

    public function add()
    {
        $title = 'Thêm người dùng';

        $allGroup = getAllGroups();

        return view('admin.users.add', compact('title', 'allGroup'));
    }
    public function postAdd(UserRequest $request)
    {

        Users::create($request->all());

        return redirect()->route('admin.users.index')->with('msg', 'Them nguoi dung thanh cong');
    }

    public function getEdit(Request $request, $id = 0)
    {
        $title = 'Cập nhật người dùng';
        if (!empty($id)) {
            $getUser = Users::find($id);
        } else {
            return redirect()->route('admin.users.index')->with('msg', 'Người dùng không tồn tại');
        }
        $allGroup = getAllGroups();

        return view('admin.users.edit', compact('title', 'getUser', 'allGroup'));
    }

    public function postEdit(UserRequest $request)
    {
        $request['password'] = Hash::make($request->get('password'));

        Users::query()->findOrFail($request->id)->update($request->all());
        return redirect()->route('admin.users.index')->with('msg', 'cập nhật người dùng thành công');
    }

    public function delete($id)
    {

        if (!empty($id)) {
            $getUser = Users::find($id)->delete();
        }
        return redirect()->route('admin.users.index');
    }
}
