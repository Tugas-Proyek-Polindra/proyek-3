@extends('adminlte::page')
@section('title', 'Absensi')
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
                    <a href="/absensi/create" class="btn btn-primary mb-2"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                            <tr>
                                <th>Nama Santri</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Alpha</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absensi as $absen)
                        <tr>
                            <td>{{$absen->santri->nama_santri}}</td>
                            <td>{{$absen->sakit}}</td>
                            <td>{{$absen->izin}}</td>
                            <td>{{$absen->alpha}}</td>
                            <td width="5%">
                                <div class="btn btn-group">
                                <a href="/absensi/{{$absen->id}}" class="btn btn-sm btn-success" ><i class="fas fa-eye"></i></a>
                                <a href="/absensi/{{$absen->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
                                <a href="{{route('absensi.destroy', $absen)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
