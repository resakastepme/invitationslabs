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
                                <h1 style="color: #005CAA;margin-bottom:0px;">Informasi Mempelai!</h1>
                                <p tyle="font-size: 15px;font-weight:500; ">Hai kak! di isi dulu ya datanya </p>
                            </div>
                        </div>

                        <div class="progress" style="margin-top: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100">15%</div>
                        </div>

                        <a class="mt-2"
                            style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;display: flex;">Calon
                            Mempelai Pria</a>

                        <form action="{{ url('/new/order/3') }}" method="GET">
                            @csrf
                            <div class="row d-flex align-items-center">
                                <div class="col mt-2">
                                    <label>Foto </label>
                                    <div class="upload-area-bg" style="text-align: center;">

                                        <div class="col">
                                            <div class="row">
                                                <div
                                                    class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center">
                                                    <div class="upload-area" style="height: 100%;padding: 5px 5px;">
                                                        <img src="{{ asset('base/img/groom.png') }}" id="profile-pic-groom"
                                                            style='border-radius: 5px;height: 200px;width: 200px;'>
                                                    </div>

                                                </div>
                                                <div
                                                    class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center mt-3">
                                                    <div class="btn btn-dark">
                                                        <input type="file" class="file-upload" id="groom"
                                                            name="profile_picture" accept="image/*"> Upload Foto
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col">
                                    <label>Nama Lengkap</label>
                                    <input name="nama_lengkap_pria" type="text" class="form-control"
                                        placeholder="Contoh : Jack Dawson S.Kom" value="">
                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Nama Panggilan</label>
                                    <input name="nama_panggilan_pria" type="text" class="form-control"
                                        placeholder="Contoh : Jack" value="">
                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Nama Ayah</label>
                                    <input name="nama_ayah_pria" type="text" class="form-control" placeholder="Nama Ayah"
                                        value="">
                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Nama Ibu</label>
                                    <input name="nama_ibu_pria" type="text" class="form-control" placeholder="Nama Ibu"
                                        value="">
                                </div>
                            </div>
                            <hr>
                            <a
                                style="color: #2c3e50;margin-bottom:0px;font-size: 20px;font-weight: 600;margin-top: 15px;display: flex;">Calon
                                Mempelai Wanita</a>

                            <div class="row d-flex align-items-center">
                                <div class="col mt-2">
                                    <label>Foto </label>
                                    <div class="upload-area-bg" style="text-align: center;">
                                        <div class="col">
                                            <div class="row">
                                                <div
                                                    class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center">
                                                    <div class="upload-area" style="height: 100%;padding: 5px 5px;">
                                                        <img src="{{ asset('base/img/bride.png') }}" id="profile-pic-bride"
                                                            style='border-radius: 5px;height: 200px;width: 200px;'>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center mt-3">
                                                    <div class="btn btn-dark">
                                                        <input type="file" class="file-upload" id="bride"
                                                            name="profile_picture" accept="image/*"> Upload Foto
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col">
                                    <label>Nama Lengkap</label>
                                    <input name="nama_lengkap_wanita" type="text" class="form-control"
                                        placeholder="Contoh : Fatimah Az Zahra" value="">
                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Nama Panggilan</label>
                                    <input name="nama_panggilan_wanita" type="text" class="form-control"
                                        placeholder="Contoh : Fatimah" value="">
                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Nama Ayah</label>
                                    <input name="nama_ayah_wanita" type="text" class="form-control"
                                        placeholder="Nama Ayah" value="">

                                </div>
                            </div>

                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Nama Ibu</label>
                                    <input name="nama_ibu_wanita" type="text" class="form-control"
                                        placeholder="Nama Ibu" value="">

                                </div>
                            </div>

                            <hr>

                            <div class="row d-flex align-items-center">
                                <div class="col mt-2">
                                    <label>Foto Sampul</label>
                                    <div class="upload-area-bg" style="text-align: center;">

                                        <div class="col">
                                            <div class="row">
                                                <div
                                                    class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center">
                                                    <div class="upload-area" style="height: 100%;padding: 5px 5px;">
                                                        <img src="{{ asset('base/img/kita.png') }}"
                                                            id="profile-pic-sampul"
                                                            style='border-radius: 5px;height: 200px;width: 200px;'>
                                                    </div>

                                                </div>
                                                <div
                                                    class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center mt-3">
                                                    <div class="btn btn-dark">
                                                        <input type="file" class="file-upload" id="sampul"
                                                            name="profile_picture" accept="image/*"> Upload Foto
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <div class="modal fade" id="theModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3> CROP & UPLOAD </h3>
                </div>
                <div class="modal-body">

                    <div id="resizer"></div>
                    <div id="uploaded_image"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="closeModal btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="crop-image btn btn-primary">Crop & Upload</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var fotoSiapa = '';
        var uploadCrop = $('#resizer').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square'
            },
            boundary: {
                width: 300,
                height: 300
            },
            showZoomer: false,
            enableResize: true,
            enableOrientation: true,
            mouseWheelZoom: 'ctrl'
        });


        $('.file-upload').on('change', function() {
            fotoSiapa = $(this).attr('id');
            var reader = new FileReader();
            reader.onload = function(e) {
                uploadCrop.croppie('bind', {
                    url: e.target.result,
                    points: [77, 469, 280, 739]
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#theModal').modal('show');
        });


        $('.crop-image').on('click', function(ev) {
            uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(resp) {
                $.ajax({
                    url: "{{ url('/google-proses') }}",
                    type: "POST",
                    data: {
                        "image": resp,
                        "dummy": "{{ Session('dummy') }}",
                        "fotoSiapa": fotoSiapa,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(data) {

                        if(fotoSiapa == 'groom'){
                            $("#profile-pic-groom").attr('src', resp);
                        }else if(fotoSiapa == 'bride'){
                            $("#profile-pic-bride").attr('src', resp);
                        }else{
                            $("#profile-pic-sampul").attr('src', resp);
                        }

                        $('.closeModal').click();
                    },
                    error: function() {
                        console.log('failed = ' + resp);

                        if(fotoSiapa == 'groom'){
                            $("#profile-pic-groom").attr('src', resp);
                        }else if(fotoSiapa == 'bride'){
                            $("#profile-pic-bride").attr('src', resp);
                        }else{
                            $("#profile-pic-sampul").attr('src', resp);
                        }

                        $('.closeModal').click();
                    }
                });
            });
        });
    </script>
@endsection
