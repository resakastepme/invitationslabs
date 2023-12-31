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
                                <h1 style="color: #005CAA;margin-bottom:0px;">Cerita!</h1>
                                <p tyle="font-size: 15px;font-weight:500; ">Hai kak! di isi dulu ya datanya </p>
                            </div>
                        </div>

                        <div class="progress" style="margin-top: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>

                        <form method="GET" action="{{ url('/new/order/5') }}">
                            @csrf
                            <div id="konten-cerita">
                                <div id="cerita1">
                                    <a
                                        style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;margin-top: 15px;display: flex;">#1</a>

                                    <div class="row align-items-center">
                                        <div class="col">
                                            <label>Tanggal</label>
                                            <input name="tanggal_cerita[]" name="tanggal_cerita[]" type="text"
                                                class="form-control" placeholder="Contoh : 14 Januari 2020 " value="">
                                        </div>
                                    </div>

                                    <div class="row align-items-center mt-3">
                                        <div class="col">
                                            <label>Judul</label>
                                            <input name="judul_cerita[]" type="text" class="form-control"
                                                placeholder="Contoh : Pertama Bertemu" value="">
                                        </div>
                                    </div>

                                    <div class="row align-items-center mt-3">
                                        <div class="col">
                                            <label>Isi Cerita</label>
                                            <textarea name="isi_cerita[]" type="text" class="form-control" placeholder="Maximal 500 Karakter" maxlength="500"
                                                rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div id="cerita2">
                                    <div class="row align-items-center mt-3">
                                        <div class="col-auto">
                                            <a
                                                style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;display: flex;">#2</a>
                                        </div>
                                        <div class="col">
                                            <a id="2" class="btn btn-sm btn_remove"
                                                style="background-color: #dc3545;padding: 5px;font-size: 12px;border-radius: 5px;">Hapus</a>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col">
                                            <label>Tanggal</label>
                                            <input name="tanggal_cerita[]" type="text" class="form-control"
                                                placeholder="Contoh : 20 Februari 2020 " value="">
                                        </div>
                                    </div>

                                    <div class="row align-items-center mt-3">
                                        <div class="col">
                                            <label>Judul</label>
                                            <input name="judul_cerita[]" type="text" class="form-control"
                                                placeholder="Contoh : Ta'aruf" value="">
                                        </div>
                                    </div>

                                    <div class="row align-items-center mt-3">
                                        <div class="col">
                                            <label>Isi Cerita</label>
                                            <textarea name="isi_cerita[]" type="text" class="form-control" placeholder="Maximal 500 Karakter" maxlength="500"
                                                rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                @for ($i = 2; $i < 2; $i++)

                                    <div id="cerita<?php echo $i + 1; ?>">
                                        <div class="row align-items-center mt-3">
                                            <div class="col-auto">
                                                <a
                                                    style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;display: flex;">#<?php echo $i + 1; ?></a>
                                            </div>
                                            <div class="col">
                                                <a id="<?php echo $i + 1; ?>" class="btn btn-sm btn_remove"
                                                    style="background-color: #dc3545;padding: 5px;font-size: 12px;border-radius: 5px;">Hapus</a>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col">
                                                <label>Tanggal</label>
                                                <input name="tanggal_cerita[]" type="text" class="form-control"
                                                    placeholder="Contoh : 20 Februari 2020" value="" required>
                                            </div>
                                        </div>

                                        <div class="row align-items-center mt-3">
                                            <div class="col">
                                                <label>Judul</label>
                                                <input name="judul_cerita[]" type="text" class="form-control"
                                                    placeholder="Contoh : Ta'aruf" value="" required>
                                            </div>
                                        </div>

                                        <div class="row align-items-center mt-3">
                                            <div class="col">
                                                <label>Isi Cerita</label>
                                                <textarea name="isi_cerita[]" type="text" class="form-control" placeholder="Maximal 500 Karakter"
                                                    maxlength="500" rows="4" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endfor

                            </div>

                            <div class="row mt-2">
                                <div class="col text-center">
                                    <a id="addCerita"
                                        class="btn btn-primary btn-order btn-order-secondary btn-block">Tambah Cerita</a>
                                </div>
                            </div>

                            <div class="form-check mt-4">
                                <label class="form-check-label ">
                                    <input type="checkbox" class="form-check-input" id="skipCerita" name="skipCerita">
                                    <a style="margin-top: 105px;color: #2c3e50;position: relative;top: 3px;left: 6px;">
                                        Jangan Aktifkan Fitur Ini</a>
                                </label>
                            </div>

                            <div class="row justify-content-start mt-3">
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
@endsection
@section('script')
    <script type="text/javascript">
        $("#skipCerita").on('change', function() {
            if ($(this).prop('checked')) {
                $("#konten-cerita").hide();
                $("#addCerita").hide();
                $(".form-control").prop('required', false);
            } else {
                $("#konten-cerita").show();
                $("#addCerita").show();
                $("..form-control").prop('required', true);
            }
        });

        var i = 2;

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
                '" class="btn btn-sm btn_remove" style="background-color: #dc3545;padding: 5px;font-size: 12px;border-radius: 5px;">Hapus</a></div></div><div class="row align-items-center"><div class="col"><label>Tanggal</label><input name="tanggal_cerita[]" type="text" class="form-control" placeholder="Contoh : 14 Januari 2020 " required></div></div><div class="row align-items-center mt-3"><div class="col"><label>Judul</label><input name="judul_cerita[]" type="text" class="form-control" placeholder="Contoh : Pertama Bertemu" required></div></div><div class="row align-items-center mt-3"><div class="col"><label>Isi Cerita</label><textarea name="isi_cerita[]" type="text" class="form-control" placeholder="Maximal 500 Karakter" maxlength="500" rows="4" required></textarea></div></div></div>'
            );
            $(".form-control").prop('required', false);
        });
    </script>
@endsection
