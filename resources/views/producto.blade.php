@extends('index')
@section('contenido')


    <div class="banner">
        <!--**************************************************-->


        <!--**************************************************-->
    </div>
    <br><br>

    <!--***************banner pequeño*****************-->


<div class="container">


    <div class=" row">
        <div class="col-md-4 col-xs-12   ">

            <div class="  posit">
            <div class="product">
            {{--<div class="">--}}
            {{--<div id="thumb">--}}
                {{--<img src="{{URL::to($producto->imagenes->url_imagenes)}}" />--}}
            {{--</div>--}}
            {{--<div class="info">--}}

                {{--<div class="full">--}}
                    {{--<img src="{{URL::to($producto->imagenes->url_imagenes)}}" />--}}
                {{--</div>--}}
            {{--</div>--}}



                <img src="{{URL::to($producto->imagenes->url_imagenes)}}" class="img-responsive" alt="Responsive image">

            </div>

            </div>
        </div>


        <div class="col-md-8  col-xs-12  descrip">

            <h3 class="fonte"> <strong>• {{$producto->nombre_producto}}</strong><hr></h3>
            <div><p>
                    {{$producto->descripcion}}
                </p>
            </div>

            @foreach($producto->producto_atributos as  $data )

                <h3 class="fonte2"> <strong>• {{$data->prodattr_attr->nombre_atributo}}</strong><hr></h3>
                <div>
                    <p>{{$data->descripcion}}</p>

                </div>

            @endforeach

        </div>

    </div>
</div>

    <br><br>    <br><br>












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



@stop