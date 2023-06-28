@extends('admin.mainlayout')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pembayaran</h1>
                </div>
                <div class="col-sm-6" align="end">
                    <button class="btn btn-primary"> Lihat Website </button>
                </div>
                <!-- /.col -->
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
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">

                <div class="card">
                    <div class="card-header">
                        <h6 class="font-weight-bold text-primary"> Tagihan Pembayaran </h6>
                    </div>
                    <div class="card-body">

                        <label for=""> Kode Pesanan </label>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control text-center" style="font-weight: 500"
                                    value="#blababla123213" disabled>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-arrows-rotate"></i> </button>
                                <button class="btn btn-sm btn-warning"> Belum Lunas </button>
                            </div>
                        </div>

                        <label for=""> Total Tagihan </label>
                        <input type="text" class="form-control text-center mb-3" style="font-weight: 500"
                            value="Rp 100.000" disabled>

                        <button class="btn btn-primary form-control"> Konfirmasi </button>

                    </div>
                </div>

            </section>

            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">

                <div class="card">
                    <div class="card-header">
                        <h6 class="font-weight-bold text-primary"> Rekening Pembayaran </h6>
                    </div>
                    <div class="card-body">



                        <div id="accordion">

                            <div class="card">
                                <div class="card-header">
                                    <img src="https://sidoinikah.xyz/assets/base/img/bank.png" alt=""
                                        style="width: 80px; height: 40px;">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne"
                                        style="font-weight: 500;">
                                        QRIS
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum..
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <img src="https://sidoinikah.xyz/assets/base/img/bank.png" alt=""
                                        style="width: 80px; height: 40px;">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo"
                                        style="font-weight: 500;">
                                        TRANSFER BANK
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-bs-parent="#accordion">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-4">

                                                <label for=""> Nama Bank </label>
                                                <div class="card" style="background-color: #c6c2c2;">
                                                    <div class="card-body">

                                                        <img src="https://www.freepnglogos.com/uploads/logo-bca-png/bank-central-asia-logo-bank-central-asia-bca-format-cdr-png-gudril-1.png"
                                                            style="width: 130px; height: 100px; max-height: 100px; max-width: 130px; object-fit: cover; position: relative;">

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-8">

                                                <label for=""> Nomor Rekening </label>
                                                <div class="card card-sm"
                                                    style="background-color: #c6c2c2; min-height: 100px; height: 135px;">
                                                    <div class="card-body">

                                                        <div class="row mb-3">
                                                            <div class="col text-center mt-2"
                                                                style="font-weight: 500; font-size: 20px;">
                                                                <input type="text" class="form-control text-center"
                                                                    value="234535243235" id="copythis" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col" style="text-align: center;">
                                                                <button class="btn btn-secondary" onclick="copyFunction()" id="salinBtn">
                                                                    Salin </button><span id="sudahCopy" style="display: none;"> ✅ </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">

                                                <label for=""> Atas Nama </label>
                                                <div class="card" style="background-color: #c6c2c2;">
                                                    <div class="card-body" align="center" style="font-size: 20px; font-weight: 500;">
                                                        RESA KOMARA AKBARI
                                                    </div>
                                                </div>

                                            </div>
                                        </div>



                                    </div>
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

        function copyFunction() {
            // Get the text field
            var copyText = document.getElementById("copythis");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            // alert("Copied the text: " + copyText.value);
            $('#sudahCopy').show();
        }
    </script>
@endsection
