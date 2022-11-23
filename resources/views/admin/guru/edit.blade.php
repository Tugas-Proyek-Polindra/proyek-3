@extends('adminlte::page')

@section('title', 'Guru')

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
            <form action="/guru/{{$guru->id}}" method="POST" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input name="name" class="form-control" value="{{old('name', $guru->name)}}"
                            >
                            <div class="text-danger">
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Guru</label>
                            <input name="email" class="form-control" value="{{old('email', $guru->email)}}">
                            <div class="text-danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" value="{{old('password', $guru->password)}}">
                            <div class="text-danger">
                                @error('password')
                                {{$message}}
                                @enderror
                            </div>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="username">Nama Panggilan</label>
                            <input name="username" class="form-control" value="{{old('username')}}">
                            <div class="text-danger">
                                @error('username')
                                {{$message}}
                                @enderror
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input name="nik" class="form-control" value="{{old('nik', $guru->nik)}}">
                            <div class="text-danger">
                                @error('nik')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input name="tempat_lahir" class="form-control" value="{{old('tempat_lahir', $guru->tempat_lahir)}}">
                            <div class="text-danger">
                                @error('tempat_lahir')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="{{old('tgl_lahir', $guru->tgl_lahir)}}">
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
                                @if (old('jenis_kelamin', $guru->jenis_kelamin == 'L' ))
                                    <option {{$guru->jenis_kelamin ? 'selected' : '' }} value="L">Laki-Laki</option>
                                    <option value="P" >Perempuan</option>
                                @elseif(old('jenis_kelamin', $guru->jenis_kelamin == 'P' ))
                                    <option value="L" >Laki-Laki</option>
                                    <option {{$guru->jenis_kelamin ? 'selected' : '' }} value="P">Perempuan</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input name="no_hp" class="form-control" value="{{old('no_hp',$guru->no_hp)}}">
                            <div class="text-danger">
                                @error('no_hp')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input name="nama_ibu" class="form-control" value="{{old('nama_ibu', $guru->nama_ibu)}}">
                            <div class="text-danger">
                                @error('nama_ibu')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status_pegawai">Status Pegawai</label>
                            <input name="status_pegawai" class="form-control" value="{{old('status_pegawai', $guru->status_pegawai)}}">
                            <div class="text-danger">
                                @error('status_pegawai')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                            <input name="pendidikan_terakhir" class="form-control" value="{{old('pendidikan_terakhir', $guru->pendidikan_terakhir)}}">
                            <div class="text-danger">
                                @error('pendidikan_terakhir')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="riwayat_keaktifan_id">Riwayat Keaktifan</label>
                            <input name="riwayat_keaktifan_id" class="form-control" value="{{old('riwayat_keaktifan_id')}}">
                            <div class="text-danger">
                                @error('riwayat_keaktifan_id')
                                {{$message}}
                                @enderror
                            </div>
                        </div> --}}

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
@stop