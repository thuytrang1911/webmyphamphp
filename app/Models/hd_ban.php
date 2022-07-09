<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hd_ban extends Model
{
    use HasFactory;
    protected $table = 'hoa_don_ban';
    public function kh(){
        return $this->belongsTo(khachhang::class,'id_kh');
    }
}
