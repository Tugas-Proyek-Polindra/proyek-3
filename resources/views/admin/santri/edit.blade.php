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
            <h3 class="card-title">Edit @yield('title')</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('santri.update', $santri) }}" method="POST" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nama_santri">Nama Santri</label>
                            <input name="nama_santri" class="form-control" value="{{old('nama_santri', $santri->nama_santri)}}"
                            >
                            <div class="text-danger">
                                @error('nama_santri')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input name="nisn" class="form-control" value="{{old('nisn', $santri->nisn)}}">
                            <div class="text-danger">
                                @error('nisn')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input name="nik" class="form-control" value="{{old('nik', $santri->nik)}}">
                            <div class="text-danger">
                                @error('nik')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input name="tempat_lahir" class="form-control" value="{{old('tempat_lahir', $santri->tempat_lahir)}}">
                            <div class="text-danger">
                                @error('tempat_lahir')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" class="form-control" value="{{old('tgl_lahir', Carbon\Carbon::parse($santri->tgl_lahir)->format('Y-m-d'))}}">
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
                            <select name="jenis_kelamin" id="combobox" class="form-control">
                                @if (old('jenis_kelamin', $santri->jenis_kelamin == 'L' ))
                                    <option {{$santri->jenis_kelamin ? 'selected' : '' }} value="L">Laki-Laki</option>
                                    <option value="P" >Perempuan</option>
                                @elseif(old('jenis_kelamin', $santri->jenis_kelamin == 'P' ))
                                    <option value="L" >Laki-Laki</option>
                                    <option {{$santri->jenis_kelamin ? 'selected' : '' }} value="P">Perempuan</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input name="no_hp" class="form-control" value="{{old('no_hp', $santri->no_hp)}}">
                            <div class="text-danger">
                                @error('no_hp')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input name="nama_ibu" class="form-control" value="{{old('nama_ibu', $santri->nama_ibu)}}">
                            <div class="text-danger">
                                @error('nama_ibu')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sekolah_asal">Sekolah Asal</label>
                            <input name="sekolah_asal" class="form-control" value="{{old('sekolah_asal', $santri->sekolah_asal)}}">
                            <div class="text-danger">
                                @error('sekolah_asal')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_sekolah">Alamat Sekolah</label>
                            <input name="alamat_sekolah" class="form-control" value="{{old('alamat_sekolah', $santri->alamat_sekolah)}}">
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
