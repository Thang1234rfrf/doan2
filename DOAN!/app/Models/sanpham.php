<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = 'sanphams';
    use HasFactory;
    protected $primaryKey ='';
    protected $fillable = [

  
    'id','tieude','gia','dientich','nhatam','phongngu','nhadexe','anh','chitiet','nguoidung',




    ];

}
