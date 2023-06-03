<?php

namespace App\Http\Controllers;

use App\Models\DetailKonfirmasiIuran;
use App\Http\Requests\StoreDetailKonfirmasiIuranRequest;
use App\Http\Requests\UpdateDetailKonfirmasiIuranRequest;

class DetailKonfirmasiIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Komunitasku.detail-konfirmasi-iuran');
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
    public function store(StoreDetailKonfirmasiIuranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailKonfirmasiIuran $detailKonfirmasiIuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailKonfirmasiIuran $detailKonfirmasiIuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailKonfirmasiIuranRequest $request, DetailKonfirmasiIuran $detailKonfirmasiIuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailKonfirmasiIuran $detailKonfirmasiIuran)
    {
        //
    }
}
