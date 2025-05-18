@extends('layouts.master')

@section('title', 'Data Pemeriksaan')

@section('content')
    <h1>Data Pemeriksaan</h1>
    <a href="{{ route('periksa.create') }}" class="btn btn-primary mb-2">+ Tambah Periksa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>Tgl Lahir</th>
                <th>Keterangan</th>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $p)
            <tr>
                <td>{{ $p->tanggal }}</td>
                <td>{{ $p->berat }} kg</td>
                <td>{{ $p->tinggi }} cm</td>
                <td>{{ $p->tgl_lahir }}</td>
                <td>{{ $p->keterangan }}</td>
                <td>{{ $p->pasien_id }}</td>
                <td>{{ $p->dokter_id }}</td>
                <td>
                    <a href="{{ route('periksa.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('periksa.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
