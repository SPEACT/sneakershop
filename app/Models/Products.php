<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Pagination;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Categories::class, 'cate_id', 'id');
    }

    protected $fillable = [
        'product_name', 'product_image', 'product_price', 'product_desc', 'product_quantity', 'cate_id'
    ];

    public function scopeSearch($query)
    {
        if (request()->keywords) {
            $query = $query->where('product_name', 'like', "%" . request()->keywords . '%');
        }
        return $query;
    }
}
