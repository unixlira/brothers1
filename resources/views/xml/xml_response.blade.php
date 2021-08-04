<!DOCTYPE html>
<html lang="en">
<head>
    <title>Xml Response Cards</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        @foreach($array as $node)
            @foreach($node as $no)
                <div class="col-sm-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $no['fotos']['foto'][0]['url'] }}" alt="">
                        <div class="container mt-3">
                            <!-- Top content -->
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="bbb_viewed_title_container">
                                            <div class="bbb_viewed_nav_container">
                                                <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                                                <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                                            </div>
                                        </div>
                                        <div class="owl-carousel  bbb_viewed_slider">
                                            @foreach($no['fotos']['foto'] as $foto)
                                                <div class="viewed_image">
                                                    <img src="{{ $foto['url'] }}" style="width: 40px !important;height:40px !important;">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End content -->
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary">Ver Carro</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

<script src="{{ asset('scripts.js') }}"></script>
</body>
</html>
