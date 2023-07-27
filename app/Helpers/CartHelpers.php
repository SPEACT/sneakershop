<?php

namespace App\Helpers;

class CartHelpers
{
    public $items = [];
    public $total_quantity = 0;
    public $total_price = 0;
    public $totalOne_price = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
        $this->total_quantity = $this->get_total_quantity();
        $this->total_price = $this->get_total_price();
    }
    public function add($product, $quantity = 1)
    {
        $item = [
            'id' => $product->id,
            'product_name' => $product->product_name,
            'product_price' => $product->product_price,
            'product_image' => $product->product_image,
            'product_desc' => $product->product_desc,
            'product_quantity' => $quantity,

        ];

        if (isset($this->items[$product->id])) {
            $this->items[$product->id]['product_quantity'] += $quantity;
        } else {
            $this->items[$product->id] = $item;
        }
        session(['cart' => $this->items]);
    }
    public function remove($id)
    {

        if (isset($this->items[$id])) {
            unset($this->items[$id]);
        }
        session(['cart' => $this->items]);
    }
    public function update($id, $quantity = 1)
    {
        if (isset($this->items[$id])) {
            $this->items[$id]['product_quantity'] = $quantity;
        }
        session(['cart' => $this->items]);
    }
    public function clear()
    {

        session(['cart' => []]);
    }
    private function get_total_price()
    {
        $t = 0;
        foreach ($this->items as $item) {
            $t += $item['product_price'] * $item['product_quantity'];
        }

        return $t;
    }

    private function get_total_quantity()
    {
        $t = 0;
        foreach ($this->items as $item) {
            $t += $item['product_quantity'];
        }
        return $t;
    }
}
