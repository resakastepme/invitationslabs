@extends('admin.mainlayout')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Setting Buku Tamu </h1>
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
                <section class="col-lg-8 connectedSortable">

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Slider Buku Tamu </h6>
                        </div>
                        <div class="card-body">

                            <button class="btn btn-primary mb-3"> Tambah Slider </button>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('dist/img/photo3.jpg') }}" alt="" style="position: relative; height: 100%; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-danger form-control">
                                                Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('dist/img/photo3.jpg') }}" alt="" style="position: relative; height: 100%; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-danger form-control">
                                                Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('dist/img/photo3.jpg') }}" alt="" style="position: relative; height: 100%; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-danger form-control">
                                                Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('dist/img/photo3.jpg') }}" alt="" style="position: relative; height: 100%; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-danger form-control">
                                                Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-4 connectedSortable">

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Background Buku Tamu </h6>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                    <section id="blankPria" style="display: show;">
                                    <img class="form-control" id="blahPria"
                                        src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"
                                        alt=""
                                        style="position: relative; height: 100%; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">
                                    </section>
                                    <section id="showPria" style="display: none;">
                                        <div id="show-crop-image" style="background:#e2e2e2;width:400px;padding:60px 60px;height:400px;"></div>
                                    </section>
                                </div>

                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                <div class="mt-3" id="gantiFotoPriaBtn" style="display: show;">
                                    <button class="btn btn-primary"> Ganti Foto? </button>
                                </div>
                                <div class="mt-3" id="upPriaBtn" style="display: none;">
                                    <form enctype="multipart/form-data">
                                        <input type="file" class="form-control" onchange="readURLPria(this);"
                                            accept="image/*">
                                        {{-- <input type="file" class="form-control" id="images_pria"
                                            accept="image/*"> --}}
                                        <button class="btn btn-primary mt-3"> Simpan </button>
                                    </form>
                                </div>
                            </div>
                            </div>

                        </div>

                        <div class="card-footer">

                            <div class="card">
                                <div class="card-body">
                                    <small>
                                        Buku tamu online ini digunakan sebagai pengganti buku tamu fisik di lokasi pesta / event pernikahan Anda.
                                    </small3>
                                </div>
                            </div>

                                    <b>
                                        Cara Penggunaan:
                                    </b>

                                    <ul>
                                        <li>Siapkan komputer yang terkoneksi internet di lokasi pesta</li>
                                        <li>Buka halaman tamu di <a href="https://tamu.sidoinikah.xyz/rege" target="_blank"><b>BUKU TAMU SAYA</b></a> di komputer tersebut</li>
                                        <li>Tamu membuka undangan dan input QR Code undangan mereka dengan Scan di halaman BUKU TAMU.</li>
                                        <li>Secara otomatis data tamu (nama dan alamat) akan terisi jika tamu tersebut terdaftar di <a href="https://sidoinikah.xyz/user/tamu" target="_blank"><b>DAFTAR TAMU</b></a></li>
                                        <li>Setelah buku tamu diisi, daftar tamu yang hadir dapat dilihat pada halaman <a href="https://sidoinikah.xyz/user/data_hadir" target="_blank"><b>DATA KEHADIRAN</b></a></li>
                                        </ul>

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

@section('script')
    <script type="text/javascript">
         // PRIA
         $(document).on('click', '#gantiFotoPriaBtn', function() {
            $(this).hide();
            $('#upPriaBtn').show();
        });

        function readURLPria(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blahPria')
                        .attr('src', e.target.result)
                        .attr('style',
                            'position: relative; height: 100%; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;'
                        );
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
