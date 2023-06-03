<?php

namespace App\Http\Controllers;

use App\Models\EditIuran;
use App\Http\Requests\StoreEditIuranRequest;
use App\Http\Requests\UpdateEditIuranRequest;

class EditIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.komunitasku.edit-iuran');
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
    public function store(StoreEditIuranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EditIuran $editIuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditIuran $editIuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEditIuranRequest $request, EditIuran $editIuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EditIuran $editIuran)
    {
        //
    }
}
