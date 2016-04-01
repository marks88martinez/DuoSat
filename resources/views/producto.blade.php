@extends('index')
@section('contenido')


    <div class="banner">
        <!--**************************************************-->


        <!--**************************************************-->
    </div>
    <br><br>

    <!--***************banner pequeño*****************-->
    <div class="padding_new row">
        <div class="col-md-4   ">
            <div class=" col-md-4 position">
                <img src="{{URL::to($producto->imagenes->url_imagenes)}}"><img src="{{URL::to('vista/img/blade-black-series.png')}}">
            </div>
        </div>


        <div class="col-md-6  descrip">

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


    <!--****************final banner pequeño****************-->



@stop