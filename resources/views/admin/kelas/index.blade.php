@extends('adminlte::page')
@section('title', 'Kelas')
@section('content_header')
    <h1 class="m-0 text-dark">Tabel @yield('title')</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="/kelas/create" class="btn btn-primary mb-2"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                          <th>Kelas</th>
                          <th>Wali Kelas</th>
                          <th>Tahun Ajaran</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($classes as $kelas)
                          <tr>
                            <td>{{$kelas->kelas}}</td>
                            <td>{{$kelas->wali_kelas}}</td>
                            <td>{{$kelas->tahun_ajaran}}</td>
                            <td >                                        
                              <form method="post" action="/kelas/{{$kelas->id}}" class="form-inline">
                                  <a href="/kelas/{{$kelas->id}}" class="btn btn-sm btn-success" ><i class="fas fa-eye"></i></a>
                                  <a href="/kelas/{{$kelas->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
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
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
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