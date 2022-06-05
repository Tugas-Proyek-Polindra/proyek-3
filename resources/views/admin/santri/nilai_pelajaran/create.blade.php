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
                            <select name="santri_id" id="absensi" class="form-control">
                                @foreach ($santri as $s)
                                    @if (old('santri_id') == $s->id)
                                        <option value="{{$s->id}}" selected>{{$s->nama_santri}}</option>
                                    @else
                                        <option value="{{$s->id}}">{{$s->nama_santri}}</option>
                                    @endif          
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="al_quran">Al-Qur'an</label>
                            <input type="number" name="al_quran" onkeyup = "sum();" class="form-control" value="{{old('al_quran')}}">
                            <div class="text-danger">
                                @error('al_quran')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="al_hadist">Al-Hadist</label>
                            <input type="number" name="al_hadist" onkeyup = "sum();" class="form-control" value="{{old('al_hadist')}}">
                            <div class="text-danger">
                                @error('al_hadist')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="aqidah">Aqidah</label>
                            <input type="number" name="aqidah" onkeyup = "sum();" class="form-control" value="{{old('aqidah')}}">
                            <div class="text-danger">
                                @error('aqidah')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="akhlaq">Akhlaq</label>
                            <input type="number" name="akhlaq" onkeyup = "sum();" class="form-control" value="{{old('akhlaq')}}">
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
                            <input type="number" name="fiqih" onkeyup = "sum();" class="form-control" value="{{old('fiqih')}}">
                            <div class="text-danger">
                                @error('fiqih')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tarikh">Tarikh</label>
                            <input type="number" name="tarikh" onkeyup = "sum();" class="form-control" value="{{old('tarikh')}}">
                            <div class="text-danger">
                                @error('tarikh')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="b_arab">Bahasa Arab</label>
                            <input type="number" name="b_arab" onkeyup = "sum();" class="form-control" value="{{old('b_arab')}}">
                            <div class="text-danger">
                                @error('b_arab')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="praktikum">Praktikum</label>
                            <input type="number" name="praktikum" onkeyup = "sum();" class="form-control" value="{{old('praktikum')}}">
                            <div class="text-danger">
                                @error('praktikum')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            {{-- <input type="number" name="jumlah" onkeyup = "sum();" class="form-control" value="{{old('jumlah')}}"> --}}
                            <input name="jumlah" id="jumlah"  onkeyup = "sum();"  class="form-control" value="{{old('jumlah')}}">
                            <div class="text-danger">
                                @error('jumlah')
                                {{$message}}
                                @enderror
                            </div>
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

    function sum(){
        const al_quran = document.getElementById('al_quran').value;
        const al_hadist = document.getElementById('al_hadist').value;
        const aqidah = document.getElementById('aqidah').value;
        const akhlaq = document.getElementById('akhlaq').value;
        const fiqih = document.getElementById('fiqih').value;
        const tarikh = document.getElementById('tarikh').value;
        const b_arab = document.getElementById('b_arab').value;
        const praktikum = document.getElementById('praktikum').value;
        
        var jumlah = parseInt(al_quran) + parseInt(al_hadist) + parseInt(aqidah) + parseInt(akhlaq) + parseInt(fiqih) + parseInt(tarikh) + parseInt(b_arab) + parseInt(tarikh) + parseInt(praktikum);
        document.getElementById('jumlah').value = jumlah;
    }
        
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