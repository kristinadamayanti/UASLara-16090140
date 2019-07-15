<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="{{asset('user-assets/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('user-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('user-assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('user-assets/css/style.css')}}">
    
  </head>
  <body>

    <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">Shoppers</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
               
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active"><a href="{{ route('user.index') }}">Home</a></li>
            <li><a href="{{ route('user.kamera') }}">Kamera</a></li>
          </ul>
        </div>
      </nav>
    </header>

    @yield('content')

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="{{ route('user.index') }}">Home</a></li>
                  <li><a href="{{ route('user.kamera') }}">Kamera</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Kristina Damayanti</li>
                <li class="phone"><a href="tel://085540180881">+62 855 4018 0881</a></li>
                <li class="email">kristinadamyanti18@gmail.com</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>


  <script src="{{asset('user-assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('user-assets/js/jquery-ui.js')}}"></script>
  <script src="{{asset('user-assets/js/popper.min.js')}}"></script>
  <script src="{{asset('user-assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('user-assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('user-assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('user-assets/js/aos.js')}}"></script>

  <script src="{{asset('user-assets/js/main.js')}}"></script>
    
  </body>
</html>