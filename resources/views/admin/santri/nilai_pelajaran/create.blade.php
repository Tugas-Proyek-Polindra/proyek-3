@extends('adminlte::page')

@section('title', 'Nilai Pelajaran')

@section('content_header')
    {{-- <section class="content-header">
    </section> --}}
@stop

@section('content')

<section class="content p-3">

    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Tambah @yield('title')</h3>
        </div>
        <div class="card-body">
            {{-- <form action="/nilai-pelajaran" method="POST" enctype="multipart/form-data" > --}}
            <form id="form">
                {{-- @csrf --}}
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="santri_id">Nama Santri</label>
                            <select name="santri_id" id="santri_id" class="form-control">
                                @foreach ($santri as $s)
                                    @if (old('santri_id') == $s->id)
                                        <option value="{{$s->id}}" selected>{{$s->nama_santri}}</option>
                                        <input type="hidden" name="nilai_pelajaran_id" class="form-control" value="{{$s->id}}">
                                        <input type="hidden" name="nilai_sikap_id" class="form-control" value="{{$s->id}}">
                                        <input type="hidden" name="absensi_id" class="form-control" value="{{$s->id}}">
                                    @else
                                        <option value="{{$s->id}}">{{$s->nama_santri}}</option>
                                    @endif          
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="al_quran">Al-Qur'an</label>
                            <input type="number" name="al_quran" id="al_quran" class="form-control" value="{{old('al_quran')}}">
                            <div class="text-danger">
                                @error('al_quran')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="al_hadist">Al-Hadist</label>
                            <input type="number" name="al_hadist" id="al_hadist" class="form-control" value="{{old('al_hadist')}}">
                            <div class="text-danger">
                                @error('al_hadist')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="aqidah">Aqidah</label>
                            <input type="number" name="aqidah" id="aqidah" class="form-control" value="{{old('aqidah')}}">
                            <div class="text-danger">
                                @error('aqidah')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="akhlaq">Akhlaq</label>
                            <input type="number" name="akhlaq" id="akhlaq" class="form-control" value="{{old('akhlaq')}}">
                            <div class="text-danger">
                                @error('akhlaq')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="fiqih">Fiqih</label>
                            <input type="number" name="fiqih" id="fiqih" class="form-control" value="{{old('fiqih')}}">
                            <div class="text-danger">
                                @error('fiqih')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tarikh">Tarikh</label>
                            <input type="number" name="tarikh" id="tarikh" class="form-control" value="{{old('tarikh')}}">
                            <div class="text-danger">
                                @error('tarikh')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="b_arab">Bahasa Arab</label>
                            <input type="number" name="b_arab" id="b_arab" class="form-control" value="{{old('b_arab')}}">
                            <div class="text-danger">
                                @error('b_arab')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="praktikum">Praktikum</label>
                            <input type="number" name="praktikum" id="praktikum" class="form-control">
                            <div class="text-danger">
                                @error('praktikum')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input name="jumlah" id="jumlah" class="form-control" value="{{old('jumlah')}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="rata_rata">Rata-Rata</label>
                            <input name="rata_rata" id="rata_rata" class="form-control" value="{{old('rata_rata')}}" readonly="">
                        </div>
                        {{-- <div class="form-group">
                            <label for="rata_rata">Rata-Rata</label>
                            <input type="number" name="rata_rata" class="form-control" value="{{old('rata_rata')}}">
                            <div class="text-danger">
                                @error('rata_rata')
                                {{$message}}
                                @enderror
                            </div>
                        </div> --}}
                    </div>
                </div>                
                <div class="box-footer">
                <button type="submit" class="btn btn-primary float-right float">Simpan</button>
                </div>
            </form>        
        </div>
    </div>

</section>

@stop


{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}

@section('js')
    <script>
        
        $("#form").ready(function() {
            $("#al_quran, #al_hadist, #aqidah, #akhlaq, #fiqih, #tarikh, #b_arab, #praktikum").keyup(function() {
                
                const al_quran  = $("#al_quran").val();
                const al_hadist = $("#al_hadist").val();
                const aqidah = $("#aqidah").val();
                const akhlaq = $("#akhlaq").val();
                const fiqih = $("#fiqih").val();
                const b_arab = $("#tarikh").val();
                const tarikh = $("#b_arab").val();
                const praktikum = $("#praktikum").val();

                let jumlah = parseInt(al_quran) + parseInt(al_hadist) + parseInt(aqidah) + parseInt(akhlaq) + parseInt(fiqih) + parseInt(tarikh) + parseInt(b_arab) + parseInt(tarikh) + parseInt(praktikum);

                let rata_rata = jumlah/8;

                $("#jumlah").val(jumlah);
                $("#rata_rata").val(rata_rata);
            });
        });
        
        $("#form").on('submit', function(event){
            event.preventDefault()
            submitFormNilaiPelajaran()
        })

        function submitFormNilaiPelajaran(){
            let form = $("#form");
            const url = "{{url('nilai-pelajaran')}}";
            $.ajax({
                url,
                method:"POST",
                data:form.serialize(),
                success:function(response){
                    window.location.replace("{{url('nilai-pelajaran')}}");
                },
                error:function(err){
                    console.log(err)
                    alert("Ada Kesalahan")
                }
            })
        }

    </script>
@stop