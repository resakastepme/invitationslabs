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
                            <h6 class="font-weight-bold text-primary"> Data Mempelai Pria </h6>
                        </div>
                        <div class="card-body">

                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <img class="form-control" id="blahPria"
                                                src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"
                                                alt=""
                                                style="position: relative; height: 100%; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <div class="mt-3" id="gantiFotoPriaBtn" style="display: show;">
                                                <button class="btn btn-primary"> Ganti Foto? </button>
                                            </div>
                                            <div class="mt-3" id="upPriaBtn" style="display: none;">
                                                <form enctype="multipart/form-data">
                                                    <input type="file" class="form-control" onchange="readURLPria(this);"
                                                        accept="image/*">
                                                    <button class="btn btn-primary mt-3"> Simpan </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <form enctype="multipart/form-data">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control mb-2" placeholder="Contoh: Jack Daniel S.Kom">

                                <label for="">Nama Panggilan</label>
                                <input type="text" class="form-control mb-2" placeholder="Contoh: Jack">

                                <label for="">Nama Ayah</label>
                                <input type="text" class="form-control mb-2" placeholder="Nama Ayah">

                                <label for="">Nama Ibu</label>
                                <input type="text" class="form-control mb-3" placeholder="Nama Ibu">

                                <button class="btn btn-primary"> Simpan </button>

                            </form>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Data Mempelai Wanita </h6>
                        </div>
                        <div class="card-body">

                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <img class="form-control" id="blahWanita"
                                                src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"
                                                alt=""
                                                style="position: relative; height: 100%; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <div class="mt-3" id="gantiFotoWanitaBtn" style="display: show;">
                                                <button class="btn btn-primary"> Ganti Foto? </button>
                                            </div>
                                            <div class="mt-3" id="upWanitaBtn" style="display: none;">
                                                <form enctype="multipart/form-data">
                                                    <input type="file" class="form-control"
                                                        onchange="readURLWanita(this);" accept="image/*">
                                                    <button class="btn btn-primary mt-3"> Simpan </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <form enctype="multipart/form-data">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control mb-2" placeholder="Contoh: Karen Michelle S.Kom">

                                <label for="">Nama Panggilan</label>
                                <input type="text" class="form-control mb-2" placeholder="Contoh: Karen">

                                <label for="">Nama Ayah</label>
                                <input type="text" class="form-control mb-2" placeholder="Nama Ayah">

                                <label for="">Nama Ibu</label>
                                <input type="text" class="form-control mb-3" placeholder="Nama Ibu">

                                <button class="btn btn-primary"> Simpan </button>

                            </form>

                        </div>
                    </div>

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-6 connectedSortable">

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Data Foto Sampul </h6>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                    <img class="form-control" id="blahSampul"
                                        src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"
                                        alt=""
                                        style="position: relative; height: 100%; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;">
                                </div>
                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                    <div class="mt-3" id="gantiFotoSampulBtn" style="display: show;">
                                        <button class="btn btn-primary"> Ganti Foto? </button>
                                    </div>
                                    <div class="mt-3" id="upSampulBtn" style="display: none;">
                                        <form enctype="multipart/form-data">
                                            <input type="file" class="form-control" onchange="readURLSampul(this);"
                                                accept="image/*">
                                            <button class="btn btn-primary mt-3"> Simpan </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
    // WANITA
        $(document).on('click', '#gantiFotoWanitaBtn', function() {
            $(this).hide();
            $('#upWanitaBtn').show();
        });

        function readURLWanita(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blahWanita')
                        .attr('src', e.target.result)
                        .attr('style',
                            'position: relative; height: 100%; min-height: 200px; width: 100%; background-position: center center; background-repeat: no-repeat; background-size: cover; padding: 5px 5px;'
                        );
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    // SAMPUL
        $(document).on('click', '#gantiFotoSampulBtn', function() {
            $(this).hide();
            $('#upSampulBtn').show();
        });

        function readURLSampul(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blahSampul')
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
