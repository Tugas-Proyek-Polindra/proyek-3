@extends('adminlte::page')

@section('title', 'Riwayat Keaktifan')
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
                            <th>Nama Guru</th>
                            <th>Status Keaktifan</th>
                            <th>Mulai Bertugas</th>
                            <th>Status Penugasan</th>
                            <th>Tugas Utama</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($riwayat_keaktifan as $keaktifan)
                        <tr>
                            <td>{{$keaktifan->guru->name}}</td>
                            <td>{{$keaktifan->status_keaktifan}}</td>
                            <td>{{$keaktifan->tgl_mulai_bertugas}}</td>
                            <td>{{$keaktifan->status_penugasan}}</td>
                            <td>{{$keaktifan->tugas_utama}}</td> 
                            <td width="5%">
                            <a href="/keaktifan/{{$keaktifan->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
                    {{-- <form method="post" action="/keaktifan/{{$keaktifan->id}}" class="form-inline">
                        <a href="/keaktifan/{{$keaktifan->id}}" class="btn btn-sm btn-success" ><i class="fas fa-eye"></i></a>
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
                    </div> --}}
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