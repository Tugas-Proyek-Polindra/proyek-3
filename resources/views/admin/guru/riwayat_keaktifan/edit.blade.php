@extends('adminlte::page')

@section('title', 'Riwayat Keaktifan')

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
            <form action="/keaktifan/{{$riwayat_keaktifan->id}}" method="POST" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="user_id">Nama Guru</label>
                            <input name="user_id" class="form-control" value="{{old('user_id', $riwayat_keaktifan->guru->name)}}" disabled
                            >
                            <div class="text-danger">
                                @error('user_id')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status_keaktifan">Status Keaktifan</label>
                            <input name="status_keaktifan" class="form-control" value="{{old('status_keaktifan', $riwayat_keaktifan->status_keaktifan)}}">
                            <div class="text-danger">
                                @error('status_keaktifan')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_mulai_bertugas">Tgl Mulai Bertugas</label>
                            <input name="tgl_mulai_bertugas" class="form-control" value="{{old('tgl_mulai_bertugas', $riwayat_keaktifan->tgl_mulai_bertugas)}}">
                            <div class="text-danger">
                                @error('tgl_mulai_bertugas')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status_penugasan">Status Penugasan</label>
                            <input name="status_penugasan" class="form-control" value="{{old('status_penugasan', $riwayat_keaktifan->status_penugasan)}}">
                            <div class="text-danger">
                                @error('status_penugasan')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tugas_utama">Tugas Utama</label>
                            <input name="tugas_utama" class="form-control" value="{{old('tugas_utama', $riwayat_keaktifan->tugas_utama)}}">
                            <div class="text-danger">
                                @error('tugas_utama')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary float-right ">Update</button>
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