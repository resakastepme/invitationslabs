@extends('order.mainlayout')
@section('content')
    <div class="konten"
        style="display: flex;flex-grow: 1;overflow-x: hidden;flex-direction: row;margin-top: 60px;margin-bottom: 40px;">
        <section class="fdb-block" style="padding-top: 20px;flex:1; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                        <div class="row">
                            <div class="col text-center">
                                <h1 style="color: #005CAA;margin-bottom:0px;">Sukses!</h1>
                                <p tyle="font-size: 15px;font-weight:500; ">Hai kak! selamat undangan kamu sudah berhasil
                                    dibuat </p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col mt-5">
                                <label>Kode Pesanan</label>
                                <div class="upload-area-bg" style="margin-top: 5px;text-align: center;">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <?php $kode = 23424243234 ?>
                                                <a
                                                    style="font-size: 14px;text-transform: uppercase;color: #2c3e50;">#{{ $kode }}</a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="btn-warning btn-sm">Belum Lunas</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col mt-1">
                                <label>Nama Domain / URL Undangan</label>
                                <div class="upload-area-bg" style="margin-top: 5px;text-align: center;">
                                    <a
                                        style="font-size: 14px;text-transform: lowercase;color: #007bff;">undangan.invitationlabs.com/testdantest</a>

                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-start mt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <a href="undangan.invitationlabs.com/testdantest" target="_blank"
                                            class="btn btn-primary btn-order btn-block">Buka Website</a>
                                    </div>

                                    <div class="col" style="display: show;">

                                        <?php $format =
                                            "Hallo min,
                                        saya mau aktifasi Undangan *" .
                                            $kode .
                                            "*.
                                        mohon infonya "; ?>
                                        <a href="{{ url('/admin') }}" target="_blank"
                                            class="btn btn-success btn-order btn-block">Dashboard</a>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-check mt-4" style="text-align: center;">
                            <label class="form-check-label" style="display: show;">
                                Untuk melakukan aktifasi silahkan login ke dashboard user atau menghubungi admin kami via <a
                                    href="https://wa.me/+6289665983762/?text=<?php echo urlencode($format); ?>">Whatsapp</a> dengan
                                menyertakan <strong>kode : {{ $kode }}</strong>.
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
