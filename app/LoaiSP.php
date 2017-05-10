<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSP extends Model
{
    //Ket noi bang loai sp
    protected $primaryKey = 'MaLoaiSP';
    protected $table ='loaisanpham';
}
