<?php

use App\Models\Notifikasi;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    SuratController,
    ProfileController,
    AkunKeuanganController
};
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\BuatSuratController;
use App\Http\Controllers\EditIuranController;
use App\Http\Controllers\EditRumahController;
use App\Http\Controllers\EditWargaController;
use App\Http\Controllers\KomunitasController;
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

// Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::resource('notifikasi', NotifikasiController::class);
    Route::resource('profil-keluarga', ProfilKeluargaController::class);
    Route::resource('buat-komunitas', BuatKomunitasController::class);
    Route::resource('cari-komunitas', CariKomunitasController::class);
    Route::resource('pengaduan', PengaduanController::class);
    Route::resource('surat', SuratController::class);
    Route::resource('komunitas', KomunitasController::class);
    Route::resource('pengaturan', PengaturanController::class);
    Route::resource('pengaturan-akses-info', PengaturanAksesInfoController::class);
    Route::resource('detail-informasi', DetailInformasiController::class);
    Route::resource('form-pengaduan', FormPengaduanController::class);
    Route::resource('detail-pengaduan', DetailPengaduanController::class);
    Route::resource('detail-surat', DetailSuratController::class);
    Route::resource('edit-rumah', EditRumahController::class);
    Route::resource('edit-warga', EditWargaController::class);
    Route::resource('buat-surat', BuatSuratController::class);
    Route::resource('edit-data-surat', EditDataSuratController::class);
    Route::resource('tambah-informasi', TambahInformasiController::class);
    Route::resource('pengurus', PengurusController::class);
    Route::resource('pengaturan-komunitas', PengaturanKomunitasController::class);
    Route::resource('bayar-iuran', BayarIuranController::class);
    Route::resource('edit-iuran', EditIuranController::class);
    Route::resource('tambah-iuran', TambahIuranController::class);
    Route::resource('konfirmasi-iuran', KonfirmasiIuranController::class);
    Route::resource('detail-konfirmasi-iuran', DetailKonfirmasiIuranController::class);
    Route::resource('akun-keuangan', AkunKeuanganController::class);
});




require __DIR__ . '/auth.php';
