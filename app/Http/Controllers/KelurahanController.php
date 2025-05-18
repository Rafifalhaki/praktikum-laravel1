<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        $data = Kelurahan::all();
        return view('kelurahan.index', compact('data'));
    }

    public function create()
    {
        return view('kelurahan.create');
    }

    public function store(Request $request)
    {
        Kelurahan::create($request->all());
        return redirect('/kelurahan');
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        return view('kelurahan.edit', compact('kelurahan'));
    }

    public function update(Request $request, $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->update($request->all());
        return redirect('/kelurahan');
    }

    public function destroy($id)
    {
        Kelurahan::destroy($id);
        return redirect('/kelurahan');
    }
}
