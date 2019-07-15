@extends('templates.default')
@section('content')
	<section class="content-header">
      <h1>
        Data Customer
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kamera</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Nohp</th>
                  <th>Konfirmasi</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1 ?>
                @foreach ($customer as $customer)
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $customer->nama }}</td>
                  @foreach ($kamera as $kam)
                    @if ($kam->id == $customer->id_kamera)
                      <td>{{ $kam->nama_kamera }}</td>
                    @endif
                  @endforeach
                  <td>{{ $customer->email }}</td>
                  <td>{{ $customer->alamat }}</td>
                  <td>{{ $customer->nohp }}</td>
                  @if ($customer->konfirmasi == '1')
                    <td><span class="label label-success">Sudah di Konfirmasi</span></td>
                  @else
                    <td><span class="label label-danger">Belum di Konfirmasi</span></td>
                  @endif
                  <td>
                   @if ($customer->konfirmasi == '0')
                     <a href="{{ route('customer.konfirmasi', $customer->id) }}" class="btn btn-xs btn-warning">Konfirmasi</a>
                   @else
                     <a href="{{ route('customer.destroy', $customer->id) }}" class="btn btn-danger btn-xs">Delete</a>
                   @endif
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