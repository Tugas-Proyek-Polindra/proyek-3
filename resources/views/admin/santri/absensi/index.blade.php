@extends('adminlte::page')

@section('title', 'Absensi')

@section('content_header')
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section> --}}
@stop

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Success:</h4>
                {{session('pesan')}}
            </div>     
            @endif

        <!-- /.card -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Tabel @yield('title')</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
                </div>
            </div>
            </div>
        </section>
            <div class="card">
            <div class="card-body">
                <div class="mb-3">
                <a href="/absensi/create" class="btn btn-primary btn-sm me-5"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
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
                <tr>
                    @foreach ($absensi as $absen)
                    <td>{{$absen->santri->nama_santri}}</td>
                    <td>{{$absen->sakit}}</td>
                    <td>{{$absen->izin}}</td>
                    <td>{{$absen->alpha}}</td>
                    <td >
                        <a href="/absensi/{{$absen->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>    
                    {{-- <form method="post" action="/absen/{{$absen->id}}" class="form-inline">
                    </form>            --}}
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