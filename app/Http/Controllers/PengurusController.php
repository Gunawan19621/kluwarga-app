<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\Komunitas;
use App\Http\Requests\StorePengurusRequest;
use App\Http\Requests\UpdatePengurusRequest;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail(request('komunitas_id'));
        return view('dashboard.komunitas.komunitas_admin.pengurus-', compact('komunitas', 'getKomunitas'));
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
    public function store(StorePengurusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengurus $pengurus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengurus $pengurus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengurusRequest $request, Pengurus $pengurus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengurus $pengurus)
    {
        //
    }
}
