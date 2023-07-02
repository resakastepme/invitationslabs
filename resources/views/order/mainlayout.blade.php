<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">

<head>
    <title>{{ env('APP_NAME') }} - Digital Invitation</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian.">
    <meta name="keywords" content="Undangan digital, Website pernikahan, Undangan kekinian, Web undangan kren">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#6c5ce7" />
    <meta name="author" content="{{ env('APP_NAME') }}">

    <!-- Required CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('base/css/line-icons.css') }}">
    <link type="text/css" href="{{ asset('base/css/froala_blocks.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('base/css/pikaday.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/croppie.min.css') }}" type="text/css" />

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md fixed-top">
                <div class="container">
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="fdb-block footer-small footer">
        <div class="container">
            <div class="col-12 text-lg-left">
                <p class="lead footer-social">
                    <a href="https://instagram.com/resaka.xmp" class="mx-2"><i class="lni-instagram-filled"
                            aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p class="text-footer" style="color:#fff;">&#169;2023 <a href="https://www.invitationlabs.com/"
                            rel="dofollow" target="_blank"> {{ env('APP_NAME') }} </a> - <a
                            href="https://www.invitationlabs.com/" rel="dofollow" target="_blank"> Invitation Labs
                        </a> .
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- modal upload croppie -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Foto Mempelai</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="resizer"></div>
                    <hr>
                    <button class="btn btn-block btn-dark" id="upload">
                        Upload</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('base/js/jquery-min.js') }}"></script>
    <script src="{{ asset('base/js/popper.min.js') }}"></script>
    <script src="{{ asset('base/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('base/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('base/js/main.js') }}"></script>
    <script src="{{ asset('base/js/moment-with-locales.js') }}"></script>
    <script src="{{ asset('base/js/pikaday.js') }}"></script>
    {{-- bootstrap --}}
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- dropzone --}}
    <script src="{{ asset('plugins/dropzone/min/dropzone.min.js') }}"></script>
    {{-- croppie --}}
    <script src="{{ asset('base/js/croppie.min.js') }}"></script>
        <!-- Own Fontawesome -->
        <script src="{{ asset('plugins/fontawesome-free/d639410787.js') }}" crossorigin="anonymous"></script>

    @yield('script')

</body>

</html>
