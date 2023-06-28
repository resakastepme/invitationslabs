<?php

if (time() - session('attempt') > 3600) {
    session()->pull('attempt');
    Auth::logout();
    return redirect()
        ->to('/login')
        ->with('sesihabis', 'Session habis, Silahkan login lagi!')
        ->send();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Invitation Labs</title>

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
    {{-- croppie --}}
    <link rel="stylesheet" href="{{ asset('base/css/croppie.min.css') }}" type="text/css" />
    {{-- DataTables --}}
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/dataTables.bootstrap5.min.css') }}" type="text/css" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div> --}}

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Fullscreen code -->

                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li> --}}


                {{-- <div class="user-panel d-flex"> --}}
                <div class="image">
                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                        alt="User Image" style="max-width: 30px">
                </div>
                <div class="info">
                    <p class="ml-2 d-none d-lg-inline"> {{ Auth::user()->email }} </p>
                </div>
                {{-- </div> --}}

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"> InvitationLabs </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ url('/admin') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    {{-- <i class="right fas fa-angle-left"></i> --}}
                                </p>
                            </a>
                            {{-- <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul> --}}
                        </li>

                        <li class="nav-header">FITUR</li>

                        <li
                            class="nav-item {{ Request::is('admin/tampilan') || Request::is('admin/pengaturan-undangan') || Request::is('admin/mempelai') || Request::is('admin/acara') || Request::is('admin/gallery') || Request::is('admin/cerita') || Request::is('admin/rekening') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-globe"></i>
                                <p>
                                    Website
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('tampilan.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tampilan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pengaturan-undangan.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengaturan</p>
                                    </a>
                                </li>
                                <li class="nav-header">DATA WEBSITE</li>
                                <li class="nav-item">
                                    <a href="{{ route('mempelai.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mempelai</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('acara.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Acara</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gallery.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Gallery</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cerita.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cerita</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('rekening.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rekening</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ Request::is('admin/riwayat') || Request::is('admin/ucapan') ? 'menu-open' : '' }} ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-chart-line"></i>
                                <p>
                                    Pengunjung
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('riwayat.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Riwayat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('ucapan.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ucapan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ Request::is('admin/tamu') || Request::is('admin/pengaturan-tamu') || Request::is('admin/hadir') ? 'menu-open' : '' }} ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-book"></i>
                                <p>
                                    Buku Tamu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('tamu.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Tamu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href=" {{ route('pengaturan-tamu.index') }} " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Setting Buku Tamu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hadir.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Hadir</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href=" {{ route('testimonial.index') }} " class="nav-link">
                                <i class="nav-icon far fa-solid fa-comments"></i>
                                <p>
                                    Testimonial
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">BANTUAN</li>
                        <li class="nav-item">
                            <a href="https://api.whatsapp.com/send?phone=6289665983762" target="blank" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-info"></i>
                                <p>
                                    Hubungi Kami
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">AKUN</li>
                        <li class="nav-item">
                            <a href="{{ route('pengaturan.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-wrench"></i>
                                <p>
                                    Pengaturan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" {{ route('tagihan.index') }} " class="nav-link">
                                <i class="nav-icon fas fa-solid fa-money-bill"></i>
                                <p>
                                    Tagihan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/logout') }}" class="nav-link">
                                <button class="btn btn-danger form-control">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    Logout
                                </button>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('content')

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="https://adminlte.io">InvitationLabs</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

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
    {{-- croppie --}}
    <script src="{{ asset('base/js/croppie.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            var links = document.querySelectorAll(".nav a");

            for (var i = 0; i < links.length; i++) {

                if (window.location.href == links[i].href) {

                    links[i].classList.add("active");

                }

            }

        });
    </script>

    @yield('script')

</body>

</html>
