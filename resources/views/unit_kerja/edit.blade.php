@extends('layouts.master')

@section('title', 'Edit Unit Kerja')

@section('content')
    <h1>Edit Unit Kerja</h1>

    <form action="{{ route('unit-kerja.update', $unit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" value="{{ $unit->nama }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('unit-kerja.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
