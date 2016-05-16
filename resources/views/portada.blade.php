@extends('index')
@section('contenido')

    <link rel="shortcut icon" href="../favicon.ico">
    {{--<link rel="stylesheet" type="text/css" href="{{URL::to('banner/css/demo.css')}}" />--}}
    <link rel="stylesheet" type="text/css" href="{{URL::to('banner/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('banner/css/custom.css')}}" />
    <script type="text/javascript" src="{{URL::to('banner/js/modernizr.custom.79639.js')}}"></script>

    <link href='{{URL::to('vista/next/css/animate.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{URL::to('vista/css_new.css')}}' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{URL::to('vista/next/js/wow.js')}}"></script>

    <div id="main-slideshow" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @for($i = 0; $i < count($banner); $i++)
                <li data-target="#main-slideshow" data-slide-to="{{ $i }}"></li>
            @endfor
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($banner as $index => $bann)
                <div class="item">
                   <a href="{{$index->link}}">
                    <img src="{{ url($bann->url_banner) }}" alt="...">
                    <div class="carousel-caption" id="banner_{{ $index }}">
                        {!! nl2br($bann->texto) !!}
                    </div>
                   </a>
                </div>
            @endforeach
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slideshow" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#main-slideshow" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{--<div id="cont" class="container-fluid demo-2">--}}

        {{--<!-- Codrops top bar -->--}}



        {{--<div id="slider" class="sl-slider-wrapper">--}}

            {{--<div class="sl-slider">--}}


                {{--@foreach($banner as $banners)--}}

                {{--<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">--}}
                    {{--<div class="sl-slide-inner">--}}
                        {{--<div class=""><a href="{{$banners->link}}"><img src="{{$banners->url_banner}}"></a></div>--}}


                    {{--</div>--}}
                {{--</div>--}}

                {{--@endforeach--}}


            {{--</div><!-- /sl-slider -->--}}

            {{--<nav id="nav-dots" class="nav-dots">--}}
                {{--<span class="nav-dot-current"></span>--}}
                {{--<span></span>--}}
                {{--<span></span>--}}
                {{--<span></span>--}}

            {{--</nav>--}}

        {{--</div><!-- /slider-wrapper -->--}}

        {{--<div class="content-wrapper">--}}

        {{--</div>--}}

    {{--</div>--}}

{{--****************************************************--}}


{{--<div class="banner">--}}
    {{--<!--**************************************************-->--}}
    {{--<section id="slider" class="">--}}
        {{--<ul class="slider-wrapper">--}}
            {{--@foreach($banner as $banners)--}}
                 {{--<li class="current-slide">--}}
                     {{--<a href="#"> <img src="{{$banners->url_banner}}" title="" alt=""></a>--}}


            {{--</li>--}}
                {{--@endforeach--}}


        {{--</ul>--}}
        {{--<!-- Sombras -->--}}
        {{--<div class="slider-shadow"></div>--}}

        {{--<!-- Controles de Navegacion -->--}}
        {{--<ul id="control-buttons" class="control-buttons"></ul>--}}
    {{--</section>--}}




    {{--<!--**************************************************-->--}}
{{--</div>--}}
<br>

<!--***************banner pequeño*****************-->
<div class="container" id="small_banners">
    <div class="row">
        @foreach($chico as $chicos)
            <div class="col-sm-3 bann imagen">
                <a href="{{$chicos->link}}">
                    <img src="{{$chicos->url_banner}}">
                    <p style="font-size: {{ $chicos->style_font_size }};">
                        {!! $chicos->texto !!}
                    </p>
                </a>
            </div>
        @endforeach
        <div class=" col-sm-3 ">
            <style>
                #small_banners .imagen {
                    position: relative;
                }
                #small_banners a {
                    position: relative;
                    display: block;
                }
                #small_banners a p {
                    display: block;
                    position: absolute;
                    top: 80%;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    width: 100%;
                    text-align: center;
                    font-family: "Open Sans Condensed",sans-serif;
                }
                #small_banners .imagen a:after {
                    position: absolute;
                    content: '';
                    background-color: rgba(0,0,0,0.1);
                    opacity: 0;
                    -webkit-transition: all 0.2s ease;
                    -moz-transition: all 0.2s ease;
                    -ms-transition: all 0.2s ease;
                    -o-transition: all 0.2s ease;
                    transition: all 0.2s ease;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                #small_banners .imagen a:hover:after{
                    opacity: 1;
                }
                .carousel-caption {
                    font-family: "Open Sans Condensed",sans-serif;
                }

                .video{
                    width: 100%;
                    height: 156px;
                }
                @media screen and (min-width: 1185px) {
                    .video{
                        width: 100%;
                        height: 170px
                    }
                }
                @media screen and (max-width: 943px) {
                    .video{
                        width: 100%;
                        height: 116px
                    }
                }
                    @media screen and (min-width: 768px) {
                    .carousel-caption {
                        font-size: 50px;
                    }
                    @foreach($banner as $index => $bann)
                    #banner_{{ $index }} {
                        padding-bottom: {{ $bann->style_padding_bottom }};
                        left: {{ $bann->style_left }};
                        right: {{ $bann->style_right }};
                        font-size: {{ $bann->style_font_size }};
                        color: {{ $bann->style_color }};
                    }
                    @endforeach
                }

            </style>

            <object class="video"

                    data="https://www.youtube.com/embed/g3BV1kMvgSI" >
            </object>

            {{--<iframe width="432" height="300" src="https://www.youtube.com/embed/sSBXsPIxtkE" frameborder="0" allowfullscreen></iframe>--}}
        </div>

    </div>
</div>

    <br>
<!--****************final banner pequeño****************-->



    <script type="text/javascript" src="{{URL::to('banner/js/jquery.ba-cond.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('banner/js/jquery.slitslider.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.carousel-inner > .item:first').addClass('active');
            $('.carousel-indicators li:first').addClass('active');
        });
        new WOW().init();
    </script>


@stop