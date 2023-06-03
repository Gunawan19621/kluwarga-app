<?php

namespace App\Http\Controllers;

use App\Models\BuatKomunitas;
use App\Http\Requests\StoreBuatKomunitasRequest;
use App\Http\Requests\UpdateBuatKomunitasRequest;

class BuatKomunitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.komunitas.buat-komunitas');
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
    public function store(StoreBuatKomunitasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BuatKomunitas $buatKomunitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BuatKomunitas $buatKomunitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuatKomunitasRequest $request, BuatKomunitas $buatKomunitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BuatKomunitas $buatKomunitas)
    {
        //
    }
}
