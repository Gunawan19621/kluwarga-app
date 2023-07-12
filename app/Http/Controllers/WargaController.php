<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use App\Models\Warga;
use App\Models\Komunitas;
use App\Http\Requests\StoreWargaRequest;
use App\Http\Requests\UpdateWargaRequest;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $komunitas = Komunitas::query()->latest()->first();
        // $rumah = Rumah::query()->latest()->first();
        // return view('dashboard.komunitasku.komunitas_warga.warga-admin', compact('komunitas', 'rumah'));
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
    public function store(StoreWargaRequest $request)
    {
        $validated = $request->validated();
        try {
            Warga::create($validated);
            // dd($validated);
            return to_route('iuranKomunitas.index')->with('success', 'Data rumah berhasil ditambah.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data rumah gagal ditambah.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warga $warga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWargaRequest $request, Warga $warga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warga $warga)
    {
        //
    }
}
