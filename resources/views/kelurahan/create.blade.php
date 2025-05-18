@extends('layouts.master')

@section('title', 'Tambah Kelurahan')

@section('content')
    <h1>Tambah Kelurahan</h1>

    <form action="{{ route('kelurahan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>ID Kecamatan</label>
            <input name="kec_id" type="number" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('kelurahan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
