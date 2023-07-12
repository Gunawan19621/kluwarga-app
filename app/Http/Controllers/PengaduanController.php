<?php

namespace App\Http\Controllers;

use App\Models\Komunitas;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StorePengaduanRequest;
use App\Http\Requests\UpdatePengaduanRequest;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $komunitas = Komunitas::get();
        // $getKomunitas = Komunitas::findOrFail(request('komunitas_id')); // Inisialisasi variabel $getKomunitas dengan nilai null
        $pengaduan = Pengaduan::where('pengguna_id', Auth::user()->id)->latest()->get();
        return view('dashboard.lainnya.pengaduan.pengaduan', compact('pengaduan', 'komunitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $komunitas = Komunitas::get();
        return view('dashboard.lainnya.pengaduan.form-pengaduan', compact('komunitas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengaduanRequest $request)
    {
        $validated = $request->validated();

        try {
            if ($request->hasFile('foto_pengaduan')) {
                $validated['foto_pengaduan'] = $request->file('foto_pengaduan')->store('pengaduan_image');
            }
            $validated['pengguna_id'] = auth()->user()->id;
            Pengaduan::create($validated);
            return to_route('pengaduan.index')->with('success-pengaduan', 'Pengaduan berhasil dikirim.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Pengaduan gagal dikirim.');
        }

        return redirect()->back()->with('success', 'Pengaduan berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     */
    public function show($pengaduan)
    {
        $pengaduan = Pengaduan::find($pengaduan);
        return view('dashboard.lainnya.pengaduan.detail-pengaduan', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengaduanRequest $request, $pengaduan)
    {
        $validated = $request->validated();
        $data = Pengaduan::find($pengaduan);
        $tanggapan = $validated['tanggapan_pengaduan'];
        $data->update([
            'tanggapan_pengaduan' => $tanggapan
        ]);
        return redirect()->route('pengaduan.index')->with('success-updatePengaduan', 'Pengaduan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }

    public function updateStatus()
    {
        $ids = request('ids');
        $status = request('status_updatate');
        $pengaduan = Pengaduan::find($ids);
        $pengaduan->update([
            'status_pengaduan' => $status
        ]);
        return back()->with('success-updateStatus', 'Status pengaduan berhasil diperbarui.');
    }
}
