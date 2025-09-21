<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Models\Pasien;   

class RawatInapController extends Controller
{
    // Halaman daftar kamar
    public function index()
    {
        $kamar = Kamar::orderBy('no_kamar', 'asc')->get();
        return view('rawat-inap.index', compact('kamar'));
    }

    // Lihat pasien berdasarkan kamar (untuk AJAX)
    public function lihatPasien($id)
    {
        $kamar = Kamar::with('pasien')->findOrFail($id);
        return view('rawat-inap.lihat-pasien', compact('kamar'));
    }

    //daftar kamar
    public function create()
    {
        $kamar = Kamar::orderBy('no_kamar', 'asc')->get();
        return view('rawat-inap.daftar', compact('kamar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'diagnosa' => 'required|string',
            'id_kamar' => 'required|exists:kamar,id_kamar',
        ]);

        Pasien::create($request->all());

        return redirect()->route('rawat-inap')->with('success', 'Pendaftaran berhasil!');
    }


}
