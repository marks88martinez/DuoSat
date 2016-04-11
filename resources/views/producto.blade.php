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
            <div class="  position">
                <img src="{{URL::to($producto->imagenes->url_imagenes)}}" class="img-responsive" alt="Responsive image">
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



@stop