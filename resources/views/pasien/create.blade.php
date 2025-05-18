@extends('layouts.master')

@section('title', 'Tambah Pasien')

@section('content')
    <h1>Tambah Pasien</h1>

    <form method="POST" action="{{ route('pasien.store') }}">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input name="tgl_lahir" type="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
