@extends('adminlte::page')
@section('title', 'Nilai Sikap')
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
                    @can('staff')
                    <a href="/nilai-sikap/create" class="btn btn-primary btn-sm me-5"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                    @endcan
                    
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Santri</th>
                                <th>Mengaji</th>
                                <th>Hafalan</th>
                                <th>Disiplin</th>
                                <th>Bersih</th>
                                <th>Sopan</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nilai_sikap as $sikap)
                        <tr>
                            <td> {{$loop->iteration}} </td>
                            <td>{{$sikap->santri->nama_santri}}</td>
                            <td>{{$sikap->mengaji}}</td>
                            <td>{{$sikap->hafalan}}</td>
                            <td>{{$sikap->disiplin}}</td>
                            <td>{{$sikap->bersih}}</td>
                            <td>{{$sikap->sopan}}</td>
                            <td>{{$sikap->keterangan}}</td>
                            <td >
                                <a href="/nilai-sikap/{{$sikap->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
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
