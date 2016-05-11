<!DOCTYPE html>
<html>
<head>
    <title>Duosat</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

</head>



<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{URL::to('vista/css/style.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">






<body>

<script type="text/javascript">
    $(document).ready(function(){
        $('.search').click(function(e){
            e.preventDefault();
            $('.busqueda').slideToggle();
        });
        
        $(".anima").click(function(e){
            e.preventDefault();
            $('#top-menu').collapse('hide');
            $('.menu').slideToggle();
        });
        
        $('ul li').click( function() {
            $(this).addClass('active').siblings().removeClass('active');
        });

    });
</script>


<script type="text/javascript">

    $(function() {
        /** -----------------------------------------
         * Modulo del Slider
         -------------------------------------------*/
        var SliderModule = (function() {
            var pb = {};
            pb.el = $('#slider');
            pb.items = {
                panels: pb.el.find('.slider-wrapper > li'),
            }

            // Interval del Slider
            var SliderInterval,
                    currentSlider = 0,
                    nextSlider = 1,
                    lengthSlider = pb.items.panels.length;

            // Constructor del Slider
            pb.init = function(settings) {
                this.settings = settings || {duration: 8000};
                var items = this.items,
                        lengthPanels = items.panels.length,
                        output = '';

                // Insertamos nuestros botones
                for(var i = 0; i < lengthPanels; i++) {
                    if(i == 0) {
                        output += '<li class="active"></li>';
                    } else {
                        output += '<li></li>';
                    }
                }

                $('#control-buttons').html(output);

                // Activamos nuestro Slider
                activateSlider();
                // Eventos para los controles
                $('#control-buttons').on('click', 'li', function(e) {
                    var $this = $(this);
                    if(!(currentSlider === $this.index())) {
                        changePanel($this.index());
                    }
                });

            }

            // Funcion para activar el Slider
            var activateSlider = function() {
                SliderInterval = setInterval(pb.startSlider, pb.settings.duration);
            }

            // Funcion para la Animacion
            pb.startSlider = function() {
                var items = pb.items,
                        controls = $('#control-buttons li');
                // Comprobamos si es el ultimo panel para reiniciar el conteo
                if(nextSlider >= lengthSlider) {
                    nextSlider = 0;
                    currentSlider = lengthSlider-1;
                }

                controls.removeClass('active').eq(nextSlider).addClass('active');
                items.panels.eq(currentSlider).fadeOut('slow');
                items.panels.eq(nextSlider).fadeIn('slow');

                // Actualizamos los datos del slider
                currentSlider = nextSlider;
                nextSlider += 1;
            }

            // Funcion para Cambiar de Panel con Los Controles
            var changePanel = function(id) {
                clearInterval(SliderInterval);
                var items = pb.items,
                        controls = $('#control-buttons li');
                // Comprobamos si el ID esta disponible entre los paneles
                if(id >= lengthSlider) {
                    id = 0;
                } else if(id < 0) {
                    id = lengthSlider-1;
                }

                controls.removeClass('active').eq(id).addClass('active');
                items.panels.eq(currentSlider).fadeOut('slow');
                items.panels.eq(id).fadeIn('slow');

                // Volvemos a actualizar los datos del slider
                currentSlider = id;
                nextSlider = id+1;
                // Reactivamos nuestro slider
                activateSlider();
            }

            return pb;
        }());

        SliderModule.init({duration: 4000});

    });
</script>

<style type="text/css">

</style>
<script type="text/javascript">

</script>




<!--**********************-->

<nav class="azul navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="padd navbar-brand" href="{{url('/')}}"><img src="{{URL::to('vista/img/logo.png')}}"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-menu">


            <!--  <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>-->

            <ul class="  nav navbar-nav navbar-right">

                <li><a class="anima"  id="btn_pro" href="#">PRODUTO</a></li>
                <li><a href="{{ route('descargas.index') }}">DESCARGA</a></li>
                <li><a href="{{route('empresa')}}">EMPRESA</a></li>
                <li><a href="{{route('contacto')}}">CONTATO</a></li>


                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IDIOMAS<span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">• English</a></li>--}}

                        {{--<li><a href="#">• Portugues</a></li>--}}

                        {{--<li><a href="#">• Español</a></li>--}}

                    {{--</ul>--}}
                {{--</li>--}}






                <li class='search' ><a href="#"><img src="{{URL::to('vista/img/busca.png')}}"></a>

                </li>

                <li>
                    <div class="busqueda">



                        @include('buscador')

                        {{--<form class="navbar-form navbar-left" role="search">--}}
                        {{--<div class="form-group frm_input">--}}
                        {{--<input type="text" class="form-control" placeholder="Search">--}}
                        {{--</div>--}}

                        {{--</form>--}}
                    </div>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



<!--***********final menu***********-->

<!--********************************-->
<div class="menu">


    <style>@media (min-width: 1200px){
            .container {
                width: 1200px;
            }
        }

    </style>




    <div class="container">
        <br>  <br>  <br>
        <ul class="box_cuadro">
            <li class="cuadro">
                <span></span>
                <a href="{{URL::to('/comparar')}}"><img src="{{URL::to('admin/img/icon/4.png')}}"></a>
                <a href="{{URL::to('/comparar')}}"><h6 class="lista">Comparar</h6></a>
            </li>
            <li class="cuadro">
                <span></span>
                <a href="{{URL::to('/all_producto')}}"><img src="{{URL::to('admin/img/icon/car.png')}}"></a>
                <a href="{{URL::to('/all_producto')}}"><h6 class="lista">Todos</h6></a>
            </li>
            {{--<li class="cuadro">--}}
                {{--<span></span>--}}
                {{--<a href="{{URL::to('/next_prod')}}"><img src="{{URL::to('admin/img/icon/4K.png')}}"></a>--}}

                {{--<ul class="menu-sub">--}}
                    {{--<span></span>--}}
                        {{--<li><a class="tog "  data-toggle="tooltip" data-placement="left"  href="/next_prod">NEXT</a></li>--}}
                        {{--<button type="button" class="btn btn-default" >Tooltip on left</button>--}}
                {{--</ul>--}}
                {{--<a href="{{URL::to('/next_prod')}}"><h6 class="lista">Hibridos</h6></a>--}}
            {{--</li>--}}

            {{--<li class="cuadro">--}}
                {{--<span></span>--}}
                {{--<a href="{{URL::to('/next_prod')}}"><img src="{{URL::to('admin/img/icon/tuner.png')}}"></a>--}}

                {{--<ul class="menu-sub">--}}
                    {{--<span></span>--}}
                    {{--<li><a class="tog "  data-toggle="tooltip" data-placement="left"  href="/onenanoHD">One Nano HD</a></li>--}}
                    {{--<button type="button" class="btn btn-default" >Tooltip on left</button>--}}
                {{--</ul>--}}
                {{--<a href="{{URL::to('/next_prod')}}"><h6 class="lista">One Nano HD</h6></a>--}}
            {{--</li>--}}


            {{--<li class="cuadro">--}}
                {{--<span></span>--}}
                {{--<a href="{{URL::to('/play_prod')}}"><img src="{{URL::to('admin/img/icon/PLAY.png')}}"></a>--}}

                {{--<ul class="menu-sub">--}}
                    {{--<span></span>--}}
                    {{--<li><a class="tog SUBIR"  data-toggle="tooltip" data-placement="left"  href="/play_prod">PLAY</a></li>--}}
                    {{--<button type="button" class="btn btn-default" >Tooltip on left</button>--}}
                {{--</ul>--}}
                {{--<a href="{{URL::to('/play_prod')}}"><h6 class="lista">--}}
                        {{--Media Players</h6></a>--}}
            {{--</li>--}}


        @foreach($cat as $cats)
            <li class="cuadro">
                <img src="{{$cats->url_icon}}">
                <ul class="menu-sub">
                    <span></span>
                    @foreach($cats->productos as $sub_cats)
                    <li><a class="tog"  data-toggle="tooltip" data-placement="left" {{$sub_cats->descontinuado ? "title=Discontinued" :" "}}  href="{{$sub_cats->linkok}}">{{$sub_cats->nombre_producto}}</a></li>
                        {{--<button type="button" class="btn btn-default" >Tooltip on left</button>--}}
                    @endforeach

                </ul>
                <h6>{{$cats->nombre}}</h6>

            </li>
        @endforeach
            <script>
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                })
            </script>




        </ul>
    </div>
