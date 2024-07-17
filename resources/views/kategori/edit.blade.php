@extends('layouts.backend')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Edit kategori {{ $kategori->name }}</h5>
            <form class="row g-3" method="POST" action="{{ route('kategori.update', $kategori->id) }}">
                @method('PATCH')
                @csrf
                <div class="col-md-4x">
                    <label for="input13" class="form-label">Full Name</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" id="input13" value="{{ $kategori->nama_kategori }}" placeholder="Full nama_kategori" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">person_outline</i></span>
                        @error('nama_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                </div>
                {{-- <div class="col-md-12">
                    <label for="input17" class="form-label">Password</label>
                    <div class="position-relative input-icon">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="input17" placeholder="Password">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">lock_open</i></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input17" class="form-label">Confirm Password</label>
                    <div class="position-relative input-icon">
                        <input type="password" name="password_confirmation" class="form-control" id="input17" placeholder="Password">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">lock_open</i></span>
                    </div>
                </div> --}}
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
