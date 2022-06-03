@extends('adminlte::page')

@section('title', 'Nilai Pelajaran')

@section('content_header')
    {{-- <section class="content-header">
    </section> --}}
@stop

@section('content')

<section class="content p-3">

    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Tambah @yield('title')</h3>
        </div>
        <div class="card-body">
            <form action="/nilai-pelajaran" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="santri_id">Nama Santri</label>
                            <select name="santri_id" id="absensi" class="form-control">
                                @foreach ($santri as $s)
                                    @if (old('santri_id') == $s->id)
                                        <option value="{{$s->id}}" selected>{{$s->nama_santri}}</option>
                                    @else
                                        <option value="{{$s->id}}">{{$s->nama_santri}}</option>
                                    @endif          
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="al_quran">Al-Qur'an</label>
                            <input type="number" name="al_quran" class="form-control" value="{{old('al_quran')}}">
                            <div class="text-danger">
                                @error('al_quran')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="al_hadist">Al-Hadist</label>
                            <input type="number" name="al_hadist" class="form-control" value="{{old('al_hadist')}}">
                            <div class="text-danger">
                                @error('al_hadist')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="aqidah">Aqidah</label>
                            <input type="number" name="aqidah" class="form-control" value="{{old('aqidah')}}">
                            <div class="text-danger">
                                @error('aqidah')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="akhlaq">Akhlaq</label>
                            <input type="number" name="akhlaq" class="form-control" value="{{old('akhlaq')}}">
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
                            <input type="number" name="fiqih" class="form-control" value="{{old('fiqih')}}">
                            <div class="text-danger">
                                @error('fiqih')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tarikh">Tarikh</label>
                            <input type="number" name="tarikh" class="form-control" value="{{old('tarikh')}}">
                            <div class="text-danger">
                                @error('tarikh')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="b_arab">Bahasa Arab</label>
                            <input type="number" name="b_arab" class="form-control" value="{{old('b_arab')}}">
                            <div class="text-danger">
                                @error('b_arab')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="praktikum">Praktikum</label>
                            <input type="number" name="praktikum" class="form-control" value="{{old('praktikum')}}">
                            <div class="text-danger">
                                @error('praktikum')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" value="{{old('jumlah')}}">
                            <div class="text-danger">
                                @error('jumlah')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="box-footer">
                <button type="submit" class="btn btn-primary float-right floa">Simpan</button>
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