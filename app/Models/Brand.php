<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;

    protected $fillable = ['nama_brand'];
    protected $vissible = ['nama_brand'];



    public function produk(){
      return $this-> hashMany(Produk::class );  
    }
}
