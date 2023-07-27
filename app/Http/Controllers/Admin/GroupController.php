<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Groups;


class GroupController extends Controller
{
    private $groups;

    public function __construct()
    {
        $this->groups = new Groups;
    }

    public function getGroups(Request $request)
    {
        $groupList = Groups::all();
        // $groupList = $this->groups->getAll();
        return view('admin.groups.list', compact('groupList'));
    }

    public function addGroups()
    {
        return view('admin.groups.add');
    }


    public function postGroup(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5'
        ], [
            'name.required' => 'Tên phải bắt buộc nhập',
            'name.min' => 'Tên phải từ :min kí tự trở lên',

        ]);


        $dataInsert = [
            'name' => $request->name,
        ];
        $this->groups->addGroup($dataInsert);
        // dd($request->all());
        // Groups::create($request->all());
        return redirect()->route('admin.groups.home');
    }

    public function getEditGroup(Request $request, $id = 0)
    {
        $getGroup = $this->groups->getGroup($id);
        if (!empty($getGroup[0])) {
            $request->session()->put('id', $id);
            $getGroup = $getGroup[0];
        } else {
            return redirect()->route('admin.groups.home');
        }
        return view('admin.groups.edit', compact('getGroup'));
    }

    public function postEditGroup(Request $request)
    {
        $id = session('id');
        $request->validate([
            'name' => 'required|min:5'
        ], [
            'name.required' => 'Tên phải bắt buộc nhập',
            'name.min' => 'Tên phải từ :min kí tự trở lên',

        ]);
        $dataUpdate = [
            'name' => $request->name,
        ];
        $this->groups->updateGroup($dataUpdate, $id);
        return redirect()->route('admin.groups.home');
    }

    public function deleteGroup($id = 0)
    {
        $getGroups = $this->groups->getGroup($id);
        $delete =  $this->groups->deleteGroup($id);
        return redirect()->route('admin.groups.home');
    }
}
