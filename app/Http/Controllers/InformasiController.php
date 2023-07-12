<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Komunitas;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreInformasiRequest;
use App\Http\Requests\UpdateInformasiRequest;

class InformasiController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informasi = Informasi::latest()->get();
        // $komunitas = Komunitas::query()->latest()->first();
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail(request('komunitas_id'));
        return view('dashboard.Komunitasku.komunitas_informasi.informasi-admin', compact('informasi', 'komunitas', 'getKomunitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $informasi = Informasi::latest()->get();
        return view('dashboard.Komunitasku.komunitas_informasi.tambah-informasi', compact('informasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInformasiRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();
        try {
            if ($request->hasFile('file')) {
                $validated['file'] = $request->file('file')->store('file_informasi');
            }
            $validated['pengguna_id'] = auth()->user()->id;
            Informasi::create($validated);
            return to_route('informasi.index')->with('success', 'Informasi berhasil ditambah.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Informasi gagal ditambah.');
        }

        return redirect()->back()->with('success', 'Informasi berhasil ditambah.');
    }




    /**
     * Display the specified resource.
     */
    public function show(Informasi $informasi)
    {
        $informasi = Informasi::findOrFail($informasi->id);
        return view('dashboard.Komunitasku.komunitas_informasi.detail-informasi', compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Informasi $informasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInformasiRequest $request, Informasi $informasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informasi $informasi)
    {
        //
    }
}
