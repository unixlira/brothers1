<DOCTYPE html>
    <html class="wow-animation" lang="en">

    <head>
        <title>Smart Veículos</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="keywords" content="intense web design multipurpose template">
        <meta name="date" content="Dec 26">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,700italic">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>
            .ie-panel {
                display: none;
                background: #212121;
                padding: 10px 0;
                box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
                clear: both;
                text-align: center;
                position: relative;
                z-index: 1;
            }

            html.ie-10 .ie-panel,
            html.lt-ie-10 .ie-panel {
                display: block;
            }
        </style>
    </head>

    <body>
        <!-- IE panel-->
        <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
        <!-- Page-->
        <div class="page text-center">
            <!-- <div class="page-loader page-loader-variant-1">
        <div><img class='img-responsive' style='margin-top: -20px;margin-left: -5px;' width='135' height='55' src='images/logo_big.png' alt=''/>
            <div class="offset-top-41 text-center">
                <div class="spinner"></div>
            </div>
        </div>
    </div> -->
            <!-- Page Head-->
            <header class="page-head slider-menu-position" data-preset='{"title":"Header 1","category":"header, parallax","reload":true,"id":"header-1"}'>
                <!-- - RD Navbar-->
                <!-- RD Navbar Transparent-->
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark rd-navbar-dark-transparent" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Top Panel Toggle-->
                                <button class="rd-navbar-right-buttons-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-right-buttons"><span></span></button>
                                <!--Navbar Brand-->
                                <div class="rd-navbar-brand"><a href="/"><img width='135' height='55' src='{{ asset('images/logo_big.png') }}' alt='Smart Veículos' /></a></div>
                            </div>
                            <div class="rd-navbar-menu-wrap">
                                <div class="rd-navbar-nav-wrap">
                                    <div class="rd-navbar-mobile-scroll">
                                        <!--Navbar Brand Mobile-->
                                        <div class="rd-navbar-mobile-brand"><a href="/"><img width='218' height='35' src='{{ asset('images/logo_big.png') }}' alt='' /></a></div>
                                        <!-- RD Navbar Nav-->
                                        <ul class="rd-navbar-nav">
                                            <li><a href="{{url('analise')}}"><span>Análise de Crédito</span></a>
                                            </li>
                                            <li><a href="{{url('contato')}}"><span>Contato</span></a>
                                            </li>
                                            <li><a href="{{url('compras')}}" style="border: 2px solid #eb232c;border-radius: 25px;padding: 10px;top: -10px;"><span>Venda seu Carro</span></a>
                                            </li>
                                            <li><a href="{{url('veiculos')}}" style="border-radius: 55px;background-color: #eb232c;padding: 12px;top: -10px;"><span>Nossos Veículos</span></a>
                                            </li>
                                            <li><a href="{{url('https://api.whatsapp.com/send?phone=11990253050')}}" style="top:-10px;margin-right: -2px" target="_blank">
                                                    <span><img src="{{ asset('images/whatsapp3-36x36.png') }}"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <p href="" style="margin-top: -15px;margin-left: -50px !important;">
                                                    <span class="rd-navbar-nav" style="color: #0EFFC0;">Consultor OnLine</span>
                                                <h5 class="text-white" style="margin-top: -20px;margin-left: -50px;"><b>11 99990 0909</b></h5>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="section-254 parallax-container" data-parallax-img="{{ asset('images/venda.jpg') }}"></div>
            </header>
            <!-- Contact Us-->
            <section class="section section-98 section-md-110 text-xl-left mt-30" style="padding-block-start: 4%; padding-inline-end: 4%;    background-color:#ecf1f8">
                <div class="text-center">
                    <h2 class="text font-weight-bold mt-2" style="color: #191919 !important">Financie On-line com as melhores taxas</h2>
                </div>
                <div class="container">
                    <div class="col-md-8 offset-top-66" style="display: flex justify-content; background-color:#ffffff; margin-left: 200px; padding:35px; box-shadow: 0 0 1em #a9a9a9;">
                        <!-- RD Mailform-->
                        <form>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-7">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Nome Completo*</div>
                                                            <p> <span class="wpcf7-form-control-wrap nome"><input type="text" name="nome" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Digite seu nome" /></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Data de Nascimento</div>
                                                            <p> <span class="wpcf7-form-control-wrap data-nasc"><input type="text" name="data-nasc" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Data de Nascimento" /></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">RG*</div>
                                                            <p> <span class="wpcf7-form-control-wrap rg"><input type="number" name="rg" value="" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="RG" /></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">CPF</div>
                                                            <p> <span class="wpcf7-form-control-wrap cpf"><input type="text" name="cpf" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="CPF" /></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Nome da Mãe</div>
                                                            <p> <span class="wpcf7-form-control-wrap nome-mae"><input type="text" name="nome-mae" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Nome da Mãe" /></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Endereço*</div>
                                                            <p> <span class="wpcf7-form-control-wrap endereco"><input type="text" name="endereco" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Endereço" /></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Cidade</div>
                                                            <p> <span class="wpcf7-form-control-wrap cidade"><input type="text" name="cidade" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Cidade" /></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Telefone</div>
                                                            <p> <span class="wpcf7-form-control-wrap telefone"><input type="text" name="telefone" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Telefone" /></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Celular</div>
                                                            <p> <span class="wpcf7-form-control-wrap celular"><input type="text" name="celular" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Celular" /></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Celular</div>
                                                            <p> <span class="wpcf7-form-control-wrap celular"><input type="text" name="celular" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Celular" /></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <h3>Dados do Trabalho</h3>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="contact-us-label">Nome da empresa</div>
                                                                <p> <span class="wpcf7-form-control-wrap nome-empresa"><input type="text" name="nome-empresa" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Nome da empresa" /></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="contact-us-label">Cargo</div>
                                                                <p> <span class="wpcf7-form-control-wrap cargo"><input type="text" name="cargo" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Cargo" /></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="contact-us-label">Renda</div>
                                                                <p> <span class="wpcf7-form-control-wrap renda"><input type="text" name="renda" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Renda" /></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="contact-us-label">Tempo de Empresa</div>
                                                                <p> <span class="wpcf7-form-control-wrap tempo-empresa"><input type="text" name="tempo-empresa" value="" size="40" class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Tempo de Empresa" /></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-6">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                        <div class="col-xl-12 offset-top-20">
                            <div class="form-group">
                                <textarea class="form-control" id="contact-us-message" name="message" style="background:#ecf1f8" placeholder="Deixe sua mensagem e retornaremos..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="group-sm text-center text-xl-left offset-top-30">
                        <button class="btn btn-red" type="submit">Enviar</button>
                    </div>
                    </form>
                </div>
        </div>
        </div>
        </section>
        <!-- Page Footer-->
        <!-- Default footer-->
        <section class="section novi-background section-66" style="overflow: hidden;background-color: #1a202c">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-10 col-xl-4">
                        <div class="unit unit-sm flex-md-row text-md-left ">
                            <div class="unit-body text-center text-white">
                                <h4 class="font-weight-bold text-uppercase offset-md-top-24 text-white">Loja 1</h4>
                                <p>
                                    Rua Sete de Setembro, 306 , Centro
                                    Sorocaba, SP 18035-001
                                    <br>
                                    Tel: (15) 3035-4751
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-xl-4 offset-top-50 offset-lg-top-0">
                        <div class="unit unit-sm flex-md-row text-md-left">
                            <div class="unit-body text-center text-white">
                                <h4 class="font-weight-bold text-uppercase offset-md-top-24 text-white">Loja 2</h4>
                                <p>Rua Sete de Setembro, 325 , Centro
                                    Sorocaba, SP 18035-001
                                    <br>
                                    Tel: (15) 3357-7007
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-xl-4 offset-top-50 offset-lg-top-0">
                        <div class="unit unit-sm flex-md-row text-md-left">
                            <div class="unit-body text-center text-white">
                                <h4 class="font-weight-bold text-uppercase offset-md-top-24 text-white">Loja 3</h4>
                                <p>Av. General Osório, 1620 , Vl. Trujillo
                                    Sorocaba, SP 18060-502
                                    <br>
                                    Tel: (15) 3358-5545
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr style="background-color: #1a202c;margin: auto; border-color: #6c757d">
        <section class="section novi-background section-66" style="overflow: hidden;background-color: #1a202c">
            <div class="container">
                <div class="row justify-content-sm-left">
                    <div class="col-md-10 col-xl-8">
                        <!-- Icon Box Type 2-->
                        <div class="unit unit-sm flex-md-row text-md-left ">
                            <div class="unit-body">
                                <p style="color: #718096">© 2021 <a href="/" style="color: #0E7EB5">Smart Veículos</a> | Os Melhores Veículos Semi novos estão na Smart Veículos. Reservamos o direito de eventuais erros de digitação na descrição, valores ou fotos. O valor descrito nos anúncios em nosso site, são para pagamentos à vista, para financiamento e troca, fale com um de nossos vendedores.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="section-relative ">
            <div style="background-color:#242323; height:74px">
                <a href="https://www.conduzaweb.com.br/" target="_blank">
                    <img src="http://estudioaware.com/motors-teste/wp-content/uploads/2021/06/logo-branca-conduza.png" style="display: block;margin-left: auto;margin-right: auto;height: 60px;padding-top: 15px;">
                </a>
            </div>
        </footer>
        </div>
        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        <!-- Java script-->
        <script type="text/javascript" src="{{ asset("js/core.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("js/scripts.js") }}"></script>
    </body>

    </html>