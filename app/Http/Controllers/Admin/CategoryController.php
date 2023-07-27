<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    private $categories;

    public function __construct()
    {
        $this->categories = new Categories;
    }

    public function getCategories(Request $request)
    {

        // $categoryList = $this->categories->getAll();
        $categoryList = Categories::all();
        return view('admin.categories.list', compact('categoryList'));
    }

    public function addCategory()
    {
        return view('admin.categories.add');
    }

    public function postCategory(Request $request)
    {
        $request->validate([
            'cate_name' => 'required|min:5'
        ], [
            'cate_name.required' => 'Tên phải bắt buộc nhập',
            'cate_name.min' => 'Tên phải từ :min kí tự trở lên',
        ]);

        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = $request->getSchemeAndHttpHost() . '/' . 'uploads/' . time() . '-' . 'image.' . $ext;
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $dataInsert = [
            'cate_name' => $request->cate_name,
            'cate_image' => $file_name,
            'create_at' => date('Y-m-d H:i:s'),
        ];
        Categories::create($dataInsert);


        return redirect()->route('admin.category.home');
    }

    public function getEditCategory(Request $request, $id = 0)
    {
        $getCategory = Categories::find($id);

        // if (!empty($getCategory[0])) {
        //     $request->session()->put('id', $id);
        //     $getCategory = $getCategory[0];
        // } else {
        //     return redirect()->route('admin.category.home');
        // }
        return view('admin.categories.edit', compact('getCategory'));
    }

    public function postEditCategory(Request $request, $id)
    {
        // $id = session('id');
        // dd($id);
        // $getCategory = Categories::find($id);

        $request->validate([
            'cate_name' => 'required|min:5'
        ], [
            'cate_name.required' => 'Tên phải bắt buộc nhập',
            'cate_name.min' => 'Tên phải từ :min kí tự trở lên',
        ]);

        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = $request->getSchemeAndHttpHost() . '/' . 'uploads/' . time() . '-' . 'image.' . $ext;
            $file->move(public_path('uploads'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        $dataUpdate = [
            'cate_name' => $request->cate_name,
            // 'cate_image' => $request->image,
        ];
        Categories::where('id', $id)->update($dataUpdate);
        // dd($data);
        // $this->categories->updateCate($dataUpdate, $id);

        return redirect()->route('admin.category.home');
    }

    public function deleteCategory($id)
    {
        Categories::find($id)->delete();

        return redirect()->route('admin.category.home');
    }
}
