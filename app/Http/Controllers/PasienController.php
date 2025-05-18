<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::all();
        return view('pasien.index', compact('data'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        Pasien::create($request->all());

        return redirect('/pasien')->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());

        return redirect('/pasien')->with('success', 'Data pasien berhasil diupdate');
    }

    public function destroy($id)
    {
        Pasien::destroy($id);
        return redirect('/pasien')->with('success', 'Data pasien berhasil dihapus');
    }
}
