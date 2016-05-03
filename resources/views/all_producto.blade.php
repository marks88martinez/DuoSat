@extends('index')
@section('contenido')

    <br><br><br>
    <link rel="shortcut icon" href="http://simbyone.com/wp-content/uploads/2014/04/3455e6f65c33232a060c28829a49b1cb.png">
    <title>Animated Masonry Gallery</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href=" {{URL::to('vista/_css/Icomoon/style.css ')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::to('vista/_css/animated-masonry-gallery.css ')}}" rel="stylesheet" type="text/css" />
    {{--<script type="text/javascript" src="_scripts/jquery-2.0.2.min.js"></script>--}}
    <script type="text/javascript" src="{{URL::to('vista/_scripts/jquery-ui-1.10.4.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('vista/_scripts/jquery.isotope.min.js')}}"></script>
    {{--<script type="text/javascript" src="{{URL::to('vista/_scripts/animated-masonry-gallery.js')}}"></script>--}}

    <script>


        $(window).load(function () {

            var size = 1;
            var button = 0;
            var button_class = "gallery-header-center-right-links-current";
            var normal_size_class = "gallery-content-center-normal";
            var full_size_class = "gallery-content-center-full";
            var $container = $('#gallery-content-center');

            $container.isotope({itemSelector : 'a'});


            function check_button(){
                console.log(button);
                $('#gallery-header-center div').removeClass(button_class);
                if(button==0){
                    $("#filter-all").addClass(button_class);
                    $("#gallery-header-center-left-title").html('All Galleries');
                }
                @foreach($producto as $productos)
                if(button=={{ $productos->categoria->codigo_categoria }}){
                    $("#filter-{{ $productos->categoria->codigo_categoria }}").addClass(button_class);
//                    $("#gallery-header-center-left-title").html('Studio Gallery');
                }
                @endforeach
            }


            function check_size(){
                $("#gallery-content-center").removeClass(normal_size_class).removeClass(full_size_class);
                if(size==0){
                    $("#gallery-content-center").addClass(normal_size_class);
                    $("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
                }
                if(size==1){
                    $("#gallery-content-center").addClass(full_size_class);
                    $("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
                }
                $container.isotope({itemSelector : 'img'});
            }
            $("#filter-all").click(function() { $container.isotope({ filter: '.all' }); button = 0; check_button(); });
            @foreach($producto as $productos)
                $("#filter-{{ $productos->categoria->codigo_categoria }}").click(function() {
                        $container.isotope({ filter: '.{{$productos->categoria->codigo_categoria}}' });
                        button = {{ $productos->categoria->codigo_categoria }};
                        check_button();
                    });
            @endforeach
//            $("#filter-all").click(function() { $container.isotope({ filter: '.all' }); button = 1; check_button(); });
//            $("#filter-studio").click(function() {  $container.isotope({ filter: '.studio' }); button = 2; check_button();  });
//            $("#filter-landscape").click(function() {  $container.isotope({ filter: '.landscape' }); button = 3; check_button();  });
//            $("#gallery-header-center-left-icon").click(function() { if(size==0){size=1;}else if(size==1){size=0;} check_size(); });


            check_button();
            check_size();
            @if($query != null)
                $('#filter-{{ $query }}').click();
            @endif
        });


    </script>



    <br>
<div class="container">
    <h4 class=" gris fonte">•  Productos</h4>





    {{--***********************************************--}}
    <div id="gallery">
        <div id="gallery-header">
            <div id="gallery-header-center">
                {{--<div id="gallery-header-center-left">--}}
                    {{--<div id="gallery-header-center-left-icon"><span class="iconb" data-icon="&#xe23a;"></span></div>--}}
                    {{--<div id="gallery-header-center-left-title">All Galleries</div>--}}
                {{--</div>--}}
                <div class="btn btn-default" id="filter-all">All</div>
                @foreach($categoria as $categorias)

                <div class="btn btn-default " id="filter-{{$categorias->codigo_categoria}}">{{$categorias->nombre}}</div>
                @endforeach
                {{--<div class="gallery-header-center-right-links" id="filter-all">All</div>--}}
                {{--<div class="gallery-header-center-right-links" id="filter-studio">Studio</div>--}}
                {{--<div class="gallery-header-center-right-links" id="filter-landscape">Landscapes</div>--}}
            </div>
        </div>
        <style>
            .nombre{
                z-index: 500;
                position: absolute;
                text-decoration: none;
                padding: 20px;
                margin-top: 150px;
                font-size: 15px;
                font-family: 'Oswald', sans-serif;

            }
            .foto{
                z-index: -500;
            }
            #gallery-content-center a{
                display: block;
                transition: all 0.5s ease;
                text-decoration: none;
            }
        </style>

        <div id="gallery-content">
            <div id="gallery-content-center">

                @foreach( $producto as $productos)


                           <a class="all {{$productos->categoria->codigo_categoria}}" href="{{URL::to('productos/'.$productos->codigo_producto)}}">    <p class="nombre">{{$productos->nombre_producto}}</p><img src="{{$productos->imagenes->url_imagenes}}" class=""> </a>

                    {{--<img src="{{$productos->imagenes->url_imagenes}}" class="all landscape"/>--}}
                @endforeach







            </div>
        </div>
    </div>
    {{--***********************************************--}}






    {{--@foreach( $producto as $productos)--}}
        {{--<a href="#" class="btn btn-default" role="button">{{$productos->nombre_producto}}</a>--}}

    {{--@endforeach--}}
        {{--<br><br>--}}







    {{--<div class="row">--}}
        {{--@foreach( $producto as $productos)--}}
        {{--<div class="col-sm-6 col-md-4">--}}
            {{--<div class="thumbnail">--}}
                {{--<img src="{{$productos->imagenes->url_imagenes}}" alt="...">--}}
                {{--<div class="caption">--}}
                    {{--<h3>{{$productos->nombre_producto}}</h3>--}}
                    {{--<p>...</p>--}}
                    {{--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>--}}
                {{--</div>--}}
            {{--</div>--}}


        {{--</div>--}}
        {{--@endforeach--}}








    {{--</div>--}}


</div>












@stop