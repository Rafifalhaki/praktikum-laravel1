@extends('layouts.master')

@section('title', 'Tambah Pemeriksaan')

@section('content')
    <h1>Tambah Pemeriksaan</h1>

    <form action="{{ route('periksa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Berat (kg)</label>
            <input type="number" name="berat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tinggi (cm)</label>
            <input type="number" name="tinggi" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Pasien</label>
            <select name="pasien_id" class="form-control" required>
                @foreach($pasien as $ps)
                    <option value="{{ $ps->id }}">{{ $ps->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Dokter</label>
            <select name="dokter_id" class="form-control" required>
                @foreach($dokter as $d)
                    <option value="{{ $d->id }}">{{ $d->nama }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('periksa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
