<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\Komunitas;
use App\Http\Requests\StoreKeuanganRequest;
use App\Http\Requests\UpdateKeuanganRequest;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $komunitas = Komunitas::query()->latest()->first();
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail(request('komunitas_id'));
        return view('dashboard.komunitasku.komunitas_keuangan.keuangan-admin', compact('komunitas', 'getKomunitas'));
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
    public function store(StoreKeuanganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Keuangan $keuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keuangan $keuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKeuanganRequest $request, Keuangan $keuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keuangan $keuangan)
    {
        //
    }
}
