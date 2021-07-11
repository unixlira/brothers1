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
                        <div class="rd-navbar-brand"><a href="../index.html"><img width='135' height='55' src='{{ asset('images/logo_big.png') }}' alt='Smart Veículos'/></a></div>
                    </div>
                    <div class="rd-navbar-menu-wrap">
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-mobile-scroll">
                                <!--Navbar Brand Mobile-->
                                <div class="rd-navbar-mobile-brand"><a href="../index.html"><img width='218' height='35' src='{{ asset('images/logo_big.png') }}' alt=''/></a></div>
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
    </header>
    <!--Carrousel-->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            {{--                <ol class="carousel-indicators">--}}
            {{--                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
            {{--                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
            {{--                </ol>--}}
            <div class="carousel-inner" role="listbox" style="height: 700px;">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('{{ asset("images/background1.jpg") }}')"> </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset("images/background2.jpg") }}')"></div>
            </div>
        </div>
    </section>

    <!-- Grid Car-->
    <section class="" style="background: #ecf1f8 url('{{ asset("images/sectionGrid.png") }}') ;background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
        <div class="container">
            <!-- Search -->
            <div class="sectionSearch ">
                <div id="tabSearch">
                    <ul  class="nav nav-pills">
                        <li class="active">
                            <h5 class="text-black">Localize seu Veículo</h5>
                        </li>
                    </ul>
                    <div class="tab-content clearfix">
                        <form action="search">
                            <div class="tab-pane active" id="1b">
                                <div class="row">
                                <div class="col-sm-5">
                                        <select name="category" id="" style="">
                                            <option value="">Marca</option>
                                            @foreach($newXml as $node)
                                                <option value="">{{ $node['marca'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select name="model" id="">
                                            <option value="">Modelo</option>
                                            @foreach($newXml as $node)
                                                <option value="">{{ $node['modelo'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-danger">Pesquisar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-5 mb-5">
                <h1>AS MELHORES NEGOCIAÇÕES ESTÃO AQUI</h1>
                <hr class="divider divider-lg bg-danger">
            </div>
            <!-- Bootstrap cards-->
            <!-- Testimonials Slider v.4-->
            <div class="owl-carousel owl-carousel-classic owl-carousel-class-light veil-owl-nav owl-carousel-testimonials-3 slide" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-nav="false" data-dots="true" data-margin="50px" data-autoplay="true">

                    @foreach($newXml as $node)
                        <div>
                            <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                                <div class="unit-left"></div>
                                <div class="unit-body text-left">
                                    <div>
                                        <p>
                                            <q><img class="card-img-top" src="{{ $node['fotos']['foto'][0]['url'] }}" alt="" width="250" height="250"></q>
                                        </p>

                                        <p class="container font-weight-bold" >
                                            <cite class="text-normal">{{ $node['marca'] . ' ' . $node['modelo'] . ' ' . substr($node['versao'], 0,  219) }} ...</cite>
                                        </p>
                                        <hr />
                                        <p class="container font-weight-bold" >
                                            <cite class="text-center row">
                                                <i class="novi-icon mdi mdi-speedometer"> {{$node['quilometragem']}}&nbsp; </i>
                                                <i class="novi-icon mdi mdi-speedometer"> {{$node['cambio']}}&nbsp; </i>
                                                <i class="novi-icon mdi mdi-speedometer"> {{$node['cor']}}&nbsp; </i>
                                            </cite>
                                        </p>
                                    </div>

                                </div>
                            </blockquote>
                        </div>
                    @endforeach
            </div>
            <!-- End content -->


            <div class="row justify-content-sm-center offset-top-66">
                <div class="col-sm-5 col-md-3 col-lg-3 col-xl-2"><a class="btn btn-primary d-sm-block" href="find-job.html">view all</a></div>
            </div>
        </div>
    </section>
    <!-- Why People Choose Us-->
    <section class="section-98 section-md-110 bg-gray-light novi-background" data-preset='{"title":"Icon block 2","category":"content, icon","reload":false,"id":"icon-block-2"}'>
        <div class="container">
            <h1>Why People Choose Us</h1>
            <hr class="divider divider-sm bg-darkers">
            <div class="row justify-content-sm-center text-lg-left offset-top-50 offset-xl-top-66">
                <div class="col-md-9 col-lg-4 offset-xl-0">
                    <!-- Icon Box Type 3-->
                    <div class="unit align-items-center unit-spacing-xs unit-xs flex-sm-row text-center text-sm-left">
                        <div class="unit-left"><span class="icon novi-icon text-middle icon-sm text-primary mdi mdi-account-check"></span></div>
                        <div class="unit-body">
                            <h5 class="text-uppercase font-weight-bold">Verified employers</h5>
                        </div>
                    </div>
                    <p class="offset-top-10 text-dark text-center text-sm-left">We pay a lot of attention to the employers we cooperate with and vacancies they submit to our job board.</p>
                </div>
                <div class="col-md-9 col-lg-4 offset-xl-0 offset-top-50 offset-lg-top-0">
                    <!-- Icon Box Type 3-->
                    <div class="unit align-items-center unit-spacing-xs unit-xs flex-sm-row text-center text-sm-left">
                        <div class="unit-left"><span class="icon novi-icon text-middle icon-sm text-primary mdi mdi-chart-bar"></span></div>
                        <div class="unit-body">
                            <h5 class="text-uppercase font-weight-bold">Demanded vacancies</h5>
                        </div>
                    </div>
                    <p class="offset-top-10 text-dark text-center text-sm-left">Our catalog contains only the most demanded vacancies from American and international companies with offices in the US.</p>
                </div>
                <div class="col-md-9 col-lg-4 offset-xl-0 offset-top-50 offset-lg-top-0">
                    <!-- Icon Box Type 3-->
                    <div class="unit align-items-center unit-spacing-xs unit-xs flex-sm-row text-center text-sm-left">
                        <div class="unit-left"><span class="icon novi-icon text-middle icon-sm text-primary mdi mdi-newspaper"></span></div>
                        <div class="unit-body">
                            <h5 class="text-uppercase font-weight-bold">Employment blog</h5>
                        </div>
                    </div>
                    <p class="offset-top-10 text-dark text-center text-sm-left">We have recently launched our employment blog where we review top rated vacancies and give useful advice to our readers.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Building Your Own Job Board Now-->
    <section class="context-dark" data-preset='{"title":"Call to action","category":"content, cta, parallax","reload":true,"id":"cta"}'>
        <div class="parallax-container" data-parallax-img="images/background-02-1920x870.jpg">
            <div class="parallax-content">
                <div class="bg-overlay-gray-darkest">
                    <div class="container section-98">
                        <div class="row align-items-sm-center no-gutters">
                            <div class="col-lg-8 col-xl-10 text-center text-lg-left">
                                <h1>Start Building Your Own Career Now</h1>
                            </div>
                            <div class="col-lg-4 col-xl-2 offset-top-41 offset-lg-top-0"><a class="btn btn-primary btn-block mx-auto d-block" href="your-career-starts-here.html" style="max-width:195px;">get started</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Testimonials","category":"testimonials, content, carousel","reload":true,"id":"testimonials"}'>
        <div class="container">
            <h1>Testimonials</h1>
            <hr class="divider divider-sm bg-darkers">
            <div class="owl-carousel owl-carousel-default owl-carousel-arrows veil-lg-owl-dots veil-owl-nav reveal-lg-owl-nav inset-left-7p inset-right-7p" data-items="1" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
                <div>
                    <div class="row justify-content-sm-center">
                        <div class="col-xl-8">
                            <div class="d-inline-block">
                                <div class="unit unit-xs flex-sm-row unit-spacing-sm text-xs-left">
                                    <div class="unit-left"><img class="rounded-circle" width="60" height="60" src="images/user-brittany-freeman-60x60.jpg" alt="Brittany Freeman"/></div>
                                    <div class="unit-body">
                                        <div>
                                            <div class="h5 text-primary">Brittany Freeman</div>
                                        </div>
                                        <div>
                                            <div class="p text-dark">Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-41">
                                <!-- Quote Simple-->
                                <hr class="hr hr-gradient"/>
                                <div class="h4 text-center text-regular font-italic">
                                    <q>Thank you for the assistance you provided in my job searching. During a short period of using your website I have found several vacancies where my skills can be used.</q>
                                </div>
                                <hr class="hr hr-gradient"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row justify-content-sm-center">
                        <div class="col-xl-8">
                            <div class="d-inline-block">
                                <div class="unit unit-xs unit-xs-horizontal unit-spacing-sm text-xs-left">
                                    <div class="unit-left"><img class="rounded-circle" width="60" height="60" src="images/user-james-newman-60x60.jpg" alt="James Newman"/></div>
                                    <div class="unit-body">
                                        <div>
                                            <div class="h5 text-primary">James Newman</div>
                                        </div>
                                        <div>
                                            <div class="p text-dark">Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-41">
                                <!-- Quote Simple-->
                                <hr class="hr hr-gradient"/>
                                <div class="h4 text-center text-regular font-italic">
                                    <q>I just want to thank you for your help. I was so pleased and grateful. Keep up the excellent work. Your site provides the best support I have ever encountered.</q>
                                </div>
                                <hr class="hr hr-gradient"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row justify-content-sm-center">
                        <div class="col-xl-8">
                            <div class="d-inline-block">
                                <div class="unit unit-xs unit-xs-horizontal unit-spacing-sm text-xs-left">
                                    <div class="unit-left"><img class="rounded-circle" width="60" height="60" src="images/user-jim-johnson-60x60.jpg" alt="Jim Johnson"/></div>
                                    <div class="unit-body">
                                        <div>
                                            <div class="h5 text-primary">Jim Johnson</div>
                                        </div>
                                        <div>
                                            <div class="p text-dark">Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-41">
                                <!-- Quote Simple-->
                                <hr class="hr hr-gradient"/>
                                <div class="h4 text-center text-regular font-italic">
                                    <q>Thank you very much for your rapid response. It's no doubt that your company is worth admiring! I have experienced the fastest support ever.</q>
                                </div>
                                <hr class="hr hr-gradient"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Posts-->
    <section class="section-98 section-md-110 bg-gray-light novi-background" data-preset='{"title":"Blog 1","category":"content, blog","reload":true,"id":"blog-1"}'>
        <div class="container">
            <h1>Latest Blog Posts</h1>
            <hr class="divider divider-sm bg-darkers">
            <div class="row justify-content-sm-center">
                <div class="col-md-9 col-lg-6">
                    <!-- Post Modern-->
                    <article class="post post-modern">
                        <!-- Post media-->
                        <header class="post-media novi-excluded">
                            <div class="embed-responsive embed-custom-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/-AhmuMqZB0s?wmode=transparent"></iframe>
                            </div>
                        </header>
                        <!-- Post content-->
                        <section class="post-content text-left novi-excluded">
                            <div class="post-meta small pull-sm-right"><span class="text-middle icon-xxs mdi mdi-clock text-primary novi-icon"></span>
                                <time class="font-italic text-middle text-dark" datetime="2018-01-01">2 days ago</time>
                            </div>
                            <ul class="list-inline offset-top-14 offset-md-top-0">
                                <li class="list-inline-item text-middle">
                                    <div class="post-tags group-xs"><a class="label-custom label-lg-custom label-rounded-custom label-primary" href="#">Business</a>
                                    </div>
                                </li>
                                <li class="list-inline-item text-middle">
                                    <div class="icon icon-xxs text-dark novi-icon mdi mdi-video"></div>
                                </li>
                            </ul>
                            <!-- Post Title-->
                            <div class="post-title">
                                <h6 class="offset-top-24"><a href="blog.html">Intense tutorial: Writing a proper resume and autobiography for young specialists</a></h6>
                            </div>
                            <!-- Post Body-->
                            <div class="post-body offset-top-20">
                                <p>Nowadays many companies are looking for young specialists that have some professional potential. Young graduates can easily attract employer’s attention by writing a proper resume.</p>
                            </div>
                        </section>
                    </article>
                    <div class="offset-top-30">
                        <!-- Post Modern-->
                        <article class="post post-modern">
                            <!-- Post media-->
                            <header class="post-media novi-excluded"><img class="img-fluid img-cover" width="570" height="321" src="images/home-01-570x321.jpg" alt=""/>
                            </header>
                            <!-- Post content-->
                            <section class="post-content text-left novi-excluded">
                                <div class="post-meta small pull-sm-right"><span class="text-middle icon-xxs mdi mdi-clock text-primary novi-icon"></span>
                                    <time class="font-italic text-middle text-dark" datetime="2018-01-01">7 days ago</time>
                                </div>
                                <ul class="list-inline offset-top-14 offset-md-top-0">
                                    <li class="list-inline-item text-middle">
                                        <div class="post-tags group-xs"><a class="label-custom label-lg-custom label-rounded-custom label-primary" href="#">Lifestyle</a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item text-middle">
                                        <div class="icon icon-xxs text-dark novi-icon mdi mdi-instagram"></div>
                                    </li>
                                </ul>
                                <!-- Post Title-->
                                <div class="post-title">
                                    <h6 class="offset-top-24"><a href="blog.html">How to impress your future employer</a></h6>
                                </div>
                                <!-- Post Body-->
                                <div class="post-body offset-top-20">
                                </div>
                            </section>
                        </article>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6 offset-top-30 offset-lg-top-0">
                    <!-- Post Modern-->
                    <article class="post post-modern">
                        <!-- Post media-->
                        <!-- Post content-->
                        <section class="post-content text-left novi-excluded">
                            <div class="post-meta small pull-sm-right"><span class="text-middle icon-xxs mdi mdi-clock text-primary novi-icon"></span>
                                <time class="font-italic text-middle text-dark" datetime="2018-01-01">3 days ago</time>
                            </div>
                            <ul class="list-inline offset-top-14 offset-md-top-0">
                                <li class="list-inline-item text-middle">
                                    <div class="post-tags group-xs"><a class="label-custom label-lg-custom label-rounded-custom label-primary" href="#">News</a>
                                    </div>
                                </li>
                                <li class="list-inline-item text-middle">
                                    <div class="icon icon-xxs text-dark novi-icon mdi mdi-pen"></div>
                                </li>
                            </ul>
                            <!-- Post Title-->
                            <div class="post-title">
                                <h6 class="offset-top-24"><a href="blog.html">Top 50 international companies to consider your potential employer.</a></h6>
                            </div>
                            <!-- Post Body-->
                            <div class="post-body offset-top-20">
                                <p>There are thousands of possibilities that can help you find the job of your dream. But how many of them will really lead you to the success of working at the well-known international company? Let’s find it out.</p>
                            </div>
                        </section>
                    </article>
                    <div class="offset-top-30">
                        <!-- Post Modern-->
                        <article class="post post-modern">
                            <!-- Post media-->
                            <header class="post-media novi-excluded">
                                <div class="post-inset">
                                    <div class="soundcloud-player-classic"><iframe height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/149065581&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
                                </div>
                            </header>
                            <!-- Post content-->
                            <section class="post-content text-left novi-excluded">
                                <div class="post-meta small pull-sm-right"><span class="text-middle icon-xxs mdi mdi-clock text-primary novi-icon"></span>
                                    <time class="font-italic text-middle text-dark" datetime="2018-01-01">5 days ago</time>
                                </div>
                                <ul class="list-inline offset-top-14 offset-md-top-0">
                                    <li class="list-inline-item text-middle">
                                        <div class="post-tags group-xs"><a class="label-custom label-lg-custom label-rounded-custom label-primary" href="#">Music</a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item text-middle">
                                        <div class="icon icon-xxs text-dark novi-icon mdi mdi-soundcloud"></div>
                                    </li>
                                </ul>
                                <!-- Post Title-->
                                <div class="post-title">
                                    <h6 class="offset-top-24"><a href="blog.html">Top 5 tracks to enhance your working process: from rock to electronic music.</a></h6>
                                </div>
                                <!-- Post Body-->
                                <div class="post-body offset-top-20">
                                </div>
                            </section>
                        </article>
                    </div>
                    <div class="offset-top-30">
                        <!-- Post Modern-->
                        <article class="post post-modern">
                            <!-- Post media-->
                            <header class="post-media novi-excluded"><img class="img-fluid img-cover" width="571" height="321" src="images/home-02-570x321.jpg" alt=""/>
                            </header>
                            <!-- Post content-->
                            <section class="post-content text-left novi-excluded">
                                <div class="post-meta small pull-sm-right"><span class="text-middle icon-xxs mdi mdi-clock text-primary novi-icon"></span>
                                    <time class="font-italic text-middle text-dark" datetime="2018-01-01">2 days ago</time>
                                </div>
                                <ul class="list-inline offset-top-14 offset-md-top-0">
                                    <li class="list-inline-item text-middle">
                                        <div class="post-tags group-xs"><a class="label-custom label-lg-custom label-rounded-custom label-primary" href="#">Business</a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item text-middle">
                                        <div class="icon icon-xxs text-dark novi-icon mdi mdi-image"></div>
                                    </li>
                                </ul>
                                <!-- Post Title-->
                                <div class="post-title">
                                    <h6 class="offset-top-24"><a href="blog.html">Teamwork as a vital element of your own success and career promotion.</a></h6>
                                </div>
                                <!-- Post Body-->
                                <div class="post-body offset-top-20">
                                    <p>It is widely known that teamwork is very important to successful completion of any idea. Nevertheless, some projects based on the principle of cooperation often lack some simple but effective features.</p>
                                </div>
                            </section>
                        </article>
                    </div>
                </div>
                <div class="col-12 offset-top-66"><a class="btn btn-primary" href="blog.html">view all blog posts</a></div>
            </div>
        </div>
    </section>
    <!-- Page Footer-->
    <!-- Default footer-->
    <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-darkest novi-background" data-preset='{"title":"Footer","category":"footer","reload":true,"id":"footer"}'>
        <div class="container">
            <div class="row justify-content-md-center text-lg-left">
                <div class="col-md-8 col-lg-12">
                    <div class="row justify-content-sm-center">
                        <div class="col-lg-3">
                            <!-- Footer brand-->
                            <div class="footer-brand"><a href="index.html"><img width='218' height='35' src='images/logo.png' alt=''/></a></div>
                            <ul class="list-inline list-inline-sm d-inline-block offset-top-34 post-meta text-dark list-inline-primary">
                                <li class="list-inline-item"><a href="#"><span class="icon icon-xxs fa-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon icon-xxs fa-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon icon-xxs fa-google-plus"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon icon-xxs fa-youtube-play"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon icon-xxs fa-instagram"></span></a></li>
                            </ul>
                            <p class="text-dark offset-top-10">Intense JB &copy; <span id="copyright-year"></span> . <a href="#">Privacy Policy</a>
                                . Design&nbsp;by&nbsp;<a href="https://zemez.io/">Zemez</a>
                            </p>
                        </div>
                        <div class="col-sm-10 col-lg-5 offset-top-50 offset-lg-top-0">
                            <h6 class="text-uppercase text-spacing-60 font-default text-white">Newsletter</h6>
                            <div class="inset-xl-right-80">
                                <p class="text-muted">Keep up with our always upcoming  news and updates. Enter your e-mail and subscribe to our newsletter.</p>
                            </div>
                            <div class="offset-top-30">
                                <div class="inset-xl-right-93">
                                    <form class="rd-mailform" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                        <div class="form-group">
                                            <div class="input-group input-group-sm"><span class="input-group-prepend"><span class="input-group-text input-group-icon"><span class="mdi mdi-email"></span></span></span>
                                                <input class="form-control" placeholder="Type your E-Mail" type="email" name="email" data-constraints="@Required @Email"><span class="input-group-append">
                                    <button class="btn btn-sm btn-primary" type="submit">Subscribe</button></span>
                                            </div>
                                        </div>
                                        <div class="form-output" id="form-subscribe-footer"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2 offset-top-50 offset-lg-top-0 text-sm-left">
                            <h6 class="text-uppercase text-spacing-60 font-default text-white">Cities</h6>
                            <div class="d-block">
                                <div class="d-inline-block">
                                    <ul class="list list-unstyled list-inline-primary">
                                        <li class="list-inline-item text-primary"><a href="#">New York</a></li>
                                        <li class="list-inline-item text-primary"><a href="#">San Diego</a></li>
                                        <li class="list-inline-item text-primary"><a href="#">Los Angeles</a></li>
                                        <li class="list-inline-item text-primary"><a href="#">Boston</a></li>
                                        <li class="list-inline-item text-primary"><a href="#">Washington</a></li>
                                        <li class="list-inline-item text-primary"><a href="#">Chicago</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2 offset-top-50 offset-lg-top-0 text-sm-left">
                            <h6 class="text-uppercase text-spacing-60 font-default text-white">Categories</h6>
                            <div class="d-block">
                                <div class="d-inline-block">
                                    <ul class="list list-unstyled list-inline-primary">
                                        <li class="list-inline-item text-primary"><a href="#">Healthcare</a></li>
                                        <li class="list-inline-item text-primary"><a href="#">Automobile Jobs</a></li>
                                        <li class="list-inline-item text-primary"><a href="#">Food Services</a></li>
                                        <li class="list-inline-item text-primary"><a href="#">Construction</a></li>
                                        <li class="list-inline-item text-primary"><a href="#">Logistics</a></li>
                                        <li class="list-inline-item text-primary"><a href="#">Finance</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Java script-->
<script type="text/javascript"  src="{{ asset("js/core.min.js") }}"></script>
<script type="text/javascript"  src="{{ asset("js/scripts.js") }}"></script>
</body>
</html>
