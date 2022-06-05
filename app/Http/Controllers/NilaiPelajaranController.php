<?php

namespace App\Http\Controllers;

use App\Models\NilaiPelajaran;
use App\Models\Santri;
use App\Models\RekapNilai;

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
        return view('admin.santri.nilai_pelajaran.create',[
            "santri" => Santri::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function insertNilaiPelajaran()
    {
        dd(request()->all());
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'santri_id' => 'required',
                'al_quran' => 'required',
                'al_hadist' => 'required',
                'aqidah' => 'required',
                'akhlaq' => 'required',
                'fiqih' => 'required',
                'tarikh' => 'required',
                'b_arab' => 'required',
                'praktikum' => 'required',
                'jumlah' => 'required',

            ]
        );
        
        $nilai_pelajaran = NilaiPelajaran::create([
            'santri_id' => $request->santri_id,
            'al_quran' => $request->al_quran,
            'al_hadist' => $request->al_hadist,
            'aqidah' => $request->aqidah,
            'akhlaq' =>  $request->akhlaq,
            'fiqih' => $request->fiqih,
            'tarikh' => $request->tarikh,
            'b_arab' => $request->b_arab,
            'praktikum' => $request->praktikum,
            'jumlah' => $request->jumlah,
        ]);

        // RekapNilai::create([
        //     // 'santri_id' => $santri->id,
        //     'santri_id' => $request->santri_id,
        //     'nilai_pelajaran_id' => $nilai_pelajaran->id,
        //     // 'nilai_sikap_id' => $nilai_sikap->id,
        //     // 'absensi_id' => $absensi->id,
        // ]);

        return redirect('/nilai-pelajaran')->with('pesan', 'Data Berhasil Ditambahkan !');
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
    public function edit($id)
    {
        $nilai_pelajaran = NilaiPelajaran::where('id', $id)->first();
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
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'al_quran' => 'required',
                'al_hadist' => 'required',
                'aqidah' => 'required',
                'akhlaq' => 'required',
                'fiqih' => 'required',
                'tarikh' => 'required',
                'b_arab' => 'required',
                'tarikh' => 'required',
                'praktikum' => 'required',
                'jumlah' => 'required',
            ]
        );

        $santri = Santri::where('id', $id)->first();
        $nilai_pelajaran = NilaiPelajaran::where('id', $id)->first();

        $nilai_pelajaran->update([
            'santri_id' => $id, 
            'al_quran' => $request->al_quran,
            'al_hadist' => $request->al_hadist,
            'aqidah' => $request->aqidah,
            'akhlaq' => $request->akhlaq,
            'fiqih' => $request->fiqih,
            'tarikh' => $request->tarikh,
            'b_arab' => $request->b_arab,
            'tarikh' => $request->tarikh,
            'praktikum' => $request->praktikum,
            'jumlah' => $request->jumlah
        ]);

        

        return redirect('nilai-pelajaran')->with('pesan', 'Data Berhasil Di Update !');
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
