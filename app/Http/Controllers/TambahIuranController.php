<?php

namespace App\Http\Controllers;

use App\Models\TambahIuran;
use App\Http\Requests\StoreTambahIuranRequest;
use App\Http\Requests\UpdateTambahIuranRequest;

class TambahIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Komunitasku.tambah-iuran');
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
    public function store(StoreTambahIuranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TambahIuran $tambahIuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TambahIuran $tambahIuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTambahIuranRequest $request, TambahIuran $tambahIuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TambahIuran $tambahIuran)
    {
        //
    }
}
