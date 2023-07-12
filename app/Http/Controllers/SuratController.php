<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Komunitas;
use App\Http\Requests\StoreSuratRequest;
use App\Http\Requests\UpdateSuratRequest;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surat = Surat::latest()->get();
        // $komunitas = Komunitas::query()->latest()->first();
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail(request('komunitas_id'));
        return view('dashboard.komunitasku.komunitas_surat.surat-admin', compact('surat', 'komunitas', 'getKomunitas'));
    }
    public function surat()
    {

        return view('dashboard.lainnya.surat.surat');
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
    public function store(StoreSuratRequest $request)
    {

        $validated = $request->validated();
        try {
            Surat::create($validated);
            // dd($validated);
            return to_route('surat.index')->with('success', 'Data rumah berhasil ditambah.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data rumah gagal ditambah.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuratRequest $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surat $surat)
    {
        //
    }
}
