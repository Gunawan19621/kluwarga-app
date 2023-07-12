<?php

namespace App\Http\Controllers;

use App\Models\ProfilKeluarga;
use App\Http\Requests\StoreProfilKeluargaRequest;
use App\Http\Requests\UpdateProfilKeluargaRequest;

class ProfilKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profilKeluarga = ProfilKeluarga::latest()->get();
        return view('dashboard.profil_keluarga.profil-k', compact('profilKeluarga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.profil_keluarga.tambah-keluarga');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfilKeluargaRequest $request)
    {
        $validated = $request->validated();
        try {
            $validated['pengguna_id'] = auth()->user()->id;
            ProfilKeluarga::create($validated);

            return to_route('profil-keluarga.index')->with('success', 'Data anggota keluarga berhasil ditambah.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data anggota keluarga gagal ditambah.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilKeluarga $profilKeluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilKeluarga $profilKeluarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfilKeluargaRequest $request, ProfilKeluarga $profilKeluarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilKeluarga $profilKeluarga)
    {
        //
    }
}
