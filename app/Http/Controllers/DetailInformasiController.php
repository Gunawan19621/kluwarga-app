<?php

namespace App\Http\Controllers;

use App\Models\DetailInformasi;
use App\Http\Requests\StoreDetailInformasiRequest;
use App\Http\Requests\UpdateDetailInformasiRequest;

class DetailInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Komunitasku.detail-informasi');
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
    public function store(StoreDetailInformasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailInformasi $detailInformasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailInformasi $detailInformasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailInformasiRequest $request, DetailInformasi $detailInformasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailInformasi $detailInformasi)
    {
        //
    }
}
