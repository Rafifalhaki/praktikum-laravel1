<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use App\Models\Pasien;
use App\Models\Paramedik;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    public function index()
    {
        $data = Periksa::all();
        return view('periksa.index', compact('data'));
    }

    public function create()
    {
        $pasien = Pasien::all();
        $dokter = Paramedik::all();
        return view('periksa.create', compact('pasien', 'dokter'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'tgl_lahir' => 'required|date',
            'keterangan' => 'required',
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:paramediks,id'
        ]);

        Periksa::create($request->all());
        return redirect()->route('periksa.index')->with('success', 'Data pemeriksaan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $periksa = Periksa::findOrFail($id);
        $pasien = Pasien::all();
        $dokter = Paramedik::all();
        return view('periksa.edit', compact('periksa', 'pasien', 'dokter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'tgl_lahir' => 'required|date',
            'keterangan' => 'required',
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:paramediks,id'
        ]);

        $periksa = Periksa::findOrFail($id);
        $periksa->update($request->all());

        return redirect()->route('periksa.index')->with('success', 'Data pemeriksaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Periksa::destroy($id);
        return redirect()->route('periksa.index')->with('success', 'Data pemeriksaan berhasil dihapus.');
    }
}
