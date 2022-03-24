@extends('adminlte::page')

@section('title', 'Nilai Pelajaran')

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
                <a href="/praktikum/create" class="btn btn-primary btn-sm me-5"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
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
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ($nilai_sikap as $sikap)
                    <td>{{$praktikum->santri->nama_santri}}</td>
                    <td>{{$praktikum->mengaji}}</td>
                    <td>{{$praktikum->hafalan}}</td>
                    <td>{{$praktikum->disiplin}}</td>
                    <td>{{$praktikum->bersih}}</td>
                    <td>{{$praktikum->sopan}}</td>
                    <td>{{$praktikum->keterangan}}</td>
                    <td >                                        
                    <form method="post" action="/praktikum/{{$praktikum->id}}" class="form-inline">
                        <a href="/praktikum/{{$praktikum->id}}" class="btn btn-sm btn-success" ><i class="fas fa-eye"></i></a>
                        <a href="/praktikum/{{$praktikum->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
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