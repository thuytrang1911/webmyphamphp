<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = 'bai_viet';
    public function nv(){
        return $this->belongsTo(nhanvien::class,'id_nv');
    }
}
