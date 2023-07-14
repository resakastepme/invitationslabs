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
                                <h1 style="color: #005CAA;margin-bottom:0px;">Hallo!</h1>
                                <p style="font-size: 15px;font-weight:500; ">Hai kak! di isi dulu ya datanya </p>
                            </div>
                        </div>

                        @if (Session::has('errors'))
                            <div class="alert alert-danger"> {{ Session('errors') }} </div>
                        @endif

                        <form action="{{ url('/new/order/2') }}" method="post">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <label>Nama Domain / URL Undangan</label>
                                    <div class="input-group ">
                                        <div class="input-group-append d-flex">
                                            <span class="input-group-text">undangan.invitationlabs.com/</span>
                                            <input type="text" class="form-control" name="domain"
                                                placeholder="akudandia" onkeyup="nospaces(this)"
                                                value="<?php
                                                if (Session::has('domain_old')) {
                                                    echo Session('domain_old');
                                                } elseif (Session::has('datauser')) {
                                                    echo Session('datauser')['domain'];
                                                }
                                                ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email"
                                        @if (Session::has('email_old')) value="{{ Session('email_old') }}"
                                            @elseif (Session::has('datauser'))
                                            value="{{ Session::has('datauser')['email'] }}" @endif>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Password</label>
                                    <input name="password" type="text" class="form-control" placeholder="Password"
                                    @if (Session::has('password_old')) value="{{ Session('password_old') }}"
                                    @elseif (Session::has('datauser'))
                                    value="{{ Session::has('datauser')['password'] }}" @endif>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <label>Nomer HP / WhatsApp</label>
                                    <input name="phone" type="number" class="form-control" placeholder="0"
                                    @if (Session::has('phone_old')) value="{{ Session('phone_old') }}"
                                    @elseif (Session::has('datauser'))
                                    value="{{ Session::has('datauser')['phone'] }}" @endif>
                                </div>
                            </div>
                            <div class="row justify-content-start mt-4">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <!-- <a class="btn btn-primary btn-order btn-block" style="background-color: #005CAA;">Lanjut</a> -->
                                            <input class="btn btn-primary btn-order btn-block" type="submit" name="submit"
                                                value="Lanjut">
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
        function nospaces(t) {
            if (t.value.match(/\s/g)) {
                t.value = t.value.replace(/\s/g, '');
            }
        }
    </script>
@endsection
