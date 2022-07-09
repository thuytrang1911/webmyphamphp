<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hd_nhap extends Model
{
    use HasFactory;
    protected $table = 'hoa_don_nhap';
    public function ncc(){
        return $this->belongsTo(nhacungcap::class,'id_ncc');
    }
    public function nv(){
        return $this->belongsTo(nhanvien::class,'id_nv');
    }
}
