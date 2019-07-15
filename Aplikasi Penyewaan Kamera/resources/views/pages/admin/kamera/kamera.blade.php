@extends('templates.default')
@section('content')
	<section class="content-header">
      <h1>
        Data Kamera
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
             
              <a href="{{ route('kamera.create') }}" class="btn btn-sm btn-info pull-right">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kamera</th>
                  <th>Foto</th>
                  <th>Tipe Kamera</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1 ?>
                @foreach ($kamera as $kamera)
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $kamera->nama_kamera }}</td>
                  <td><img src="{{ asset('uploads/'.$kamera->foto) }}" width="50" height="50"></td>
                  <td>{{ $kamera->tipe }}</td>
                  <td>Rp.{{ number_format($kamera->harga) }}</td>
                  <td>
                    <a href="{{ route('kamera.edit', $kamera->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="{{ route('kamera.destroy', $kamera->id) }}" onclick="return confirm('Delete Data?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php $no++ ?>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection