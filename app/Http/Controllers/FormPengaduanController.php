<?php

namespace App\Http\Controllers;

use App\Models\FormPengaduan;
use App\Http\Requests\StoreFormPengaduanRequest;
use App\Http\Requests\UpdateFormPengaduanRequest;

class FormPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.lainnya.pengaduan.form-pengaduan');
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
    public function store(StoreFormPengaduanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FormPengaduan $formPengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormPengaduan $formPengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormPengaduanRequest $request, FormPengaduan $formPengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormPengaduan $formPengaduan)
    {
        //
    }
}
