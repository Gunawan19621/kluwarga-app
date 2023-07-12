<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use App\Models\Pengguna;
use App\Models\Komunitas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreRumahRequest;
use App\Http\Requests\UpdateRumahRequest;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rumah = Rumah::latest()->get();
        // $komunitas = Komunitas::query()->latest()->first();
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail(request('komunitas_id'));
        return view('dashboard.komunitasku.komunitas_rumah.rumah-admin', compact('komunitas', 'rumah', 'getKomunitas'));
    }

    public function indexWarga()
    {
        // $komunitas = Komunitas::query()->latest()->first();
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail(request('komunitas_id'));
        $rumah = Rumah::where('pengguna_id', Auth::user()->id)->latest()->get();
        return view('dashboard.komunitasku.komunitas_warga.warga-admin', compact('komunitas', 'rumah', 'getKomunitas'));
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
    public function store(StoreRumahRequest $request)
    {
        $validated = $request->validated();
        try {
            $validated['komunitas_id'] = request('komunitas');
            $validated['pengguna_id'] = auth()->user()->id;
            Rumah::create($validated);
            return to_route('rumah.index')->with('success', 'Data rumah berhasil ditambah.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data rumah gagal ditambah.');
        }

        return redirect()->back()->with('success', 'Data rumah berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rumah $rumah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($rumah)
    {
        $rumah = Rumah::findOrFail($rumah);
        $pengguna = Pengguna::query()->latest()->get();
        return view('dashboard.komunitasku.komunitas_warga.edit-warga', compact('rumah', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRumahRequest $request, $rumah)
    {
        $validatedData = $request->validated();
        try {
            $pengguna = Pengguna::findOrFail($validatedData['pengguna_id']);
            $pengguna->update([
                'jabatan' => $validatedData['jabatan']
            ]);
            $rumah = Rumah::findOrFail($rumah);
            $rumah->update($validatedData);
            return to_route('wargaKomunitas.indexWarga')->with('success-informasi', 'Data warga berhasil perbaharui');
        } catch (\Throwable $th) {
            return back()->with('error', 'Data warga gagal diubah');
        }
    }
    // public function update(UpdateRumahRequest $request, $rumah)
    // {
    //     $validatedData = $request->validated();
    //     // dd($validatedData);
    //     try {
    //         $rumah = Rumah::findOrFail($rumah);
    //         $rumah->update($validatedData);
    //         return back()->with('success', 'Data rumah berhasil perbaharui');
    //     } catch (\Throwable $th) {
    //         return back()->with('error', 'Data rumah gagal diperbaharui');
    //     }
    // }

    // public function updateWarga(UpdateRumahRequest $request, $rumah)
    // {

    // }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rumah $rumah)
    {
        //
    }
}
