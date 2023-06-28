<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">

<head>
    <title>Invitation Labs</title>
    <link rel="icon" href="">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian.">
    <meta name="keywords" content="Undangan digital, Website pernikahan, Undangan kekinian, Web undangan keren">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#005CAA" />
    <meta name="author" content="Invitation Labs">

    <!-- Required CSS -->
    {{-- <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/base/css/bootstrap.min.css?SIDOINIKAHV2" > --}}
    {{-- <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/base/css/line-icons.css?SIDOINIKAHV2"> --}}
    {{-- <link type="text/css" href="<?php echo base_url(); ?>/assets/base/css/froala_blocks.css?SIDOINIKAHV2" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto" rel="stylesheet">
    <link href="{{ asset('plugins/lineicons/line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/lineicons/froala_blocks.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}"> --}}
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    {{-- <link rel="stylesheet" --}}
    {{-- href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"> --}}
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    {{-- bootstrap --}}
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- drozone --}}
    <link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}" type="text/css" />

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="">
                        <img src="" height="35" alt="image">
                    </a>

                    <button class="navbar-toggler" type="button" id="openC" style="display: show;">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <button class="navbar-toggler" type="button" id="closeC" style="display: none;">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav3">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">BERANDA <span class="sr-only">(current)</span></a>
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
                            {{-- <li class="nav-item">
                    <a class="nav-link" href="#testi">TESTIMONI</a>
                  </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/login') }}" style="font-weight:bolder">LOGIN</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="fdb-block cover d-flex align-items-center">
        <div class="container align-items-end justify-content-center d-flex">
            <div class="row align-items-top text-left">
                <div class="col-12 col-md-6 col-lg-6">
                    <h1 class="judul"> {{ env('APP_NAME') }} </h1>
                    <p class="lead subjudul">Undangan pernikahan lebih hemat, praktis, dan kekinian dengan url undangan
                        yang disebar otomatis untuk memberikan kesan terbaik.</p>
                    <p class="mt-4"><a href="" class="btn btn-light btn-pesan">Buat Undangan</a></p>
                    <p class="mt-4"><a href="" class="btn btn-light btn-pesan">Lihat Demo</a></p>
                </div>

                <div class="col-12 col-sm-4 col-md-6 col-lg-4 m-auto">
                    <img alt="image" class="img-fluid rounded-0" src="{{ asset('img/favicon.png') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="fdb-block" id="fitur">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1>Fitur</h1>
                </div>
            </div>
            <div class="row text-left mt-5">
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-3">
                            <img alt="image" class="fdb-icon" src="{{ asset('img/icons/gift.svg') }}">
                        </div>
                        <div class="col-9">
                            <h3><strong>Website Selalu Aktif</strong></h3>
                            <p>Website yang cepat dan aman akan aktif tanpa ada batasan waktu.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
                    <div class="row">
                        <div class="col-3">
                            <img alt="image" class="fdb-icon" src="{{ asset('img/icons/cloud.svg') }}">
                        </div>
                        <div class="col-9">
                            <h3><strong>Ubah Tampilan</strong></h3>
                            <p>Desain web dan undangan dapat kamu ubah sesuka hati sesuai keinginan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
                    <div class="row">
                        <div class="col-3">
                            <img alt="image" class="fdb-icon" src="{{ asset('img/icons/map-pin.svg') }}">
                        </div>
                        <div class="col-9">
                            <h3><strong>Do'a dan Ucapan</strong></h3>
                            <p>Para tamu dapat memberikan doa dan ucapan langsung di profile website undanganmu.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-left pt-3 pt-sm-4 pt-md-5">
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-3">
                            <img alt="image" class="fdb-icon" src="{{ asset('img/icons/layers.svg') }}">
                        </div>
                        <div class="col-9">
                            <h3><strong>Cerita</strong></h3>
                            <p>Tuangkan cerita perjalanan cinta anda kepada tamu undangan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
                    <div class="row">
                        <div class="col-3">
                            <img alt="image" class="fdb-icon" src="{{ asset('img/icons/life-buoy.svg') }}">
                        </div>
                        <div class="col-9">
                            <h3><strong>Layar Sapa</strong></h3>
                            <p>Setiap tamu yang hadir dapat disapa saat menerima undangan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
                    <div class="row">
                        <div class="col-3">
                            <img alt="image" class="fdb-icon" src="{{ asset('img/icons/layout.svg') }}">
                        </div>
                        <div class="col-9">
                            <h3><strong> Kirim Undangan
                                </strong></h3>
                            <p>Kamu bisa menggunakan WhatsApp untuk mengirimkan undangan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fdb-block"
        style="background-image: linear-gradient(to right, #005CAA 0%, #00c6f9 100%) !important" id="harga">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="text-white">HARGA</h2>
                </div>
            </div>

            <div class="row mt-5 align-items-center">

                <div class="row">
                    <div class="col-md-6">
                        <div class="fdb-box px-4 pt-5">
                            <h2>Basic</h2>
                            <p class="lead">Harga Normal.</p>

                            <p class="h1 mt-5 mb-5">Rp 100.000</p>

                            <p><a href=" {{ url('/order/') }} " class="btn btn-primary">Pesan Sekarang</a></p>

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

                            <p><a href=" {{ url('/order/') }} " class="btn btn-primary">Pesan Sekarang</a></p>

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

    <section class="fdb-block team-1" id="tema">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-12">
                    <h2>Tema</h2>
                    <p class="lead">Tersedia banyak pilihan tema undangan yang menarik untuk pernikahanmu..</p>
                </div>
            </div>

            <div class="row">
                <?php
            $i = 1;
            foreach ($dbtema as $row){
                ?>
                <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                    <div class="fdb-box p-0">
                        <img alt="image" class="img-fluid rounded-0" src="{{ asset('themes/'.$row->nama_tema.'/preview.png') }}">

                        <div class="content p-2 d-flex justify-content-center">
                            <h3><strong>{{ $row->nama_tema }}</strong></h3>
                        </div>

                        <div class="d-flex justify-content-center">
                            <p class="mt-2 mr-2"><a href="">Pesan</a></p>
                            <p class="mt-2"><a href="{{ url('/demo/' . $row->kode_tema) }}">Demo</a></p>
                        </div>
                    </div>
                </div>
                <?php
            if ($i++ == 4) break;
            }
            ?>
            </div>

            <div class="d-flex justify-content-center">
                <p class="mt-4"><a href="" class="btn btn-primary">Lihat Semua</a></p>
            </div>

        </div>
    </section>

    {{-- <section class="fdb-block" id="testi">
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
              <h2>Testimonials</h2>
              <p class="lead">A small river named Duden flows by their place and supplies it with the necessary regelialia. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
            </div>
          </div>

          <div class="row mt-5 align-items-center justify-content-center">
            <div class="col-md-8 col-lg-4">
              <div class="fdb-box">
                <div class="row no-gutters align-items-center">
                  <div class="col-3">
                    <img alt="image" class="img-fluid rounded" src="">
                  </div>
                  <div class="col-8 ml-auto">
                    <p>
                      <strong>MC Project</strong><br>
                      <em>Co-founder at Company</em>
                    </p>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12">
                    <p class="lead">
                      "Even the all-powerful Pointing has no control about the blind texts it is an small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar."
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8 col-lg-4 mt-4 mt-lg-0">
              <div class="fdb-box">
                <div class="row no-gutters align-items-center">
                  <div class="col-3">
                    <img alt="image" class="img-fluid rounded" src="">
                  </div>
                  <div class="col-8 ml-auto">
                    <p>
                      <strong>MC Project</strong><br>
                      <em>Co-founder at Company</em>
                    </p>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12">
                    <p class="lead">
                      "Far far away, behind the word mountains, far from the countries Vokalia. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8 col-lg-4 mt-4 mt-lg-0">
              <div class="fdb-box">
                <div class="row no-gutters align-items-center">
                  <div class="col-3">
                    <img alt="image" class="img-fluid rounded" src="">
                  </div>
                  <div class="col-8 ml-auto">
                    <p>
                      <strong>MC Project</strong><br>
                      <em>Co-founder at Company</em>
                    </p>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12">
                    <p class="lead">
                      "Separated they live in Bookmarksgrove right at the coast of the Semantics, the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

    <footer class="fdb-block footer-small footer">
        <div class="container">
            <div class="col-12 text-lg-left">
                <p class="lead footer-social">
                    <a href="https://twitter.com/mycodingxd" class="mx-2"><i class="lni-twitter-filled"
                            aria-hidden="true"></i></a>
                    <a href="https://facebook.com/mycodingxd" class="mx-2"><i class="lni-facebook-filled"
                            aria-hidden="true"></i></a>
                    <a href="https://instagram.com/mycodingxd" class="mx-2"><i class="lni-instagram-filled"
                            aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p class="text-footer" style="color:#fff;">&#169;2023 <a href="https://www.invitationlabs.com/"
                            rel="dofollow" target="_blank"> {{ env('APP_NAME') }} </a> - <a
                            href="https://www.invitationlabs.com/" rel="dofollow" target="_blank">MC Project</a> .
                    </p>
                </div>
            </div>
        </div>
    </footer>

    {{-- <script src="<?php echo base_url(); ?>/assets/base/js/jquery-min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/base/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/base/js/bootstrap.min.js"></script> --}}

    {{-- bs --}}
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('') }}dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
    <!-- Own Fontawesome -->
    <script src="{{ asset('plugins/fontawesome-free/d639410787.js') }}" crossorigin="anonymous"></script>
    {{-- bootstrap --}}
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- dropzone --}}
    <script src="{{ asset('plugins/dropzone/min/dropzone.min.js') }}"></script>
    {{-- popper --}}
    <script src="{{ asset('plugins/popper/popper.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $(document).on('click', '#openC', function() {
                $(this).hide();
                $('#closeC').show();
                $('.collapse').show();
            });

            $(document).on('click', '#closeC', function() {
                $(this).hide();
                $('#openC').show();
                $('.collapse').hide();
            });

        });
    </script>

</body>

</html>
