@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Edit Profile Admin</h4>

    <div class="card p-4 col-md-8">
        <form action="{{ route('admin.profile.update') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap"
                       class="form-control"
                       value="{{ $profile->nama_lengkap }}">
            </div>

            <div class="mb-3">
                <label>Agama</label>
                <input type="text" name="agama"
                       class="form-control"
                       value="{{ $profile->agama }}">
            </div>

            <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp"
                       class="form-control"
                       value="{{ $profile->no_hp }}">
            </div>

            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir"
                       class="form-control"
                       value="{{ $profile->tanggal_lahir }}">
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control">{{ $profile->alamat }}</textarea>
            </div>

            <button class="btn btn-dark">Simpan</button>
            <a href="{{ route('admin.profile') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
