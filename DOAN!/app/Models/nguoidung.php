<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nguoidung extends Model
{
    protected $table = 'nguoidung';
    use HasFactory;
    protected $primaryKey ='';
    protected $fillable = [
        'id',
        'taikhoan',
        'matkhau',
        'sodienthoai',
        'email',
        'hovaten',
        'gioitinh',
        'anh',
        'sanpham',
        
    
    ]; 
}
