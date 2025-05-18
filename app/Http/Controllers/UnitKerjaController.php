<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $data = UnitKerja::all();
        return view('unit_kerja.index', compact('data'));
    }

    public function create()
    {
        return view('unit_kerja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        UnitKerja::create($request->all());
        return redirect()->route('unit-kerja.index')->with('success', 'Data unit kerja berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $unit = UnitKerja::findOrFail($id);
        return view('unit_kerja.edit', compact('unit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $unit = UnitKerja::findOrFail($id);
        $unit->update($request->all());

        return redirect()->route('unit-kerja.index')->with('success', 'Data unit kerja berhasil diperbarui.');
    }

    public function destroy($id)
    {
        UnitKerja::destroy($id);
        return redirect()->route('unit-kerja.index')->with('success', 'Data unit kerja berhasil dihapus.');
    }
}
