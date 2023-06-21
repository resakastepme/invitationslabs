@extends('admin.mainlayout')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Data Acara </h1>
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
                            <h6 class="font-weight-bold text-primary"> Data Akad Nikah </h6>
                        </div>
                        <div class="card-body">

                            <form>
                                <label for="">Tanggal</label>
                                <input type="date" class="form-control mb-3" id="date">

                                <label for="">Waktu/Jam</label>
                                <input type="time" class="form-control mb-3">

                                <label for="">Tempat/Lokasi</label>
                                <input type="text" class="form-control mb-3">

                                <label for="">Alamat</label>
                                <textarea class="form-control mb-3" name="" id="" rows="4"></textarea>

                                <button class="btn btn-primary">Simpan</button>

                            </form>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Data Akad Nikah </h6>
                        </div>
                        <div class="card-body">

                            <form>
                                <label for="">Tanggal</label>
                                <input type="date" class="form-control mb-3" id="date">

                                <label for="">Waktu/Jam</label>
                                <input type="time" class="form-control mb-3">

                                <label for="">Tempat/Lokasi</label>
                                <input type="text" class="form-control mb-3">

                                <label for="">Alamat</label>
                                <textarea class="form-control mb-3" name="" id="" rows="4"></textarea>

                                <button class="btn btn-primary">Simpan</button>

                            </form>

                        </div>
                    </div>



                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-6 connectedSortable">

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Data Maps </h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <label for="">Google Maps Link</label>
                                <textarea name="" class="form-control" rows="4" placeholder="Contoh: Kediaman mempelai wanita"></textarea>

                                <button class="btn btn-primary mt-3">Simpan</button>
                            </form>



                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
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
                                            <button type="button" class="btn btn-danger form-control"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary form-control" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fa-solid fa-circle-question"></i>
                                Cara menambahkan Maps
                            </button>
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
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
        // $(document).on('change', '#date', function() {
        //     var date = new Date($('#date').val());
        //     var day = date.getDate();
        //     var month = date.getMonth() + 1;
        //     var year = date.getFullYear();

        //     $('#date_input').val(day+'/'+month+'/'+year);
        //     console.log(day+'/'+month+'/'+year)

        // });
    </script>
@endsection
