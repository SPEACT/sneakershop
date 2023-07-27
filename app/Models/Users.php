<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Pagination;
use Illuminate\Database\Eloquent\Model;
// use Nette\Utils\Paginator

use App\Models\Groups;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function get_order()
    {
        return $this->hasMany(Orders::class, 'user_id', 'id');
    }

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address', 'role_id'
    ];

    public function groups()
    {
        return $this->belongsTo(Groups::class, 'role_id', 'id');
    }

    public function scopeSearch($query)
    {
        if (request()->keywords) {
            $query = $query->where('name', 'like', "%" . request()->keywords . '%');
        }
        return $query;
    }
}
