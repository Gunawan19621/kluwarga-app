<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePengaturanRequest;
use App\Http\Requests\UpdatePengaturanRequest;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pengaturan.pengaturan');
    }

    // Show the form for creating a new resource.
    public function create()
    {
    }

    //Store a newly created resource in storage.
    public function store(StorePengaturanRequest $request)
    {
        //
    }

    //Display the specified resource.
    public function show(Pengaturan $pengaturan)
    {
        //
    }

    //Show the form for editing the specified resource.
    public function edit(Pengaturan $pengaturan)
    {
        //
    }

    //saya coba buat fungsi updateAkun
    public function updateAkun(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect()->route('pengaturan.pengaturan')->with('success-informasiAkun', 'Data informasi akun berhasil diperbarui.');
    }

    //Remove the specified resource from storage.
    public function destroy(Pengaturan $pengaturan)
    {
        //
    }
}
