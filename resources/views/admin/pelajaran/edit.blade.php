@extends('adminlte::page')

@section('title', 'Pelajaran')

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
            <form action="/pelajaran/{{$pelajaran->id}}" method="POST" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="nama_pelajaran">Nama Pelajaran</label>
                            <input name="nama_pelajaran" class="form-control" value="{{old('nama_pelajaran', $pelajaran->nama_pelajaran)}}">
                            <div class="text-danger">
                                @error('nama_pelajaran')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nilai_kkm">Nilai KKM</label>
                            <input name="nilai_kkm" class="form-control" value="{{old('nilai_kkm', $pelajaran->nilai_kkm)}}">
                            <div class="text-danger">
                                @error('nilai_kkm')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary float-right ">Simpan</button>
                </div>
            </form>        
        </div>
    </div>
</section>

@stop