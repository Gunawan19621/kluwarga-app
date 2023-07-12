<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use App\Models\Komunitas;
use App\Http\Requests\StoreIuranRequest;
use App\Http\Requests\UpdateIuranRequest;

class IuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iuran = Iuran::latest()->get();
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail(request('komunitas_id'));
        // $komunitas = Komunitas::query()->latest()->first();
        return view('dashboard.komunitasku.komunitas_iuran.iuran-admin', compact('iuran', 'komunitas', 'getKomunitas'));
    }

    public function konfirmasiIuran()
    {
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail(request('komunitas_id'));
        return view('dashboard.komunitasku.komunitas_iuran.konfirmasi-iuran', compact('komunitas', 'getKomunitas'));
    }

    public function detailKonfirmasi()
    {
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail(request('komunitas_id'));
        return view('dashboard.komunitasku.komunitas_iuran.detail-konfirmasi-iuran', compact('komunitas', 'getKomunitas'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $iuran = Iuran::latest()->get();
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail(request('komunitas_id'));
        return view('dashboard.komunitasku.komunitas_iuran.tambah-iuran', compact('iuran', 'komunitas', 'getKomunitas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIuranRequest $request)
    {
        $validated = $request->validated();
        try {
            Iuran::create($validated);
            // dd($validated);
            return to_route('iuranKomunitas.index')->with('success', 'Data rumah berhasil ditambah.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data rumah gagal ditambah.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Iuran $iuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($iuran)
    {
        // $iuran = Iuran::latest()->first();
        $iuran = Iuran::findOrFail($iuran);
        // dd($iuran);
        return view('dashboard.komunitasku.komunitas_iuran.edit-iuran', compact('iuran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIuranRequest $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validated();
        // dd($validatedData);
        try {
            $iuran = Iuran::findOrFail($id);

            $iuran->update($validatedData);
            return to_route('iuranKomunitas.index')->with('success-informasi', 'Data pengguna berhasil perbaharui');
        } catch (\Throwable $th) {
            return back()->with('error', 'Data pengguna gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iuran $iuran)
    {
        //
    }
}
