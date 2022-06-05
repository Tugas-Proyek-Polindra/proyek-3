<?php

namespace App\Http\Controllers;

use App\Models\NilaiSikap;
use App\Models\Santri;
use Illuminate\Http\Request;

class NilaiSikapController extends Controller
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
        return view('admin.santri.nilai_sikap.index',[
            "nilai_sikap" => NilaiSikap::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.santri.nilai_sikap.create',[
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
        // dd($request->all());
        $validatedData = $request->validate(
            [
                'santri_id' => 'required',
                'mengaji' => 'required',
                'hafalan' => 'required',
                'disiplin' => 'required',
                'bersih' => 'required',
                'sopan' => 'required',
                'keterangan' => 'required',
            ]
        );
        NilaiSikap::create($validatedData);

        return redirect('/nilai-sikap')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NilaiSikap  $nilaiSikap
     * @return \Illuminate\Http\Response
     */
    public function show(NilaiSikap $nilaiSikap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NilaiSikap  $nilaiSikap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai_sikap = NilaiSikap::where('id', $id)->first();
        return view('admin.santri.nilai_sikap.edit', [
            "nilai_sikap" => $nilai_sikap,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NilaiSikap  $nilaiSikap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {       
        $request->validate(
            [
                'mengaji' => 'required',
                'hafalan' => 'required',
                'disiplin' => 'required',
                'bersih' => 'required',
                'sopan' => 'required',
                'keterangan' => 'required',
            ]
        );

        $santri = Santri::where('id', $id)->first();
        $nilai_sikap = NilaiSikap::where('id', $id)->first();        
        $nilai_sikap->update([
            'santri_id' => $id, 
            'mengaji' => $request->mengaji,
            'hafalan' => $request->hafalan,
            'disiplin' => $request->disiplin,
            'bersih' => $request->bersih,
            'sopan' => $request->sopan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('nilai-sikap')->with('pesan', 'Data Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NilaiSikap  $nilaiSikap
     * @return \Illuminate\Http\Response
     */
    public function destroy(NilaiSikap $nilaiSikap)
    {
        //
    }
}
