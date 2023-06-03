<?php

namespace App\Http\Controllers;

use App\Models\EditWarga;
use App\Http\Requests\StoreEditWargaRequest;
use App\Http\Requests\UpdateEditWargaRequest;

class EditWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.komunitasku.edit-warga');
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
    public function store(StoreEditWargaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EditWarga $editWarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditWarga $editWarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEditWargaRequest $request, EditWarga $editWarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EditWarga $editWarga)
    {
        //
    }
}
