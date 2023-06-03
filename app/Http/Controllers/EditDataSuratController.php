<?php

namespace App\Http\Controllers;

use App\Models\EditDataSurat;
use App\Http\Requests\StoreEditDataSuratRequest;
use App\Http\Requests\UpdateEditDataSuratRequest;

class EditDataSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.komunitasku.edit-data-surat');
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
    public function store(StoreEditDataSuratRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EditDataSurat $editDataSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditDataSurat $editDataSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEditDataSuratRequest $request, EditDataSurat $editDataSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EditDataSurat $editDataSurat)
    {
        //
    }
}
