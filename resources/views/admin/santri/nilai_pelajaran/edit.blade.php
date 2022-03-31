@extends('adminlte::page')

@section('title', 'Nilai Pelajaran')

@section('content_header')
    {{-- <section class="content-header">
    </section> --}}
@stop

@section('content')

<section class="content p-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit @yield('title')</h3>
        </div>
        <div class="card-body">
            <form action="/nilai/pelajaran/{{$nilai_pelajaran->id}}" method="POST" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="santri_id">Nama Santri</label>
                            <input name="santri_id" class="form-control" value="{{old('santri_id', $nilai_pelajaran->santri->nama_santri)}}" disabled
                            >
                            <div class="text-danger">
                                @error('santri_id')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="al_quran">Al-Qur'an</label>
                            <input name="al_quran" class="form-control" value="{{old('al_quran', $nilai_pelajaran->al_quran)}}">
                            <div class="text-danger">
                                @error('al_quran')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="al_hadist">Al-Hadist</label>
                            <input name="al_hadist" class="form-control" value="{{old('al_hadist', $nilai_pelajaran->al_hadist)}}">
                            <div class="text-danger">
                                @error('al_hadist')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="aqidah">Aqidah</label>
                            <input name="aqidah" class="form-control" value="{{old('aqidah', $nilai_pelajaran->aqidah)}}">
                            <div class="text-danger">
                                @error('aqidah')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="akhlaq">Akhlaq</label>
                            <input name="akhlaq" class="form-control" value="{{old('akhlaq', $nilai_pelajaran->akhlaq)}}">
                            <div class="text-danger">
                                @error('akhlaq')
                                {{$message}}
                                @enderror
                            </div>
                        </div>                         
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="fiqih">Fiqih</label>
                            <input name="fiqih" class="form-control" value="{{old('fiqih', $nilai_pelajaran->fiqih)}}">
                            <div class="text-danger">
                                @error('fiqih')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tarikh">Tarikh</label>
                            <input name="tarikh" class="form-control" value="{{old('tarikh', $nilai_pelajaran->tarikh)}}">
                            <div class="text-danger">
                                @error('tarikh')
                                {{$message}}
                                @enderror
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label for="b_arab">B.Arab</label>
                            <input name="b_arab" class="form-control" value="{{old('b_arab', $nilai_pelajaran->b_arab)}}">
                            <div class="text-danger">
                                @error('b_arab')
                                {{$message}}
                                @enderror
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label for="praktikum">Praktikum</label>
                            <input name="praktikum" class="form-control" value="{{old('praktikum', $nilai_pelajaran->praktikum)}}">
                            <div class="text-danger">
                                @error('praktikum')
                                {{$message}}
                                @enderror
                            </div>
                        </div> 
                        {{-- Footer --}}
                        <div class="box-footer">
                            <label for=""></label>
                            <button type="submit" class="btn btn-primary float-right mt-4">Simpan</button>
                            </div>
                    </div>
                </div>
                
            </form>        
        </div>
    </div>
</section>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script> console.log('Hi!'); </script>
    @section('plugins.Datatables', true)

@stop