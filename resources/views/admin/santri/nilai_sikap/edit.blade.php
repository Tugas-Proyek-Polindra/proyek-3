@extends('adminlte::page')

@section('title', 'Nilai Sikap')

@section('content_header')
    {{-- <section class="content-header">
    </section> --}}
@stop

@section('content')

<section class="content p-3 col-lg-8">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit @yield('title')</h3>
        </div>
        <div class="card-body">
            <form action="/nilai/sikap/{{$nilai_sikap->id}}" method="POST" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="santri_id">Nama Santri</label>
                            <input name="santri_id" class="form-control" value="{{old('santri_id', $nilai_sikap->santri->nama_santri)}}" disabled
                            >
                            <div class="text-danger">
                                @error('santri_id')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mengaji">Mengaji</label>
                            <input name="mengaji" class="form-control" value="{{old('mengaji', $nilai_sikap->mengaji)}}">
                            <div class="text-danger">
                                @error('mengaji')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hafalan">Hafalan</label>
                            <input name="hafalan" class="form-control" value="{{old('hafalan', $nilai_sikap->hafalan)}}">
                            <div class="text-danger">
                                @error('hafalan')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="disiplin">Disiplin</label>
                            <input name="disiplin" class="form-control" value="{{old('disiplin', $nilai_sikap->disiplin)}}">
                            <div class="text-danger">
                                @error('disiplin')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bersih">Bersih</label>
                            <input name="bersih" class="form-control" value="{{old('bersih', $nilai_sikap->bersih)}}">
                            <div class="text-danger">
                                @error('bersih')
                                {{$message}}
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="sopan">Sopan</label>
                            <input name="sopan" class="form-control" value="{{old('sopan', $nilai_sikap->sopan)}}">
                            <div class="text-danger">
                                @error('sopan')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input name="keterangan" class="form-control" value="{{old('keterangan', $nilai_sikap->keterangan)}}">
                            <div class="text-danger">
                                @error('keterangan')
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