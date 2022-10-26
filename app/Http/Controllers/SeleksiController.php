<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeleksiRequest;
use App\Http\Requests\UpdateSeleksiRequest;
use App\Models\Seleksi;

class SeleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSeleksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeleksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seleksi  $seleksi
     * @return \Illuminate\Http\Response
     */
    public function show(Seleksi $seleksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seleksi  $seleksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Seleksi $seleksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeleksiRequest  $request
     * @param  \App\Models\Seleksi  $seleksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeleksiRequest $request, Seleksi $seleksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seleksi  $seleksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seleksi $seleksi)
    {
        //
    }
}
