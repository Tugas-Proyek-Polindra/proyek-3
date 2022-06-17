
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Rekap Nilai</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('vendor')}}/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('vendor')}}/adminlte/dist/css/adminlte.min.css">
    </head>
    <body>
        <section class="content">

            <div class="container-fluid">
            <div class="row">
                <div class="col-12">
        
                <!-- /.card -->
                <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tabel Rekap Nilai</h1>
                </div>
                </section>
                    <div class="card">
                        <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
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
                                @foreach ($rekap_nilai as $nilai)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                        @if(!empty($nilai->santri->nama_santri))
                                            <td>{{$nilai->santri->nama_santri}}
                                        @else 
                                            <td>Empty</td>
                                        @endif
                                        @if(!empty($nilai->nilai_pelajaran->al_quran))
                                            <td>{{$nilai->nilai_pelajaran->al_quran}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_pelajaran->al_hadist))
                                            <td>{{$nilai->nilai_pelajaran->al_hadist}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_pelajaran->aqidah))
                                            <td>{{$nilai->nilai_pelajaran->aqidah}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_pelajaran->akhlaq))
                                            <td>{{$nilai->nilai_pelajaran->akhlaq}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_pelajaran->fiqih))
                                            <td>{{$nilai->nilai_pelajaran->fiqih}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_pelajaran->tarikh))
                                            <td>{{$nilai->nilai_pelajaran->tarikh}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_pelajaran->b_arab))
                                            <td>{{$nilai->nilai_pelajaran->b_arab}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_pelajaran->praktikum))
                                            <td>{{$nilai->nilai_pelajaran->praktikum}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_sikap->mengaji))
                                            <td>{{$nilai->nilai_sikap->mengaji}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_sikap->hafalan))
                                            <td>{{$nilai->nilai_sikap->hafalan}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_sikap->disiplin))
                                        <td>{{$nilai->nilai_sikap->disiplin}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_sikap->bersih))
                                        <td>{{$nilai->nilai_sikap->bersih}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->nilai_sikap->sopan))
                                        <td>{{$nilai->nilai_sikap->sopan}}
                                        @else 
                                            <td>0</td>
                                        @endif

                                        @if(!empty($nilai->absensi->sakit))
                                            <td>{{$nilai->absensi->sakit}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->absensi->izin))
                                            <td>{{$nilai->absensi->izin}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        @if(!empty($nilai->absensi->alpha))
                                            <td>{{$nilai->absensi->alpha}}
                                        @else 
                                            <td>0</td>
                                        @endif
                                        
                                        <td>{{$nilai->jumlah}}</td>
                                        <td>{{$nilai->rata_rata}}</td>
                                        {{-- <td>{{$nilai->rangking}}</td> --}}
                                    
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
        <script>
            window.addEventListener("load", window.print());
        </script>
    </body>
</html>
