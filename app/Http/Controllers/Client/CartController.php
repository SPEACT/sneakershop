<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Helpers\CartHelpers;
use App\Http\Controllers\Controller;
use App\Models\Products;

class CartController extends Controller
{
    public function index()
    {
        return view('client.cart.carts');
    }
    public function add(CartHelpers $cart, $id)
    {
        $product = Products::find($id);

        $cart->add($product);
        return redirect()->back();
    }
    public function remove(CartHelpers $cart, $id)
    {

        $cart->remove($id);
        return redirect()->back();
    }
    public function update(CartHelpers $cart, $id)
    {
        $quantity = request()->product_quantity ? request()->product_quantity : 1;
        $cart->update($id, $quantity);
        return redirect()->back();
    }
    public function clear(CartHelpers $cart)
    {

        $cart->clear();
        return redirect()->back();
    }
}
