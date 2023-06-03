<?php

namespace App\Http\Controllers;

use App\Models\PengaturanKomunitas;
use App\Http\Requests\StorePengaturanKomunitasRequest;
use App\Http\Requests\UpdatePengaturanKomunitasRequest;

class PengaturanKomunitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.komunitasku.pengaturan-komunitas');
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
    public function store(StorePengaturanKomunitasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PengaturanKomunitas $pengaturanKomunitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengaturanKomunitas $pengaturanKomunitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengaturanKomunitasRequest $request, PengaturanKomunitas $pengaturanKomunitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PengaturanKomunitas $pengaturanKomunitas)
    {
        //
    }
}
