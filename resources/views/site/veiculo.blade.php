<!DOCTYPE html>
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
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
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
                        <div class="rd-navbar-brand"><a href="/"><img width='135' height='55' src='{{ asset('images/logo_big.png') }}' alt='Smart Veículos'/></a></div>
                    </div>
                    <div class="rd-navbar-menu-wrap">
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-mobile-scroll">
                                <!--Navbar Brand Mobile-->
                                <div class="rd-navbar-mobile-brand"><a href="/"><img width='218' height='35' src='{{ asset('images/logo_big.png') }}' alt=''/></a></div>
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
                                    <li><p href="" style="margin-top: -15px;margin-left: -50px !important;">
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
        <div class="section-110 parallax-container" data-parallax-img="{{ asset('images/bg-carros.jpg') }}"></div>
    </header>
    <section class="aside">
        <div>
            <h2>Employee Photo</h2>
            <img src="http://placehold.it/350x150" />
        </div>
    </section>
    <section class="container mb-5">

        <div class="w-75 pull-base thum">
            <div class="mt-5 mb-5">
                <h3 class="text-left">{{ $busca[0]['marca'] .' '. $busca[0]['modelo']}}<br> {{$busca[0]['versao']}}</h3>
                <div class="text-bold text-right" style="margin-top: -76px;">
                    <span style="background-color: #eb232c;color: white;padding: 10px;font-size: 30px">{{$busca[0]['preco']}}</span>
                </div>
            </div>
            @foreach($busca as $node)
                @foreach($node['fotos']['foto'] as $foto)
                    <div class="mySlides">
                        <img src="{{$foto['url']}}" style="width:100%">
                    </div>
                @endforeach
            @endforeach

{{--            <a class="prev" onclick="plusSlides(-1)">❮</a>--}}
{{--            <a class="next" onclick="plusSlides(1)">❯</a>--}}
        </div>

        <div class="w-75 pull-base mt-2">
            <div class="owl-carousel owl-carousel-default owl-carousel-class-light" data-loop="true" data-items="1" data-md-items="2" data-dots="true" data-mouse-drag="false" data-lg-items="5" data-nav="false" data-xs-margin="30px" data-autoplay="true">
                @foreach($busca as $node)
                    @foreach($node['fotos']['foto'] as $foto)
                        <div class="mr-5">
                            <figure><img width="174" height="140" src="{{$foto['url']}}" alt="{{$node['modelo']}}" onclick="currentSlide({{$foto['ordem']}})"/>
                            </figure>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        <br><br>
        <div class="w-75 pull-base" style="margin-top: -30px;">
            <hr>
            <h5 class="text-left">Informações</h5>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <i class="novi-icon fa fa-road mr-3" style="color: #888888"> Kilometragem </i>
                         {{$busca[0]['quilometragem']}}&nbsp;
                    </div>
                    <div class="col-sm">
                        <i class="novi-icon mdi mdi-gas-station mr-3" style="color: #888888"> Combustível&nbsp; </i>
                        {{$busca[0]['combustivel']}}
                    </div>
                    <div class="col-sm">
                        <i class="novi-icon fa fa-cog mr-3" style="color: #888888"> Transmissão&nbsp; </i>
                        {{$busca[0]['cambio']}}
                    </div>
                    <div class="col-sm">
                        <i class="novi-icon fa fa-adjust mr-3" style="color: #888888"> Cor Exterior</i>
                        {{$busca[0]['cor']}}&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="w-75 pull-base" style="margin-top: -30px;">
            <hr>
            <h5 class="text-left">Adicionais</h5>
            <div class="container">
                <div class="row">
                    @foreach($busca as $node)
                        @foreach($node['opcionais']['opcional'] as $opcional)
                            <div class="col-sm-4 text-left">
                                <i class="novi-icon fa fa-check-circle mr-3 text-red"></i>
                                <span>{{$opcional}}&nbsp;</span>
                            </div>
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
        <br><br>
        @if(!empty($busca[0]['observacoes']))
        <div class="w-75 pull-base" style="margin-top: -30px;">
            <hr>
            <h5 class="text-left">Detalhes</h5>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <i class="novi-icon fa fa-check-circle mr-3 text-red"></i>
                        <span>{{$busca[0]['observacoes']}}&nbsp;</span>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </section>




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
                                Tel: (15) 3035-4751</p>
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
                                Tel: (15) 3357-7007</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-xl-4 offset-top-50 offset-lg-top-0">
                    <div class="unit unit-sm flex-md-row text-md-left">
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
<!-- Java script-->
<script type="text/javascript"  src="{{ asset("js/core.min.js") }}"></script>
<script type="text/javascript"  src="{{ asset("js/scripts.js") }}"></script>
<script>
    let slideIndexCar = 1;
    showSlides(slideIndexCar);

    function plusSlides(n) {
        showSlides(slideIndexCar += n);
    }

    function currentSlide(n) {
        showSlides(slideIndexCar = n);
    }

    function showSlides(n) {

        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");

        if (n > slides.length) {slideIndexCar = 1}
        if (n < 1) {slideIndexCar = slides.length}

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndexCar-1].style.display = "block";
        dots[slideIndexCar-1].className += " active";

    }
</script>
</body>
</html>
