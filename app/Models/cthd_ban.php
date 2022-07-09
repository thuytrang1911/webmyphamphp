<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cthd_ban extends Model
{
    use HasFactory;
    protected $table = 'cthd_ban';
    public function sp(){
        return $this->belongsTo(sanpham::class,'id_sp');
    }
    public function hdb(){
        return $this->belongsTo(hd_ban::class,'id_hdb');
    }
}
