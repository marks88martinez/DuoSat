@extends('index')
@section('contenido')
<div class="banner">
    <!--**************************************************-->
    <section id="slider" class="">
        <ul class="slider-wrapper">
            @foreach($banner as $banners)
            <li class="current-slide">
                <img src="{{$banners->url_banner}}" title="" alt="">

                <div class="caption">
                    <h2 class="slider-title">Diseño web</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, placeat est. Alias illo hic quo nobis, aspernatur iste ut voluptate.</p>
                </div>
            </li>
                @endforeach


        </ul>
        <!-- Sombras -->
        <div class="slider-shadow"></div>

        <!-- Controles de Navegacion -->
        <ul id="control-buttons" class="control-buttons"></ul>
    </section>




    <!--**************************************************-->
</div>
<br><br>

<!--***************banner pequeño*****************-->
<div class="row">
    @foreach($chico as $chicos)

        <div class="col-md-3  bann"><img src="{{$chicos->url_banner}}"></div>

    @endforeach


</div>


<!--****************final banner pequeño****************-->

    @stop