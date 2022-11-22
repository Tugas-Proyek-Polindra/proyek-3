@extends('adminlte::page')

@section('title', 'Santri')

@section('content_header')
    {{-- <section class="content-header">
    </section> --}}
@stop

@section('content')

<section class="content p-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah @yield('title')</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('santri.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nama_santri">Nama Santri</label>
                            <input name="nama_santri" class="form-control" value="{{old('nama_santri')}}"
                            >
                            <div class="text-danger">
                                @error('nama_santri')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input name="nisn" class="form-control" value="{{old('nisn')}}">
                            <div class="text-danger">
                                @error('nisn')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input name="nik" class="form-control" value="{{old('nik')}}">
                            <div class="text-danger">
                                @error('nik')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input name="tempat_lahir" class="form-control" value="{{old('tempat_lahir')}}">
                            <div class="text-danger">
                                @error('tempat_lahir')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="{{old('tgl_lahir')}}">
                            <div class="text-danger">
                                @error('tgl_lahir')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="L" >Laki-Laki</option>
                                <option value="P" >Perempuan</option>
                            </select>                 
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input name="no_hp" class="form-control" value="{{old('no_hp')}}">
                            <div class="text-danger">
                                @error('no_hp')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input name="nama_ibu" class="form-control" value="{{old('nama_ibu')}}">
                            <div class="text-danger">
                                @error('nama_ibu')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sekolah_asal">Sekolah Asal</label>
                            <input name="sekolah_asal" class="form-control" value="{{old('sekolah_asal')}}">
                            <div class="text-danger">
                                @error('sekolah_asal')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_sekolah">Alamat Sekolah</label>
                            <input name="alamat_sekolah" class="form-control" value="{{old('alamat_sekolah')}}">
                            <div class="text-danger">
                                @error('alamat_sekolah')
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