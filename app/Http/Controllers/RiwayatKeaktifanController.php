<?php

namespace App\Http\Controllers;

use App\Models\RiwayatKeaktifan;
use App\Models\User;
use Illuminate\Http\Request;

class RiwayatKeaktifanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.guru.riwayat_keaktifan.index',[
            "riwayat_keaktifan" => RiwayatKeaktifan::all(),
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
     * @param  \App\Models\RiwayatKeaktifan  $riwayatKeaktifan
     * @return \Illuminate\Http\Response
     */
    public function show(RiwayatKeaktifan $riwayatKeaktifan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiwayatKeaktifan  $riwayatKeaktifan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $riwayatKeaktifan = RiwayatKeaktifan::where('id', $id)->first();
        return view('admin.guru.riwayat_keaktifan.edit', [
            "riwayat_keaktifan" => $riwayatKeaktifan,
            // "guru" => User::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RiwayatKeaktifan  $riwayatKeaktifan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'status_keaktifan' => 'required',
                'tgl_mulai_bertugas' => 'required',
                'status_penugasan' => 'required',
                'tugas_utama' => 'required',
                ]
            );

        $profile = RiwayatKeaktifan::find($id)
            ->update($validatedData);

        return redirect('/keaktifan')->with('pesan', 'Data Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiwayatKeaktifan  $riwayatKeaktifan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiwayatKeaktifan $riwayatKeaktifan)
    {
        //
    }
}
