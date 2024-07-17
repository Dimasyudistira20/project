@extends('layouts.backend')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Edit barang {{ $barang->nama_barang }}</h5>
            <form class="row g-3" method="POST" action="{{ route('barang.update', $barang->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="col-12">
                    <label for="input13" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" id="input13" value="{{ $barang->nama_barang }}" placeholder="Nama Barang" required>
                    @error('nama_barang')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" accept="image/*">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select name="id_kategori" id="kategori" class="form-control">
                        @foreach ($kategori as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $barang->id_kategori ? 'selected' : '' }}>{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Stok</label>
                    <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ $barang->stok }}" placeholder="Stok" required>
                    @error('stok')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $barang->harga }}" placeholder="Harga" required>
                    @error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
