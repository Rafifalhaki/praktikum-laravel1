@extends('layouts.master')

@section('title', 'Data Unit Kerja')

@section('content')
    <h1>Data Unit Kerja</h1>
    <a href="{{ route('unit-kerja.create') }}" class="btn btn-primary mb-2">+ Tambah Unit Kerja</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $unit)
            <tr>
                <td>{{ $unit->nama }}</td>
                <td>
                    <a href="{{ route('unit-kerja.edit', $unit->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('unit-kerja.destroy', $unit->id) }}" method="POST" style="display:inline;">
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
