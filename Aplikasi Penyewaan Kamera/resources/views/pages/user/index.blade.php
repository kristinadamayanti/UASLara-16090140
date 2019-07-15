@extends('templates.users')
@section('content')
	<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-12 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
              </div>
            </div>

            <div class="row mb-5">

            	@foreach ($kamera as $kam)
            		{{-- expr --}}
            	

              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="{{ asset('uploads/'. $kam->foto) }}" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html">{{ $kam->nama_kamera }}</a></h3>
                    <p class="mb-0">{{ $kam->tipe }}</p>
                    <p class="text-primary font-weight-bold">Rp.{{ number_format($kam->harga) }}</p>
                    <a href="{{ route('user.pesan', $kam->id) }}" class="btn btn-sm btn-info">Pesan</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

			
           
          </div>
        </div>
        
      </div>
    </div>
@endsection