@extends('adminlte::page')

@section('title', 'Santri')

@section('content')

<section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Kelas</h3>
            </div>
            <div class="card-header">
              <a href="/produk/create" class="btn btn-primary btn-sm me-5"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>

            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Santri</th>
                  <th>Jenis Kelamin</th>
                  <th>No HP</th>
                  <th>Nama Ibu</th>
                  <th>Sekolah Asal</th>
                  <th>Alamat Sekolah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Andini Sri Wahyuni</td>
                  {{-- <td>0139484821</td>
                  <td>3210174509130001</td>
                  <td>Majalengka</td>
                  <td>5 Sept 2013</td> --}}
                  <td>Perempuan</td>
                  <td>083162945201</td>
                  <td>Marpuah</td>
                  <td>SDN Bongas Wetan II</td>
                  <td>Kampung Munjul</td>
                  <td >                                        
                    <form method="post" action="/produk/ " class="form-inline">
                        <a href="/produk/ " class="btn btn-sm btn-success" ><i class="fas fa-file"></i></a>
                        <a href="/produk/ /edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete "><i class="fas fa-times"></i></button>    
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
                        <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </td>
                </tr>
                </tbody>
                {{-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> --}}
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script> console.log('Hi!'); </script>
@section('plugins.Datatables', true)

@stop