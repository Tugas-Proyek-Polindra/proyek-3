@extends('adminlte::page')
@section('title', 'Santri')
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
                    <a href="/santri/create" class="btn btn-primary mb-2"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                    <table class="table table-hover table-bordered table-stripped table-responsive p-0" id="example2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Santri</th>
                                <th>NISN</th>
                                <th>NIK</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>No HP</th>
                                <th>Nama Ibu</th>
                                <th>Sekolah Asal</th>
                                <th>Alamat Sekolah</th>
                                <th>Aksi</th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($santris as $santri)
                            <tr>
                                <td> {{$loop->iteration}} </td>
                                <td>{{$santri->nama_santri}}</td>
                                <td>{{$santri->nisn}}</td>
                                <td>{{$santri->nik}}</td>
                                <td>{{$santri->tempat_lahir}}</td>
                                <td>{{$santri->tgl_lahir}}</td>
                                    @if ($santri->jenis_kelamin == 'L' )
                                    <td {{$santri->jenis_kelamin ? 'selected' : '' }} value="L">Laki-Laki</td>
                                    @elseif($santri->jenis_kelamin == 'P' )
                                    <td {{$santri->jenis_kelamin ? 'selected' : '' }} value="P">Perempuan</td>
                                    @endif
                                <td>{{$santri->no_hp}}</td>
                                <td>{{$santri->nama_ibu}}</td>
                                <td>{{$santri->sekolah_asal}}</td>
                                <td>{{$santri->alamat_sekolah}}</td>
                                <td width="5%">
                                    <div class="btn btn-group">
                                        <a href="/santri/{{$santri->id}}" class="btn btn-sm btn-success" ><i class="fas fa-eye"></i></a>
                                        <a href="/santri/{{$santri->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
                                    <a href="{{route('santri.destroy', $santri)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "info": true,
            "autoWidth": false,
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
