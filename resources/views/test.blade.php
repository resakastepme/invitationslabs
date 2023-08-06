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
<link rel="stylesheet" href="{{ asset('base/css/croppie.min.css') }}" type="text/css" />
{{-- drozone --}}
<link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}" type="text/css" />

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg p-5" align="center">

                <h1> TESTING </h1>
                <div class="card">
                    <div class="card-body">
                        <input class="form-control" type="file" name="upload_image" id="upload_image">
                    </div>
                    {{-- <div class="card-footer">
                        <button type="button" class="crop-image form-control btn btn-primary"> Crop & Upload </button>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="theModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3> CROP & UPLOAD </h3>
                </div>
                <div class="modal-body">

                    <div id="image_demo"></div>
                    <div id="uploaded_image"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="crop-image btn btn-primary">Crop & Upload</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="{{ asset('base/js/jquery-min.js') }}"></script>
<script src="{{ asset('base/js/popper.min.js') }}"></script>
<script src="{{ asset('base/js/jquery.nav.js') }}"></script>
<script src="{{ asset('base/js/jquery.easing.min.js') }}"></script>
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
<script src="{{ asset('base/js/croppie.min.js') }}"></script>
<!-- Own Fontawesome -->
<script src="{{ asset('plugins/fontawesome-free/d639410787.js') }}" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {

        var myModal = document.getElementById('theModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })

        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square'
            },
            boundary:{
                width: 250,
                height: 250
            }
        });

        $(document).on('change', '#upload_image', function() {
            var reader = new FileReader();
            reader.onload = function (event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                })
            }
            reader.readAsDataURL(this.files[0]);

            $('#theModal').modal('toggle');
        });

        $('.crop-image').click(function (event) {

            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (response) {
                $.ajax({
                    url: "{{ url('/google-proses') }}",
                    type: 'POST',
                    data: {
                        "image" : response,
                        _token : '{{ csrf_token() }}'
                    },
                    success: function (data){
                        $('.uploaded_image').html(data);
                    }
                });
            });

        });

    });
</script>

</html>
