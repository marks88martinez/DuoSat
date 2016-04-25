@extends('index')
@section('contenido')
    <link rel="stylesheet" type="text/css" href="{{URL::to('vista/tab/css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('vista/tab/css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('vista/tab/css/tabs.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('vista/tab/css/tabstyles.css')}}" />
    <script src="{{URL::to('vista/tab/js/modernizr.custom.js')}}"></script>
    {{--*********************************--}}

    <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>

    <br>   <br>  <br>
    <style>
        .imagen_grande{
            /*padding: 10px;*/
        }
        .blanco{
            background: white;
        }
        p{
            font-family: 'Hind', sans-serif;
            font-size: 15px;
            padding: 7px;
        }
        .gris{
            box-shadow: -5px -2px 40px #aaaaaa;
            background: #3497da;
        }
        h1{
            font-size:45px;
            font-family: 'Hind', sans-serif;
            color: #6553af;
        }
        .imagen_grande img{
            margin-bottom: 15px;
            width: 80%;
            height: auto;
        }
        .fonte4{
            font-family: 'Hind', sans-serif;
            color: white;
        }
        hr{
            margin-top: -10px;
            /* margin-bottom: 20px; */
            border: 0;
            border-top: 1px solid #d8d8d9;
        }
        .nav>li{
            background: none;
        }

    </style>

    <div class="container-fluid blanco ">
        <div class="container imagen_grande">
            <header class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="titulo">{{$producto->nombre_producto}}</h1>
                        <hr size="8px" color="black" />
                        {{--<p class="lead">..</p>--}}
                    </div>
                </div>
            </header>

            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-md-4 col-md-offset-1">
                        <p>
                             {!! nl2br($producto->descripcion) !!}
                        </p>

                    </div>

                    <div class="col-xs-12 col-md-6">
                        <figure class="text-center">
                            <img    src="{{URL::to($producto->imagenes->url_imagenes)}}" alt="The Amazing Product" class="img-rounded imagen_grande" />
                        </figure>
                    </div>


                </div>





            </div>

        </div>
    </div>

    <div class=" gris ">


        {{--**********************************--}}

      <div class="container">
          <section>
              <div class="tabs tabs-style-linetriangle">
                  <nav>
                      <ul>
                          @foreach($producto->producto_atributos as  $data )
                          <li><a href="#section-linetriangle-1"><span>  {{$data->prodattr_attr->nombre_atributo}}</span></a></li>

                          @endforeach
                      </ul>
                  </nav>
                  <div class="content-wrap">
                      @foreach($producto->producto_atributos as  $data )
                      <section id="section-linetriangle-1"><p>{!! nl2br($data->descripcion) !!}</p></section>

                      @endforeach
                  </div><!-- /content -->
              </div><!-- /tabs -->
          </section>
      </div>


        <script src="{{URL::to('vista/tab/js/cbpFWTabs.js')}}"></script>
        <script>
            (function() {

                [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                    new CBPFWTabs( el );
                });

            })();
        </script>
        {{--**********************************--}}
        {{--<div class="container imagen_grande">--}}
          {{--*****************--}}


            {{--<header class="">--}}
                {{--<div class="row">--}}

                    {{--@foreach($producto->producto_atributos as  $data )--}}
                    {{--<div class="col-md-10 col-md-offset-1 fonte4">--}}

                        {{--<h2> • {{$data->prodattr_attr->nombre_atributo}}</h2>--}}
                       {{--<div><hr id="lin"></div>--}}
                        {{--<p  class="fonte4">{!! nl2br($data->descripcion) !!}</p>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</header>--}}









            {{--****************--}}
        {{--</div>--}}








    </div>
    {{--******************************************--}}










    {{--<div class="banner">--}}
        {{--<!--**************************************************-->--}}


        {{--<!--**************************************************-->--}}
    {{--</div>--}}
    {{--<br><br>--}}

    {{--<!--***************banner pequeño*****************-->--}}


{{--<div class="container">--}}


    {{--<div class=" row">--}}
        {{--<div class="col-md-4 col-xs-12   ">--}}

            {{--<div class="  posit">--}}
            {{--<div class="product">--}}
            {{--<div class="">--}}
            {{--<div id="thumb">--}}
                {{--<img src="{{URL::to($producto->imagenes->url_imagenes)}}" />--}}
            {{--</div>--}}
            {{--<div class="info">--}}

                {{--<div class="full">--}}
                    {{--<img src="{{URL::to($producto->imagenes->url_imagenes)}}" />--}}
                {{--</div>--}}
            {{--</div>--}}



                {{--<img src="{{URL::to($producto->imagenes->url_imagenes)}}" class="img-responsive" alt="Responsive image">--}}

            {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}


        {{--<div class="col-md-8  col-xs-12  descrip">--}}

            {{--<h3 class="fonte"> <strong>• {{$producto->nombre_producto}}</strong><hr></h3>--}}
            {{--<div><p>--}}
                    {{--{!! nl2br($producto->descripcion) !!}--}}
                {{--</p>--}}
            {{--</div>--}}

            {{--@foreach($producto->producto_atributos as  $data )--}}

                {{--<h3 class="fonte2"> <strong>• {{$data->prodattr_attr->nombre_atributo}}</strong><hr></h3>--}}
                {{--<br>--}}
                    {{--<p>{!! nl2br($data->descripcion) !!}</p>--}}



            {{--@endforeach--}}

        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}

    {{--<br><br>    <br><br>--}}












    <!--****************final banner pequeño****************-->



    <script>
        document.getElementById('thumb').onmousemove = function(e) {
            $(".full").addClass('active');
            var x = e.offsetX == undefined ? e.layerX : e.offsetX;
            var y = e.offsetY == undefined ? e.layerY : e.offsetY;
            percentX = x/($("#thumb").width()/100);
            percentY = y/($("#thumb").height()/100);
            fullX = percentX * ($(".full img").width()/100) - $(".full").width()/2;
            fullY = percentY * ($(".full img").height()/100) - $(".full").height()/2;
            console.log(percentX+'% : '+percentY+'%');
            console.log(fullX+'px : '+fullY+'px');
            $(".full img").css('transform','translateX(-'+fullX+'px) translateY(-'+fullY+'px)');
        }
        document.getElementById('thumb').onmouseout = function(){
            $(".full").removeClass('active');
        }
    </script>

    <br>



@stop