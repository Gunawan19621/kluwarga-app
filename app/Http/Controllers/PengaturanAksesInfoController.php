<?php

namespace App\Http\Controllers;

use App\Models\PengaturanAksesInfo;
use App\Http\Requests\StorePengaturanAksesInfoRequest;
use App\Http\Requests\UpdatePengaturanAksesInfoRequest;
use Illuminate\Http\Request;

class PengaturanAksesInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data PengaturanAksesInfo
        $pengaturanAksesInfo = PengaturanAksesInfo::all();

        // Mengubah data PengaturanAksesInfo menjadi array asosiatif
        $data = $pengaturanAksesInfo->pluck('aksi', 'pertanyaan')->all();
        return view('dashboard.pengaturan.pengaturan-akses-info', compact('data'));
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
    public function store(Request $request)
    {
        $pertanyaan = $request->input('pertanyaan');
        // Simpan semua pertanyaan
        foreach ($pertanyaan as $item) {
            PengaturanAksesInfo::updateOrCreate(
                [
                    'user_id' => auth()->user()->id,
                    'pertanyaan' => $item['pertanyaan'],
                ],
                [
                    'aksi' => $item['jawaban'],
                ]
            );
        }
        // Berikan respons atau lakukan tindakan lainnya setelah penyimpanan

        return response()->json(['message' => 'Pengaturan berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(PengaturanAksesInfo $pengaturanAksesInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengaturanAksesInfo $pengaturanAksesInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengaturanAksesInfoRequest $request, PengaturanAksesInfo $pengaturanAksesInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PengaturanAksesInfo $pengaturanAksesInfo)
    {
        //
    }
}
