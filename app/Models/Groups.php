<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Groups extends Model
{
    use HasFactory;
    protected $table = 'groups';
    protected $fillable = [
        'name'
    ];
    public $timestamp = true;

    public function getAll()
    {
        $groups = DB::table($this->table)
            ->orderBy('name', 'ASC')
            ->get();

        return $groups;
    }

    public function addGroup($data)
    {
        return DB::table($this->table)->insert($data);
    }

    public function getGroup($id)
    {
        return DB::select('SELECT * FROM ' . $this->table . ' WHERE id = ?', [$id]);
    }

    public function updateGroup($data, $id)
    {
        return DB::table($this->table)->where('id', $id)->update($data);
    }

    public function deleteGroup($id)
    {
        return DB::table($this->table)->where('id', $id)->delete($id);
    }
}
