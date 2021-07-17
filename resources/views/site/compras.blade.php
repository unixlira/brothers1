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
                                <div class="rd-navbar-brand"><a href="../index.html"><img width='135' height='55' src='{{ asset('images/logo_big.png') }}' alt='Smart Veículos' /></a></div>
                            </div>
                            <div class="rd-navbar-menu-wrap">
                                <div class="rd-navbar-nav-wrap">
                                    <div class="rd-navbar-mobile-scroll">
                                        <!--Navbar Brand Mobile-->
                                        <div class="rd-navbar-mobile-brand"><a href="../index.html"><img width='218' height='35' src='{{ asset('images/logo_big.png') }}' alt='' /></a></div>
                                        <!-- RD Navbar Nav-->
                                        <ul class="rd-navbar-nav">
                                            <li><a href="{{url('analise')}}"><span>Análise de Crédito</span></a>
                                            </li>
                                            <li><a href="{{url('contato')}}"><span>Contato</span></a>
                                            </li>
                                            <li><a href="{{url('compras')}}" style="border-radius: 55px;background-color: #eb232c;padding: 12px;top: -10px;"><span>Venda seu Carro</span></a>
                                            </li>
                                            <li><a href="{{url('veiculos')}}" style="border: 2px solid #eb232c;border-radius: 25px;padding: 10px;top: -10px;"><span>Nossos Veículos</span></a>
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
                <div class="parallax-container" data-parallax-img="images/background1.jpg">
                    <div class="parallax-content">
                        <div class="container section-98 section-md-254">
                            <div class="unit-body text-left text-white">
                                <div class="text-extra-big text-white font-weight-bold">COMPRAMOS O<br> SEU CARRO!</div>
                                <h4 class="text-white"><small>Quer saber quanto pagamos nele?</small></h4>
                                <div class="d-block d-xl-inline-block">
                                    <button class="btn btn-red element-fullwidth" type="button" style="max-width: 170px; min-width: 170px; min-height: 50px;">EU QUERO</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </header>
        <!-- Compramos seu carro-->
        <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-red novi-background" data-preset='{"title":"Footer","category":"footer","reload":true,"id":"footer"}'>
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="unit unit-sm flex-md-row text-md-center">
                            <div class="unit-body text-justify text-white">
                                <h1 class="font-weight-bold text-white">+ 300 Carros</h1>
                                <p class="row text-center text-justify offset-md-top-24 text-white">Negociados mensalmente Venda hoje mesmo!</p>
                                <div class="section-8 mt-3 parallax-container">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Sobre a Smart Veículos-->
        <div style="display: flex; background-color: white; width: 100%;">

            <section style="margin-top: 40px; margin-bottom: 80px; margin-left: 90px;">
                <div class="container">
                    <div>
                        <div class="col-md-9 col-xl-6 order-xl-6">
                            <img src='{{ asset('images/venda.jpg') }}' width="570" height="380" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="backgroud-color:white section-98 section-md-110">
                <div class="row col-md-9 col-xl-6 col-xl-pull-6 text-left offset-top-66 offset-xl-top-0 inset-xl-rigth-50 .text-truncate text-nowrap bd-highlight">
                    <p>
                    <h4>Sobre a <span style="color: red">Smart Veículos</span></h4>
                    </p>

                    <span><small>Atuando no mercado de carros seminovos na cidade de Sorocaba há mais de 25 <br>
                            anos. Mais do que comprar visamos sempre o melhor negócio para os clientes.<br>
                            Seriedade, agilidade e pagamento na hora.</small>
                    </span>
                </div>

            </section>

        </div>
        <!-- Instrução venda-->
        <section class="section novi-background section-66" style="overflow: hidden; background-color:#191919">
            <h1 class="font-weight-bold text-white text-md-center">Como funciona?</h1>
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-8 col-xl-4 offset-top-60 offset-lg-top-0">
                        <div class="unit unit-sm flex-md-row text-md-center ">
                            <div class="unit-body text-center text-white">
                                <p class="font-weight ffset-md-top-60 text-white"><img src='{{ asset('images/icone-agende.png') }}'></p>
                                <h6 class="text-white">Agende uma avaliação</h6>
                                <p><small>Eu sou um bloco de texto. Clique no botão Editar (Lápis) para alterar o conteúdo deste elemento.</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-4 offset-top-60 offset-lg-top-0">
                        <div class="unit unit-sm flex-md-row text-md-center">
                            <div class="unit-body text-center text-white">
                                <p class="font-weight ffset-md-top-60 text-white"><img src='{{ asset('images/icone-enviaremos.png') }}'></p>
                                <h6 class="text-white">Enviaremos a melhor proposta</h6>
                                <p><small>Após a vistoria, já te informaremos o melhor valor do mercado.</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-4 offset-top-60 offset-lg-top-0">
                        <div class="unit unit-sm flex-md-row text-md-center">
                            <div class="unit-body text-center text-white">
                                <p class="font-weight ffset-md-top-60 text-white"><img src='{{ asset('images/icone-pagamento.png') }}'></p>
                                <h6 class="text-white">Pagamento à vista, sem burocracia</h6>
                                <p><small>Aprovado o valor, o pagamento é à vista e a documentação é por nossa conta, sem dor de cabeça.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sobre a Smart Veículos-->
        <section>
            <div style="display: flex; background-color: white; border-top: 1px solid silver; padding-bottom: 5%;">
                <div style="padding: 5%;">
                    <div style="padding-left : 2%; margin-top : 2%; background-color: white; padding-top: 2%;">
                        <h4><strong>Porque vender o seu carro para a Smart Veículos?</strong></h4>
                        <br>
                    </div>

                    <div style="display: flex; align-items: center; padding-left : 2%; background-color: white;">

                        <div id="accordion" style="width: 600px;">
                            <div style="border-bottom : 1px solid silver;">
                                <div id="headingOne" style="padding: 1%; border-top: 1px solid silver;">
                                    <h5 class="mb-0">

                                        <span style="font-size: 16px; color: black;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Venda em segurança<i style="margin-left: 300px;" class="text-rigth novi-icon fa fa-angle-down"></i>
                                        </span>
                                    </h5>

                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Cuidamos de toda a negociação, pagamento e documentação de transferência do veículo. Receba direto na sua conta, à vista!
                                    </div>
                                </div>
                            </div>
                            <div style=" border-bottom : 1px solid silver;">
                                <div id="headingTwo" style="padding: 1%;">

                                    <h5 class="mb-0">
                                        <span style="font-size: 16px; color: black;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Independência<i style="margin-left: 348px;" class="text-rigth novi-icon fa fa-angle-down"></i>
                                        </span>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Negocie sem intermediários e receba 100% do valor da venda.
                                    </div>
                                </div>
                            </div>
                            <div style="border-bottom : 1px solid silver;">
                                <div id="headingThree" style="padding: 1%;">
                                    <h5 class="mb-0">
                                        <span style="font-size: 16px; color: black;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Tranquilidade<i style="margin-left: 353px;" class="text-rigth novi-icon fa fa-angle-down"></i>
                                        </span>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Após a venda de seu veículo para a loja, ele passará por uma rigorosa revisão para venda ao seu novo proprietário.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-xl-6 order-xl-6" style="padding-top: 8%;">
                    <img src='{{ asset('images/venda2.jpg') }}' width="570" height="380" alt="">
                </div>
            </div>
        </section>
        <!-- Default footer-->
        <section class="section novi-background section-66" style="overflow: hidden; background-color:#1a202c">
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