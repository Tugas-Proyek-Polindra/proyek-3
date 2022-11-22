@extends('adminlte::page')
@section('title', 'Biodata Guru')
@section('content_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Tabel @yield('title')</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active"> @yield('title')</li>
        </ol>
    </div>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-12">

            @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Success:</h4>
                {{session('pesan')}}
            </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <a href="/guru/create" class="btn btn-primary btn-sm mb-2"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                    <table class="table table-hover table-bordered table-stripped table-responsive p-0" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>NIK</th>
                            <th>Tempat Lahir</th>
                            <th>Tgl Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>No.HP</th>
                            <th>Aksi</th>
                            <th>Nama Ibu</th>
                            <th>Status Pegawai</th>
                            <th>Pendidikan Terakhir</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru->skip(1) as $guru)
                        <tr>
                            <td> {{$loop->iteration}} </td>
                            <td>{{$guru->name}}</td>
                            <td>{{$guru->nik}}</td>
                            <td>{{$guru->tempat_lahir}}</td>
                            <td>{{$guru->tgl_lahir}}</td>
                            @if ($guru->jenis_kelamin == 'L' )
                            <td {{$guru->jenis_kelamin ? 'selected' : '' }} value="L">Laki-Laki</td>
                            @elseif($guru->jenis_kelamin == 'P' )
                                <td {{$guru->jenis_kelamin ? 'selected' : '' }} value="P">Perempuan</td>
                            @endif
                            <td>{{$guru->no_hp}}</td>
                            <td>{{$guru->nama_ibu}}</td>
                            <td>{{$guru->status_pegawai}}</td>
                            <td>{{$guru->pendidikan_terakhir}}</td>
                            <td width="5%">
                                <div class="btn btn-group">
                                    <a href="/guru/{{$guru->id}}" class="btn btn-sm btn-success" ><i class="fas fa-eye"></i></a>
                                    <a href="/guru/{{$guru->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
                                <a href="{{route('guru.destroy', $guru)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
            "searching": false,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush
