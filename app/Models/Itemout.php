<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemout extends Model
{
    protected $table = "itemout";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','nama_User','id_barang','nama_barang','barang_keluar','barang_tujuan','status'];
}
