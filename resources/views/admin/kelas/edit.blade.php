@extends('adminlte::page')

@section('title', 'Kelas')

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
            <form action="/kelas/{{$classes->id}}" method="POST" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input name="kelas" class="form-control" value="{{old('kelas', $classes->kelas)}}">
                            <div class="text-danger">
                                @error('kelas')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="wali_kelas">Wali Kelas</label>
                            <input name="wali_kelas" class="form-control" value="{{old('wali_kelas', $classes->wali_kelas)}}">
                            <div class="text-danger">
                                @error('wali_kelas')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tahun_ajaran">Tahun Ajaran</label>
                            <input name="tahun_ajaran" class="form-control" value="{{old('tahun_ajaran', $classes->tahun_ajaran)}}">
                            <div class="text-danger">
                                @error('tahun_ajaran')
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
@stop