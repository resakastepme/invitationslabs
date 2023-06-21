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
    <meta name="author" content="MC Project">

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

<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #6a11cb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
</style>

<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <?php
            if(session('email')){
                ?>

                            <div class="alert alert-danger"> {{ Session('email') }} </div>

                            <?php
            }
        ?>
                            <?php
            if(session('password')){
                ?>

                            <div class="alert alert-danger"> {{ Session('password') }} </div>

                            <?php
            }
        ?>
                            <?php
            if(session('error')){
                ?>

                            <div class="alert alert-danger"> {{ Session('error') }} </div>

                            <?php
            }
        ?>
                            <?php
            if(session('sesihabis')){
                ?>

                            <div class="alert alert-danger"> {{ Session('sesihabis') }} </div>

                            <?php
            }
        ?>

                            <div class="mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

                                <form action="{{ route('auth.store') }}" method="POST">

                                    @csrf

                                    <div class="form-outline form-white mb-2">
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        <input type="email" id="email" name="email"
                                            class="form-control form-control-lg" value="{{ Session('email_value') }}" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                </form>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






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
