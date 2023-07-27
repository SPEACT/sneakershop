<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(Request $request)
    {
        $bill = OrderDetail::select('order_id')->groupby('order_id')->distinct()->get();
        return view('admin.bills.billdetail', compact('bill'));
    }


    public function getOrder($id)
    {
        $bill1 = OrderDetail::where('order_id', $id)->get();
        return view('admin.bills.billProduct', compact('bill1'));
    }
}
