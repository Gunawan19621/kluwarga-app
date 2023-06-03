<?php

namespace App\Http\Controllers;

use App\Models\EditRumah;
use App\Http\Requests\StoreEditRumahRequest;
use App\Http\Requests\UpdateEditRumahRequest;

class EditRumahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.komunitasku.edit-rumah');
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
    public function store(StoreEditRumahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EditRumah $editRumah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditRumah $editRumah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEditRumahRequest $request, EditRumah $editRumah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EditRumah $editRumah)
    {
        //
    }
}
