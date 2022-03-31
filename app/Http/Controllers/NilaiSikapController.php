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
        return $request;
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

        // $validatedData = NilaiSikap::create([
        //     // 'santri_id' => $santri, 
        //     'santri_id' => $id, 
        //     'mengaji' => $request->mengaji,
        //     'hafalan' => $request->hafalan,
        //     'disiplin' => $request->disiplin,
        //     'bersih' => $request->bersih,
        //     'sopan' => $request->sopan,
        //     'keterangan' => $request->keterangan,
        // ]);

        $santri = Santri::where('id', $id)->first();
        $nilai_sikap = NilaiSikap::where('id', $id)->first();        
        $nilai_sikap->update([
            // 'santri_id' => $santri, 
            'santri_id' => $id, 
            'mengaji' => $request->mengaji,
            'hafalan' => $request->hafalan,
            'disiplin' => $request->disiplin,
            'bersih' => $request->bersih,
            'sopan' => $request->sopan,
            'keterangan' => $request->keterangan,
        ]);

        // $validatedData->update([
        //     'quantity' => $product->quantity + 1
        // ]);

        // $nilai_sikap = NilaiSikap::find($request->id)
        //     ->update([$validatedData]);

        return redirect('nilai/sikap')->with('pesan', 'Data Berhasil Di Update !');
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
