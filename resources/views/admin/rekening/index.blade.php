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
                <section class="col-lg-12 connectedSortable">

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Data Rekening </h6>
                        </div>
                        <div class="card-body">

                            <form method="post">
                                <div id="konten-cerita">

                                    <?php
                                        // $jml_cerita = count($cerita);
                                        $jml_cerita = 2;
                                        for($i=0;$i < $jml_cerita;$i++){
                                    ?>

                                    <div id="cerita<?php echo $i + 1; ?>">
                                        <div class="row align-items-center mt-3">
                                            <div class="col-auto">
                                                <a
                                                    style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;display: flex;">#<?php echo $i + 1; ?></a>
                                            </div>
                                            <div class="col">
                                                <a id="<?php echo $i + 1; ?>" class="btn btn-sm btn_remove"
                                                    style="background-color: #dc3545;padding: 5px;font-size: 12px;border-radius: 5px;color:#fff">Hapus</a>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col">
                                                <label>Nama Bank/eMoney</label>
                                                <input name="tanggal_cerita[]" type="text" class="form-control"
                                                    placeholder="Contoh : BANK NEGARA INDONESIA"
                                                    value="" required>
                                            </div>
                                        </div>

                                        <div class="row align-items-center mt-3">
                                            <div class="col">
                                                <label>No Rekening</label>
                                                <input name="judul_cerita[]" type="text" class="form-control"
                                                    placeholder="Contoh : 123456" value=""
                                                    required>
                                            </div>
                                        </div>

                                        <div class="row align-items-center mt-3">
                                            <div class="col">
                                                <label>Nama Pemilik</label>
                                                <input type="text" class="form-control" placeholder="Contoh: Admin">
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?>

                                </div>

                                <div class="row mt-2">
                                    <div class="col text-center">
                                        <a id="addCerita" class="btn btn-primary btn-order btn-order-secondary btn-block"
                                            style="color:#fff">Tambah Cerita</a>
                                    </div>
                                </div>

                                <div class="col mt-3">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-0 connectedSortable">



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
        var i = 0;

        $(document).on('click', '.btn_remove', function() {

            var button_id = $(this).attr("id");
            $('#cerita' + button_id + '').remove();
            i--;

            if (i == 0) {
                $("..form-control").prop('required', true);
            }

        });

        $('#addCerita').click(function() {

            i++;

            $('#konten-cerita').append('<div id="cerita' + i +
                '"><div class="row align-items-center mt-3"><div class="col-auto"><a style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;display: flex;">#' +
                i + '</a></div><div class="col"><a id="' + i +
                '" class="btn btn-sm btn_remove" style="background-color: #dc3545;padding: 5px;font-size: 12px;border-radius: 5px;">Hapus</a></div></div><div class="row align-items-center"><div class="col"><label>Nama Bank/eMoney</label><input name="tanggal_cerita[]" type="text" class="form-control" placeholder="Contoh : BANK NEGARA INDONESIA " required></div></div><div class="row align-items-center mt-3"><div class="col"><label>No Rekening</label><input name="judul_cerita[]" type="text" class="form-control" placeholder="Contoh : 123456" required></div></div><div class="row align-items-center mt-3"><div class="col"><label>Nama Pemilik</label> <input type="text" class="form-control" placeholder="Contoh: Admin"></div></div></div>'
                );
            $(".form-control").prop('required', false);
        });
    </script>
@endsection
