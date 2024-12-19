<?php

namespace App\Http\Controllers;

use App\Models\CatatanPerjalanan;
use Illuminate\Http\Request;

class CatatanPerjalananController extends Controller
{
    public function index()
    {
        $catatanPerjalanan = CatatanPerjalanan::all();
        return view('dashboard.perjalanan', compact('catatanPerjalanan'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|string',
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i', // Aturan validasi waktu diperbaiki
            'lokasi' => 'required|string',
            'suhu' => 'required|numeric',
        ]);

        CatatanPerjalanan::create($request->all());
        return redirect()->route('perjalanan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $catatanPerjalanan = CatatanPerjalanan::findOrFail($id);
        return view('dashboard.edit', compact('catatanPerjalanan'));
    }


    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'nik' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'waktu' => 'required',
        'lokasi' => 'required|string|max:255',
        'suhu' => 'required|numeric|min:-10|max:50',
    ]);

    $catatanPerjalanan = CatatanPerjalanan::findOrFail($id);
    $catatanPerjalanan->update($validatedData);

    return redirect()->route('perjalanan.index')->with('success', 'Data berhasil diupdate');
}



    public function destroy(CatatanPerjalanan $perjalanan)
    {
        $perjalanan->delete();
        return redirect()->route('perjalanan.index')->with('success', 'Data berhasil dihapus');
    }
}
