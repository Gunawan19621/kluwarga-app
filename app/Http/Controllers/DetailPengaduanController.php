<?php

namespace App\Http\Controllers;

use App\Models\DetailPengaduan;
use App\Http\Requests\StoreDetailPengaduanRequest;
use App\Http\Requests\UpdateDetailPengaduanRequest;

class DetailPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.lainnya.pengaduan.detail-pengaduan');
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
    public function store(StoreDetailPengaduanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailPengaduan $detailPengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailPengaduan $detailPengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailPengaduanRequest $request, DetailPengaduan $detailPengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailPengaduan $detailPengaduan)
    {
        //
    }
}
