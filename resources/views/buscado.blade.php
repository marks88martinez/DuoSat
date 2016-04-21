@extends('index')
@section('contenido')
   <div class="container">
       <style>
           .ima{
               width: 180px;
               height: auto;
           }
           ul li{
               list-style: none;
           }
       </style>

       <div class="container">
           @if (count($articles) === 0)
               <div class="fonte2"> <h2>  ...Sin Resultados</h2></div>
           @elseif (count($articles) >= 1)
               <div class="fonte2"> <h2>  ... Resultado de Búsqueda:</h2></div>


               <ul>
                   @foreach($articles as $article)
                       <hr>
                       <li> <a href="productos/{{ $article->codigo_producto}}"><img class="ima" src="{{URL::to($article->imagenes->url_imagenes)}}" alt=""> {{ $article->nombre_producto}}</a></li>
                   @endforeach
               </ul>

           @endif
       </div>


   </div>

    @stop

