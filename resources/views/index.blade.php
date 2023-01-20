<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Nosso principal objetivo é que nossos clientes consigam controlar sua vida financeira. Essa jornada precisa ser agradável, por isso sempre estamos dispostos a ajudar." />
        <meta name="keywords" content="financeiro, boletos, contas, online, finanças"/>
        <meta name="author" content="Eduardo Nascimento"/>
        <title>iConta$ | Controle de Gastos</title>
        <link rel="icon" href="{{ asset('img/landing/favicon.png') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- themify CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/themify-icons.css') }}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/app.css') }}">
    </head>
    <body>
        <!--::header part start::-->
        <header class="main_menu home_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="/"> <img src="{{ asset('img/landing/logo.png') }}" width="34"
                                    alt="logo"> iConta$
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">Sobre</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#services">Serviços</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#doctors">Médicos</a>
                                    </li>
                                </ul>
                            </div>
                            <a class="btn_2 d-none d-lg-block" href="/login">Entrar</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xl-5">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h5>Estamos aqui para você</h5>
                                <h1>Controle Financeiro</h1>
                                <p>Aqui na iConta$ você consegue controlar seus gastos
                                    de um jeito muito fácil. Preservando seu tempo
                                    para coisas que realmente valem a pena.</p>
                                <a href="/login" class="btn_2">Controle seus gastos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner_img">
                            <img src="{{ asset('img/landing/header-image.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

        <!-- about us part start-->
        <section class="about_us padding_top" id="about">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="about_us_img">
                            <img src="{{ asset('img/landing/about-image.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="about_us_text">
                            <h2>Sobre Nós</h2>
                            <p>Nosso principal objetivo é que nossos clientes encontrem um método
                                muito fácil e simples para controlar suas contas. Essa jornada
                                precisa ser agradável, por isso sempre estamos dispostos a ajudar. </p>
                            <div class="banner_item">
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_1.svg') }}" alt="">
                                    <h5>Segurança</h5>
                                </div>
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_2.svg') }}" alt="">
                                    <h5>Praticidade</h5>
                                </div>
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_3.svg') }}" alt="">
                                    <h5>Moderno</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us part end-->

        <!-- feature_part start-->
        <section class="feature_part" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section_tittle text-center">
                            <h2>Nossos Serviços</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-3 col-sm-12">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon">
                                    <i class="ti-credit-card"></i>
                                </span>
                                <h4>Contas</h4>
                                <p>Adicione suas contas do mês
                                    e controle seus prazos para
                                    não atrasar.</p>
                            </div>
                        </div>
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon">
                                    <i class="ti-check-box"></i>
                                </span>
                                <h4>Pagar</h4>
                                <p>Quando pagar suas contas,
                                    adicione no sistema para
                                    não se preocupar mais.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="{{ asset('img/landing/services-image.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon">
                                    <i class="ti-time"></i>
                                </span>
                                <h4>Histórico</h4>
                                <p>Tenha o histórico de
                                    gastos todo mês sempre
                                    muito simples.
                                </p>
                            </div>
                        </div>
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon">
                                    <i class="ti-eye"></i>
                                </span>
                                <h4>Previsão</h4>
                                <p>Veja a previsão de gastos
                                    do mês para melhorar seu
                                    controle financeiro.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature_part start-->

        <!-- our depertment part start-->
        <section class="our_depertment section_padding" id="doctors">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-12">
                        <div class="depertment_content">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <h2>Nossos Consultores</h2>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/woman-1.jpg') }}" alt="doctor">
                                            <h3>Adriana Galvão</h3>
                                            <p>Trader</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/man-1.jpg') }}" alt="doctor">
                                            <h3>Manoel Corte Real</h3>
                                            <p>Contador</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/woman-2-extra.jpg') }}" alt="doctor">
                                            <h3>Cecília Nascimento</h3>
                                            <p>Engenheira</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/man-2.jpg') }}" alt="doctor">
                                            <h3>Matheus Novaes</h3>
                                            <p>Trader</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/woman-3.jpg') }}" alt="doctor">
                                            <h3>Maria Conceição</h3>
                                            <p>Contadora</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/man-3.jpg') }}" alt="doctor">
                                            <h3>Francisco Cardoso</h3>
                                            <p>Desenvolvedor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our depertment part end-->

        <!-- footer part start-->
        <footer class="footer-area">
            <div class="copyright_part">
                <div class="container">
                    <div class="row align-items-center">
                        <p class="footer-text m-0 col-lg-8 col-md-12">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                        </p>
                        <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer part end-->

        <!-- jquery plugins here-->
        <script src="{{ asset('js/landing/jquery-1.12.1.min.js') }}"></script>
        <!-- custom js -->
        <script src="{{ asset('js/landing/custom.js') }}"></script>
    </body>
</html>