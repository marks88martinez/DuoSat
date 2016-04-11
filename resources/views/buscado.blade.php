@extends('index')
@section('contenido')
    <br>
    <div class="container">
        @if (count($articles) === 0)
         <div class="fonte"> <h2>  ...sin resultados</h2></div>
        @elseif (count($articles) >= 1)
            <div class="fonte"> <h2>  ... resultado:</h2></div>


            <ul>
                @foreach($articles as $article)
                    <li> <a href="productos/{{ $article->codigo_producto}}">{{ $article->nombre_producto}}</a></li>
                @endforeach
            </ul>

        @endif
    </div>


    @stop

