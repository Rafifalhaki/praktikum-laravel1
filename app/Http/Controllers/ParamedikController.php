<?php

namespace App\Http\Controllers;

use App\Models\Paramedik;
use Illuminate\Http\Request;

class ParamedikController extends Controller
{
    public function index()
    {
        $data = Paramedik::all();
        return view('paramedik.index', compact('data'));
    }

    public function create()
    {
        return view('paramedik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'kategori' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required|numeric'
        ]);

        Paramedik::create($request->all());
        return redirect()->route('paramedik.index')->with('success', 'Data paramedik berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $paramedik = Paramedik::findOrFail($id);
        return view('paramedik.edit', compact('paramedik'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'kategori' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required|numeric'
        ]);

        $paramedik = Paramedik::findOrFail($id);
        $paramedik->update($request->all());

        return redirect()->route('paramedik.index')->with('success', 'Data paramedik berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Paramedik::destroy($id);
        return redirect()->route('paramedik.index')->with('success', 'Data paramedik berhasil dihapus.');
    }
}
