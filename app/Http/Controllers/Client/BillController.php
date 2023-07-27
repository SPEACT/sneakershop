<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Helpers\CartHelpers;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;

class BillController extends Controller
{

    public function index(Request $request)
    {
        $bill = OrderDetail::select('order_id')->groupby('order_id')->distinct()->get();
        // dd($bill);
        return view('admin.bills.billdetail', compact('bill'));
    }


    public function getOrder($id)
    {
        $bill1 = OrderDetail::where('order_id', $id)->get();
        return view('admin.bills.billProduct', compact('bill1'));
    }
}
