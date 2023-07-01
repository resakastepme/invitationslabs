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
              <h1 class="judul">Pilih Plan</h1>
              <p class="lead subjudul">Tema <b> {{ $temas->nama_tema }} </b> telah di pilih! </p>
              </div>
          </div>
        </div>
      </section>

      <section class="fdb-block team-1" id="tema">
        <div class="container">
          <div class="row">

            <div class="col-md-6">
                        <div class="fdb-box px-4 pt-5">
                            <h2>Basic</h2>
                            <p class="lead">Harga Normal.</p>

                            <p class="h1 mt-5 mb-5">Rp 100.000</p>

                            <p><a href=" {{ url('/plan/kode/basic') }} " class="btn btn-primary">Pesan Sekarang</a></p>

                            <hr>

                            <div class="card">
                                <div class="card-header">
                                    <h3> Fitur </h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <ul class="m-3">
                                            <li> <h5> Acara ✅ </h5> </li>
                                            <li> <h5> Cerita ✅ </h5> </li>
                                            <li> <h5> Gallery ✅ </h5> </li>
                                            <li> <h5> Gift ✅ </h5> </li>
                                            <li> <h5> Auto share undangan ❌ </h5> </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fdb-box px-4 pt-5">
                            <h2>Premium</h2>
                            <p class="lead">Harga spesial.</p>

                            <p class="h1 mt-5 mb-5">Rp 180.000</p>

                            <p><a href=" {{ url('/plan/kode/premium') }} " class="btn btn-primary">Pesan Sekarang</a></p>

                            <hr>

                            <div class="card">
                                <div class="card-header">
                                    <h3> Fitur </h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <ul class="m-3">
                                            <li> <h5> Acara ✅ </h5> </li>
                                            <li> <h5> Cerita ✅ </h5> </li>
                                            <li> <h5> Gallery ✅ </h5> </li>
                                            <li> <h5> Gift ✅ </h5> </li>
                                            <li> <h5> Auto share undangan ❌ </h5> </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
