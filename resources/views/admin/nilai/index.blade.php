@extends('adminlte::page')
@section('title', 'Rekap Nilai')

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
                <div class="row">
                    {{-- <div class="col-sm mb-2">
                        <a href="/nilai-cetak" class="btn btn-success btn-sm me-5" target="_blank"><i class="fa fa-fw fa-print" ></i> Print</a>
                    </div> --}}
                    {{-- <div class="col-sm-2 m-2">
                        <select name="kelas_id" id="kelas" class="form-control">
                            @foreach ($kelas as $s)
                                @if (old('kelas_id') == $s->id)
                                    <option value="{{$s->id}}" selected>{{$s->kelas}}</option>
                                @else
                                    <option value="{{$s->id}}">{{$s->kelas}}</option>
                                @endif          
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2 m-2">
                        <select name="kelas_id" id="kelas" class="form-control">
                            @foreach ($kelas as $s)
                                @if (old('kelas_id') == $s->id)
                                    <option value="{{$s->id}}" selected>{{$s->tahun_ajaran}}</option>
                                @else
                                    <option value="{{$s->id}}">{{$s->tahun_ajaran}}</option>
                                @endif          
                            @endforeach
                        </select>
                    </div> --}}
                </div>
                <table id="example1" class="table table-bordered table-striped table-responsive p- ">
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
                            <th>Praktikum</th>
                            <th>Mengaji</th>
                            <th>Hafalan</th> 
                            <th>Disiplin</th>
                            <th>Bersih</th>
                            <th>Sopan</th>
                            <th>Sakit</th>
                            <th>Izin</th>
                            <th>Alpha</th>
                            <th>Jumlah</th>
                            <th>Rata-rata</th>
                            <th>Rangking</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach ($rekap_nilai as $nilai)
                        <td> {{$loop->iteration}} </td>
                            @if(!empty($nilai->santri->nama_santri))
                                <td>{{$nilai->santri->nama_santri}}</td>
                            @else 
                                <td>Empty</td>
                            @endif
                            @if(!empty($nilai->nilai_pelajaran->al_quran))
                                <td>{{$nilai->nilai_pelajaran->al_quran}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_pelajaran->al_hadist))
                                <td>{{$nilai->nilai_pelajaran->al_hadist}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_pelajaran->aqidah))
                                <td>{{$nilai->nilai_pelajaran->aqidah}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_pelajaran->akhlaq))
                                <td>{{$nilai->nilai_pelajaran->akhlaq}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_pelajaran->fiqih))
                                <td>{{$nilai->nilai_pelajaran->fiqih}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_pelajaran->tarikh))
                                <td>{{$nilai->nilai_pelajaran->tarikh}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_pelajaran->b_arab))
                                <td>{{$nilai->nilai_pelajaran->b_arab}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_pelajaran->praktikum))
                                <td>{{$nilai->nilai_pelajaran->praktikum}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_sikap->mengaji))
                                <td>{{$nilai->nilai_sikap->mengaji}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_sikap->hafalan))
                                <td>{{$nilai->nilai_sikap->hafalan}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_sikap->disiplin))
                                <td>{{$nilai->nilai_sikap->disiplin}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_sikap->bersih))
                                <td>{{$nilai->nilai_sikap->bersih}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_sikap->sopan))
                                <td>{{$nilai->nilai_sikap->sopan}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->absensi->sakit))
                                <td>{{$nilai->absensi->sakit}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->absensi->izin))
                                <td>{{$nilai->absensi->izin}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->absensi->alpha))
                                <td>{{$nilai->absensi->alpha}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_pelajaran->jumlah))
                                <td>{{$nilai->nilai_pelajaran->jumlah}}</td>
                            @else 
                                <td> </td>
                            @endif
                            @if(!empty($nilai->nilai_pelajaran->rata_rata))
                                <td>{{$nilai->nilai_pelajaran->rata_rata}}</td>
                            @else 
                                <td> </td>
                            @endif

                            @if(!empty($nilai->nilai_pelajaran->rangking))
                                <td>{{$nilai->nilai_pelajaran->rangking}}</td>
                            @else 
                                <td> </td>
                            @endif
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
        $(function () {
        $("#example1").DataTable({
            "lengthChange": true,
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "excel",
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL' 
            }]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq( )');
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
