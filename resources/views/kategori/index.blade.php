@extends('layouts.backend')
@section('content')
<h6 class="mb-0 text-uppercase">ACCESS CONTROL LIST</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="col-lg-2">
            <a href="{{ route('kategori.create') }}" class="btn btn-success px-4 raised d-flex gap-2">
                <i class="material-icons-outlined">account_circle</i>
                Add kategori
            </a>
        </div>
        <table class="table mb-0 table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $item)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $item->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-grd btn-grd-primary px-5">Edit</a>
                        <a class="btn btn-grd btn-grd-danger px-5" href="{{ route('kategori.destroy', $item->id) }}" onclick="event.preventDefault();
                            document.getElementById('destroy-form').submit();">
                            Hapus
                        </a>

                        <form id="destroy-form" action="{{ route('kategori.destroy', $item->id) }}"
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
