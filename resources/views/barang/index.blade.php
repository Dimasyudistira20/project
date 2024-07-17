@extends('layouts.backend')
@section('content')
<h6 class="mb-0 text-uppercase">ACCESS CONTROL LIST</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="col-lg-2">
            <a href="{{ route('barang.create') }}" class="btn btn-success px-4 raised d-flex gap-2">
                <i class="material-icons-outlined">account_circle</i>
                Add barang
            </a>
        </div>
        <table class="table mb-0 table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $item->nama_barang }}</td>
                    <td>
                        <img src="{{ asset('/storage/barangs/' . $item->image) }}" class="rounded"
                            style="width: 150px">
                    </td>
                    <td>{{ $item->kategori->nama_kategori}}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-grd btn-grd-primary px-5">Edit</a>
                        <a class="btn btn-grd btn-grd-danger px-5" href="{{ route('barang.destroy', $item->id) }}" onclick="event.preventDefault();
                            document.getElementById('destroy-form').submit();">
                            Hapus
                        </a>

                        <form id="destroy-form" action="{{ route('barang.destroy', $item->id) }}"
                            method="POST" class="d-none">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
