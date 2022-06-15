<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\RekapNilai;
use App\Models\Kelas;
use App\Models\NilaiPelajaran;
use App\Models\NilaiSikap;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function index()
    {
        // $this->authorize('staff');
        return view('admin.nilai.index',[
            "rekap_nilai" => RekapNilai::all(),
            "kelas" => Kelas::all(),
            "nilai_pelajaran" => NilaiPelajaran::all(),
            "nilai_sikap" => NilaiSikap::all(),
            "absensi" => Absensi::all(),
        ]);
    }

    public function nilaiCetak()
    {
        return view('admin.nilai.cetak_nilai',[
            "rekap_nilai" => RekapNilai::all(),
        ]);

        // $rekap_nilai = RekapNilai::all();

        // // $pdf = PDF::loadView('admin.nilai.cetak_nilai', ['rekap_nilai'=> $rekap_nilai]);
        // $pdf = PDF::loadView('admin.nilai.cetak_nilai');
        // $pdf->setPaper('a4', 'landscape');
        // return $pdf->download('rekap-nilai.pdf');
        // return $pdf->stream();
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
