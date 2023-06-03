<?php

namespace App\Http\Controllers;

use App\Models\Komunitas;
use App\Http\Requests\StoreKomunitasRequest;
use App\Http\Requests\UpdateKomunitasRequest;

class KomunitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Komunitasku.komunitas');
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
    public function store(StoreKomunitasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Komunitas $komunitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komunitas $komunitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKomunitasRequest $request, Komunitas $komunitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komunitas $komunitas)
    {
        //
    }
}
