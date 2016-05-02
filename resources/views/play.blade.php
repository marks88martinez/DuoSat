@extends('index')
@section('contenido')


    {{--*******************************--}}



{{--<head>--}}
    {{--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />--}}
    {{--<title>Boishakhi | Mobile app landing page</title>--}}
    {{--<meta name="description" content="full-screen mobile app landing page for free." />--}}
    {{--<meta name="keywords"  content="fullpage,fullscreen,html,css3,app,landing page" />--}}
    {{--<meta name="Resource-type" content="Free" />--}}
    {{--<meta name="author" content="Ohidul" />--}}

    {{--<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700|Ubuntu:400,700|Roboto:400,700,300' rel='stylesheet' type='text/css'>--}}



    <link rel="stylesheet" href="{{URL::to('vista/new_prod/css/font-awesome.min.css')}}">
    {{--<link rel="stylesheet" href="{{URL::to('vista/new_prod/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{URL::to('vista/new_prod/css/jquery.fancybox.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/new_prod/css/jquery.fancybox-thumbs.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/new_prod/css/jquery.fullPage.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/new_prod/css/animate.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/play/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('vista/new_prod/responsive.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>


    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->



{{--</head>--}}
{{--<body>--}}
    <style>
        .fuente_titulo{
            margin-top: 50px;
            font-size: 60px;
            font-family: 'Open Sans Condensed', sans-serif;
        }
        .fuent_new{
            font-size: 25px;
            font-family: 'Open Sans Condensed', sans-serif;
        }

        .fuente_titulo1{
            text-shadow: 2px 2px 6px #000000;
            color: white;
            margin-top: 50px;
            font-size: 60px;
            font-family: 'Open Sans Condensed', sans-serif;
        }
        .fuent_new1{
            text-shadow: 2px 2px px #000000;
            color: white;
            font-size: 25px;
            font-family: 'Open Sans Condensed', sans-serif;
        }

        .fuente_titulo2{
            /*text-shadow: 2px 2px 6px #000000;*/
            color: white;
            margin-top: 50px;
            font-size: 60px;
            font-family: 'Open Sans Condensed', sans-serif;
        }
        .fuent_new2{
            /*text-shadow: 2px 2px px #000000;*/
            color: white;
            font-size: 25px;
            font-family: 'Open Sans Condensed', sans-serif;
        }



        .fuente_titulo3{
            /*text-shadow: 2px 2px 6px #000000;*/
            color: #000000;
            margin-top: 50px;
            font-size: 60px;
            font-family: 'Open Sans Condensed', sans-serif;
        }
        .fuent_new3{
            /*text-shadow: 2px 2px px #000000;*/
            color: #000000;
            font-size: 25px;
            font-family: 'Open Sans Condensed', sans-serif;
        }


        .fuente_titulo4{
            /*text-shadow: 2px 2px 6px #000000;*/
            color: #ffffff;
            margin-top: 50px;
            font-size:25px;
            font-family: 'Open Sans Condensed', sans-serif;
        }
        .fuent_new4{
            /*text-shadow: 2px 2px px #000000;*/
            color: #ffffff;
            font-size: 15px;
            font-family: 'Open Sans Condensed', sans-serif;
        }
    </style>
<div id="fullpage">
    <div class="section"  id="section0">

        <div class="homescreen">
            <div class="container">
                <div class="row text-center">
                    <div class="declaration">
                        <br>
                        {{--<h1 class="logo">BOISHAkHi</h1>--}}
                        {{--<h1>NEXT</h1>--}}
                        <h4 class="fuente_titulo">PLAY</h4>
                        <p class="fuent_new">Aprecie a portabilidade porque tamanho não é sinônimo de potência!
                        </p>

                    </div>
                    <div class="header_btn">
                        {{--<a class="btn_download" href="http://google.com">Download the app</a> <br>--}}
                    </div>

                </div>
                <div class="row">
                    <div class="header_img">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <img src="{{URL::to('vista/play/playjuntos.png')}}" alt="" class="img-responsive wow bounceInUp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="section" id="section1">
        <div class="features_area">
            <div class="container">
                <div class="row page_title text-center">
                    {{--<h2>Boishakhi features</h2>--}}
                    {{--<p>Awesome features of concord app</p>--}}
                </div>
                <div class="all_features">
                    <div class="row features feature_one">
                        <div class="col-md-6">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo1">Design Compacto</h4>
                                <h6 class="fuent_new1">O Duosat Play foi projetado para promover a portabilidade, leve o seu Sistema de Streaming para qualquer lugar, nas viagens, na casa dos amigos ou onde seja que você quiser para poder apreciar com os seus amigos uma experiência única em entretenimento.</h6>



                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                {{--<img class="img-responsive " src="{{URL::to('vista/new_prod/img/64.png')}}" alt="">--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="section2">
        <div class="describe_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">HEVC (H.265) Codec</h4>
                    <h6 class="fuent_new2">Com o mais novo Codec H.265, as imagens ganharam uma considerável melhora em relação com os dispositivos tecnológicos atuais, o Next UHD é impulsado com um exclusivo processador de vídeo extremadamente poderoso, o que lhe permitirá aprimorar de verdade a sua experiência de imagem colorida, além de reduzir drasticamente o consumo da Internet com conteúdos Streaming</h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/h2645.png')}}" alt=""></div>
                    </div>


                </div>



                {{--<div class="row describe">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="describe_image">--}}
                            {{--<img src="img/iphone-red.png" alt="">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-7 col-md-offset-1">--}}
                        {{--<div class="description">--}}
                            {{--<h3>All you want from an app</h3>--}}
                            {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>--}}
                            {{--<div class="des_list">--}}
                                {{--<ul class="list-unstyled">--}}
                                    {{--<li><img src="img/icons/icon1.png" alt=""><span>Epsum factorial non deposit quid pro quo hic escorol material.</span></li>--}}
                                    {{--<li><img src="img/icons/icon2.png" alt=""><span>Epsum factorial non deposit quid pro quo hic escorol instrument.</span></li>--}}
                                    {{--<li><img src="img/icons/icon3.png" alt=""><span>Epsum factorial non deposit quid pro quo hic escorol bosonto.</span></li>--}}
                                    {{--<li><img src="img/icons/icon4.png" alt=""><span>Epsum factorial non deposit quid pro quo hic escorol boishak.</span></li>--}}
                                    {{--<li><img src="img/icons/icon5.png" alt=""><span>Epsum factorial non deposit quid pro quo hic escorol nilanjona.</span></li>--}}
                                    {{--<li><img src="img/icons/icon6.png" alt=""><span>Epsum factorial non deposit quid pro quo hic escorol mairala.</span></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>


    {{--***************************************--}}
    {{--*******************************--}}

    <div class="section" id="section3">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo3">Conectividade</h4>
                    <h6 class="fuent_new3">Aprecie mais simples e rapidamente o aceso ao seu entretimento favorito, conectando via wi-fi o seu Next UHD com outros dispositivos multimídia. Visualize o seu programa de TV favorito a partir do seu móbil ou vice-versa. Sinta uma experiência de navegação mais rápida simplesmente como se fosse um computado</h6>
                    {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/conec.jpg')}}" alt=""></div>
                    </div>
                </div>
                <div class="row screens">
                    {{--<div class="col-md-4">--}}
                    {{--<div class="single_screen">--}}
                    {{--<a  href="img/screen1-big.png" class="fancybox-thumbs" title="First Screen" data-fancybox-group="thumb" >--}}
                    {{--<img  class="img-responsive"  src="img/screen1.png" alt="">--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<div class="single_screen">--}}
                    {{--<a  href="img/screen2-big.png" class="fancybox-thumbs" title="First Screen" data-fancybox-group="thumb" >--}}
                    {{--<img  class="img-responsive"  src="img/screen2.png" alt="">--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<div class="single_screen">--}}
                    {{--<a  href="img/screen3-big.png" class="fancybox-thumbs" title="First Screen" data-fancybox-group="thumb" >--}}
                    {{--<img  class="img-responsive"  src="img/screen3.png" alt="">--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

    {{--*******************************--}}


    {{--*******************************--}}

    <div class="section" id="section4">
        <div class="features_area">
            <div class="container">
                <div class="all_features">

                    <div class="row features feature_two">

                        <div class="col-md-7 col-md-offset-1 visible-sm visible-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo2">3D</h4>
                                <h6 class="fuent_new2"> Experiência realmente envolvente com as funcionalidades 3D no seu Next UHD</h6>
                                {{--<p style="color: black">função disponível com a conexão ao Sistema Home Theater</p>--}}
                                S
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/new_prod/img/3d.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 hidden-sm hidden-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo2" style="text-align: center">3D</h4>
                                <h6 class="fuent_new2"> Experiência realmente envolvente com as funcionalidades 3D no seu Next UHD</h6>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--*******************************--}}
    {{--*****************************************--}}




    <div class="section" id="section5">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Pendure-o atrás da sua TV</h4>
                    <h6 class="fuent_new2">Especialmente desenhado com uma tela de sete polegadas com acesso ao controle remoto, para surpreender seus amigos com sua TV</h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/play/tv.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="row screens">
                    {{--<div class="col-md-4">--}}
                        {{--<div class="single_screen">--}}
                            {{--<a  href="img/screen1-big.png" class="fancybox-thumbs" title="First Screen" data-fancybox-group="thumb" >--}}
                                {{--<img  class="img-responsive"  src="img/screen1.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="single_screen">--}}
                            {{--<a  href="img/screen2-big.png" class="fancybox-thumbs" title="First Screen" data-fancybox-group="thumb" >--}}
                                {{--<img  class="img-responsive"  src="img/screen2.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="single_screen">--}}
                            {{--<a  href="img/screen3-big.png" class="fancybox-thumbs" title="First Screen" data-fancybox-group="thumb" >--}}
                                {{--<img  class="img-responsive"  src="img/screen3.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="section6">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Faça da sua TV um dispositivo inteligente</h4>
                    <h6 class="fuent_new2">Transforme sua TV normal num dispositivo inteligente, somente conectando seu Duosat Play em tempo recorde!</h6>
                    <div class="row">
                        {{--<div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/tuner.jpg')}}" alt=""></div>--}}
                    </div>
                </div>
                <div class="row screens">
                    {{--<div class="col-md-4">--}}
                    {{--<div class="single_screen">--}}
                    {{--<a  href="img/screen1-big.png" class="fancybox-thumbs" title="First Screen" data-fancybox-group="thumb" >--}}
                    {{--<img  class="img-responsive"  src="img/screen1.png" alt="">--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<div class="single_screen">--}}
                    {{--<a  href="img/screen2-big.png" class="fancybox-thumbs" title="First Screen" data-fancybox-group="thumb" >--}}
                    {{--<img  class="img-responsive"  src="img/screen2.png" alt="">--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<div class="single_screen">--}}
                    {{--<a  href="img/screen3-big.png" class="fancybox-thumbs" title="First Screen" data-fancybox-group="thumb" >--}}
                    {{--<img  class="img-responsive"  src="img/screen3.png" alt="">--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>




    {{--********************************--}}

    <div class="section" id="section7">
        <div class="features_area">
            <div class="container">
                <div class="all_features">

                    <div class="row features feature_two">

                        <div class="col-md-7 col-md-offset-1 visible-sm visible-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo3">Qualidade do Áudio</h4>
                                <h6 class="fuent_new3"> O Duosat Next UHD está equipado com a saída de áudio óptico (SPDIF), suportando Dolby, AC3 DTS, 5.1 y 7.1, com alta fidelidade ².</h6>
                                <p style="color: black">função disponível com a conexão ao Sistema Home Theater</p>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/new_prod/img/homet.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 hidden-sm hidden-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo3">Qualidade do Áudio</h4>
                                <h6 class="fuent_new3"> O Duosat Next UHD está equipado com a saída de áudio óptico (SPDIF), suportando Dolby, AC3 DTS, 5.1 y 7.1, com alta fidelidade ².</h6>
                                <p style="color: black">função disponível com a conexão ao Sistema Home Theater</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--********************************--}}



    <div class="section" id="section8">
        <div class="screens_area">
            <div class="container">
                {{--<div class="row page_title text-center">--}}
                {{--<h4 class="fuente_titulo2">Streaming</h4>--}}
                {{--<h6 class="fuent_new2">Try XBMC, Netflix, Hulu, Kodi Dailymotion, YouTube, todos os aplicativos de Streaming que são suportados pelo Sistema Androide</h6>--}}
                {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                {{--<div class="row">--}}
                {{--<div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/str.png')}}" alt=""></div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="row cuadrado">


                    <style>
                        .cuadrado{
                            width: 100%;
                            background: #2b2b2e;
                        }
                        .cuad{
                            margin: 0 auto;
                            padding: 5px;

                            text-align: center;
                            width: 33%;
                            min-height: 227px;
                            /*background: silver;*/

                            border-left: 1px solid gray;
                        }

                        .cuad img{
                            margin: 0 auto;
                            padding: 0;

                            text-align: center;

                        }
                        .fuente_titulo4{
                            padding: 2px;
                            margin-top: -10px;
                        }
                        .parraf{
                            color: white;
                            font-size: 12px;
                        }


                        @media (max-width: 721px) {

                            .cuad {
                                border-left: 0;

                                margin: 0 auto;
                                padding: 0;
                            }
                            .cuad img{
                                text-align: center;
                                background: #2b2b2f;
                                width: 33%;
                                height: auto;
                                margin: 0 auto;
                                padding: 0;

                                text-align: center;

                            }
                        }
                    </style>


                    <div class="col-md-4 cuad">
                        <div class="">

                            <div class="row" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/procesador.png')}}" alt="">
                            </div>
                            <div class="row" >
                                <h4 class="fuente_titulo4">Processador</h4>
                            </div>
                            <div class="row" >
                                <p class="parraf">Processador Dual-Core, 730 MHZ
                                    Memória Flash 16Gb
                                     </p>
                                <p class="parraf">Sistema DRAM 256MB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/usb.png')}}" alt="">
                            <h4 class="fuente_titulo4">Entrada/Saída</h4>

                            <p class="parraf">Suporta USB 2.0
                                Internet (LAN) 1 x RJ45</p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/display.png')}}" alt="">
                            <h4 class="fuente_titulo4">Display</h4>

                            <p class="parraf">Display Externo de 7 polegadas
                                Cores OSD</p>

                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/sound.png')}}" alt="">
                            <h4 class="fuente_titulo4">Áudio </h4>

                            <p class="parraf">
                                Dolby e Dolby Digital
                                Controle de volume inteligente
                                Efeitos de som SRS, Dolby e MS11
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/wifi.png')}}" alt="">
                            <h4 class="fuente_titulo4">Conectividade</h4>

                            <p class="parraf">Suporta Wi Fi Externo</p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/dimensiones.png')}}" alt="">
                            <h4 class="fuente_titulo4">Especificações Físicas</h4>

                            <p class="parraf">Tamanho Compacto
                                Dimensões: 118.8 x 21 x 78.8 mm </p>

                            </p>
                        </div>
                    </div>








                </div>
            </div>
        </div>
    </div>

    {{--**********************************--}}











    <div class="section" id="section9">
        <div class="contact_area">
            <div class="container">
                <div class="row page_title text-center">


                    <br>
                    <iframe width="700" height="400" src="https://www.youtube.com/embed/sSBXsPIxtkE" frameborder="0" allowfullscreen></iframe>

                </div>

                <div class="row social text-center">
                    <hr class="hrstyle">

                </div>
                <div class="row copyright text-center">
                    {{--<p>&copy; Copyright <strong><i>Boishakhi</i></strong>. All Rights Reserved. Designed with <i class="fa fa-heart-o"></i> by <a href="http://ohidul.me" target="_blank" class="author">ohidul</a></p>--}}
                    {{--<ul class="footer_pages list-inline">--}}
                        {{--<li><a href="#">Privacy policy</a></li>--}}
                        {{--<li><a href="#">Terms and conditions</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
        </div>
    </div>
</div>



{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>--}}
{{--<script>window.jQuery || document.write('<script src="{{URL::to('vista/new_prod/js/jquery-1.10.2.min.js')}}"><\/script>')</script>--}}
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
{{--<script src="{{URL::to('vista/new_prod/js/bootstrap.min.js')}}"></script>--}}
<script src="{{URL::to('vista/new_prod/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fullPage.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fancybox.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/wow.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{URL::to('vista/play/js/main.js')}}"></script>


{{--</body>--}}


    {{--*******************************--}}




@stop