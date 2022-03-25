<?php

namespace App\Http\Controllers;

use App\Models\RiwayatKeaktifan;
use Illuminate\Http\Request;

class RiwayatKeaktifanController extends Controller
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
    public function edit(RiwayatKeaktifan $riwayatKeaktifan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RiwayatKeaktifan  $riwayatKeaktifan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RiwayatKeaktifan $riwayatKeaktifan)
    {
        //
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
