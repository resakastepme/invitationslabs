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
                                <h1 style="color: #005CAA;margin-bottom:0px;">Galleri!</h1>
                                <p tyle="font-size: 15px;font-weight:500; ">Hai kak! di isi dulu ya datanya </p>
                            </div>
                        </div>

                        <div class="progress" style="margin-top: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>

                        <div id="konten-gallery">

                            <!-- <form action="" method="post" enctype="multipart/form-data"> -->
                            <div class="row align-items-center mt-4">
                                <label>Upload Foto Galleri : </label>
                                <div class="upload-area-bg">

                                    <div class="upload-area do-add-btn">
                                        <div class="upload-area-inner">
                                            <div class="upload-area-icon-main">
                                                <i class="lni-cloud-download"></i>
                                            </div>
                                            <h3 class="upload-area-caption">
                                                <span>Drag and drop files here</span>
                                            </h3>
                                            <p>or</p>
                                            <button class="upload-area-button btn " style="z-index:9999;">
                                                <span>Browse files</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- </form> -->
                            <div style="text-align: center;">
                                <img id="loading" src="{{ asset('base/img/loading.svg') }}"
                                    style="height: 30px;width: 30px; display: none;" />
                            </div>
                            <div id="previewss">
                                <?php
                    $generate = sha1('gwdangw');
                    for($a=1;$a<=10;$a++){
                      $pathName = 'test/'.$generate.'/album'.$a.'.png';
                      if(!file_exists($pathName))continue;
                  ?>

                                <div class="preview-uploads" id="preview<?= $a ?>">
                                    <div class="preview-uploads-img">
                                        <span class="preview">
                                            <img id="img<?= $a ?>"
                                                src="{{ asset('test/' . $generate . '/album' . $a . '.png') }}"
                                                style="height: 100%;object-position: center;object-fit: cover;width: 100%;" />
                                        </span>
                                    </div>
                                    <div class="preview-uploads-name">
                                        <b>
                                            <p class="name" style="line-height: revert;font-size: 12px;">album<?= $a ?>
                                            </p>
                                        </b>
                                        <strong class="error text-danger" style="line-height: revert;font-size: 12px;"
                                            data-dz-errormessage></strong>
                                        <p class="size" style="line-height: revert;font-size: 12px;">-</p>
                                    </div>
                                    <div class="preview-uploads-delete">
                                        <button id="<?= $a ?>" data-dz-remove class="btn btn-danger delete btnhehe">
                                            Hapus
                                        </button>
                                    </div>
                                </div>

                                <?php
                    }
                  ?>
                            </div>
                        </div>

                        <form method="post" action="{{ url('/new/order/finish') }}">
                            @csrf
                            <div class="form-check mt-4">
                                <label class="form-check-label ">
                                    <input type="checkbox" class="form-check-input" id="skipGallery" name="skipGallery">
                                    <a style="margin-top: 105px;color: #2c3e50;position: relative;top: 3px;left: 6px;">
                                        Jangan Aktifkan Fitur Ini</a>
                                </label>
                            </div>

                            <div class="row justify-content-start mt-3">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <input type="submit" name="submit" class="btn btn-primary btn-order btn-block"
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
        // sleep time expects milliseconds
        function sleep(time) {
            return new Promise((resolve) => setTimeout(resolve, time));
        }

        $("#skipGallery").on('change', function() {
            if ($(this).prop('checked')) {
                $("#konten-gallery").hide();
                $(".form-control").prop('required', false);
            } else {
                $("#konten-gallery").show();
                $("..form-control").prop('required', true);
            }
        });

        $(function() {
            var myDropzone = new Dropzone(document.body, {
                url: "{{ url('/new/order/fileUpload') }}",
                type: 'POST',
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf_token"]').getAttribute(
                        'content')
                },
                paramName: "file",
                acceptedFiles: 'image/*',
                autoQueue: true,
                maxFilesize: 2, //ukuran maksimal foto
                clickable: ".do-add-btn"
            });

            myDropzone.on("success", function(file, response) {
                if (response == "") {
                    $('.dz-preview').remove();
                    alert('Batas Upload 10 Foto!');

                } else {
                    // var aql = JSON.parse(response);
                    // var url_asset = "test/"+aql.dummy+"/album"+ aql.no +".png";
                    // var asset = "{{ asset('+url_asset+') }}";
                    // $('.dz-preview').remove();
                    // $("#previewss").prepend("<div id=\"preview" + aql.no +
                    //     "\" class=\"file-row preview-uploads\"><div class=\"preview-uploads-img\"><span class=\"preview\"><img id=\"img3\" src=\""+asset+"\"  style=\"height: 100%;object-position: center;object-fit: cover;width: 100%;\" /></span></div><div class=\"preview-uploads-name\"><p class=\"name\" style=\"line-height: revert;font-size: 12px;\" data-dz-name>album" +
                    //     aql.no +
                    //     "</p><strong class=\"error text-danger\" style=\"line-height: revert;font-size: 12px;\"  ></strong><p class=\"size\" style=\"line-height: revert;font-size: 12px;\" >-</p></div><div  class=\"preview-uploads-delete\"><button id=\"" +
                    //     aql.no + "\" class=\"btn btn-danger delete btnhehe\">Hapus</button></div></div>"
                    //     );

                    // Usage!
                    sleep(2000).then(() => {
                        // Do something after the sleep!
                        location.reload()
                    });

                }
                $('#loading').hide();
            });

            myDropzone.on("sending", function(file, xhr, formData) {
                $('.dz-preview').remove();
                formData.append("data", "<?php echo sha1('gwdangw'); ?>");
                $('#loading').show();
            });


            myDropzone.on("error", function(file, response) {
                $('.dz-preview').remove();
                alert('Maximal File = 2MB!');
                $('#loading').hide();
            });

            $(document).on('click', '.btnhehe', function() {

                var button_id = $(this).attr("id");
                var dummy = "<?php echo sha1('gwdangw'); ?>";
                $.ajax({
                    type: 'POST',
                    url: "{{ url('/new/order/del') }}",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf_token"]')
                            .getAttribute(
                                'content')
                    },
                    data: {
                        id: button_id,
                        dummy: dummy
                    },
                    success: function(data) {
                        console.log('success: ' + data);
                        $('#preview' + button_id).remove();
                    }
                });



            });
        });
    </script>
@endsection
