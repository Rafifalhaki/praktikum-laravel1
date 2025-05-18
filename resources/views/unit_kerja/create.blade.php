@extends('layouts.master')

@section('title', 'Tambah Unit Kerja')

@section('content')
    <h1>Tambah Unit Kerja</h1>

    <form action="{{ route('unit-kerja.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('unit-kerja.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
