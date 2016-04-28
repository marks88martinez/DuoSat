@extends('index')
@section('contenido')
    <br><br><br>
    <div class="container">
        <h4 class=" gris fonte">• Descargas</h4>
        <div class="row">
            @foreach($productos as $producto)
                <div class="col-md-4 product-show">
                    <a href="{{ route('descargas.modelo', [$producto->codigo_producto]) }}" class="product-link">
                        <div class="product-black"></div>
                        <img src="{{ url($producto->imagenes->url_imagenes)  }}" alt="{{ $producto->nombre_producto }}">
                        <div class="product-text">
                            <h3>{{ $producto->nombre_producto }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@stop