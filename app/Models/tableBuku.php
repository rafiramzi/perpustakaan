<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tableBuku extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table= "mst_buku";
    protected $fillable = ['judul', 'jml_halaman', 'tahun_terbit', 'isbn', 'qty', 'created_by', 'penerbit_id'];

    

    public function Penerbit(){
        return $this->belongsTo(Penerbit::class, 'penerbit_id','id');
    }

    public function penulis(){
        return $this->belongsToMany(Penulis::class, 'penulis_buku','buku_id','penulis_id');
    }
}
