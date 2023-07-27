<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;


class ProductController extends Controller
{
    private $products;
    private $categories;
    public function __construct()
    {
        $this->products = new Products;
        $this->categories = new Categories;
    }
    public function getProduct(Request $request)
    {
        $productList = Products::orderBy('created_at', 'desc')->search()->paginate(4);
        return view('admin.products.list', compact('productList'));
    }
    public function addAddProduct()
    {
        $allCate = Categories::all();
        return view('admin.products.add', compact('allCate'));
    }
    public function postAddProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|min:5',
            'product_price' => 'required|integer',
            'product_desc' => 'required',
            'product_quantity' => 'required|integer',
            'cate_id' => ['required', 'integer', function ($attribute, $value, $fall) {
                if ($value == 0) {
                    $fall = 'Bắt buộc phải chọn nhóm';
                }
            }],
        ], [
            'product_name.required' => 'Tên phải bắt buộc nhập',
            'product_name.min' => 'Tên phải từ :min kí tự trở lên',
            'product_price.required' => 'Giá sản phẩm phải bắt buộc nhập',
            'product_price.integer' => 'Giá sản phẩm phải là số',
            'product_desc.required' => 'Mô tả phải bắt buộc nhập',
            'product_quantity.required' => 'Số lượng sản phẩm phải bắt buộc nhập',
            'product_quantity.integer' => 'Số lượng sản phẩm phải là số',
            'cate_id.required' => 'Bắt buộc phải chọn danh mục',
            'cate_id.integer' => 'Danh mục không hợp lệ',
        ]);

        if ($request->has('product_image')) {
            $file = $request->product_image;
            $ext = $request->product_image->extension();
            $file_name = $request->getSchemeAndHttpHost() . '/' . 'uploads/' . time() . '-' . 'image.' . $ext;
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $dataInsert = [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_quantity' => $request->product_quantity,
            'product_desc' => $request->product_desc,
            'product_image' => $file_name,
            'cate_id' => $request->cate_id,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        Products::create($dataInsert);

        return redirect()->route('admin.products.home');
    }
    public function getEditProduct(Request $request, $id = 0)
    {
        $allCate = Categories::all();
        $getProduct = Products::find($id);

        return view('admin.products.edit', compact('getProduct', 'allCate'));
    }
    public function postEditProduct(Request $request, $id)
    {

        $request->validate([
            'product_name' => 'required|min:5',
            'product_price' => 'required|integer',
            'product_desc' => 'required',
            'product_quantity' => 'required|integer',
            'cate_id' => ['required', 'integer', function ($attribute, $value, $fall) {
                if ($value == 0) {
                    $fall = 'Bắt buộc phải chọn nhóm';
                }
            }],
        ], [
            'product_name.required' => 'Tên phải bắt buộc nhập',
            'product_name.min' => 'Tên phải từ :min kí tự trở lên',
            'product_price.required' => 'Giá sản phẩm phải bắt buộc nhập',
            'product_price.integer' => 'Giá sản phẩm phải là số',
            'product_desc.required' => 'Mô tả phải bắt buộc nhập',
            'product_quantity.required' => 'Số lượng sản phẩm phải bắt buộc nhập',
            'product_quantity.integer' => 'Số lượng sản phẩm phải là số',
            'cate_id.required' => 'Bắt buộc phải chọn danh mục',
            'cate_id.integer' => 'Danh mục không hợp lệ',
        ]);

        if ($request->has('product_image')) {
            $file = $request->product_image;
            $ext = $request->product_image->extension();
            $file_name = $request->getSchemeAndHttpHost() . '/' . 'uploads/' . time() . '-' . 'image.' . $ext;
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $dataUpdate = [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_quantity' => $request->product_quantity,
            'product_desc' => $request->product_desc,
            'product_image' => $request->image,
            'cate_id' => $request->cate_id,
        ];
        Products::where('id', $id)->update($dataUpdate);
        return redirect()->route('admin.products.home');
    }
    public function deleteProduct($id)
    {
        Products::where('id', $id)->delete();

        return redirect()->route('admin.products.home');
    }
}
