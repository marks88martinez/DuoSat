@extends('index')
@section('contenido')

    <link rel="shortcut icon" href="../favicon.ico">
    {{--<link rel="stylesheet" type="text/css" href="{{URL::to('banner/css/demo.css')}}" />--}}
    <link rel="stylesheet" type="text/css" href="{{URL::to('banner/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('banner/css/custom.css')}}" />
    <script type="text/javascript" src="{{URL::to('banner/js/modernizr.custom.79639.js')}}"></script>




    <div class="">


        <div id="main-slideshow" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @for($i = 0; $i < count($banner); $i++)
                    <li data-target="#main-slideshow" data-slide-to="{{ $i }}" {!! $i === 0 ? 'class="active"' : '' !!}></li>
                @endfor
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox">

                <?php $primero = true; ?>

                @foreach($banner as $banners)

                <div class="item{{ $primero ? ' active' : '' }}">
                <?php $primero = false; ?>
                    <img style="width: 100%" src="{{$banners->url_banner}}" alt="...">


                    <div class="carousel-caption">


                    </div>
                </div>

                @endforeach

                {{--<div class="item">--}}
                    {{--<img style="width: 100%"  src="...." alt="...">--}}
                    {{--<div class="carousel-caption">--}}
                        {{--...--}}
                    {{--</div>--}}
                {{--</div>--}}

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
<div class="container">
    <div class="row">
        @foreach($chico as $chicos)

            <div class="col-sm-3  bann"><a href="{{$chicos->link}}">  <img src="{{$chicos->url_banner}}"></a></div>

        @endforeach
        <div class=" col-sm-3 ">
            <style>
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
    <script type="text/javascript">
        $(function() {

            var Page = (function() {

                var $nav = $( '#nav-dots > span' ),
                        slitslider = $( '#slider' ).slitslider( {
                            onBeforeChange : function( slide, pos ) {

                                $nav.removeClass( 'nav-dot-current' );
                                $nav.eq( pos ).addClass( 'nav-dot-current' );

                            }
                        } ),

                        init = function() {

                            initEvents();

                        },
                        initEvents = function() {

                            $nav.each( function( i ) {

                                $( this ).on( 'click', function( event ) {

                                    var $dot = $( this );

                                    if( !slitslider.isActive() ) {

                                        $nav.removeClass( 'nav-dot-current' );
                                        $dot.addClass( 'nav-dot-current' );

                                    }

                                    slitslider.jump( i + 1 );
                                    return false;

                                } );

                            } );

                        };
                        var actual = 1;
                        setInterval(function(){
//                            console.log(actual);
                            $nav[actual].click();
                            actual = actual >= $nav.length-1? 0 : actual +1;
                        }, 5000);

                return { init : init };

            })();

            Page.init();

            /**
             * Notes:
             *
             * example how to add items:
             */

            /*

             var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');

             // call the plugin's add method
             ss.add($items);

             */

        });
    </script>

    @stop