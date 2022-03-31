<?php

namespace App\Http\Controllers;

use App\Models\RekapNilai;
use App\Models\NilaiPelajaran;
use Illuminate\Http\Request;

class RekapNilaiController extends Controller
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

    public function jumlah(Request $request){
        $nilai_pelajaran = NilaiPelajaran::where('id', $id)->first();
        $nilai_pelajaran->$request->al_quran;
        $nilai_pelajaran->$request->al_hadist;
        $nilai_pelajaran->$request->aqidah;
        $nilai_pelajaran->$request->akhlaq;
        $nilai_pelajaran->$request->fiqih;
        $nilai_pelajaran->$request->tarikh;
        $nilai_pelajaran->$request->b_arab;
        $nilai_pelajaran->$request->tarikh;
        $nilai_pelajaran->$request->praktikum;

        $jumlah = $al_quran + $al_hadist + $aqidah + $akhlaq + $fiqih + $tarikh + $b_arab + $tarikh + $praktikum;
    }

    public function index()
    {
        return view('admin.nilai.index',[
            "rekap_nilai" => RekapNilai::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Models\RekapNilai  $rekapNilai
     * @return \Illuminate\Http\Response
     */
    public function show(RekapNilai $rekapNilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RekapNilai  $rekapNilai
     * @return \Illuminate\Http\Response
     */
    public function edit(RekapNilai $rekapNilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RekapNilai  $rekapNilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RekapNilai $rekapNilai)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RekapNilai  $rekapNilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(RekapNilai $rekapNilai)
    {
        //
    }
}
