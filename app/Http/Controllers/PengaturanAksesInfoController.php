<?php

namespace App\Http\Controllers;

use App\Models\PengaturanAksesInfo;
use App\Http\Requests\StorePengaturanAksesInfoRequest;
use App\Http\Requests\UpdatePengaturanAksesInfoRequest;

class PengaturanAksesInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pengaturan.pengaturan-akses-info');
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
    public function store(StorePengaturanAksesInfoRequest $request)
    {
        //
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
