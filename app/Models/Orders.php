<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\OrderDetail;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';


    public function users()
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }

 

    public function get_order()
    {
        return $this->hasOne(Users::class, 'id', 'user_id');
    }

    protected $fillable = ['order_name','order_email','order_address','order_phone','status','user_id'];

    public $timestamp = true;
}