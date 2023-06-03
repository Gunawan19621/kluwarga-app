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
        return view('dashboard.profil_keluarga.profil-k');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfilKeluargaRequest $request)
    {
        //
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
