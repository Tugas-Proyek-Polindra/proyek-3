@extends('adminlte::page')
@section('title', 'Nilai Pelajaran')
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

            <div class="card" >
                <div class="card-body">
                    {{-- @can('staff')
                        <a href="/nilai-pelajaran/create" class="btn btn-primary btn-sm mb-2"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                    @endcan --}}
                    
                    <table class="table table-hover table-bordered table-stripped" id="table-nilai-pelajaran">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Santri</th>
                                <th>Al-Qur'an</th>
                                <th>Al-Hadist</th>
                                <th>Aqidah</th>
                                <th>Akhlaq</th>
                                <th>Fiqih</th>
                                <th>Tarikh</th>
                                <th>B.Arab</th>
                                <th>Praktik</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nilai_pelajaran as $mapel)
                        <tr>
                            <td> {{$loop->iteration}} </td>
                            <td>{{$mapel->santri->nama_santri}}</td>
                            <td>{{$mapel->al_quran}}</td>
                            <td>{{$mapel->al_hadist}}</td>
                            <td>{{$mapel->aqidah}}</td>
                            <td>{{$mapel->akhlaq}}</td>
                            <td>{{$mapel->fiqih}}</td>
                            <td>{{$mapel->tarikh}}</td>
                            <td>{{$mapel->b_arab}}</td>
                            <td>{{$mapel->praktikum}}</td>
                            <td >
                                <a href="nilai-pelajaran/{{$mapel->id}}/edit" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
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
        $('#table-nilai-pelajaran').DataTable({
            "responsive": true,
            'iDisplayLength': 25
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
