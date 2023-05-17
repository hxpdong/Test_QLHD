<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhHang extends Model
{
    use HasFactory;
    public $table = 'KHACHHANG';
    public $primaryKey = 'KHACHHANG_ID';
    public $timestamps = false;
}
