@extends('adminlte::page')

@section('title', 'Nilai Sikap')

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
            <form action="{{ route('nilai-sikap.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="santri_id">Nama Santri</label>
                            <select name="santri_id" id="absensi" class="form-control">
                                @foreach ($santri as $s)
                                    @if (empty($s->nilai_sikap_id))
                                        @if (old('santri_id') == $s->id)
                                            <option value="{{$s->id}}" selected>{{$s->nama_santri}}</option>
                                            <input type="hidden" name="nilai_sikap_id" class="form-control" value="{{$s->id}}">
                                        @else
                                            <option value="{{$s->id}}">{{$s->nama_santri}}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mengaji">Mengaji</label>
                            <input name="mengaji" class="form-control" value="{{old('mengaji')}}">
                            <div class="text-danger">
                                @error('mengaji')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hafalan">Hafalan</label>
                            <input name="hafalan" class="form-control" value="{{old('hafalan')}}">
                            <div class="text-danger">
                                @error('hafalan')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="disiplin">Disiplin</label>
                            <input name="disiplin" class="form-control" value="{{old('disiplin')}}">
                            <div class="text-danger">
                                @error('disiplin')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bersih">Bersih</label>
                            <input name="bersih" class="form-control" value="{{old('bersih')}}">
                            <div class="text-danger">
                                @error('bersih')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sopan">Sopan</label>
                            <input name="sopan" class="form-control" value="{{old('sopan')}}">
                            <div class="text-danger">
                                @error('sopan')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input name="keterangan" class="form-control" value="{{old('keterangan')}}">
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
