@extends('admin.mainlayout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Testimonial</h1>
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
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <section class="col-lg-8 connectedSortable">

                    <div class="card">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary"> Testimonial </h6>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST">
                                @csrf

                                <label for=""> Nama Lengkap </label>
                                <input type="text" name="nama" class="form-control mb-2"
                                    placeholder="Contoh: Syahrul Hidayat" required>

                                <label for=""> Kota </label>
                                <input type="text" class="form-control mb-2" name="kota" placeholder="Contoh: Bandung"
                                    required>

                                <label for=""> Provinsi </label>
                                <input type="text" class="form-control mb-2" name="provinsi" placeholder="Contoh: Jawa Barat"
                                    required>

                                <label for=""> Ulasan </label>
                                <textarea name="ulasan" id="ulasan" class="form-control" rows="4" placeholder="Pelayanan yang sangat bagus!"
                                    required></textarea>

                                <button type="submit" class="btn btn-primary mt-4"> Simpan </button>

                            </form>
                        </div>
                    </div>

                </section>
                <section class="col-lg-4 connectedSortable"></section>
            </div>
        </div>
    </section>
@endsection
