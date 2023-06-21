@extends('admin.mainlayout')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tampilan Undangan</h1>
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
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                    <div class="card" align="center">
                        <div class="card-header">
                            <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                                style="object-fit: cover; position: relative; max-height: 500px;">
                        </div>
                        <div class="card-body">
                            <h1> JUDUL </h1>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success"> Pilih </button>
                            <button class="btn btn-secondary"> Demo </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                    <div class="card" align="center">
                        <div class="card-header">
                            <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                                style="object-fit: cover; position: relative; max-height: 500px;">
                        </div>
                        <div class="card-body">
                            <h1> JUDUL </h1>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success"> Pilih </button>
                            <button class="btn btn-secondary"> Demo </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                    <div class="card" align="center">
                        <div class="card-header">
                            <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                                style="object-fit: cover; position: relative; max-height: 500px;">
                        </div>
                        <div class="card-body">
                            <h1> JUDUL </h1>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success"> Pilih </button>
                            <button class="btn btn-secondary"> Demo </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                    <div class="card" align="center">
                        <div class="card-header">
                            <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                                style="object-fit: cover; position: relative; max-height: 500px;">
                        </div>
                        <div class="card-body">
                            <h1> JUDUL </h1>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success"> Pilih </button>
                            <button class="btn btn-secondary"> Demo </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                    <div class="card" align="center">
                        <div class="card-header">
                            <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                                style="object-fit: cover; position: relative; max-height: 500px;">
                        </div>
                        <div class="card-body">
                            <h1> JUDUL </h1>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success"> Pilih </button>
                            <button class="btn btn-secondary"> Demo </button>
                        </div>
                    </div>
                </div>
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
