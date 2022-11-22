@extends('adminlte::page')

@section('title', 'Santri')

@section('content_header')
    {{-- <section class="content-header">
    </section> --}}
@stop

@section('content')

<section class="content p-3">
<div class="col-lg-6">
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Tambah @yield('title')</h3>
        </div>
        <div class="card-body">
            <form action="/absensi" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="santri_id">Nama Santri</label>
                            <select name="santri_id" id="absensi" class="form-control">
                                @foreach ($santri as $s)
                                @if (empty($s->nilai_absensi_id))
                                    @if (old('santri_id') == $s->id)
                                        <option value="{{$s->id}}" selected>{{$s->nama_santri}}</option>
                                        <input type="hidden" name="absensi_id" class="form-control" value="{{$s->id}}">
                                    @else
                                        <option value="{{$s->id}}">{{$s->nama_santri}}</option>
                                    @endif  
                                @endif     
                                @endforeach
                            </select>
                            {{-- <input name="nama_santri" class="form-control" value="{{old('nama_santri')}} readonly"
                            >
                            <div class="text-danger">
                                @error('nama_santri')
                                {{$message}}
                                @enderror
                            </div> --}}
                        </div>
                        <div class="form-group">
                            <label for="sakit">Sakit</label>
                            <input name="sakit" class="form-control" value="{{old('sakit')}}">
                            <div class="text-danger">
                                @error('sakit')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="izin">Izin</label>
                            <input name="izin" class="form-control" value="{{old('izin')}}">
                            <div class="text-danger">
                                @error('izin')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alpha">Alpha</label>
                            <input name="alpha" class="form-control" value="{{old('alpha')}}">
                            <div class="text-danger">
                                @error('alpha')
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