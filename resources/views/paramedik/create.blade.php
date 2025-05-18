@extends('layouts.master')

@section('title', 'Tambah Paramedik')

@section('content')
    <h1>Tambah Paramedik</h1>

    <form action="{{ route('paramedik.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input name="tmp_lahir" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <input name="kategori" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Unit Kerja ID</label>
            <input name="unit_kerja_id" type="number" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('paramedik.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
