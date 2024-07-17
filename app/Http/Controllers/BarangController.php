<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Storage;

class BarangController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::orderBy('id', 'desc')->get();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('barang.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required', 'string', 'max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;
        $barang->id_kategori = $request->id_kategori;

        $image = $request->file('image');
        $image->storeAs('public/barangs', $image->hashName());
        $barang->image = $image->hashName();
        $barang->save();

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang','kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required', 'string', 'max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;
        $barang->id_kategori = $request->id_kategori;

        if ($request->hasFile('image')) {
            Storage::delete('public/barangs/' . $barang->image); // hapus gambar lama
            $image = $request->file('image');
            $image->storeAs('public/barangs', $image->hashName());
            $barang->image = $image->hashName();
        }
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        Storage::delete('public/barangs/' . $barang->image);
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
