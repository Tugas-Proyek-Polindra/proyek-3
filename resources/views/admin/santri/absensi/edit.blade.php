@extends('adminlte::page')

@section('title', 'Absensi')

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
            <form action="/absensi/{{$absensi->id}}" method="POST" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="santri_id">Nama Santri</label>
                            <input name="santri_id" class="form-control" value="{{old('santri_id', $absensi->santri->nama_santri)}}" disabled
                            >
                            <div class="text-danger">
                                @error('santri_id')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sakit">Sakit</label>
                            <input name="sakit" class="form-control" value="{{old('sakit', $absensi->sakit)}}">
                            <div class="text-danger">
                                @error('sakit')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="izin">Izin</label>
                            <input name="izin" class="form-control" value="{{old('izin', $absensi->izin)}}">
                            <div class="text-danger">
                                @error('izin')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alpha">Alpha</label>
                            <input name="alpha" class="form-control" value="{{old('alpha', $absensi->alpha)}}">
                            <div class="text-danger">
                                @error('alpha')
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


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script> console.log('Hi!'); </script>
    @section('plugins.Datatables', true)

@stop