<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanLy extends Model
{
    protected $table = 'nhanvien';
    use HasFactory;
    protected $primaryKey ='MaNV';
    protected $fillable = [
        'MaNv',
        'HoVaTen',
        'GioiTinh',
        'NgaySinh',
        'CMND',
        'Anh',
        'DiaChi',
        'NgayThem',
        
    
    ]; 

}
