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
    <link rel="stylesheet" href="{{ asset('base/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/line-icons.css') }}">
    <link type="text/css" href="{{ asset('base/css/froala_blocks.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('base/css/pikaday.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/croppie.min.css') }}">

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

    <div class="konten"
        style="display: flex;flex-grow: 1;overflow-x: hidden;flex-direction: row;margin-top: 60px;margin-bottom: 40px;">
        <section class="fdb-block" style="padding-top: 20px;flex:1; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                        <div class="row">
                            <div class="col text-center">
                                <h1 style="color: #005CAA;margin-bottom:0px;">Hallo!</h1>
                                <p style="font-size: 15px;font-weight:500; ">Hai kak! di isi dulu ya datanya </p>
                            </div>
                        </div>

                        <form action="" method="post">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <label>Nama Domain / URL Undangan</label>
                                    <label
                                        style="bottom: -12.3px;position: inherit;padding-left: 20px;color: #005CAA;font-weight: bold;display: table;margin-bottom: -1.2rem;">undangan.sidoinikah.xyz/</label>
                                    <input name="domain" type="text" class="form-control" placeholder="akudandia"
                                        style="padding-left: 180px;" value=""
                                        onkeyup="nospaces(this)" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email"
                                        value="" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Password</label>
                                    <input name="password" type="text" class="form-control" placeholder="Password"
                                        value="" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Nomer HP / WhatsApp</label>
                                    <input name="hp" type="number" class="form-control" placeholder="0"
                                        value="" required>
                                </div>
                            </div>
                            <div class="row justify-content-start mt-4">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <!-- <a class="btn btn-primary btn-order btn-block" style="background-color: #005CAA;">Lanjut</a> -->
                                            <input class="btn btn-primary btn-order btn-block" type="submit"
                                                name="submit" value="Lanjut">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>

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
    <script src="{{ asset('base/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('base/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('base/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('base/js/main.js') }}"></script>
    <script src="{{ asset('base/js/moment-with-locales.js') }}"></script>
    <script src="{{ asset('base/js/pikaday.js') }}"></script>
    <script src="{{ asset('base/js/dropzone.js') }}"></script>
    <script src="{{ asset('base/js/croppie.min.js') }}"></script>
</body>
</html>
