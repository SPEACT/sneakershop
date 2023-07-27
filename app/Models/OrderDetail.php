<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';
    protected $fillable = ['order_id', 'product_id', 'price', 'quantity'];
    public function orders()
    {
        return $this->belongsTo(Orders::class, 'order_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }

    function loc()
    {
        return DB::table('order_detail')->select('order_id')->distinct()->count();
    }
    public function scopeSearch($query)
    {
        if (request()->keywords) {
            $query = $query->where('order_name', 'like', "%" . request()->keywords . '%');
        }
        return $query;
    }
}
