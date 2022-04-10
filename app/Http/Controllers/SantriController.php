<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\RekapNilai;
use App\Models\NilaiSikap;
use App\Models\NilaiPelajaran;
use App\Models\Absensi;
use Illuminate\Http\Request;

class SantriController extends Controller
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
        return view('admin.santri.index',[
            "santris" => Santri::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.santri.create', [
            "santri" => Santri::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_santri' => 'required',
                'nisn' => 'required',
                'nik' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required|date|date_format:Y-m-d',
                'jenis_kelamin' => 'required',
                // 'img' => 'required|mimes:jpg,jpeg,bmp,png|max:2048kb',
                'no_hp' => 'required',
                'nama_ibu' => 'required',
                'sekolah_asal' => 'required',
                'alamat_sekolah' => 'required',

            ]
        );

        // $validatedData['img'] = $request->file('img')->store('produk-images');

        $santri = Santri::create([
            'nama_santri' => $request->nama_santri,
            'nisn' => $request->nisn,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' =>  $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            // 'img' => 'required|mimes:jpg,jpeg,bmp,png|max:2048kb',
            'no_hp' => $request->no_hp,
            'nama_ibu' => $request->nama_ibu,
            'sekolah_asal' => $request->sekolah_asal,
            'alamat_sekolah' => $request->alamat_sekolah,
        ]);

        // $nilai_sikap = NilaiSikap::create([
        //     'santri_id' => $santri->id,  
        // ]);

        // $nilai_pelajaran = NilaiPelajaran::create([
        //     'santri_id' => $santri->id,  
        // ]);

        // $absensi = Absensi::create([
        //     'santri_id' => $santri->id,  
        // ]);

        RekapNilai::create([
            'santri_id' => $santri->id,
            // 'nilai_pelajaran_id' => $nilai_pelajaran->id,
            // 'nilai_sikap_id' => $nilai_sikap->id,
            // 'absensi_id' => $absensi->id,
        ]);

        return redirect('/santri')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $santri = Santri::where('id', $id)->first();
        return view('admin.santri.show', [
            "santri" => $santri,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $santri = Santri::where('id', $id)->first();
        return view('admin.santri.edit', [
            "santri" => $santri,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'nama_santri' => 'required',
                'nisn' => 'required',
                'nik' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required|date|date_format:Y-m-d',
                'jenis_kelamin' => 'required',
                // 'img' => 'required|mimes:jpg,jpeg,bmp,png|max:2048kb',
                'no_hp' => 'required',
                'nama_ibu' => 'required',
                'sekolah_asal' => 'required',
                'alamat_sekolah' => 'required',
            ]
        );

        $santri = Santri::find($id)
            ->update($validatedData);

        return redirect('/santri')->with('pesan', 'Data Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $santri = Santri::find($id);
        $santri->delete();
        return redirect('/santri')->with('pesan', 'Data Berhasil Dihapus !');
    }
}
