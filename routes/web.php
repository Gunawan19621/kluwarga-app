<?php

use App\Models\{Notifikasi, Komunitas, PengajuanKomunitas};
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    SuratController,
    ProfileController,
    AkunKeuanganController,
    IuranController,
    PenggunaController
};
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\BuatSuratController;
use App\Http\Controllers\EditIuranController;
use App\Http\Controllers\EditRumahController;
use App\Http\Controllers\EditWargaController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\BayarIuranController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\DetailSuratController;
use App\Http\Controllers\TambahIuranController;
use App\Http\Controllers\BuatKomunitasController;
use App\Http\Controllers\CariKomunitasController;
use App\Http\Controllers\EditDataSuratController;
use App\Http\Controllers\FormPengaduanController;
use App\Http\Controllers\ProfilKeluargaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\DetailInformasiController;
use App\Http\Controllers\DetailPengaduanController;
use App\Http\Controllers\KonfirmasiIuranController;
use App\Http\Controllers\TambahInformasiController;
use App\Http\Controllers\PengaturanAksesInfoController;
use App\Http\Controllers\PengaturanKomunitasController;
use App\Http\Controllers\DetailKonfirmasiIuranController;


Route::get('/', function () {
    return view('index');
});
Route::get('/percobaan', function () {
    return view('dashboard.komunitas.coba');
});

// Auth
Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile-update-photo', [ProfileController::class, 'updatePhoto'])->name('profile.update-photo');
    Route::get('/profile-delete-photo', [ProfileController::class, 'deletePhoto'])->name('profile.delete-photo');
});


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('', function () {
        $komunitas = Komunitas::all();
        return view('dashboard.index', compact('komunitas'));
    })->name('dashboard');
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('notifikasi', NotifikasiController::class);

    //Profil Keluarga
    Route::resource('profil-keluarga', ProfilKeluargaController::class);

    Route::resource('pengaduan', PengaduanController::class);
    Route::post('update-status-pengaduan', [PengaduanController::class, 'updateStatus'])->name('pengaduan.updateStatus');

    //komunitas
    Route::resource('komunitas', KomunitasController::class);
    Route::get('/komunitas/{id}', [KomunitasController::class, 'show'])->name('komunitas.show');
    Route::get('/carikomunitas/{id}', [KomunitasController::class, 'showkomunitas'])->name('carikomunitas.showkomunitas');

    //halaman komunitas > pencarian komunitas
    Route::get('cariKomunitas', [KomunitasController::class, 'cari'])->name('cariKomunitas.cari');
    Route::post('/komunitas', [KomunitasController::class, 'storePengajuan'])->name('komunitas.storePengajuan');


    //halaman komunitas > Profil
    Route::get('/komunitas/create', [KomunitasController::class, 'create'])->name('komunitas.create');
    Route::post('/buatkomunitas', [KomunitasController::class, 'actioncreate'])->name('buatkomunitas.actioncreate');
    Route::get('komunitas-halamanProfil', [KomunitasController::class, 'halamanProfil'])->name('komunitas.halamanProfil');

    //halaman komunitas > Rumah dan warga
    Route::resource('rumah', RumahController::class);
    Route::patch('/rumah/{id}/edit', [RumahController::class, 'update'])->name('rumah.update');

    //halaman komunitas > admin > surat
    Route::resource('surat', SuratController::class);
    Route::get('halamanSurat', [SuratController::class, 'surat'])->name('halamanSurat.surat');

    Route::get('wargaKomunitas', [RumahController::class, 'indexWarga'])->name('wargaKomunitas.indexWarga');

    //halaman komunitas > Informasi
    Route::resource('informasi', InformasiController::class);

    //halaman komunitas > Pengaturan
    Route::resource('pengaturanKomunitas', PengaturanKomunitasController::class);

    //halaman komunitas > Iuran
    Route::resource('iuranKomunitas', IuranController::class);
    Route::get('iuranKomunitas.konfirmasiIuran', [IuranController::class, 'konfirmasiIuran'])->name('iuranKomunitas.konfirmasiIuran');
    Route::get('iuranKomunitas.detailKonfirmasi', [IuranController::class, 'detailKonfirmasi'])->name('iuranKomunitas.detailKonfirmasi');

    Route::get('komunitas-halamanDetailKonfirmasiIuran', [KomunitasController::class, 'halamanDetailKonfirmasiIuran'])->name('komunitas.halamanDetailkonfirmasiIuran');
    Route::get('komunitas-halamanBayarIuran', [KomunitasController::class, 'halamanBayarIuran'])->name('komunitas.halamanBayarIuran');



    Route::get('komunitas-halamanPengurus', [KomunitasController::class, 'halamanPengurus'])->name('komunitas.halamanPengurus');


    //halaman komunitas > Keuangan
    Route::resource('keuangan', KeuanganController::class);
    Route::get('komunitas-halamanKeuangan', [KomunitasController::class, 'halamanKeuangan'])->name('komunitas.halamanKeuangan');
    Route::get('komunitas-halamanAkunKeuangan', [KomunitasController::class, 'halamanAkunKeuangan'])->name('komunitas.halamanAkunKeuangan');






    Route::resource('pengaturan', PengaturanController::class);
    // Profile Edit Akses
    Route::resource('pengaturan-akses-info', PengaturanAksesInfoController::class);
    Route::resource('form-pengaduan', FormPengaduanController::class);
    Route::resource('detail-surat', DetailSuratController::class);
    Route::resource('buat-surat', BuatSuratController::class);
    Route::resource('edit-data-surat', EditDataSuratController::class);
    Route::resource('pengurus', PengurusController::class);
    Route::resource('pengaturan-komunitas', PengaturanKomunitasController::class);
    Route::resource('bayar-iuran', BayarIuranController::class);
});







require __DIR__ . '/auth.php';
