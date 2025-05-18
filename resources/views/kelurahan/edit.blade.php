@extends('layouts.master')

@section('title', 'Edit Kelurahan')

@section('content')
    <h1>Edit Kelurahan</h1>

    <form action="{{ route('kelurahan.update', $kelurahan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" value="{{ $kelurahan->nama }}" required>
        </div>
        <div class="form-group">
            <label>ID Kecamatan</label>
            <input name="kec_id" type="number" class="form-control" value="{{ $kelurahan->kec_id }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('kelurahan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
