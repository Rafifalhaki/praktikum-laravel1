@extends('layouts.master')

@section('title', 'Edit Pemeriksaan')

@section('content')
    <h1>Edit Pemeriksaan</h1>

    <form action="{{ route('periksa.update', $periksa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $periksa->tanggal }}" required>
        </div>
        <div class="form-group">
            <label>Berat</label>
            <input type="number" name="berat" class="form-control" value="{{ $periksa->berat }}" required>
        </div>
        <div class="form-group">
            <label>Tinggi</label>
            <input type="number" name="tinggi" class="form-control" value="{{ $periksa->tinggi }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ $periksa->tgl_lahir }}" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" required>{{ $periksa->keterangan }}</textarea>
        </div>
        <div class="form-group">
            <label>Pasien</label>
            <select name="pasien_id" class="form-control">
                @foreach($pasien as $ps)
                    <option value="{{ $ps->id }}" @if($periksa->pasien_id == $ps->id) selected @endif>{{ $ps->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Dokter</label>
            <select name="dokter_id" class="form-control">
                @foreach($dokter as $d)
                    <option value="{{ $d->id }}" @if($periksa->dokter_id == $d->id) selected @endif>{{ $d->nama }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('periksa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
