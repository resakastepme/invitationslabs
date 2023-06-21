@extends('admin.mainlayout')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengaturan Undangan</h1>
                </div><!-- /.col -->
                {{-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col --> --}}
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-6 connectedSortable">

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Pengaturan Undangan </h6>
                        </div>
                        <div class="card-body">

                            <label for=""> Nama Domain/URL Undangan </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">undangan.digitalgathering.com/</span>
                                    <input type="text" class="form-control" placeholder="akudandia"
                                        onkeyup="nospaces(this)">
                                </div>
                            </div>
                            <button class="btn btn-primary"> Simpan </button>

                            <hr>

                            <label for=""> Token Whatsapp Gateway </label>
                            <input type="text" class="form-control" placeholder="Token Whatsapp Gateway">
                            <small>
                                *Kosongkan jika tidak memiliki Token Whatsapp Gateway atau daftar
                                <a href="https://nusagateway.com/" target="blank"> Klik Disini </a>
                            </small>
                            <br>
                            <button class="btn btn-primary mt-3"> Simpan </button>

                            <div class="card mt-3">
                                <div class="card-body">
                                    <label for=""> Panduan Nusagateway </label>
                                    <ul>
                                        <li>
                                            Daftar akun <a href="https://nusagateway.com/" target="blank"> nusagateway.com
                                            </a>
                                        </li>
                                        <li>Buka akun, klik menu device</li>
                                        <li>Kemudian tambah device</li>
                                        <ul>
                                            <li>Pilih paket sesuai kebutuhan</li>
                                            <li>Nomor sender masukkan no wa anda, diawali dengan 62. Contoh: 62817493843
                                            </li>
                                            <li>URL webhook masukkan URL undangan Anda</li>
                                            <li>Versi beta / multi device pilih Yes</li>
                                            <li>Set sender notif / auto replay pilih Yes</li>
                                            <li>Lalu klik tambah device</li>
                                        </ul>
                                        <li>Dibagian daftar device, klik icon scan QR</li>
                                        <li>Scan QR code di Whatsapp anda hingga status CONNECTED</li>
                                        <li>Selesai. Undangan otomatis terkirim sesuai waktu pada Data Buku Tamu</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <span><b>Penting:</b> Agar undangan terkirim otomatis ke semua data tamu, device yang ditambah
                                pada akun nusagateway tidak boleh dihapus, dan statusnya harus CONNECTED.</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Salam Pembuka </h6>
                        </div>
                        <div class="card-body">

                            <label>Salam Pembuka Undangan</label>

                            <textarea type="text" rows="4" class="form-control mb-3" placeholder="Salam Pembuka Undangan"
                                style="max-height: 500px">Test</textarea>

                            <label>Salam Pembuka Whatsapp (Atas)</label>
                            <textarea type="text" rows="4" class="form-control mb-3" placeholder="Salam Pembuka Undangan"
                                style="max-height: 500px">Test</textarea>

                            <label>Salam Pembuka Undangan</label>
                            <textarea type="text" rows="4" class="form-control mb-4" placeholder="Salam Pembuka Undangan"
                                style="max-height: 500px">Test</textarea>

                            <button class="btn btn-primary"> Simpan </button>

                        </div>
                    </div>

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-6 connectedSortable">

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Musik </h6>
                        </div>
                        <div class="card-body">
                            <label for="">Musik Latar (max 2MB)</label>
                            <form enctype="multipart/form-data">
                                <input type="file" accept=".mp3"><br>
                                <button class="btn btn-primary mt-3"> Simpan </button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Fitur Undangan </h6>
                        </div>
                        <div class="card-body">

                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="setSampul" disabled checked>
                                <label for="setSampul" class="custom-control-label">Halaman Sampul</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="setMempelai" disabled checked>
                                <label for="setMempelai" class="custom-control-label">Halaman Mempelai</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="setAcara" disabled checked>
                                <label for="setAcara" class="custom-control-label">Halaman Acara</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="setUcapan">
                                <label for="setUcapan" class="custom-control-label">Halaman Ucapan</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="setGallery">
                                <label for="setGallery" class="custom-control-label">Halaman Gallery/Album</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="setCerita">
                                <label for="setCerita" class="custom-control-label">Halaman Cerita</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="setLokasi">
                                <label for="setLokasi" class="custom-control-label">Halaman Lokasi</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="setQrcode">
                                <label for="setQrcode" class="custom-control-label">Halaman QR Code</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="setKirimhadiah">
                                <label for="setKirimhadiah" class="custom-control-label">Halaman Kirim Hadiah</label>
                            </div>

                            <button class="btn btn-primary mt-3"> Simpan </button>

                        </div>
                    </div>

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
@endsection
