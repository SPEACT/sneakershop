<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Users;

class AdminController extends Controller
{
    public function index()
    {

        $cate_count = Categories::count();
        $product_count = Products::count();
        $order = Orders::where('status', 0)->get();
        $cus_count = Users::count();
        $order_count = Orders::count();
        return view('admin.home', compact('product_count', 'order_count', 'cus_count', 'order', 'cate_count'));
    }
}
