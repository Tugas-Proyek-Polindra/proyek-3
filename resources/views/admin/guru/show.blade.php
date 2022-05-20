@extends('adminlte::page')

@section('title', 'Guru')

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

        <div class="col-8 justify-content-center">
            <div class="card bg-light ">
            <div class="card-header text-muted border-bottom-0">
                Madrasah Al Barokah
            </div>
            <div class="card-body pt-0">
                <div class="row">
                <div class="col-9">
                    <h2 class="lead"><b>{{$guru->nama_guru}}</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> {{$guru->nisn}} / {{$guru->tempat_lahir}} / {{$guru->alamat_sekolah}}</p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> No: {{$guru->no}}</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: {{$guru->no_hp}}</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> Nama Guru : {{$guru->nama_guru}}</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-id-card"></i></span> Nik: {{$guru->nik}}</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> Tempat Lahir: {{$guru->tempat_lahir}}</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> Tgl Lahir : {{$guru->tgl_lahir}}</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mars"></i></span> Jenis Kelamin : {{$guru->jenis_kelamin}}</li>
                    </ul>
                </div>
                <div class="col-3 text-center">
                    <img src="{{asset('img/profil.png')}}" alt="user-avatar" class="img-circle img-fluid">
                </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-left ">
                <a href="/guru" class="btn btn-sm bg-teal">
                    <i class="fas fa-arrow-left"></i>
                </a>

                </div>
            </div>
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
