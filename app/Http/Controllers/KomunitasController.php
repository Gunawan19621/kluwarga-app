<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use App\Models\Informasi;
use App\Models\Komunitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreKomunitasRequest;
use App\Http\Requests\StorePengajuanKomunitasRequest;
use App\Http\Requests\UpdateKomunitasRequest;
use App\Models\PengajuanKomunitas;

class KomunitasController extends Controller
{
    public $allKomunitas;
    public function __construct()
    {
        $this->allKomunitas = Komunitas::all();
    }
    /**
     * halaman komunitas
     */
    public function index()
    {
        $komunitas = Komunitas::all();
        $informasi = Informasi::query()->latest()->get();
        $rumah = Rumah::query()->latest()->get();
        $getKomunitas = null; // Inisialisasi variabel $getKomunitas dengan nilai null
        if ($komunitas->count() > 0) {
            $getKomunitas = $komunitas->first(); // Mengambil komunitas pertama jika tersedia
        }
        return view('dashboard.Komunitasku.komunitas', compact('komunitas', 'rumah', 'informasi', 'getKomunitas'));
    }

    /**
     * menampikan halaman komunitas di sidebar
     */
    public function show($id)
    {
        $getKomunitas = Komunitas::findOrFail($id);
        $komunitas = Komunitas::all();
        $informasi = Informasi::query()->latest()->get();
        $rumah = Rumah::query()->latest()->get();
        return view('dashboard.Komunitasku.komunitas', compact('komunitas', 'rumah', 'informasi', 'getKomunitas'));
    }

    /**
     * cari komunitas di menu komunitas
     */
    public function cari()
    {
        if (
            request('cariKomunitas')
        ) {
            $searchKomunitas = Komunitas::where('nama_komunitas', 'like', '%' . request('cariKomunitas') . '%')->paginate(2);
        } else {
            $searchKomunitas = Komunitas::paginate(2);
        }
        $komunitas = Komunitas::paginate(2);
        return view('dashboard.komunitas.cari-komunitas', compact('komunitas', 'searchKomunitas'));
    }

    //menampikan halaman komunitas di hasil pencarian komunitas
    public function showkomunitas($id)
    {
        $komunitas_id = $id;
        $getKomunitas = Komunitas::findOrFail($id);
        $komunitas = Komunitas::get();
        $informasi = Informasi::query()->latest()->get();
        $rumah = Rumah::query()->latest()->get();
        return view('dashboard.komunitas.gabung', compact('rumah', 'informasi', 'getKomunitas', 'komunitas', 'komunitas_id'));
    }

    //hakaman profil
    public function halamanProfil(Request $request)
    {
        // $komunitas = Komunitas::latest()->first(); // Mengambil komunitas terbaru
        $komunitas = Komunitas::get();
        $getKomunitas = Komunitas::findOrFail($request->komunitas_id); // Inisialisasi variabel $getKomunitas dengan nilai null
        return view('dashboard.komunitasku.komunitas_profil.profil-admin', compact('komunitas', 'getKomunitas'));
    }






    public function halamanAkunKeuangan()
    {
        return view('dashboard.komunitasku.komunitas_keuangan.edit-akun');
    }
    //End hakaman Keuangan

    //hakaman surat
    public function halamanSurat()
    {
        return view('dashboard.komunitasku.komunitas_surat.surat-admin');
    }

    //hakaman iuran

    public function halamanDetailKonfirmasiIuran()
    {
        return view('dashboard.komunitasku.komunitas_iuran.detail-konfirmasi-iuran');
    }
    public function halamanBayarIuran()
    {
        return view('dashboard.komunitasku.komunitas_iuran.bayar-iuran');
    }
    //End hakaman iuran

    //hakaman Pengaturan
    public function halamanPengaturan()
    {
        return view('dashboard.komunitasku.komunitas_pengaturan.pengaturan-admin');
    }

    //hakaman pengurus
    public function halamanPengurus()
    {
        return view('dashboard.komunitasku.komunitas_pengurus.pengurus-admin');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $komunitas = Komunitas::all();
        return view('dashboard.Komunitas.buat-komunitas', compact('komunitas'));
    }

    /**
     * Update Profil Komunitas
     */
    public function actioncreate(StoreKomunitasRequest $request)
    {
        // $request->request->add(['user_id' => Auth::user()->id]);
        // dd(Auth::user()->name);
        // dd($request->all());
        $validatedData = $request->validated();
        // dd($validatedData);

        try {
            if ($request->hasFile('logo_komunitas')) {
                $validatedData['logo_komunitas'] = $request->file('logo_komunitas')->store('komunitas_image');
            }
            Komunitas::create($validatedData);
            return redirect()->route('komunitas.index')->with('success-komunitas', 'Komunitas berhasil dibuat.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Komunitas gagal dibuat.');
        }
    }

    //menampilkan halaman gabung komunitas
    public function storePengajuan(StorePengajuanKomunitasRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        try {
            // dd($validated);
            $validated['user_id'] = Auth::user()->id;
            $validated['komunitas_id'] = $request->komunitas_id;

            PengajuanKomunitas::create($validated);
            return to_route('cariKomunitas.cari')->with('success', 'Data rumah berhasil ditambah.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data rumah gagal ditambah.');
        }

        return redirect()->back()->with('success', 'Data rumah berhasil ditambah.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komunitas $komunitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKomunitasRequest $request, $komunitas)
    {
        // dd($request->all());
        $validatedData = $request->validated();
        try {
            $komunitas = Komunitas::findOrFail($komunitas);
            if ($request->hasFile('logo_komunitas')) {
                Storage::delete($komunitas->logo_komunitas);
                $validatedData['logo_komunitas'] = $request->file('logo_komunitas')->store('komunitas_image');
            }
            $komunitas->update($validatedData);
            return back()->with('success-informasi', 'Data pengguna berhasil perbaharui');
        } catch (\Throwable $th) {
            return back()->with('error', 'Data pengguna gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komunitas $komunitas)
    {
        //
    }
}
