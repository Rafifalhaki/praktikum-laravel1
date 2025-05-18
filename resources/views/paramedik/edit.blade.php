@extends('layouts.master')

@section('title', 'Edit Paramedik')

@section('content')
    <h1>Edit Paramedik</h1>

    <form action="{{ route('paramedik.update', $paramedik->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" value="{{ $paramedik->nama }}" required>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="L" @if($paramedik->gender == 'L') selected @endif>Laki-laki</option>
                <option value="P" @if($paramedik->gender == 'P') selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input name="tmp_lahir" class="form-control" value="{{ $paramedik->tmp_lahir }}" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <input name="kategori" class="form-control" value="{{ $paramedik->kategori }}" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $paramedik->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label>Unit Kerja ID</label>
            <input name="unit_kerja_id" type="number" class="form-control" value="{{ $paramedik->unit_kerja_id }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('paramedik.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
