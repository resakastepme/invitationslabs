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

                @if (session('changed.succcessfully'))
                <div class="alert alert-success">{{ session('changed.succcessfully') }}</div>
            @endif

                @foreach ($temas as $row)
                    <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                        <div class="card" align="center">
                            <div class="card-header">
                                <img src="{{ asset('themes/'.$row->nama_tema.'/preview.png') }}"
                                    style="object-fit: cover; position: relative; height:10%; width:90%; max-height: 350px;">
                            </div>
                            <div class="card-body">
                                <h1> {{ $row->nama_tema }} </h1>
                            </div>
                            <div class="card-footer">

                                @if ($orders->id_tema == $row->id)
                                <button class="btn btn-success" disabled> Aktif </button>
                                @else
                                <a href="{{ url('/admin/tampilan/change/'.$row->id) }}" class="btn btn-success"> Pilih </a>
                                @endif

                                <button class="btn btn-secondary"> Demo </button>
                            </div>
                        </div>
                    </div>
                @endforeach

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
