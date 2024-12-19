<?php
namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Http\Requests\StorePendudukRequest;
use App\Http\Requests\UpdatePendudukRequest;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penduduk = Penduduk::all();
        return view('dashboard.penduduk', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.buat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nik' => 'required|unique:penduduk|max:16',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        // Simpan data ke database
        Penduduk::create($validated);

        return redirect()->route('penduduk.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Ambil data penduduk berdasarkan ID
        $penduduk = Penduduk::where('nik', $id)->first();

        // Mengirim data penduduk ke view edit
        return view('dashboard.edits', compact('penduduk'));
    }

    // Method update untuk menyimpan perubahan data
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nik' => 'required|string|max:20',
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        // Ambil data penduduk berdasarkan ID
        $penduduk = Penduduk::where('nik', $request->id)->first();

        // Update data penduduk dengan input dari form
        $penduduk->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();

        return redirect()->route('penduduk.index')->with('success', 'Data berhasil dihapus');
    }
}
