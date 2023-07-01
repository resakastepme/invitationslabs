<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">
  <head>
    <title>Tema - {{ env('APP_NAME') }}</title>
    {{-- <link rel="icon" href="<?php echo base_url() ?>/assets/base/img/favicon.png?<?= date("Y-m-d"); ?>"> --}}

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian.">
    <meta name="keywords" content="Undangan digital, Website pernikahan, Undangan kekinian, Web undangan kren">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#005CAA" />
    <meta name="author" content="{{ env('APP_NAME') }}">

    <!-- Required CSS -->
    <link rel="stylesheet" href="{{ asset('base/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('base/css/line-icons.css') }}">
    <link type="text/css" href="{{ asset('base/css/froala_blocks.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto" rel="stylesheet">

  </head>

  <body>
    <header>
        <div class="container">
          <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
              {{-- <a class="navbar-brand" href="<?php echo base_url() ?>">
                <img src="<?php echo base_url() ?>/assets/base/img/logo.png?cache<?= date("Y-m-d"); ?>" height="35s" alt="image">
              </a> --}}

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNav3">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">BERANDA <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#fitur">FITUR</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#harga">HARGA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#tema">TEMA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#testi">TESTIMONI</a>
                  </li>
                </ul>

              </div>
            </div>
          </nav>
        </div>
    </header>

      <section class="fdb-block cover-tema d-flex align-items-center" >
        <div class="container align-items-end justify-content-center d-flex">
          <div class="row align-items-top text-center">
            <div class="col-12 col-md-12 col-lg-12">
              <h1 class="judul">Pilih Tema</h1>
              <p class="lead subjudul">Tersedia banyak pilihan tema undangan yang menarik untuk pernikahanmu..</p>
              </div>
          </div>
        </div>
      </section>

      <section class="fdb-block team-1" id="tema">
        <div class="container">
          <div class="row">

            @foreach ($temas as $tema)

            <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
              <div class="fdb-box p-0">
                <img alt="image" class="img-fluid rounded-0" src="{{ asset('themes/'.$tema->nama_tema.'/preview.png') }}">

                <div class="content p-2 d-flex justify-content-center">
                  <h3><strong>{{ $tema->nama_tema }}</strong></h3>
                </div>

                <div class="d-flex justify-content-center">

                    @if(Session::has('plan_order'))

                    <p class="mt-2 mr-2"><a href="{{ url('/temanew/kode/'.$tema->kode_tema) }}" class="btn btn-success btn-sm">Pesan</a></p>

                    @else
                    <p class="mt-2 mr-2"><a href="{{ url('/tema/kode/'. $tema->kode_tema) }}" class="btn btn-success btn-sm">Pesan</a></p>

                    @endif

                  <p class="mt-2"><a href="{{ route('undangan.demo', $tema->kode_tema) }}" class="btn btn-primary btn-sm" target="blank">Demo</a></p>
                </div>
              </div>
            </div>

            @endforeach

          </div>
        </div>
      </section>

      <footer class="fdb-block footer-small footer">
        <div class="container">
        <div class="col-12 text-lg-left">
            <p class="lead footer-social">
              {{-- <a href="" class="mx-2"><i class="lni-twitter-filled" aria-hidden="true"></i></a>
              <a href="" class="mx-2"><i class="lni-facebook-filled" aria-hidden="true"></i></a> --}}
              <a href="https://instagram.com/resaka.xmp" class="mx-2"><i class="lni-instagram-filled" aria-hidden="true"></i></a>
            </p>
          </div>
            <div class="row text-center">
            <div class="col">
                <p class="text-footer" style="color:#fff;">&#169;2023 <a href="https://www.invitationlabs.com/"
                    rel="dofollow" target="_blank"> {{ env('APP_NAME') }} </a> - <a
                    href="https://www.invitationlabs.com/" rel="dofollow" target="_blank"> Invitation Labs </a> .
            </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('base/js/jquery-min.js') }}"></script>
    <script src="{{ asset('base/js/popper.min.js') }}"></script>
    <script src="{{ asset('base/js/bootstrap.min.js') }}"></script>
  </body>
</html>
