<?php

namespace App\Http\Controllers;

use App\Models\KonfirmasiIuran;
use App\Http\Requests\StoreKonfirmasiIuranRequest;
use App\Http\Requests\UpdateKonfirmasiIuranRequest;

class KonfirmasiIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Komunitasku.konfirmasi-iuran');
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
    public function store(StoreKonfirmasiIuranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KonfirmasiIuran $konfirmasiIuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KonfirmasiIuran $konfirmasiIuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKonfirmasiIuranRequest $request, KonfirmasiIuran $konfirmasiIuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KonfirmasiIuran $konfirmasiIuran)
    {
        //
    }
}
