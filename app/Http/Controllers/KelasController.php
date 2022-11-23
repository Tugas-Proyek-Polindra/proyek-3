<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelas.index',[
            "classes" => Kelas::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelas.create',[
            "kelas" => Kelas::all(),
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
        // return $request;
        $validatedData = $request->validate(
            [
                'kelas' => 'required',
                'wali_kelas' => 'required',
                'tahun_ajaran' => 'required',
            ]
        );

        Kelas::create($validatedData);

        return redirect('/kelas')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        return view('admin.kelas.edit', [
            "classes" => $kelas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            
            'kelas' => 'required',
            'wali_kelas' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        $kelas = Kelas::find($id)
            ->update($validatedData);

        return redirect('/kelas')->with('pesan', 'Data Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/kelas')->with('pesan', 'Data Berhasil Dihapus !');
    }
}
