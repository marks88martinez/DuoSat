@extends('index')
@section('contenido')

    <br><br>
<div class="container">
    <h4 class=" gris fonte">•  Productos</h4>
    <br>

    @foreach( $producto as $productos)
        <a href="#" class="btn btn-default" role="button">{{$productos->nombre_producto}}</a>

    @endforeach
        <br><br>







    <div class="row">
        @foreach( $producto as $productos)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{$productos->imagenes->url_imagenes}}" alt="...">
                <div class="caption">
                    <h3>{{$productos->nombre_producto}}</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>


        </div>
        @endforeach





            


    </div>


</div>












@stop