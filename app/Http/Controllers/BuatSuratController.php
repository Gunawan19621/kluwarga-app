<?php

namespace App\Http\Controllers;

use App\Models\BuatSurat;
use App\Http\Requests\StoreBuatSuratRequest;
use App\Http\Requests\UpdateBuatSuratRequest;

class BuatSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.komunitasku.buat-surat');
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
    public function store(StoreBuatSuratRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BuatSurat $buatSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BuatSurat $buatSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuatSuratRequest $request, BuatSurat $buatSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BuatSurat $buatSurat)
    {
        //
    }
}
