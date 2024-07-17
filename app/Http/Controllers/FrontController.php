<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //show

    public function show($id)
    {
        $barang = Barang::findOrFail($id);        
        return view('layouts.detail', compact('barang'));
    }
}
