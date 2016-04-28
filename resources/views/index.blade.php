<!DOCTYPE html>
<html>
<head>
    <title>inicio</title>
    <meta charset="UTF-8">
</head>



<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{URL::to('vista/css/style.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>




<body>

<script type="text/javascript">
    $(document).ready(function(){
        $('.search').click(function(e){
            e.preventDefault();
            $('.busqueda').slideToggle();

        });





        $(".anima").click(function(){

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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="padd navbar-brand" href="{{URL::to('/')}}"><img src="{{URL::to('vista/img/logo.png')}}"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <!--  <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>-->

            <ul class="  nav navbar-nav navbar-right">

                <li><a class="anima" href="#">PRODUCTO</a></li>
                <li><a href="{{ route('descargas.index') }}">DESCARGA</a></li>
                <li><a href="{{URL::to('/empresa')}}">EMPRESA</a></li>
                <li><a href="{{URL::to('/contacto')}}">CONTACTOS</a></li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IDIOMAS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">• English</a></li>

                        <li><a href="#">• Portugues</a></li>

                        <li><a href="#">• Español</a></li>

                    </ul>
                </li>






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
                <a href="{{URL::to('/all_producto')}}"><h6 class="lista">All Product</h6></a>
            </li>
            <li class="cuadro">
                <span></span>
                <a href="{{URL::to('/all_producto')}}"><img src="{{URL::to('admin/img/icon/4K.png')}}"></a>

                <ul class="menu-sub">
                    <span></span>
                        <li><a class="tog "  data-toggle="tooltip" data-placement="left"  href="/next">NEXT</a></li>
                        {{--<button type="button" class="btn btn-default" >Tooltip on left</button>--}}
                </ul>
                <a href="{{URL::to('/all_producto')}}"><h6 class="lista">4K</h6></a>
            </li>
            <li class="cuadro">
                <span></span>
                <a href="{{URL::to('/all_producto')}}"><img src="{{URL::to('admin/img/icon/PLAY.png')}}"></a>

                <ul class="menu-sub">
                    <span></span>
                    <li><a class="tog SUBIR"  data-toggle="tooltip" data-placement="left"  href="/play">PLAY</a></li>
                    {{--<button type="button" class="btn btn-default" >Tooltip on left</button>--}}
                </ul>
                <a href="{{URL::to('/play')}}"><h6 class="lista">
                        Media Players</h6></a>
            </li>


        @foreach($cat as $cats)
            <li class="cuadro">
                <img src="{{$cats->url_icon}}">
                <ul class="menu-sub">
                    <span></span>
                    @foreach($cats->productos as $sub_cats)
                    <li><a class="tog"  data-toggle="tooltip" data-placement="left" {{$sub_cats->descontinuado ? "title=Discontinued" :" "}}  href="{{URL::to('productos/'.$sub_cats->codigo_producto)}}">{{$sub_cats->nombre_producto}}</a></li>
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









<!--****************final banner****************-->

<div class="container cent">
    <div class="ln"></div>



    <nav class="nave">
        <ul>
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a  href="{{ route('descargas.index') }}" >DESCARGAS</a></li>
            <li><a  href="{{ url('contacto') }}" >CONTACTOS</a></li>


        </ul>
    </nav>
    <p>© Duosat Todos los derechos reservados
        Laboratorios Duo</p>

</div>
</div>

</body>
</html>