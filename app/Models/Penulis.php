<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Penulis extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'mst_penulis';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function Buku()
    {
        return $this->hasMany(tableBuku::class, 'penulis_id');
    }
}
