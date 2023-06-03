<?php

namespace App\Http\Controllers;

use App\Models\CariKomunitas;
use App\Http\Requests\StoreCariKomunitasRequest;
use App\Http\Requests\UpdateCariKomunitasRequest;

class CariKomunitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.komunitas.cari-komunitas');
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
    public function store(StoreCariKomunitasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CariKomunitas $cariKomunitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CariKomunitas $cariKomunitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCariKomunitasRequest $request, CariKomunitas $cariKomunitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CariKomunitas $cariKomunitas)
    {
        //
    }
}
