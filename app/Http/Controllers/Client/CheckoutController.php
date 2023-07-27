<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Helpers\CartHelpers;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Users;
use Faker\Provider\ar_EG\Color;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }
    public function form()
    {
        return view('client.CheckOut.checkout');
    }
    public function submit_form(Request $request, CartHelpers $cart)
    {
        $data = $request->all();
        // dd($data['order_email']);

        $data['user_id'] = auth()->user()->id;
        $data['status'] = $request->check;

        $auth = auth()->user();
        // dd($a);
        $order = Orders::create($data);

        if ($order) {
            $order_id = $order->id;

            foreach ($cart->items as $product_id => $item) {
                $quantity = $item['product_quantity'];
                $product_price = $item['product_price'];

                $price = $product_price * $quantity;

                OrderDetail::create([
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'price' => $price,
                    'quantity' => $quantity,
                ]);
            }
            OrderDetail::where('order_id', $order->id)->get();

            Mail::send('client.emails.sendemail', compact('order', 'auth'), function ($email) use ($auth, $data) {
                $email->subject('Shopping');
                $email->to($data['order_email'], $auth->name);
            });

            session(['cart' => '']);
            return view('client.thanks');
        };
    }


    public function checkBill()
    {
        $id = auth()->user()->id;
        // $bill = Orders::where('user_id', $id)->join('order_detail', 'Orders.id', '=', 'order_detail.order_id')->get();
        $bill = OrderDetail::select('order_id')
            ->whereHas('orders', function ($query) use ($id) {
                return $query->where('user_id', $id);
            })
            ->groupby('order_id')
            ->latest() // Lấy ra bản ghi mới nhất tương đương với orderBy('created_at', 'desc')
            ->get();
        return view('client.CheckOut.checkbill', compact('bill'));
    }
    public function getProducts($id)
    {
        $billPro = OrderDetail::where('order_id', $id)->get();
        return view('client.CheckOut.checkProduct', compact('billPro'));
    }
}
