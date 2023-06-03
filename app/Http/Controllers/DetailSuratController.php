<?php

namespace App\Http\Controllers;

use App\Models\DetailSurat;
use App\Http\Requests\StoreDetailSuratRequest;
use App\Http\Requests\UpdateDetailSuratRequest;

class DetailSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.lainnya.surat.detail-surat');
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
    public function store(StoreDetailSuratRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailSurat $detailSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailSurat $detailSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailSuratRequest $request, DetailSurat $detailSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailSurat $detailSurat)
    {
        //
    }
}
