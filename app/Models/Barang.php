<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['nama_barang', 'image', 'id_kategori','stok','harga'];
    protected $visible = ['nama_barang', 'image', 'id_kategori','stok','harga'];

    public function kategori(){

        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
