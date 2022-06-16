@extends('adminlte::page')

@section('title', 'Nilai Pelajaran')

@section('content_header')
    {{-- <section class="content-header">
    </section> --}}
@stop

@section('content')

<section class="content p-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit @yield('title')</h3>
        </div>
        <div class="card-body">
            {{-- <form action="/nilai-pelajaran/{{$nilai_pelajaran->id}}" method="POST" enctype="multipart/form-data" > --}}
            <form id="form" >
                {{-- @method('put')
                @csrf --}}
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="santri_id">Nama Santri</label>
                            <input name="santri_id" class="form-control" value="{{old('santri_id', $nilai_pelajaran->santri->nama_santri)}}" disabled
                            >
                            <div class="text-danger">
                                @error('santri_id')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="al_quran">Al-Qur'an</label>
                            <input type="number" id="al_quran" name="al_quran" id="al_quran" class="form-control" value="{{old('al_quran', $nilai_pelajaran->al_quran)}}">
                            <div class="text-danger">
                                @error('al_quran')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="al_hadist">Al-Hadist</label>
                            <input type="number" id="al_hadist" name="al_hadist" id="al_hadist" class="form-control" value="{{old('al_hadist', $nilai_pelajaran->al_hadist)}}">
                            <div class="text-danger">
                                @error('al_hadist')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="aqidah">Aqidah</label>
                            <input type="number" id="aqidah" name="aqidah" id="aqidah" class="form-control" value="{{old('aqidah', $nilai_pelajaran->aqidah)}}">
                            <div class="text-danger">
                                @error('aqidah')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="akhlaq">Akhlaq</label>
                            <input type="number" id="akhlaq" name="akhlaq" id="akhlaq" class="form-control" value="{{old('akhlaq', $nilai_pelajaran->akhlaq)}}">
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
                            <input type="number" id="fiqih" name="fiqih" id="fiqih" class="form-control" value="{{old('fiqih', $nilai_pelajaran->fiqih)}}">
                            <div class="text-danger">
                                @error('fiqih')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tarikh">Tarikh</label>
                            <input type="number" id="tarikh" name="tarikh" id="tarikh" class="form-control" value="{{old('tarikh', $nilai_pelajaran->tarikh)}}">
                            <div class="text-danger">
                                @error('tarikh')
                                {{$message}}
                                @enderror
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label for="b_arab">B.Arab</label>
                            <input type="number" id="b_arab" name="b_arab" id="b_arab" class="form-control" value="{{old('b_arab', $nilai_pelajaran->b_arab)}}">
                            <div class="text-danger">
                                @error('b_arab')
                                {{$message}}
                                @enderror
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label for="praktikum">Praktikum</label>
                            <input type="number" id="praktikum" name="praktikum" id="praktikum" class="form-control" value="{{old('praktikum', $nilai_pelajaran->praktikum)}}">
                            <div class="text-danger">
                                @error('praktikum')
                                {{$message}}
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input name="jumlah" id="jumlah"  class="form-control" value="{{old('jumlah', $nilai_pelajaran->jumlah)}}" disabled>
                            {{-- <input name="rata_rata" id="rata_rata" class="form-control" value="{{old('rata_rata', $nilai_pelajaran->rata_rata)}}"> --}}
                        </div>

                        {{-- Footer --}}
                        <div class="box-footer">
                            <label for=""></label>
                            <button type="submit" class="btn btn-primary float-right mt-4">Simpan</button>
                            </div>
                    </div>
                </div>
                
            </form>        
        </div>
    </div>
</section>

@stop


@section('js')
<script >

        let al_quran = document.getElementById('al_quran').value;
        let al_hadist = document.getElementById('al_hadist').value;
        let aqidah = document.getElementById('aqidah').value;
        let akhlaq = document.getElementById('akhlaq').value;
        let fiqih = document.getElementById('fiqih').value;
        let tarikh = document.getElementById('tarikh').value;
        let b_arab = document.getElementById('b_arab').value;
        let praktikum = document.getElementById('praktikum').value;

    $("#form").ready(function() {
        $("#al_quran, #al_hadist, #aqidah, #akhlaq, #fiqih, #tarikh, #b_arab, #praktikum").keyup(function() {

            $("#al_quran").val(al_quran);
            $("#al_hadist").val(al_hadist);
            $("#aqidah").val(aqidah);
            $("#akhlaq").val(akhlaq);
            $("#fiqih").val(fiqih);
            $("#tarikh").val(b_arab);
            $("#b_arab").val(tarikh);
            $("#praktikum").val(praktikum);

            let jumlah = parseInt(al_quran) + parseInt(al_hadist) + parseInt(aqidah) + parseInt(akhlaq) + parseInt(fiqih) + parseInt(tarikh) + parseInt(b_arab) + parseInt(tarikh) + parseInt(praktikum);
            
            $("#jumlah").val(jumlah);
        });
    });

    $("#form").on('submit', function(event){
        event.preventDefault()
        submitUpdate()
    })


    function submitUpdate(){
        let form =  $("#form");
        const url = "{{ url('/nilai-pelajaran/{{$nilai_pelajaran->id') }}";

        $.ajax({
            url,
            method:"PUT",
            data:form.serialize(),
            // data:{al_quran:al_quran, al_hadist:al_hadist, aqidah:aqidah, akhlaq:akhlaq, fiqih:fiqih, b_arab:b_arab, tarikh:tarikh, praktikum:praktikum, jumlah:jumlah}.serialize(),
            success:function(response){
                window.location.replace("{{url('nilai-pelajaran')}}");
            },
            error:function(err){
                console.log(err)
                alert("Ada Kesalahan")
            }
        })
    }

    // function mean(){
    //     const jumlah = document.getElementById('jumlah').value;

    //     var rata_rata = parseInt(jumlah)/8;
    //     document.getElementById('rata_rata').value = rata_rata;
    // }
    
</script>
@stop

