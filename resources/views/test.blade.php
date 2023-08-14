<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('base/css/line-icons.css') }}">
<link type="text/css" href="{{ asset('base/css/froala_blocks.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('base/css/pikaday.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('base/css/croppie.min.css') }}" type="text/css" /> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css"
    integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- drozone --}}
<link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}" type="text/css" />
{{-- CROPPER --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/> --}}

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg p-5" align="center">

                <h1> TESTING </h1>
                <div class="card">
                    <div class="card-body">
                        <input class="form-control" type="file" name="upload_image" id="upload_image">
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-center align-item-center" align="center">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/002/534/006/small/social-media-chatting-online-blank-profile-picture-head-and-body-icon-people-standing-icon-grey-background-free-vector.jpg"
                alt="" id="profile-pic" style="min-height: 200px; height: 200px; width: 250px;">
            <br>
            <button type="button" id="openModal" class="btn btn-primary mt-5"> Open Modal </button>
        </div>
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

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background: gray; color:#f1f7fa; font-weight:bold;">
                        Laravel 10 Image Crop And Upload Example - Laravelia
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cropper') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-3">
                                <input type="file" name="image" class="image">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Laravel 10 Image Croper Upload Example - Laravelia </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background: gray; color:#f1f7fa; font-weight:bold;">
                        Laravel 10 Image Crop And Upload Example - Laravelia
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cropper') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-3">
                                <input type="file" name="image" class="image">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Laravel 10 Image Croper Upload Example - Laravelia </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div> --}}


</body>
<script src="{{ asset('base/js/jquery-min.js') }}"></script>
<script src="{{ asset('base/js/popper.min.js') }}"></script>
{{-- <script src="{{ asset('base/js/jquery.nav.js') }}"></script>
<script src="{{ asset('base/js/jquery.easing.min.js') }}"></script> --}}
<script src="{{ asset('base/js/main.js') }}"></script>
<script src="{{ asset('base/js/moment-with-locales.js') }}"></script>
<script src="{{ asset('base/js/pikaday.js') }}"></script>
{{-- bootstrap --}}
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
{{-- dropzone --}}
<script src="{{ asset('plugins/dropzone/min/dropzone.min.js') }}"></script>
{{-- croppie --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"
    integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Own Fontawesome -->
<script src="{{ asset('plugins/fontawesome-free/d639410787.js') }}" crossorigin="anonymous"></script>
{{-- CROPPER.JS --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script> --}}

<script type="text/javascript">
    $('#upload_image').on('change', function() {

        $('#theModal').modal('show');

    });

    // $(document).ready(function() {

    //     var myModal = document.getElementById('theModal')
    //     var myInput = document.getElementById('myInput')

    //     myModal.addEventListener('shown.bs.modal', function() {
    //         myInput.focus()
    //     })

    //     $image_crop = $('#image_demo').croppie({
    //         enableExif: true,
    //         viewport: {
    //             width: 200,
    //             height: 200,
    //             type: 'square'
    //         },
    //         boundary: {
    //             width: 250,
    //             height: 250
    //         }
    //     });

    //     $(document).on('change', '#upload_image', function() {
    //         var reader = new FileReader();
    //         reader.onload = function(event) {
    //             $image_crop.croppie('bind', {
    //                 url: event.target.result
    //             })
    //         }
    //         reader.readAsDataURL(this.files[0]);

    //         $('#theModal').modal('toggle');
    //     });

    //     $('.crop-image').click(function(event) {

    //         $image_crop.croppie('result', {
    //             type: 'canvas',
    //             size: 'viewport'
    //         }).then(function(response) {
    //             $.ajax({
    //                 url: "{{ url('/google-proses') }}",
    //                 type: 'POST',
    //                 data: {
    //                     "image": response,
    //                     _token: '{{ csrf_token() }}'
    //                 },
    //                 success: function(data) {
    //                     $('.uploaded_image').html(data);
    //                 }
    //             });
    //         });

    //     });

    // });

    // ____________________________________________________________

    // var $modal = $('#modal');
    // var image = document.getElementById('image');
    // var cropper;

    // $("body").on("change", ".image", function(e) {
    //     var files = e.target.files;
    //     var done = function(url) {
    //         image.src = url;
    //         $modal.modal('show');
    //     };
    //     var reader;
    //     var file;
    //     var url;
    //     if (files && files.length > 0) {
    //         file = files[0];
    //         if (URL) {
    //             done(URL.createObjectURL(file));
    //         } else if (FileReader) {
    //             reader = new FileReader();
    //             reader.onload = function(e) {
    //                 done(reader.result);
    //             };
    //             reader.readAsDataURL(file);
    //         }
    //     }
    // });
    // $modal.on('shown.bs.modal', function() {
    //     cropper = new Cropper(image, {
    //         aspectRatio: 1,
    //         viewMode: 2,
    //         preview: '.preview'
    //     });
    // }).on('hidden.bs.modal', function() {
    //     cropper.destroy();
    //     cropper = null;
    // });
    // $("#crop").click(function() {
    //     canvas = cropper.getCroppedCanvas({
    //         width: 200,
    //         height: 200,
    //     });
    //     canvas.toBlob(function(blob) {
    //         url = URL.createObjectURL(blob);
    //         var reader = new FileReader();
    //         reader.readAsDataURL(blob);
    //         reader.onloadend = function() {
    //             var base64data = reader.result;
    //             $.ajax({
    //                 type: "POST",
    //                 dataType: "json",
    //                 url: "{{ route('cropper') }}",
    //                 data: {
    //                     _token: '{{ csrf_token() }}',
    //                     'image': base64data
    //                 },
    //                 success: function(data) {
    //                     $modal.modal('hide');
    //                     alert("Image successfully uploaded");
    //                 }
    //             });
    //         }
    //     });
    // _________________________________________________________

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    const uploadCrop = $('#resizer').croppie({
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


    $('#upload_image').on('change', function() {
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
                url: "{{url('/google-proses')}}",
                type: "POST",
                data: {
                    "image": resp,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(data) {
                    html = '<img src="' + resp + '" />';
                    $("#profile-pic").attr('src', resp);
                    $('#theModel').modal('toggle');
                },
                error: function() {
                    console.log('failed = ' + resp);
                    $("#profile-pic").attr('src', resp);
                    $('.closeModal').click();
                }
            });
        });
    });
</script>

</html>
