<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
    public function index()
    {
        $konsultasi = Konsultasi::orderBy('id', 'desc')->get();
        return view('konsultasi.index', compact('konsultasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'keluhan' => 'required|string',
        ]);

        Konsultasi::create($request->all());

        return redirect()->route('konsultasi.index')->with('success', 'Konsultasi berhasil disimpan!');
    }
}
