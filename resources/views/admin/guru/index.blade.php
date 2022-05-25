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
                    <a href="/keaktifan/create" class="btn btn-primary mb-2"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>NIK</th>
                            <th>Tempat Lahir</th>
                            <th>Tgl Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>No.HP</th>
                            {{-- <th>Nama Ibu</th>
                            <th>Status Pegawai</th>
                            <th>Pendidikan Terakhir</th> --}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($gurus->skip(1) as $guru)
                        <tr>
                            <td> {{$loop->iteration}} </td>
                            <td>{{$guru->name}}</td>
                            <td>{{$guru->nik}}</td>
                            <td>{{$guru->tempat_lahir}}</td>
                            <td>{{$guru->tgl_lahir}}</td>
                            <td>{{$guru->jenis_kelamin}}</td>
                            <td>{{$guru->no_hp}}</td>
                            {{-- <td>{{$guru->nama_ibu}}</td>
                            <td>{{$guru->status_pegawai}}</td>
                            <td>{{$guru->pendidikan_terakhir}}</td> --}}   
                            <td widht= "5%">                                  
                        <form method="post" action="/guru/{{$guru->id}}" class="form-inline">
                            <a href="/guru/{{$guru->id}}" class="btn btn-sm btn-success" ><i class="fas fa-eye"></i></a>
                            <a href="/guru/{{$guru->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete "><i class="fas fa-trash"></i></button>    
                        </form>           
                        <div class="modal modal-danger fade" id="delete ">
                            <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                    <p>Apakah Anda Yakin Ingin Menghapus Data Ini....???</p>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-outline pull-right">Yes</button>
                                </div>
                            </div>
                            </div>
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