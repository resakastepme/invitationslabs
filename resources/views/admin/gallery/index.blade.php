@extends('admin.mainlayout')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Data Gallery </h1>
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
                            <h6 class="font-weight-bold text-primary"> Data Gallery </h6>
                        </div>
                        <div class="card-body">

                            <button class="btn btn-primary mb-3"> Tambah Foto </button>

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
                            <h6 class="font-weight-bold text-primary"> Data Video </h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <label for="">Youtube Link</label>
                                <textarea name="" class="form-control" rows="4" placeholder="Contoh: https://youtu.be/yzTuBuRdAyA"></textarea>

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
                                                        <small>Cara menambahkan Video ke undangan</small>
                                                        <hr>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-left">
                                                        <p style="font-size: 15px; font-weight: 300;">
                                                            1. Pastikan video kamu sudah di upload di Youtube.com
                                                        </p>

                                                        <p style="font-size: 15px; font-weight: 300;">
                                                            2. Pastikan video kamu sudah di upload di Youtube.com
                                                        </p>
                                                        <img src="{{ asset('storage/tutorial/videoyoutube/img/bagikan.jpg') }}"
                                                            style="position: relative; height: auto; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">

                                                        <p style="font-size: 15px; font-weight: 300;">
                                                            3. Akan muncul tampilan seperti gambar di bawah ini, copy link nya dengan menekan tombol salin
                                                        </p>
                                                        <img src="{{ asset('storage/tutorial/videoyoutube/img/salin.jpg') }}"
                                                            style="position: relative; height: auto; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">

                                                        <p style="font-size: 15px; font-weight: 300;">
                                                            4. Ingat!! pastikan link youtube nya formatnya sama seperti digambar <strong>https://youtu.be/</strong>
                                                        </p>
                                                        <p style="font-size: 15px; font-weight: 300;">
                                                            5.  Terakhir tinggal kamu masukkan linknya ke dalam form yang sudah disediakan kemudian simpan
                                                        </p>
                                                        <img src="{{ asset('storage/tutorial/videoyoutube/img/simpan.jpg') }}"
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
                                Cara menambahkan Video
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
        Dropzone.options.dropzone = {
            maxFilesize: 3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            paramName: 'images',
            params: {
                _token: document.querySelector('meta[name="csrf-token"]').content
            }
        };
    </script>
@endsection
