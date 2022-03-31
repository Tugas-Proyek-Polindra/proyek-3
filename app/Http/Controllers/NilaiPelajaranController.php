<?php

namespace App\Http\Controllers;

use App\Models\NilaiPelajaran;
use Illuminate\Http\Request;

class NilaiPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.santri.nilai_pelajaran.index',[
            "nilai_pelajaran" => NilaiPelajaran::all(),
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NilaiPelajaran  $nilaiPelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(NilaiPelajaran $nilaiPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NilaiPelajaran  $nilaiPelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(NilaiPelajaran $nilaiPelajaran)
    {
        $nilai_sikap = NilaiSikap::where('id', $id)->first();
        return view('admin.santri.nilai_pelajaran.edit', [
            "nilai_pelajaran" => $nilai_pelajaran,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NilaiPelajaran  $nilaiPelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NilaiPelajaran $nilaiPelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NilaiPelajaran  $nilaiPelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(NilaiPelajaran $nilaiPelajaran)
    {
        //
    }
}
