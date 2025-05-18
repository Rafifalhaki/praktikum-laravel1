<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Paramedik;
use App\Models\Periksa;
use App\Models\UnitKerja;

class HomeController extends Controller
{
    public function index()
    {
        return view('beranda', [
            'pasienCount' => Pasien::count(),
            'paramedikCount' => Paramedik::count(),
            'periksaCount' => Periksa::count(),
            'unitCount' => UnitKerja::count()
        ]);
    }
}
