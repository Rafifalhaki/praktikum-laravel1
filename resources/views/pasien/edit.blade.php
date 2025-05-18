@extends('layouts.master')

@section('title', 'Edit Pasien')

@section('content')
    <h1>Edit Pasien</h1>

    <form method="POST" action="{{ route('pasien.update', $pasien->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" value="{{ $pasien->nama }}" required>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="L" @if($pasien->gender == 'L') selected @endif>Laki-laki</option>
                <option value="P" @if($pasien->gender == 'P') selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input name="tgl_lahir" type="date" class="form-control" value="{{ $pasien->tgl_lahir }}" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $pasien->alamat }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
