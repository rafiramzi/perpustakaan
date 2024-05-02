<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rental extends Model
{
    use HasFactory;
    protected $table = "data_rental";

    public function buku(){
        return $this->belongsTo(tableBuku::class,'rental_book_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
