@extends('templates.users')
@section('content')
	<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-1">
          	<h2 class="h3 mb-3 text-black text-center">Form Pesan</h2>
            <form action="{{ route('user.pesan.submit') }}" method="post">
              @csrf
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Nama<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="nama" placeholder="Masukkan Nama Pemesan">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Pemesan">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Kamera</label>
                    <input type="hidden" name="id_kamera" value="{{ $kamera->id }}">
                    <input type="text" class="form-control" disabled id="c_subject" name="c_subject" value="{{ $kamera->nama_kamera}}">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Alamat</label>
                    <textarea name="alamat" id="c_message" cols="30" rows="7" class="form-control" placeholder="Masukkan Alamat Pemesan"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Nohp</label>
                    <input type="number" class="form-control" id="c_subject" name="nohp" placeholder="Masukkan Nohp Pemesan">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Pesan">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection