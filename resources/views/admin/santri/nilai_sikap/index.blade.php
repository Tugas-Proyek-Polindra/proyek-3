@extends('adminlte::page')

@section('title', 'Nilai Sikap')

@section('content_header')
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
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
                <a href="/nilai-sikap/create" class="btn btn-primary btn-sm me-5"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
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
                <tr>
                    @foreach ($nilai_sikap as $sikap)
                    <td>{{$sikap->santri->nama_santri}}</td>
                    <td>{{$sikap->mengaji}}</td>
                    <td>{{$sikap->hafalan}}</td>
                    <td>{{$sikap->disiplin}}</td>
                    <td>{{$sikap->bersih}}</td>
                    <td>{{$sikap->sopan}}</td>
                    <td>{{$sikap->keterangan}}</td>
                    <td >   
                        <a href="nilai-sikap/{{$sikap->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
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