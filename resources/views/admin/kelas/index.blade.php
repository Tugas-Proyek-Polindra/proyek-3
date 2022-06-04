@extends('adminlte::page')
@section('title', 'Kelas')
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
                    <a href="/kelas/create" class="btn btn-primary mb-2"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                        <th>Kelas</th>
                        <th>Wali Kelas</th>
                        <th>Tahun Ajaran</th>
                        <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($classes as $kelas)
                        <tr>
                            <td width="10%">{{$kelas->kelas}}</td>
                            <td width="25%">{{$kelas->wali_kelas}}</td>
                            <td width="15%">{{$kelas->tahun_ajaran}}</td>
                            <td width="5%">
                                <div class="btn btn-group">
                                <a href="/kelas/{{$kelas->id}}" class="btn btn-sm btn-success" ><i class="fas fa-eye"></i></a>
                                <a href="/kelas/{{$kelas->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
                                <a href="{{route('kelas.destroy', $kelas)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
