@extends('layouts.app')

@section('content')
    <!-- banner part start-->
    <section class="auth_part">
        <div style="width: 80%;">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-10">
                            <h3 class="mb-4">Registre-se</h3>
                            <form action="/signup" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="name" class="form-control" name="name" placeholder="Nome">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                                </div>
                                <div class="input-group mb-4">
                                    <input type="password" class="form-control" name="password" placeholder="Senha">
                                </div>
                                <button type="submit" class="btn_2 mb-3" style="border: none; width: 100%;">Enviar</button>
                            </form>
                            <a class="button-link" href="/login">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img" style="display: flex;justify-content: center;">
                        <img src="{{ asset('img/landing/auth-image.png') }}" alt="finance image" style="max-width: 80%;">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
