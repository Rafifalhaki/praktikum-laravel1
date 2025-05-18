@extends('layouts.master')

@section('title', 'Data Kelurahan')

@section('content')
    <h1>Data Kelurahan</h1>
    <a href="{{ route('kelurahan.create') }}" class="btn btn-primary mb-2">+ Tambah Kelurahan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>ID Kecamatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $kelurahan)
            <tr>
                <td>{{ $kelurahan->nama }}</td>
                <td>{{ $kelurahan->kec_id }}</td>
                <td>
                    <a href="{{ route('kelurahan.edit', $kelurahan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kelurahan.destroy', $kelurahan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
