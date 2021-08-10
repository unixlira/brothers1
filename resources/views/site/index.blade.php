<!DOCTYPE html>
<html class="wow-animation" lang="en">
<head>
    <title>Smart Veículos</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="Smart Veículos">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,700italic">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <script src="//code-sa1.jivosite.com/widget/zhp7E8bDRU" async></script>
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
    <header class="page-head slider-menu-position">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-floated rd-navbar-dark rd-navbar-dark-transparent"  data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
                <div class="rd-navbar-inner">
                    <div class="container section-relative d-flex justify-content-between">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel ">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle toggle-original " data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand "><a href="/"><img src='{{ asset('images/logo_big2.png') }}' alt='Smart Veículos'/></a></div>
                        </div>
                        <div class="rd-navbar-menu-wrap">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll hoverLink">
                                    <!--Navbar Brand Mobile-->
                                    <div class="rd-navbar-mobile-brand"><a href="/"><img width='90' height='35' src='{{ asset('images/logo_big.png') }}' alt=''/></a></div>
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li><a href="{{url('analise')}}"><span class="text-bold text-uppercase">Análise de Crédito</span></a>
                                        </li>
                                        <li><a href="{{url('empresa')}}"><span class="text-bold text-uppercase">Empresa</span></a>
                                        </li>
                                        <li><a href="{{url('contato')}}"><span class="text-bold text-uppercase">Contato</span></a>
                                        </li>
                                        <li><a href="{{url('compras')}}" ><span class="tagRed-outline text-bold text-uppercase">Venda seu Carro</span></a>
                                        </li>
                                        <li><a href="{{url('veiculos')}}"><span class="tagRed text-bold text-uppercase">Nossos Veículos</span></a>
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
    </header>
    <!--Carrousel-->
    <section class="carrousselIndex">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            {{--                <ol class="carousel-indicators">--}}
            {{--                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
            {{--                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
            {{--                </ol>--}}
            <div id="tamanhoSection"" " class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <img class="carousel-item active img1" src="{{ asset("images/background1.jpg") }}" />
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <img class="carousel-item" src="{{ asset("images/background2.jpg") }}" />
            </div>
        </div>
    </section>
    
    <section class="sectionSlideCar1" style="background: #ecf1f8 url('{{ asset("images/sectionGrid.png") }}') ;background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container   form-buscar  pb-5">
        <h3 class="text-black text-center ">Localize seu Veículo</h3>
            <form action="{{ route('buscar') }}" method="GET">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-5 mb-1">
                        <div class="form-group">
                        
                            <select id="marca" name="marca">
                                <option value="false" selected="selected">Marca</option>
                                @foreach($selectMarca as $node)
                                    <option value="{{ $node['marca'] }}">{{ $node['marca'] }}</option>
                                @endforeach
                            </select>                        
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-5 mb-1" id="modelo">
                        <div class="form-group">
                            <select name="modelo" >
                                <option value="false" selected="selected">Modelo</option>
                                @foreach($selectModelo as $node)
                                    <option value="{{ $node['modelo'] }}">{{ $node['modelo'] }}</option>
                                @endforeach
                            </select>                        
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-5 mb-1" id="select2" style="display: none;">
                        <div class="form-group">
                            <select name ="modelo" id="showModelo">
                                <option value="false">Modelo</option>
                            </select>                    
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-2 mb-1">
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger btn-block" id="sent"><i class="novi-icon fa fa-search"></i> Buscar</button>
                        </div>
                    </div>
                </div>
            </form>            
        </div>
        
        <div class="container">
            <div class="mt-5">
                <h1>AS MELHORES NEGOCIAÇÕES ESTÃO AQUI</h1>
                <hr class="divider divider-lg bg-danger">
            </div><br>
            <div class="owl-carousel owl-carousel-classic owl-carousel-class-light veil-owl-nav owl-carousel-testimonials-3 slide" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-nav="false" data-dots="true" data-margin="50px" data-autoplay="true" data-loop="true">
                @foreach($newXml as $node)
                    <div>
                        <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                            <div class="unit-left"></div>
                            <div class="unit-body text-left" style="background-color: white;padding: 25px;border-radius: 10px; width:auto;">
                            <div>
                                    <p>
                                        <q><a href="{{'/veiculos/'.$node['idveiculo']}}"><img class="card-img-top" src="{{ $node['fotos']['foto'][0]['url'] }}" alt="{{$node['modelo']}}" width="250" height="250"></q></a>
                                    </p>
                                    <div class="">
                                        <div class="text-center">
                                            <h5>{{$node['modelo']}}</h5>
                                        </div>
                                        <p class="font-weight-bold text-center" >
                                            <h7 class="text-normal">
                                                @switch($node['cambio'])

                                                    @case('Manual')

                                                        {{ substr(str_replace('MANUAL','',$node['versao']), 0,  36) }}

                                                        @break


                                                    @case('Automático')

                                                        {{ (strpos($node['versao'], 'AUTOMÁTICO') == true ? substr(str_replace('AUTOMÁTICO','',$node['versao']), 0,  36) : substr(str_replace('AUTOMATIZADO','',$node['versao']), 0,  36)) }}

                                                        @break

                                        
                                                    @default

                                                        {{ substr($node['versao'], 0,  36) }}

                                                @endswitch
                                            </h7>
                                        </p>
                                        <hr/>  
                                        <div class="text-center mb-3">
                                            <h3 class="text-danger">{{$node['preco']}}</h3>
                                        </div>
 
                                        <div class="row justify-content-center font-weight-bold ">
                                            <div class="mr-4 ">
                                                <div class="">
                                                    <div class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="29.416" height="14" viewBox="0 0 29.416 15.56"> 
                                                         <path  d="M29.416,177.747v6.087a.49.49,0,0,1-.49.49H27.761a.49.49,0,0,1,0-.981h.674v-5.6a2.456,2.456,0,0,0-1.009-1.983,15.9,15.9,0,0,0-9.959-3.177l.319,2.458a.49.49,0,0,1-.972.126l-.324-2.5a14.229,14.229,0,0,0-7.853,3.689H21.024a2.441,2.441,0,0,0,1.907-.912.49.49,0,0,1,.763.616,3.417,3.417,0,0,1-2.67,1.276H7.512l-5.454,1.515a1.475,1.475,0,0,0-1.077,1.417v2.939h.735a.49.49,0,0,1,0,.981H.49a.49.49,0,0,1-.49-.49v-3.429a2.459,2.459,0,0,1,1.8-2.362l5.381-1.495c5.34-5.578,13.631-6.671,20.826-1.448a3.44,3.44,0,0,1,1.414,2.776Zm-19.3,5.97a3.432,3.432,0,1,1-3.432-3.432A3.436,3.436,0,0,1,10.112,183.717Zm-.981,0a2.451,2.451,0,1,0-2.451,2.451A2.454,2.454,0,0,0,9.131,183.717Zm17.037,0a3.432,3.432,0,1,1-3.432-3.432A3.436,3.436,0,0,1,26.168,183.717Zm-.981,0a2.451,2.451,0,1,0-2.451,2.451A2.454,2.454,0,0,0,25.187,183.717Zm-7.231-.368H11.644a.49.49,0,0,0,0,.981h6.312a.49.49,0,0,0,0-.981Z" transform="translate(0 -171.589)" fill="#eb232c"/> 
                                                        </svg>
                                                        {{$node['anomodelo']}}				
                                                    </div>
                                                    <div class="dado cor">
                                                        <svg id="art" xmlns="http://www.w3.org/2000/svg" width="21.931" height="19" viewBox="0 0 21.931 20.853"> 
                                                          <path  d="M21.631,12.874C21,12.245,19.74,12.6,17.66,14a42.768,42.768,0,0,0-5.968,5.072c-3.086,3.086-5.432,6.116-6.213,7.987a2.72,2.72,0,0,0-.4-.111,3.134,3.134,0,0,0-2.409.561,3.5,3.5,0,0,0-1.351,1.976,5.769,5.769,0,0,1-1.2,2.25.512.512,0,0,0,.047.715,3.885,3.885,0,0,0,2.617.976,4.743,4.743,0,0,0,2.745-.91,5.509,5.509,0,0,0,.759-.662,3.267,3.267,0,0,0,.877-2.725C9,28.473,12.2,26.039,15.429,22.813A42.767,42.767,0,0,0,20.5,16.845C21.9,14.765,22.26,13.5,21.631,12.874ZM5.542,31.158a4.463,4.463,0,0,1-.605.527,3.36,3.36,0,0,1-3.7.293A6.763,6.763,0,0,0,2.312,29.74h0q0-.013.006-.027a2.5,2.5,0,0,1,.947-1.368,2.109,2.109,0,0,1,1.615-.389,1.571,1.571,0,0,1,1.04.706A2.112,2.112,0,0,1,5.542,31.158ZM6.819,28.17a1.9,1.9,0,0,0-.455-.567A12.32,12.32,0,0,1,7.9,25l1.6,1.6A12.093,12.093,0,0,1,6.819,28.17Zm3.512-2.184L8.519,24.175c.313-.4.652-.821,1.013-1.248l2.048,2.048Q10.929,25.524,10.331,25.987ZM19.5,16.5a42.933,42.933,0,0,1-4.79,5.586c-.813.813-1.6,1.552-2.349,2.214L10.2,22.151c.683-.772,1.427-1.565,2.213-2.351A42.95,42.95,0,0,1,18,15.01c2.052-1.42,2.761-1.422,2.9-1.4C20.918,13.742,20.915,14.45,19.5,16.5Z" transform="translate(0.001 -12.575)" fill="#eb232c"/> </g> </g> <g id="Grupo_547" data-name="Grupo 547" transform="translate(3.05 17.136)"> <g id="Grupo_546" data-name="Grupo 546"> <path id="Caminho_867" data-name="Caminho 867" d="M73.256,412.7a.512.512,0,0,0-.7.2.371.371,0,0,1-.05.07,2.446,2.446,0,0,1-.295.255,1.939,1.939,0,0,1-.636.3.512.512,0,1,0,.259.991,2.959,2.959,0,0,0,.972-.459,4.744,4.744,0,0,0,.45-.392,1.394,1.394,0,0,0,.2-.273A.512.512,0,0,0,73.256,412.7Z" transform="translate(-71.198 -412.635)" fill="#eb232c"/>
                                                        </svg>
                                                        {{$node['cor']}}				
                                                    </div>
                                                </div>
                                            </div>
                                                <div>
                                                    <div class="">
                                                        <div class="dado quilometragem">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.85" height="18" viewBox="0 0 25.85 22.403"> 
                                                                <path id="Caminho_868" data-name="Caminho 868" d="M26.557,12.462H25.7a.431.431,0,0,0-.431.431v3.877H24.4V12.462a1.3,1.3,0,0,0-1.292-1.292H20.526V9.447h4.308a.431.431,0,0,0,.431-.431V8.154A2.154,2.154,0,0,0,23.111,6H14.494A2.154,2.154,0,0,0,12.34,8.154v.862a.431.431,0,0,0,.431.431h4.308V11.17h-3.4a.407.407,0,0,0-.246.078L9.191,14.186H6.739a1.3,1.3,0,0,0-1.292,1.292v5.6H4.585V17.2a.431.431,0,0,0-.431-.431H3.292A1.3,1.3,0,0,0,2,18.063V26.68a1.3,1.3,0,0,0,1.292,1.292h.862a.431.431,0,0,0,.431-.431V23.664h.862v3.447A1.3,1.3,0,0,0,6.739,28.4H18.673a1.3,1.3,0,0,0,1.18-.767l1.383-3.111h2.736a.431.431,0,0,0,.431-.431V19.356h.862v3.877a.431.431,0,0,0,.431.431h.862a1.3,1.3,0,0,0,1.292-1.292V13.755a1.3,1.3,0,0,0-1.292-1.292ZM3.723,27.111H3.292a.431.431,0,0,1-.431-.431V18.063a.431.431,0,0,1,.431-.431h.431ZM5.447,22.8H4.585v-.862h.862ZM13.2,8.585V8.154a1.3,1.3,0,0,1,1.292-1.292h8.617A1.3,1.3,0,0,1,24.4,8.154v.431Zm6.462.862V11.17H17.941V9.447Zm3.877,14.217H20.956a.425.425,0,0,0-.392.254l-1.5,3.369a.431.431,0,0,1-.392.254H6.739a.431.431,0,0,1-.431-.431V15.478a.431.431,0,0,1,.431-.431H9.324a.426.426,0,0,0,.246-.078l4.239-2.938h9.3a.431.431,0,0,1,.431.431Zm1.723-5.17H24.4v-.862h.862Zm1.723,3.877a.431.431,0,0,1-.431.431h-.431V13.324h.431a.431.431,0,0,1,.431.431Z" transform="translate(-2 -6)" fill="#eb232c"/> <path id="Caminho_871" data-name="Caminho 871" d="M48,22h.862v.862H48Z" transform="translate(-28.182 -15.107)" fill="#eb232c"/> <path id="Caminho_872" data-name="Caminho 872" d="M44,22h.862v.862H44Z" transform="translate(-25.905 -15.107)" fill="#eb232c"/> <path id="Caminho_873" data-name="Caminho 873" d="M14,52h.862v.862H14Z" transform="translate(-8.83 -32.182)" fill="#eb232c"/> <path id="Caminho_874" data-name="Caminho 874" d="M18,52h.862v.862H18Z" transform="translate(-11.107 -32.182)" fill="#eb232c"/> 
                                                            </svg>
                                                            {{$node['quilometragem']}} Km
                                                        </div>
                                                        <div class="dado cambio">
                                                            <svg id="car" xmlns="http://www.w3.org/2000/svg" width="22.587" height="19" viewBox="0 0 22.587 22.587"> 
                                                                <path id="Caminho_875" data-name="Caminho 875" d="M194.259,216a2.259,2.259,0,1,0,2.259,2.259A2.261,2.261,0,0,0,194.259,216Zm0,3.765a1.506,1.506,0,1,1,1.506-1.506A1.507,1.507,0,0,1,194.259,219.765Z" transform="translate(-192 -216)" fill="#eb232c"/> </g> </g> <g id="Grupo_551" data-name="Grupo 551"> <g id="Grupo_550" data-name="Grupo 550"> <path id="Caminho_876" data-name="Caminho 876" d="M11.294,0A11.294,11.294,0,1,0,22.587,11.294,11.306,11.306,0,0,0,11.294,0Zm0,21.834A10.541,10.541,0,1,1,21.834,11.294,10.552,10.552,0,0,1,11.294,21.834Z" fill="#eb232c"/> </g> </g> <g id="Grupo_553" data-name="Grupo 553" transform="translate(2.259 2.259)"> <g id="Grupo_552" data-name="Grupo 552"> <path id="Caminho_877" data-name="Caminho 877" d="M57.035,48a9.035,9.035,0,1,0,9.035,9.035A9.045,9.045,0,0,0,57.035,48Zm0,.753a8.294,8.294,0,0,1,7.728,5.309l-2.82.94A4.067,4.067,0,0,1,59,54.86a4.835,4.835,0,0,0-3.923,0l-.143.063a4.088,4.088,0,0,1-2.706.214l-3.016-.8A8.3,8.3,0,0,1,57.035,48.753Zm-8.282,8.282c0-.077,0-.153.006-.229l.261.087a10.037,10.037,0,0,1,6.8,8.334A8.294,8.294,0,0,1,48.753,57.035Zm8.282,8.282c-.149,0-.3,0-.446-.012a10.787,10.787,0,0,0-7.331-9.125l-.443-.148a8.236,8.236,0,0,1,.178-.978l3.036.81a4.842,4.842,0,0,0,3.206-.253l.143-.063a4.081,4.081,0,0,1,3.313,0,4.82,4.82,0,0,0,3.489.168l2.82-.94a8.217,8.217,0,0,1,.253,1.256l-.443.148A10.787,10.787,0,0,0,57.48,65.3C57.333,65.312,57.184,65.317,57.035,65.317Zm1.211-.089a10.037,10.037,0,0,1,6.8-8.334l.261-.087c0,.076.006.152.006.229A8.294,8.294,0,0,1,58.246,65.227Z" transform="translate(-48 -48)" fill="#eb232c"/> 
                                                            </svg>
                                                            {{$node['cambio']}}				
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <a href="{{'/veiculos/'.$node['idveiculo']}}" class="btn btn-danger btn-block mb-3"> Estou interessado</a>
                                    </div>                             
                                </div>
                            </div>
                        </blockquote>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section section-85" >
        <div class="container twoPictures" >
            <div class="row justify-content-sm-center" >
                <div class="col-md-6 col-lg-6 mb-2">
                    <a class="thumbnail-apollo" href="/compras">
                        <figure><img  src="{{ asset("images/compramos.jpg") }}" alt="Compramos seu veículo"/></figure></a>
                </div>
                <div class="col-md-6 col-lg-6 ">
                    <a class="thumbnail-apollo" href="/analise">
                        <figure><img src="{{ asset("images/financia.jpg") }}" alt="Analise de crédito"/></figure></a>
                </div>
            </div>
        </div>
    </section>
    <section  class="section-41  novi-background" >
        <div class="mb-5">
            <h1>MILHARES DE OPÇÕES PARA VOCÊ</h1>
        </div>
        <div class="container">
            <div class="owl-carousel owl-carousel-default owl offset-top-50 veil-owl-nav veil-lg-owl-dots reveal-lg-owl-nav owl-loaded" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-nav="true" data-dots="true" data-margin="50px" data-autoplay="false" data-loop="false" data-nav="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;,&quot;owl-next mdi mdi-chevron-right&quot;]">
                <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                    <div class="unit-left ml-5"></div>
                    <div class="unit-body">
                        <div>
                            <p>
                                <q><a href="/buscar?marca=CITROEN&modelo=false"><img class="card-img-top img-fluid" src="{{ asset("images/citroen-c3.jpg") }}" alt="CITROEN" width="180" height="220"></a></q>
                            </p>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                    <div class="unit-left"></div>
                    <div class="unit-body">
                        <div>
                            <p>
                                <q><a href="/buscar?marca=RENAULT&modelo=false"><img class="card-img-top img-fluid" src="{{ asset("images/duster.jpg") }}" alt="RENAULT" width="150" height="220"></a></q>
                            </p>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                    <div class="unit-left"></div>
                    <div class="unit-body">
                        <div>
                            <p>
                                <q><a href="/buscar?marca=FORD&modelo=false"><img class="card-img-top img-fluid" src="{{ asset("images/ford-ecosport.png") }}" alt="FORD" width="150" height="220"></a></q>
                            </p>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                    <div class="unit-left"></div>
                    <div class="unit-body">
                        <div>
                            <p>
                                <q><a href="/buscar?marca=&modelo=false"><img class="card-img-top img-fluid" src="{{ asset("images/hb20.jpg") }}" alt="HYUNDAI" width="150" height="220"></a></q>
                            </p>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                    <div class="unit-left"></div>
                    <div class="unit-body">
                        <div>
                            <p>
                                <q><a href="/buscar?marca=NISSAN&modelo=false"><img class="card-img-top img-fluid" src="{{ asset("images/march.jpg") }}" alt="NISSAN" width="150" height="220"></a></q>
                            </p>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                    <div class="unit-left"></div>
                    <div class="unit-body">
                        <div>
                            <p>
                                <q><a href="/buscar?marca=FIAT&modelo=false"><img class="card-img-top img-fluid" src="{{ asset("images/argo.png") }}" alt="FIAT" width="150" height="220"></a></q>
                            </p>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                    <div class="unit-left"></div>
                    <div class="unit-body">
                        <div>
                            <p>
                                <q><a href="/buscar?marca=CHEVROLET&modelo=false"><img class="card-img-top img-fluid" src="{{ asset("images/onix.jpg") }}" alt="CHEVROLET" width="150" height="220"></a></q>
                            </p>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                    <div class="unit-left"></div>
                    <div class="unit-body">
                        <div>
                            <p>
                                <q><a href="/buscar?marca=VOLKSWAGEN&modelo=false"><img class="card-img-top img-fluid" src="{{ asset("images/polo.png") }}" alt="VOLKSWAGEN" width="150" height="220"></a></q>
                            </p>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                    <div class="unit-left"></div>
                    <div class="unit-body">
                        <div>
                            <p>
                                <q><a href="/buscar?marca=TOYOTA&modelo=false"><img class="card-img-top img-fluid" src="{{ asset("images/toyota-corolla.jpg") }}" alt="TOYOTA" width="150" height="220"></a></q>
                            </p>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                    <div class="unit-left"></div>
                    <div class="unit-body">
                        <div>
                            <p>
                                <q><a href="/buscar?marca=HONDA&modelo=false"><img class="card-img-top img-fluid" src="{{ asset("images/honda.png") }}" alt="HONDA" width="150" height="220"></a></q>
                            </p>
                        </div>
                    </div>
                </blockquote>
            </div>
        </div>
        <div class="col-12 offset-top-66"><a class="btn btn-danger" href="/veiculos">Ver todas marcas</a></div>
    </section>
    <section class="" style="background: #ecf1f8 url('{{ asset("images/bg-carros.jpg") }}') ;background-repeat: no-repeat;background-size: 100% 100%;height: 980px;">
        <div class="container">
            <div class="mt-5 mb-5">
                <br><br>
                <h1 class="text-white ">Novidades</h1>
                <hr class="divider divider-lg bg-danger">
            </div>
            <div class="owl-carousel owl-carousel-classic owl-carousel-class-light veil-owl-nav owl-carousel-testimonials-3 slide" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-nav="false" data-dots="true" data-margin="50px" data-autoplay="true" data-loop="true">
                @foreach($newXml as $node)
                    <div>
                        <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                            <div class="unit-left"></div>
                            <div class="unit-body text-left" style="background-color: white;padding: 25px;border-radius: 10px;">
                                <div>   
                                    <p>
                                        <q><a href="{{'/veiculos/'.$node['idveiculo']}}"><img class="card-img-top" src="{{ $node['fotos']['foto'][0]['url'] }}" alt="{{$node['modelo']}}" width="250" height="250"></q></a>
                                    </p>
                                    <div class="">
                                        <div class="text-center">
                                            <h5>{{$node['modelo']}}</h5>
                                        </div>
                                        <p class="font-weight-bold text-center" >
                                            <h7 class="text-normal">
                                                @switch($node['cambio'])

                                                    @case('Manual')

                                                        {{ substr(str_replace('MANUAL','',$node['versao']), 0,  36) }}

                                                        @break


                                                    @case('Automático')

                                                        {{ (strpos($node['versao'], 'AUTOMÁTICO') == true ? substr(str_replace('AUTOMÁTICO','',$node['versao']), 0,  36) : substr(str_replace('AUTOMATIZADO','',$node['versao']), 0,  36)) }}

                                                        @break

                                        
                                                    @default

                                                        {{ substr($node['versao'], 0,  36) }}

                                                @endswitch
                                            </h7>
                                        </p>
                                        <hr/>  
                                        <div class="text-center mb-5">
                                            <h3 class="text-danger">{{$node['preco']}}</h3>
                                        </div>
                                        <div class="row justify-content-center font-weight-bold ">
                                            <div class="mr-4 ">
                                                <div class="">
                                                    <div class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="29.416" height="14" viewBox="0 0 29.416 15.56"> 
                                                         <path  d="M29.416,177.747v6.087a.49.49,0,0,1-.49.49H27.761a.49.49,0,0,1,0-.981h.674v-5.6a2.456,2.456,0,0,0-1.009-1.983,15.9,15.9,0,0,0-9.959-3.177l.319,2.458a.49.49,0,0,1-.972.126l-.324-2.5a14.229,14.229,0,0,0-7.853,3.689H21.024a2.441,2.441,0,0,0,1.907-.912.49.49,0,0,1,.763.616,3.417,3.417,0,0,1-2.67,1.276H7.512l-5.454,1.515a1.475,1.475,0,0,0-1.077,1.417v2.939h.735a.49.49,0,0,1,0,.981H.49a.49.49,0,0,1-.49-.49v-3.429a2.459,2.459,0,0,1,1.8-2.362l5.381-1.495c5.34-5.578,13.631-6.671,20.826-1.448a3.44,3.44,0,0,1,1.414,2.776Zm-19.3,5.97a3.432,3.432,0,1,1-3.432-3.432A3.436,3.436,0,0,1,10.112,183.717Zm-.981,0a2.451,2.451,0,1,0-2.451,2.451A2.454,2.454,0,0,0,9.131,183.717Zm17.037,0a3.432,3.432,0,1,1-3.432-3.432A3.436,3.436,0,0,1,26.168,183.717Zm-.981,0a2.451,2.451,0,1,0-2.451,2.451A2.454,2.454,0,0,0,25.187,183.717Zm-7.231-.368H11.644a.49.49,0,0,0,0,.981h6.312a.49.49,0,0,0,0-.981Z" transform="translate(0 -171.589)" fill="#eb232c"/> 
                                                        </svg>
                                                        {{$node['anomodelo']}}				
                                                    </div>
                                                    <div class="dado cor">
                                                        <svg id="art" xmlns="http://www.w3.org/2000/svg" width="21.931" height="19" viewBox="0 0 21.931 20.853"> 
                                                          <path  d="M21.631,12.874C21,12.245,19.74,12.6,17.66,14a42.768,42.768,0,0,0-5.968,5.072c-3.086,3.086-5.432,6.116-6.213,7.987a2.72,2.72,0,0,0-.4-.111,3.134,3.134,0,0,0-2.409.561,3.5,3.5,0,0,0-1.351,1.976,5.769,5.769,0,0,1-1.2,2.25.512.512,0,0,0,.047.715,3.885,3.885,0,0,0,2.617.976,4.743,4.743,0,0,0,2.745-.91,5.509,5.509,0,0,0,.759-.662,3.267,3.267,0,0,0,.877-2.725C9,28.473,12.2,26.039,15.429,22.813A42.767,42.767,0,0,0,20.5,16.845C21.9,14.765,22.26,13.5,21.631,12.874ZM5.542,31.158a4.463,4.463,0,0,1-.605.527,3.36,3.36,0,0,1-3.7.293A6.763,6.763,0,0,0,2.312,29.74h0q0-.013.006-.027a2.5,2.5,0,0,1,.947-1.368,2.109,2.109,0,0,1,1.615-.389,1.571,1.571,0,0,1,1.04.706A2.112,2.112,0,0,1,5.542,31.158ZM6.819,28.17a1.9,1.9,0,0,0-.455-.567A12.32,12.32,0,0,1,7.9,25l1.6,1.6A12.093,12.093,0,0,1,6.819,28.17Zm3.512-2.184L8.519,24.175c.313-.4.652-.821,1.013-1.248l2.048,2.048Q10.929,25.524,10.331,25.987ZM19.5,16.5a42.933,42.933,0,0,1-4.79,5.586c-.813.813-1.6,1.552-2.349,2.214L10.2,22.151c.683-.772,1.427-1.565,2.213-2.351A42.95,42.95,0,0,1,18,15.01c2.052-1.42,2.761-1.422,2.9-1.4C20.918,13.742,20.915,14.45,19.5,16.5Z" transform="translate(0.001 -12.575)" fill="#eb232c"/> </g> </g> <g id="Grupo_547" data-name="Grupo 547" transform="translate(3.05 17.136)"> <g id="Grupo_546" data-name="Grupo 546"> <path id="Caminho_867" data-name="Caminho 867" d="M73.256,412.7a.512.512,0,0,0-.7.2.371.371,0,0,1-.05.07,2.446,2.446,0,0,1-.295.255,1.939,1.939,0,0,1-.636.3.512.512,0,1,0,.259.991,2.959,2.959,0,0,0,.972-.459,4.744,4.744,0,0,0,.45-.392,1.394,1.394,0,0,0,.2-.273A.512.512,0,0,0,73.256,412.7Z" transform="translate(-71.198 -412.635)" fill="#eb232c"/>
                                                        </svg>
                                                        {{$node['cor']}}				
                                                    </div>
                                                </div>
                                            </div>
                                                <div>
                                                    <div class="">
                                                        <div class="dado quilometragem">
                                                            <svg id="engine_power" data-name="engine power" xmlns="http://www.w3.org/2000/svg" width="25.85" height="18" viewBox="0 0 25.85 22.403"> 
                                                                <path id="Caminho_868" data-name="Caminho 868" d="M26.557,12.462H25.7a.431.431,0,0,0-.431.431v3.877H24.4V12.462a1.3,1.3,0,0,0-1.292-1.292H20.526V9.447h4.308a.431.431,0,0,0,.431-.431V8.154A2.154,2.154,0,0,0,23.111,6H14.494A2.154,2.154,0,0,0,12.34,8.154v.862a.431.431,0,0,0,.431.431h4.308V11.17h-3.4a.407.407,0,0,0-.246.078L9.191,14.186H6.739a1.3,1.3,0,0,0-1.292,1.292v5.6H4.585V17.2a.431.431,0,0,0-.431-.431H3.292A1.3,1.3,0,0,0,2,18.063V26.68a1.3,1.3,0,0,0,1.292,1.292h.862a.431.431,0,0,0,.431-.431V23.664h.862v3.447A1.3,1.3,0,0,0,6.739,28.4H18.673a1.3,1.3,0,0,0,1.18-.767l1.383-3.111h2.736a.431.431,0,0,0,.431-.431V19.356h.862v3.877a.431.431,0,0,0,.431.431h.862a1.3,1.3,0,0,0,1.292-1.292V13.755a1.3,1.3,0,0,0-1.292-1.292ZM3.723,27.111H3.292a.431.431,0,0,1-.431-.431V18.063a.431.431,0,0,1,.431-.431h.431ZM5.447,22.8H4.585v-.862h.862ZM13.2,8.585V8.154a1.3,1.3,0,0,1,1.292-1.292h8.617A1.3,1.3,0,0,1,24.4,8.154v.431Zm6.462.862V11.17H17.941V9.447Zm3.877,14.217H20.956a.425.425,0,0,0-.392.254l-1.5,3.369a.431.431,0,0,1-.392.254H6.739a.431.431,0,0,1-.431-.431V15.478a.431.431,0,0,1,.431-.431H9.324a.426.426,0,0,0,.246-.078l4.239-2.938h9.3a.431.431,0,0,1,.431.431Zm1.723-5.17H24.4v-.862h.862Zm1.723,3.877a.431.431,0,0,1-.431.431h-.431V13.324h.431a.431.431,0,0,1,.431.431Z" transform="translate(-2 -6)" fill="#eb232c"/> <path id="Caminho_871" data-name="Caminho 871" d="M48,22h.862v.862H48Z" transform="translate(-28.182 -15.107)" fill="#eb232c"/> <path id="Caminho_872" data-name="Caminho 872" d="M44,22h.862v.862H44Z" transform="translate(-25.905 -15.107)" fill="#eb232c"/> <path id="Caminho_873" data-name="Caminho 873" d="M14,52h.862v.862H14Z" transform="translate(-8.83 -32.182)" fill="#eb232c"/> <path id="Caminho_874" data-name="Caminho 874" d="M18,52h.862v.862H18Z" transform="translate(-11.107 -32.182)" fill="#eb232c"/> 
                                                            </svg>
                                                            {{$node['quilometragem']}} Km
                                                        </div>
                                                        <div class="dado cambio">
                                                            <svg id="car" xmlns="http://www.w3.org/2000/svg" width="22.587" height="19" viewBox="0 0 22.587 22.587"> 
                                                                <path id="Caminho_875" data-name="Caminho 875" d="M194.259,216a2.259,2.259,0,1,0,2.259,2.259A2.261,2.261,0,0,0,194.259,216Zm0,3.765a1.506,1.506,0,1,1,1.506-1.506A1.507,1.507,0,0,1,194.259,219.765Z" transform="translate(-192 -216)" fill="#eb232c"/> </g> </g> <g id="Grupo_551" data-name="Grupo 551"> <g id="Grupo_550" data-name="Grupo 550"> <path id="Caminho_876" data-name="Caminho 876" d="M11.294,0A11.294,11.294,0,1,0,22.587,11.294,11.306,11.306,0,0,0,11.294,0Zm0,21.834A10.541,10.541,0,1,1,21.834,11.294,10.552,10.552,0,0,1,11.294,21.834Z" fill="#eb232c"/> </g> </g> <g id="Grupo_553" data-name="Grupo 553" transform="translate(2.259 2.259)"> <g id="Grupo_552" data-name="Grupo 552"> <path id="Caminho_877" data-name="Caminho 877" d="M57.035,48a9.035,9.035,0,1,0,9.035,9.035A9.045,9.045,0,0,0,57.035,48Zm0,.753a8.294,8.294,0,0,1,7.728,5.309l-2.82.94A4.067,4.067,0,0,1,59,54.86a4.835,4.835,0,0,0-3.923,0l-.143.063a4.088,4.088,0,0,1-2.706.214l-3.016-.8A8.3,8.3,0,0,1,57.035,48.753Zm-8.282,8.282c0-.077,0-.153.006-.229l.261.087a10.037,10.037,0,0,1,6.8,8.334A8.294,8.294,0,0,1,48.753,57.035Zm8.282,8.282c-.149,0-.3,0-.446-.012a10.787,10.787,0,0,0-7.331-9.125l-.443-.148a8.236,8.236,0,0,1,.178-.978l3.036.81a4.842,4.842,0,0,0,3.206-.253l.143-.063a4.081,4.081,0,0,1,3.313,0,4.82,4.82,0,0,0,3.489.168l2.82-.94a8.217,8.217,0,0,1,.253,1.256l-.443.148A10.787,10.787,0,0,0,57.48,65.3C57.333,65.312,57.184,65.317,57.035,65.317Zm1.211-.089a10.037,10.037,0,0,1,6.8-8.334l.261-.087c0,.076.006.152.006.229A8.294,8.294,0,0,1,58.246,65.227Z" transform="translate(-48 -48)" fill="#eb232c"/> 
                                                            </svg>
                                                            {{$node['cambio']}}				
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <a href="{{'/veiculos/'.$node['idveiculo']}}" class="btn btn-danger btn-block mb-3"> Estou interessado</a>
                                    </div>                             
                                </div>
                            </div>
                        </blockquote>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
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

