<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// halaman login

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'dashboard'], function () {
    // halaman dasboard coba
    // Route::get('', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    //halaman dasboard asli
    Route::get('', function () {
        return view('dashboard.index');
    })->name('dashboard');
});
Route::get('/coba', function () {
    return view('tampilan-awal.coba');
});
require __DIR__ . '/auth.php';
// selesai halaman login