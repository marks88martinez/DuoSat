@extends('index')
@section('contenido')
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Downloads para {{ $producto->nombre_producto }}</h2>
                <img src="{{ url($producto->imagenes->url_imagenes) }}" alt="{{ $producto->nombre_producto }}" width="300px">
            </div>
            <div class="col-md-8">
                @if(!$producto->descargas->isEmpty())
                <ul>
                    @foreach($producto->descargas as $descarga)
                        <li>
                            <h4>{{ $descarga->descarga->titulo }}</h4>
                            <ul>
                                @foreach($descarga->descarga->archivos as $archivo)
                                    <li>
                                        <p>
                                            <b>Titulo:</b> {{ $archivo->titulo }}<br>
                                            <b>Descrição:</b> {{ $archivo->descripcion }}<br>
                                            <b>Versão:</b> {{ $archivo->version }}<br>
                                            <b>Tamanho do arquivo:</b> {{ $archivo->size }} bytes <br>
                                            <b>Date do upload:</b> {{ $archivo->updated_at }}<br>
                                            {!! link_to($archivo->link, 'Descargar archivo') !!}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
                @else
                    <h3 style="color: #AAA; font-style: italic">Esse produto não tem arquivos disponíveis por enquanto.</h3>
                @endif
            </div>
        </div>
    </div>
@stop