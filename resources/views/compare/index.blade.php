<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{URL::to('compare/css/reset.css')}}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{URL::to('compare/css/style.css')}}"> <!-- Resource style -->
    <script src="{{URL::to('compare/js/modernizr.js')}}"></script> <!-- Modernizr -->

    <title>
        Tabela de comparação de produtos | Duosat</title>
</head>
<body>
<style>
    .logo {
        text-align: center;
        margin: 0;
        padding: 10px;
        width: 100%;
        height: auto;

    }
    .logo img{

        margin: 0 auto;
        padding: 0 ;
        width: 250px;
        height: auto;
    }
    .cd-products-table .selected .top-info .check::before {
        background: #21A9EC;
        border-color: #21A9EC;
    }

    .cd-products-comparison-table .filter.active {
        cursor: pointer;
        background-color: #21A9EC;
    }

    .no-touch .cd-products-comparison-table .filter.active:hover {
        background-color: #1f69ec;
    }
    .cd-products-table{
        overflow: visible;
    }

</style>
<section class="cd-intro">
   <p  class="logo"> <a href="/"><img src="{{URL::to('compare/imagenes/logo_duo.png')}}"></a></p>

    {{--<h1>Products Comparison Table</h1>--}}
    <br>
</section> <!-- .cd-intro -->

<section class="cd-products-comparison-table">
    <header>
        <h2>Compare os modelos</h2>

        <div class="actions">
            <a href="#0" class="reset">Reiniciar</a>
            <a href="#0" class="filter">
                Filtrar</a>
        </div>
    </header>

    <div class="cd-products-table">
        <div class="features">
            <div class="top-info">Modelos</div>
            <ul class="cd-features-list">
                @foreach($campo as $n_campos)
                <li>{{$n_campos->nombre}}</li>
                    @endforeach

            </ul>
        </div> <!-- .features -->

        <div class="cd-products-wrapper">
            <ul class="cd-products-columns">


                @foreach( $productos as $producto)
                    <li class="product">
                        <div class="top-info">
                            <div class="check"></div>
                            <img src="{{$producto->imagenes->url_imagenes}}" alt="product image">
                            <h3>{{$producto->nombre_producto}}</h3>
                        </div> <!-- .top-info -->

                        <ul class="cd-features-list">
                            @foreach($campo as $campos)
                            <li>
                                <?php $index = $producto->producto_campos->search(function ($item, $key) use($campos) {return $item->codigo_campo == $campos->codigo_campo;})?>

                                @if($index !== false)
                                        {{$producto->producto_campos[$index]->descripcion}}
                                        @else
                                 ----

                                @endif
                            </li>
                                @endforeach


                        </ul>
                    </li> <!-- .product -->


                @endforeach















            </ul> <!-- .cd-products-columns -->
        </div> <!-- .cd-products-wrapper -->

        <ul class="cd-table-navigation">
            <li><a href="#0" class="prev inactive">Prev</a></li>
            <li><a href="#0" class="next">Next</a></li>
        </ul>
    </div> <!-- .cd-products-table -->
</section> <!-- .cd-products-comparison-table -->
<script src="{{URL::to('compare/js/jquery-2.1.4.js')}}"></script>
<script src="{{URL::to('compare/js/main.js')}}"></script> <!-- Resource jQuery -->
</body>
</html>