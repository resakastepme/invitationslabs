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
                                <h1 style="color: #005CAA;margin-bottom:0px;">Acara!</h1>
                                <p tyle="font-size: 15px;font-weight:500; ">Hai kak! di isi dulu ya datanya </p>
                            </div>
                        </div>

                        <form action="{{ url('/new/order/4') }}" method="GET">
                            @csrf
                            <div class="progress" style="margin-top: 10px;">
                                <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="30"
                                    aria-valuemin="0" aria-valuemax="100">30%</div>
                            </div>

                            <a
                                style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;margin-top: 15px;display: flex;">Akad
                                Nikah</a>

                            <div class="row align-items-center">
                                <div class="col-6">
                                    <label>Tanggal </label>
                                    <input name="datepicker" type="text" class="form-control" placeholder="Tanggal"
                                        id="datepicker" readonly="readonly"
                                        style="cursor:pointer; background-color: #FFFFFF" value="">
                                    <input type="hidden" id="tanggal_akad" name="tanggal_akad" value="">
                                </div>
                                <div class="col-6">
                                    <label>Waktu / Jam</label>
                                    <input name="waktu_akad" type="text" class="form-control"
                                        placeholder="Contoh : 10.00 Pagi" value="">
                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Tempat / Lokasi</label>
                                    <input name="lokasi_akad" type="text" class="form-control"
                                        placeholder="Contoh : Kediaman Mempelai Wanita " value="">
                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Alamat</label>
                                    <textarea name="alamat_akad" type="text" class="form-control" placeholder="Contoh : JL. Ahmad Yani No.1"></textarea>
                                </div>
                            </div>

                            <a
                                style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;margin-top: 15px;display: flex;">Resepsi</a>

                            <div class="row align-items-center">
                                <div class="col-6">
                                    <label>Tanggal </label>
                                    <input name="datepicker2" type="text" class="form-control" placeholder="Tanggal"
                                        id="datepicker2" readonly="readonly"
                                        style="cursor:pointer; background-color: #FFFFFF" value="">
                                    <input type="hidden" id="tanggal_resepsi" name="tanggal_resepsi" value="">
                                </div>
                                <div class="col-6">
                                    <label>Waktu / Jam</label>
                                    <input name="waktu_resepsi" type="text" class="form-control"
                                        placeholder="Contoh : 10.00 Pagi"value="">
                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Tempat / Lokasi</label>
                                    <input name="lokasi_resepsi" type="text" class="form-control"
                                        placeholder="Contoh : Kediaman Mempelai Wanita" value="">
                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Alamat</label>
                                    <textarea name="alamat_resepsi" type="text" class="form-control" placeholder="Contoh : JL. Ahmad Yani No.1"></textarea>
                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Google Maps Link</label>
                                    <input name="maps_resepsi" type="text" class="form-control"
                                        placeholder="Contoh : Kediaman Mempelai Wanita" value="">
                                    <div class="mt-1">
                                        <!-- Button trigger modal -->
                                        <a href="#" class="" onclick="function (e) {e.preventDefault()}" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-circle-question"></i>
                                        Cara menambahkan Maps</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-start mt-4">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <input name="submit" type="submit"
                                                class="btn btn-primary btn-order btn-block"
                                                style="background-color: #005CAA;" value="Lanjut">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <div class="col" align="center">

                                <h1 class="font-weight-bold text-primary"> Tutorial! </h1>
                                <small>Cara menambahkan Google Maps</small>
                                <hr>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <p style="font-size: 15px; font-weight: 300;">
                                    1. Buka www.google.com/maps tentukan dan cari lokasi pernikahan
                                    kamu
                                </p>

                                <p style="font-size: 15px; font-weight: 300;">
                                    2. Jika sudah kira-kira tampilannya seperti gambar di bawah ini,
                                    kemudian tekan tombol <strong>Share</strong>
                                </p>
                                <img src="{{ asset('storage/tutorial/googlemaps/img/share.jpg') }}"
                                    style="position: relative; height: auto; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">

                                <p style="font-size: 15px; font-weight: 300;">
                                    3. Akan muncul tampilan seperti gambar di bawah ini, pilih
                                    <strong>Embed Maps</strong>
                                </p>
                                <img src="{{ asset('storage/tutorial/googlemaps/img/embed.jpg') }}"
                                    style="position: relative; height: auto; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">

                                <p style="font-size: 15px; font-weight: 300;">
                                    4. Lalu akan tampil seperti gambar di bawah ini dan klik
                                    <strong>Copy HTML</strong>
                                </p>
                                <img src="{{ asset('storage/tutorial/googlemaps/img/copy.jpg') }}"
                                    style="position: relative; height: auto; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">

                                <p style="font-size: 15px; font-weight: 300;">
                                    5. Terakhir tinggal kamu masukkan linknya ke dalam form yang
                                    sudah disediakan kemudian simpan
                                </p>
                                <img src="{{ asset('storage/tutorial/googlemaps/img/simpan.jpg') }}"
                                    style="position: relative; height: auto; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">

                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger form-control" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
