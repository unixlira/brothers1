<DOCTYPE html>
    <html class="wow-animation" lang="en">

    <head>
        <title>Smart Veículos</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="keywords" content="Smart Veículos">
        <meta name="date" content="Dec 26">
        <link rel="icon" href="{{ asset('images/144x144-logo-smart.png') }}" type="image/x-icon">
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
                <!-- RD Navbar Transparent-->
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar rd-navbar-floated rd-navbar-dark rd-navbar-dark-transparent"  data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
                        <div class="rd-navbar-inner">
                            <div class="container section-relative d-flex justify-content-between">
                                <!-- RD Navbar Panel-->
                                <div class="rd-navbar-panel">
                                    <!-- RD Navbar Toggle-->
                                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                                    <!--Navbar Brand-->
                                    <div class="rd-navbar-brand"><a href="/"><img width='135' height='55' src='{{ asset('images/logo_big.png') }}' alt='Smart Veículos'/></a></div>
                                </div>
                                <div class="rd-navbar-menu-wrap">
                                    <div class="rd-navbar-nav-wrap">
                                        <div class="rd-navbar-mobile-scroll hoverLink">
                                            <!--Navbar Brand Mobile-->
                                            <div class="rd-navbar-mobile-brand"><a href="/"><img width='218' height='35' src='{{ asset('images/logo_big.png') }}' alt=''/></a></div>
                                            <!-- RD Navbar Nav-->
                                            <ul class="rd-navbar-nav">
                                                <li><a href="{{url('analise')}}"><span>Análise de Crédito</span></a>
                                                </li>
                                                <li><a href="{{url('empresa')}}"><span>Empresa</span></a>
                                                </li>
                                                <li><a href="{{url('contato')}}"><span>Contato</span></a>
                                                </li>
                                                <li><a href="{{url('compras')}}" ><span class="tagRed-outline">Venda seu Carro</span></a>
                                                </li>
                                                <li><a href="{{url('veiculos')}}"><span class="tagRed">Nossos Veículos</span></a>
                                                </li>
                                                <li><a href="{{url('https://api.whatsapp.com/send?phone=5515997121257&text=Ol%C3%A1%2C%20estou%20no%20site%20da%20Smart%20Ve%C3%ADculos%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es.')}}" target="_blank">
                                                        <h6 class="text-white text-bold"><img src="{{ asset('images/whatsapp3-36x36.png') }}"> 15 99712-1257</h6>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="section-254 parallax-container" data-parallax-img="{{ asset('images/banner-contato.jpg') }}"></div>
            </header>
            <!-- Contact Us-->
        <section class="section section-98 section-md-110 text-xl-left mt-30" style="background-color:#ecf1f8">
            <div class="text-center">
                <h2 class="text font-weight-bold mt-2" style="color: #191919 !important">Fale Conosco</h2>
            </div>
            <div class="container">
                <div class="row justify-content-sm-center justify-content-sm-center">
                    <div class="col-xl-4" style="margin-top:60px;">
                        <p class="h6 text font-weight-bold" style="color:#191919 !important"><b>Fale Conosco</b></p>
                        <p>Dúvidas, críticas, elogios ou sugestões? Estamos sempre prontos para ouvir você.</p>
                        <address class="contact-info offset-top-50">
                            <p class="h6 textfont-weight-bold" style="color:#191919 !important"><b>Cental de vendas</b></p>
                            <p>(15) 3035-4751</p>
                            <address class="contact-info offset-top-50">
                                <p class="h6 text font-weight-bold" style="color:#191919 !important">Converse direto pelo WhatsApp</p>
                                <p>(15) 99712-1257</p>
                            </address>
                    </div>
                    <div class="col-md-8 offset-top-66" style="background-color:#ffffff; padding:45px; box-shadow: 0 0 1em #a9a9a9;">
                        <!-- RD Mailform-->
                        <form action="{{route('contatoSite')}}" method="POST">
                            @csrf
                            <input type="hidden" name="tipo" value="contato">
                            <input type="hidden" id="mensagem" name="mensagem" value="{{$mensagem}}">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="contact-us-name">Nome*</label>
                                        <input class="form-control" id="contact-us-name" type="text" name="nome" style="background:#ecf1f8" placeholder="Digite seu nome">
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="contact-us-email">Email*</label>
                                        <input class="form-control" id="contact-us-email" type="email" name="email" style="background:#ecf1f8" placeholder="Email">
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="contact-us-email">Telefone*</label>
                                        <input class="form-control" id="contact-us-telefone" type="text" name="telefone" style="background:#ecf1f8" placeholder="Telefone">
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="contact-us-email">Cidade:</label>
                                        <input class="form-control" id="contact-us-cidade" type="text" name="cidade" style="background:#ecf1f8" placeholder="Cidade">
                                        <br>
                                    </div>
                                </div>
                                <div class="col-xl-12 offset-top-20">
                                    <div class="form-group">
                                        <textarea class="form-control" id="contact-us-message" name="mensagem" style="background:#ecf1f8" placeholder="Deixe sua mensagem e retornaremos..."></textarea>
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
        <section class="section  section-66" style="overflow: hidden;background-color: #1a202c">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-md-10 col-xl-4">
                    <div class="unit unit-sm flex-md-row  ">
                        <div class="unit-body text-center text-white">
                            <h4 class="font-weight-bold text-uppercase offset-md-top-24 text-white">Loja 1</h4>
                            <p>
                                Rua Sete de Setembro, 306 , Centro
                                Sorocaba, SP 18035-001
                                <br>
                                Tel: (15) 3035-4751</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-xl-4 offset-top-50 offset-lg-top-0">
                    <div class="unit unit-sm flex-md-row ">
                        <div class="unit-body text-center text-white">
                            <h4 class="font-weight-bold text-uppercase offset-md-top-24 text-white">Loja 2</h4>
                            <p>Rua Sete de Setembro, 325 , Centro
                                Sorocaba, SP 18035-001
                                <br>
                                Tel: (15) 3357-7007</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-xl-4 offset-top-50 offset-lg-top-0">
                    <div class="unit unit-sm flex-md-row ">
                        <div class="unit-body text-center text-white">
                            <h4 class="font-weight-bold text-uppercase offset-md-top-24 text-white">Loja 3</h4>
                            <p>RAv. General Osório, 1620 , Vl. Trujillo
                                Sorocaba, SP 18060-502
                                <br>
                                Tel: (15) 3358-5545</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr style="background-color: #1a202c;margin: auto; border-color: #6c757d">
    <section class="section section-66" style="overflow: hidden;background-color: #1a202c">
        <div class="container">
                <div class="row justify-content-sm-left">
                    <div class="col-md-10 col-xl-12">
                        <div class="unit unit-sm flex-md-row  ">
                            <div class="text-center text-white">
                                <p style="color: #718096">© 2021 <a href="/" style="color: #0E7EB5">Smart Veículos</a> | Os Melhores Veículos Semi novos estão na Smart Veículos. Reservamos o direito de eventuais erros de digitação na descrição, valores ou fotos.&nbsp;O valor descrito nos anúncios em nosso site, são para pagamentos à vista, para financiamento e troca, fale com um de nossos vendedores.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center">
                    <div class="redes">
                        <a href="mailto:vendas.websmartveiculos@gmail.com" class="email mr-3" target="_blank"> <svg id="mail" xmlns="http://www.w3.org/2000/svg" width="40.882" height="31.141" viewBox="0 0 40.882 31.141">
                                <g id="Grupo_612" data-name="Grupo 612" transform="translate(0 0)">
                                    <path id="Caminho_926" data-name="Caminho 926" d="M37.289,61H3.593A3.6,3.6,0,0,0,0,64.593V88.547a3.6,3.6,0,0,0,3.593,3.593h33.7a3.6,3.6,0,0,0,3.593-3.593V64.593A3.6,3.6,0,0,0,37.289,61Zm-.5,2.4L20.517,79.671,4.1,63.4ZM2.4,88.051V65.078L13.932,76.515Zm1.694,1.694L15.633,78.2l4.045,4.01a1.2,1.2,0,0,0,1.69,0l3.944-3.944L36.793,89.745Zm34.4-1.694L27.005,76.57,38.487,65.089Z" transform="translate(0 -61)" />
                                </g>
                            </svg>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=5515997121257&text=Ol%C3%A1%2C%20estou%20no%20site%20da%20Smart%20Ve%C3%ADculos%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="whatsapp mr-3" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" width="30.423" height="30.57" viewBox="0 0 30.423 30.57">
                                <path id="whatsapp" d="M26.241,4.443A15.152,15.152,0,0,0,2.4,22.72L.25,30.57l8.03-2.107a15.132,15.132,0,0,0,7.239,1.844h.006A15.155,15.155,0,0,0,26.241,4.443ZM15.525,27.749H15.52a12.575,12.575,0,0,1-6.408-1.755l-.46-.273-4.765,1.25,1.272-4.646-.3-.476a12.59,12.59,0,1,1,10.666,5.9Zm6.906-9.43c-.378-.19-2.239-1.1-2.586-1.231s-.6-.189-.851.19-.978,1.231-1.2,1.484-.441.284-.82.095a10.338,10.338,0,0,1-3.044-1.879,11.417,11.417,0,0,1-2.106-2.622c-.221-.379,0-.564.166-.772a10.707,10.707,0,0,0,.946-1.295.7.7,0,0,0-.032-.663c-.094-.189-.851-2.052-1.167-2.81-.307-.738-.619-.638-.852-.65s-.473-.013-.725-.013a1.39,1.39,0,0,0-1.009.474,4.245,4.245,0,0,0-1.325,3.158A7.363,7.363,0,0,0,9.374,15.7c.189.253,2.669,4.076,6.466,5.715a21.665,21.665,0,0,0,2.158.8,5.189,5.189,0,0,0,2.384.15,3.9,3.9,0,0,0,2.555-1.8,3.163,3.163,0,0,0,.221-1.8c-.094-.158-.347-.252-.725-.442Zm0,0" transform="translate(-0.25)" fill="#006b12" fill-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/SmartVeiculosSorocaba" class="facebook mr-3" target="_blank"> <svg id="facebook" xmlns="http://www.w3.org/2000/svg" width="30.63" height="30.63" viewBox="0 0 30.63 30.63">
                                <g id="Grupo_527" data-name="Grupo 527">
                                    <path id="Caminho_862" data-name="Caminho 862" d="M27.041,0H3.589A3.594,3.594,0,0,0,0,3.589V27.041A3.594,3.594,0,0,0,3.589,30.63H27.041a3.594,3.594,0,0,0,3.589-3.589V3.589A3.594,3.594,0,0,0,27.041,0Zm1.2,27.041a1.2,1.2,0,0,1-1.2,1.2h-6.82V18.486h3.7l.611-3.709H20.221V12.2a1.765,1.765,0,0,1,1.795-1.795h2.453V6.7H22.016a5.5,5.5,0,0,0-5.5,5.514v2.562H12.922v3.709h3.591v9.751H3.589a1.2,1.2,0,0,1-1.2-1.2V3.589a1.2,1.2,0,0,1,1.2-1.2H27.041a1.2,1.2,0,0,1,1.2,1.2Z" fill="#0052cc" />
                                </g>
                            </svg>
                        </a>
                        <a href=" https://www.instagram.com/smartveiculos/?hl=pt-br" class="instagram mr-3" target="_blank"> <svg id="instagram-sketched" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30.57" height="30.569" viewBox="0 0 30.57 30.569">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.084" y1="0.916" x2="0.916" y2="0.084" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#ffd600" />
                                        <stop offset="0.5" stop-color="#ff0100" />
                                        <stop offset="1" stop-color="#d800b9" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" x1="0.146" y1="0.854" x2="0.854" y2="0.146" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#ff6400" />
                                        <stop offset="0.5" stop-color="#ff0100" />
                                        <stop offset="1" stop-color="#fd0056" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-3" x1="0.146" y1="0.854" x2="0.854" y2="0.146" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#f30072" />
                                        <stop offset="1" stop-color="#e50097" />
                                    </linearGradient>
                                </defs>
                                <path id="Caminho_923" data-name="Caminho 923" d="M30.477,8.983a11.221,11.221,0,0,0-.711-3.71A7.491,7.491,0,0,0,28,2.565,7.493,7.493,0,0,0,25.3.8a11.219,11.219,0,0,0-3.71-.71C19.956.018,19.436,0,15.285,0s-4.672.018-6.3.092A11.223,11.223,0,0,0,5.273.8,7.491,7.491,0,0,0,2.565,2.565,7.492,7.492,0,0,0,.8,5.272a11.221,11.221,0,0,0-.71,3.71C.018,10.613,0,11.133,0,15.284s.018,4.672.092,6.3A11.219,11.219,0,0,0,.8,25.3,7.49,7.49,0,0,0,2.566,28a7.489,7.489,0,0,0,2.707,1.763,11.215,11.215,0,0,0,3.71.711c1.63.074,2.151.092,6.3.092s4.672-.017,6.3-.092a11.217,11.217,0,0,0,3.71-.711,7.814,7.814,0,0,0,4.47-4.47,11.218,11.218,0,0,0,.711-3.71c.074-1.63.092-2.151.092-6.3s-.018-4.672-.092-6.3ZM27.726,21.461A8.457,8.457,0,0,1,27.2,24.3a5.062,5.062,0,0,1-2.9,2.9,8.457,8.457,0,0,1-2.838.526c-1.611.074-2.095.089-6.176.089s-4.565-.015-6.177-.089A8.46,8.46,0,0,1,6.27,27.2a4.737,4.737,0,0,1-1.757-1.144A4.735,4.735,0,0,1,3.369,24.3a8.457,8.457,0,0,1-.526-2.838c-.073-1.612-.089-2.1-.089-6.176s.016-4.565.089-6.177A8.463,8.463,0,0,1,3.369,6.27,4.739,4.739,0,0,1,4.513,4.513,4.732,4.732,0,0,1,6.27,3.369a8.455,8.455,0,0,1,2.838-.526c1.612-.073,2.1-.089,6.176-.089h0c4.081,0,4.565.016,6.177.089a8.458,8.458,0,0,1,2.838.526,4.739,4.739,0,0,1,1.757,1.143A4.732,4.732,0,0,1,27.2,6.27a8.449,8.449,0,0,1,.526,2.838c.073,1.612.089,2.1.089,6.176s-.015,4.565-.089,6.177Zm0,0" transform="translate(0 0)" fill="url(#linear-gradient)" />
                                <path id="Caminho_924" data-name="Caminho 924" d="M132.388,124.539a7.849,7.849,0,1,0,7.849,7.849A7.849,7.849,0,0,0,132.388,124.539Zm0,12.944a5.095,5.095,0,1,1,5.1-5.1A5.095,5.095,0,0,1,132.388,137.483Zm0,0" transform="translate(-117.103 -117.103)" fill="url(#linear-gradient-2)" />
                                <path id="Caminho_925" data-name="Caminho 925" d="M365.6,90.46a1.834,1.834,0,1,1-1.834-1.834A1.834,1.834,0,0,1,365.6,90.46Zm0,0" transform="translate(-340.32 -83.334)" fill="url(#linear-gradient-3)" />
                            </svg> </a>
                        <a href="https://www.youtube.com/channel/UCgzsmY1p7pG1x-WQemslRSQ" class="youtube" target="_blank"> <svg id="internet" xmlns="http://www.w3.org/2000/svg" width="30.318" height="33.791" viewBox="0 0 30.318 33.791">
                                <path id="Caminho_865" data-name="Caminho 865" d="M31.288,19.472v9.961a3.71,3.71,0,0,1-.4,1.711,4.426,4.426,0,0,1-1.08,1.377,5.183,5.183,0,0,1-1.575.929,5.456,5.456,0,0,1-1.939.34H5.938a5.385,5.385,0,0,1-1.916-.34,5.149,5.149,0,0,1-1.577-.929,4.567,4.567,0,0,1-1.081-1.377A3.732,3.732,0,0,1,.97,29.433V19.472a3.761,3.761,0,0,1,.4-1.69A4.3,4.3,0,0,1,2.447,16.4a5.5,5.5,0,0,1,1.577-.931,5.237,5.237,0,0,1,1.916-.351H26.3a5.33,5.33,0,0,1,1.926.351,5.484,5.484,0,0,1,1.588.931,4.262,4.262,0,0,1,1.08,1.384A3.759,3.759,0,0,1,31.288,19.472ZM7.3,30.545V20.038H9.8V18.45H3.057v1.543H5.218V30.545ZM8.321,6.1,5.53,0H7.959L9.348,4.562,10.732,0h2.426L10.544,6.1V13.21H8.321Zm6.561,15.478H12.8V27.19c0,.406,0,.721.02.938s-.016.362-.091.421a.788.788,0,0,1-.537.533c-.288.111-.512-.047-.668-.489a1.07,1.07,0,0,1-.02-.44c.014-.236.02-.542.02-.922l-.043-5.65H9.389l.048,5.562c0,.437-.011.8-.025,1.1a2.642,2.642,0,0,0,.025.67c.029.245.055.5.088.784a.876.876,0,0,0,.433.67,1.573,1.573,0,0,0,.847.229,2.883,2.883,0,0,0,.956-.163,3.4,3.4,0,0,0,.861-.439,1.931,1.931,0,0,0,.576-.6l-.041,1.11,1.724.045ZM12.974,7.036A8.012,8.012,0,0,1,13.2,4.973a2.089,2.089,0,0,1,.888-1.207,2.567,2.567,0,0,1,1.566-.455,3.3,3.3,0,0,1,1.407.272,1.964,1.964,0,0,1,.929.795,3.016,3.016,0,0,1,.41.933,7.087,7.087,0,0,1,.134,1.522V9.213a9.354,9.354,0,0,1-.134,1.865,2.671,2.671,0,0,1-.458,1.156,2.018,2.018,0,0,1-.881.748,2.956,2.956,0,0,1-1.3.27,3.864,3.864,0,0,1-1.359-.227,1.4,1.4,0,0,1-.84-.655,3.188,3.188,0,0,1-.458-1.024,9.551,9.551,0,0,1-.136-1.86V7.036Zm1.862,3.7a.911.911,0,0,0,.274.648.882.882,0,0,0,.655.281.912.912,0,0,0,.648-.272.87.87,0,0,0,.281-.657V5.809a.932.932,0,0,0-.281-.689.9.9,0,0,0-.646-.286.882.882,0,0,0-.644.286.937.937,0,0,0-.286.689ZM21.62,27.981V23.329a2.037,2.037,0,0,0-.949-1.9,1.462,1.462,0,0,0-.729-.183,3.08,3.08,0,0,0-1.724.7V18.45H16.131V30.455l1.726-.045.134-.748a3.89,3.89,0,0,0,1.509.863,1.467,1.467,0,0,0,1.135-.127,1.805,1.805,0,0,0,.725-.931A3.994,3.994,0,0,0,21.62,27.981ZM19.105,22.4a1.033,1.033,0,0,1,.644.217.613.613,0,0,1,.283.485v5.267a.586.586,0,0,1-.283.474,1.084,1.084,0,0,1-.644.206,1.1,1.1,0,0,1-.652-.206.581.581,0,0,1-.277-.474V23.1a.613.613,0,0,1,.277-.485A1.05,1.05,0,0,1,19.105,22.4Zm.972-10.12a1.328,1.328,0,0,1-.111-.376,2.82,2.82,0,0,0-.072-.374,3.474,3.474,0,0,1-.043-.616V3.679H21.8v7.215a.656.656,0,0,0,.2.478.755.755,0,0,0,.546.2.79.79,0,0,0,.544-.2.622.622,0,0,0,.233-.478V3.679h1.81v9.259H22.829l.041-.748a3.661,3.661,0,0,1-.612.7,1.473,1.473,0,0,1-.795.227,1.539,1.539,0,0,1-.863-.227A1.727,1.727,0,0,1,20.077,12.279ZM28.2,27.394H26.638v1.019a.676.676,0,0,1-.261.566.967.967,0,0,1-.621.2h-.324a.881.881,0,0,1-.6-.2.705.705,0,0,1-.242-.566V26.256H28.2V25.008c0-.467-.007-.918-.023-1.348a4.982,4.982,0,0,0-.111-1.008,1.485,1.485,0,0,0-.559-.99,2.552,2.552,0,0,0-1.087-.508,3.45,3.45,0,0,0-1.273-.047,2.534,2.534,0,0,0-1.124.43,2.333,2.333,0,0,0-.883,1.115A5.534,5.534,0,0,0,22.87,24.6V27.4a3.058,3.058,0,0,0,.933,2.517,2.829,2.829,0,0,0,1.812.7H25.8a2.809,2.809,0,0,0,1.885-.908A2.18,2.18,0,0,0,28.3,28.1C28.275,27.885,28.25,27.648,28.2,27.394Zm-1.611-2.66h-2l.045-1.108a.775.775,0,0,1,.272-.6.965.965,0,0,1,.661-.24h.091a1.087,1.087,0,0,1,.691.227.757.757,0,0,1,.285.616Z" transform="translate(-0.97)" fill="#e20000" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>        <footer class="section-relative ">
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
