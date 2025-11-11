<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(10);
        return view('table', compact('mahasiswa'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim',
            'jurusan' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswa,email',
            'alamat' => 'required|string'
        ]);

        Mahasiswa::create($validated);

        return redirect()->route('table')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim,' . $id,
            'jurusan' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswa,email,' . $id,
            'alamat' => 'required|string',
        ]);

        $mahasiswa->update($validated);

        return redirect()->route('table')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('table')->with('success', 'Data berhasil dihapus!');
    }
}