</div>
<!--*****************final del menu***************-->


<!--****************banner****************-->
<div class="">


@yield('contenido')


</div>


<style>
    .red{
        background: #c62d30;
    }
    .red:hover{
        opacity: 0.8;
    }
    .face{
        background: #3f5fa5;
    }
    .face:hover{
        opacity: 0.8;
    }
    .tw{
        background: #00aae2;
    }
    .tw:hover{
        opacity: 0.8;
    }
    .list-inline li {
        width: 40px;
        height: auto;

        }

    .list-inline li a{
color: white;
        font-size: 25px;
    }
</style>




<!--****************final banner****************-->

<div class="container cent">

    <ul class="list-inline">

        <li class="face"><a href="https://www.facebook.com/duosatbrasil" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
        <li  class="tw"><a href="https://www.twitter.com/duosat" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>

        <li  class="red"><a href="https://www.youtube.com/duosat" class="icoLinkedin" title="Linkedin"><i class="fa fa-youtube"></i></a></li>
    </ul>
    <div class="ln"></div>



    <nav class="nave">


        <ul>
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a  href="{{ route('descargas.index') }}" >DESCARGAS</a></li>
            <li><a  href="{{ route('contacto') }}" >CONTATO</a></li>


        </ul>
    </nav>
    <p>© Duosat All rights reserved Laboratories Duo</p>

</div>
</div>

<div class="container">

</div>




<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-77530187-1', 'auto');
    ga('send', 'pageview');

</script>



</body>
</html>