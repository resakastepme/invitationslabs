@extends('admin.mainlayout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengaturan Profil</h1>
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
                            <h6 class="font-weight-bold text-primary"> Profil Pengguna </h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pengaturan.update', $data->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <label for=""> Nama </label>
                                <input type="text" name="name" class="form-control mb-2" value="{{ $data->name }}" required >

                                <label for=""> Password </label>
                                <input type="password" class="form-control" name="password">
                                <small class="mb-2">
                                    *kosongkan jika tidak ingin mengubah password
                                </small><br>

                                <label for=""> Email </label>
                                <input type="email" class="form-control mb-2" name="email" value="{{ $data->email }}" required>

                                <label for=""> Nomor HP </label>
                                <input type="num" class="form-control mb-3" name="phone" value="{{ $data->phone }}" required>

                                @if (Session('success'))
                                    <div class="alert alert-success mb-3"> {{ Session('success') }} </div>
                                @endif

                                <button type="submit" class="btn btn-primary"> Simpan </button>

                            </form>
                        </div>
                    </div>

                </section>
                <section class="col-lg-4 connectedSortable"></section>
            </div>
        </div>
    </section>
@endsection
