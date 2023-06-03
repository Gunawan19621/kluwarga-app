<?php

namespace App\Http\Controllers;

use App\Models\AkunKeuangan;
use App\Http\Requests\StoreAkunKeuanganRequest;
use App\Http\Requests\UpdateAkunKeuanganRequest;

class AkunKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.komunitasku.keuangan.edit-akun');
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
    public function store(StoreAkunKeuanganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkunKeuangan $akunKeuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkunKeuangan $akunKeuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkunKeuanganRequest $request, AkunKeuangan $akunKeuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkunKeuangan $akunKeuangan)
    {
        //
    }
}
