<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\RekapNilai;
use App\Models\Kelas;
use App\Models\NilaiPelajaran;
use App\Models\NilaiSikap;
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
    }

}
