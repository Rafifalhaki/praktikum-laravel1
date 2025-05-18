@extends('layouts.master')

@section('title', 'Data Paramedik')

@section('content')
    <h1>Data Paramedik</h1>
    <a href="{{ route('paramedik.create') }}" class="btn btn-primary mb-2">+ Tambah Paramedik</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Kategori</th>
                <th>Alamat</th>
                <th>Unit Kerja</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $paramedik)
            <tr>
                <td>{{ $paramedik->nama }}</td>
                <td>{{ $paramedik->gender }}</td>
                <td>{{ $paramedik->tmp_lahir }}</td>
                <td>{{ $paramedik->kategori }}</td>
                <td>{{ $paramedik->alamat }}</td>
                <td>{{ $paramedik->unit_kerja_id }}</td>
                <td>
                    <a href="{{ route('paramedik.edit', $paramedik->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('paramedik.destroy', $paramedik->id) }}" method="POST" style="display:inline;">
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
