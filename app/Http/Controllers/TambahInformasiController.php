<?php

namespace App\Http\Controllers;

use App\Models\TambahInformasi;
use App\Http\Requests\StoreTambahInformasiRequest;
use App\Http\Requests\UpdateTambahInformasiRequest;

class TambahInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Komunitasku.tambah-informasi');
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
    public function store(StoreTambahInformasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TambahInformasi $tambahInformasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TambahInformasi $tambahInformasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTambahInformasiRequest $request, TambahInformasi $tambahInformasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TambahInformasi $tambahInformasi)
    {
        //
    }
}
