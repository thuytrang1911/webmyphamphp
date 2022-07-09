<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table = 'san_pham';
    public function dong(){
        return $this->belongsTo(dongsanpham::class,'id_dong');
    }
    public function nhacc(){
        return $this->belongsTo(nhacungcap::class,'id_ncc');
    }
    public function th(){
        return $this->belongsTo(thuonghieu::class,'id_thuonghieu');
    }
}
