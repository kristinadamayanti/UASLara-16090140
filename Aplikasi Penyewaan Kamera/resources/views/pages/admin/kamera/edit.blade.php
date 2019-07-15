@extends('templates.default')
@section('content')
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Edit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Form Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ route('kamera.update', $kamera->id) }}" method="post" enctype="multipart/form-data">
            	@csrf
              {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Kamera</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="nama" required value="{{ $kamera->nama_kamera }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tipe Kamera</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="tipe" required value="{{ $kamera->tipe }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga Sewa</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputEmail3" name="harga" required value="{{ $kamera->harga }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Foto Kamera</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="old_foto" value="{{ $kamera->foto }}">
                    <input type="file" class="form-control" id="inputEmail3" name="foto">
                  </div>
                </div>
                
              </div>
              <div class="box-footer">
                	<a href="{{ route('kamera') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info">Save</button>
                </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection