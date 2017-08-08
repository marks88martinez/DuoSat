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



    <link rel="stylesheet" href="{{URL::to('vista/next_lite/css/font-awesome.min.css')}}">
    {{--<link rel="stylesheet" href="{{URL::to('vista/new_prod/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{URL::to('vista/next_lite/css/jquery.fancybox.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/next_lite/css/jquery.fancybox-thumbs.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/next_lite/css/jquery.fullPage.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/next_lite/css/animate.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/next_lite/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('vista/next_lite/responsive.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>


    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->

    <script>
        $(document).ready(function(){
//            var  url = "#firstPage";
//            var a = $(location).attr('href');
////                    console.log(a);
//            $('#btn_pro').click(function(){
//
//                var nu = window.location.replace(url);
//
//
////                        console.log(nu);


            })
        })
    </script>



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
        .btn-default_1 {
            margin-top: -100px;

            margin-left: 80%;
            width: 80px;
            display: block;
            color: #d8d8d8;
            background-color: #d8d8d8;
            border-color: #d8d8d8;
        }
        .btn-default_1:hover{
            opacity: 0.8;
            color: #d8d8d8;
            background-color: #d8d8d8;
            border-color: #d8d8d8;
        }
        img.gra{
            margin-bottom: 10px;

            margin-left: 80%;

            width: 50px;
            height: auto;
            cursor: pointer;

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

                        <h4 class="fuente_titulo"><img src="vista/next_lite/logo.png"></h4>
                        <p class="fuent_new">Agora, o seu NEXT, mais leve e acessível do que você esperava!</p>

                    </div>
                    <div class="header_btn">
                        {{--<a class="btn_download" href="http://google.com">Download the app</a> <br>--}}
                    </div>

                </div>
                <div class="row">
                    <div class="header_img">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <br>
                                <img class="btn-default_1 gra" onclick="popup('next_lite_360',600,455)" src="vista/next_lite/360.png " alt="">
                                <img src="{{URL::to('vista//next_lite/next_li.png')}}" alt="" class="img-responsive wow bounceInUp">
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

                                <h4 class="fuente_titulo1">Processador Quad-Core</h4>
                                <h6 class="fuent_new1">
                                    O Next UHD Lite usa a versão otimizada de processadores Quad-Core, proporcionando um Streaming mais suave e uma incrível experiência nos jogos. Ele é equipado com processador Quad-Core ARM Cortex A7 e GPU Mali450 Quad-Core de alto desempenho, tudo isso significa que o Next UHD Lite executará mais rápido e mais eficientemente do que um dispositivo com núcleo único ou dual core, dando-lhe um entretenimento extraordinário na velocidade da luz!
                                </h6>



                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class=" " src="{{URL::to('vista/next_lite/img/64.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section2">
        <div class="features_area">
            <div class="container">
                <div class="all_features">

                    <div class="row features feature_two">

                        <div class="col-md-7 col-md-offset-1 visible-sm visible-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo1">Design compacto</h4>
                                <h6 class="fuent_new1">
                                    Esta é uma arte compacta e minimalista, seguindo a nova tendência de desenhos e sendo capaz de combinar com qualquer tipo de ambiente. O Next UHD Lite vem com um painel frontal VFD de 10 dígitos.
                                </h6>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/next_lite/img/du.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 hidden-sm hidden-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo1">Design compacto</h4>
                                <h6 class="fuent_new1">Esta é uma arte compacta e minimalista, seguindo a nova tendência de desenhos e sendo capaz de combinar com qualquer tipo de ambiente. O Next UHD Lite vem com um painel frontal VFD de 10 dígitos.</h6>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section3">
        <div class="features_area">
            <div class="container">
                <div class="all_features">
                    <div class="row features feature_three">
                        <div class="col-md-6">
                            <div class="feature_detail">
                                <h4 class="fuente_titulo1">Sistema Operacional Android
                                </h4>
                                <h6 class="fuent_new1">
                                    Porque nós não acreditamos em limites! O Next UHD Lite vem com a versão mais estável do Sistema Operacional Android para reprodutores multimídia. Isso significa que você pode começar a usar seus aplicativos favoritos na tela da TV, ao contrário de aqueles dispositivos básicos de Streaming do mercado, o Next UHD LITE permite que você instale e use qualquer aplicativo Android facilmente e sem trapalhadas.
                                </h6>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/next_lite/img/android.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section4">
        <div class="describe_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Codec H.265</h4>
                    <h6 class="fuent_new2">
                        A maior fortaleza do H. 265 é que tem uma maior taxa de compressão, o que significa que o H.265 pode fornecer vídeos de maior qualidade e mais comprimidos do que o H.264 e as imagens ganham uma considerável melhora em relação com os dispositivos tecnológicos atuais, o Next UHD Lite  é impulsado com um exclusivo processador de vídeo extremadamente poderoso, o que lhe permitirá aprimorar de verdade a sua experiência de imagem colorida, além de reduzir drasticamente o consumo da Internet com conteúdos Streaming.
                    </h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/next_lite/img/h2645.png')}}" alt=""></div>
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
    <div class="section" id="section5">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Wi-Fi</h4>
                    <h6 class="fuent_new2">
                        Você já não tem que estar conectado com cabos irritantes que às vezes nos causam muitos problemas. Agora você pode acessar o seu dispositivo via Wi-Fi e começar a desfrutar os seus conteúdos multimídia!
                    </h6>
                    {{--<p style="color: white">*Wi-Fi specifications may vary according to the region</p>--}}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/next_lite/img/07.jpg')}}" alt=""></div>
                    </div>
                </div>
                <div class="row screens">

                </div>
            </div>
        </div>
    </div>


    {{--<div class="section" id="section6">--}}
        {{--<div class="screens_area">--}}
            {{--<div class="container">--}}
                {{--<div class="row page_title text-center">--}}
                    {{--<h4 class="fuente_titulo2">Capture more of every moment!</h4>--}}
                    {{--<h6 class="fuent_new2">Take pictures ¹ or use IP camera for surveillance, also is able to use with Snapchat™, skype™ or another applications that you need camera compatibilities.</h6>--}}
                    {{--<p style="color: white">¹ function available with the purchase of extra accessory</p>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/next_lite/img/07.jpg')}}" alt=""></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row screens">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}





    <div class="section" id="section7">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Capture mais de cada momento!</h4>
                    <h6 class="fuent_new2">Tire fotos ou use a sua Câmera de Segurança, além disso, pode ser usado com Snapchat™, Skype™ e outros aplicativos que precisam compatibilidade de câmera.</h6>
                    <p style="color: white">Função disponível com a compra de um acessório extra</p>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/next_lite/img/cam.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="row screens">

                </div>
            </div>
        </div>
    </div>

    {{--********************************--}}

    <div class="section" id="section8">
        <div class="features_area">
            <div class="container">
                <div class="all_features">

                    <div class="row features feature_two">

                        <div class="col-md-7 col-md-offset-1 visible-sm visible-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo3">Qualidade do Áudio</h4>
                                <h6 class="fuent_new3">O Duosat Next UHD Lite é equipado com saída de áudio óptica (SPDIF), suportando Dolby (5.1) e Dolby Digital Plus (7.1), com alta fidelidade ²</h6>
                                <p style="color: black">²  disponível com conexão de sistema de Home Theater</p>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/next_lite/img/homet.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 hidden-sm hidden-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo3">Qualidade do Áudio</h4>
                                <h6 class="fuent_new3">O Duosat Next UHD Lite é equipado com saída de áudio óptica (SPDIF), suportando Dolby (5.1) e Dolby Digital Plus (7.1), com alta fidelidade ²</h6>
                                <p style="color: black">²  disponível com conexão de sistema de Home Theater</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--********************************--}}



    <div class="section" id="section9">
        <div class="features_area">
            <div class="container">
                <div class="all_features">
                    <div class="row features feature_three">
                        <div class="col-md-6">
                            <div class="feature_detail">
                                <h4 class="fuente_titulo1">4K UHD</h4>
                                <h6 class="fuent_new1">O futuro do UHD é agora! É por isso que Next UHD Lite lhe dá o poder de apreciá-lo hoje! Veja imagens incrivelmente nítidas, uma ampla expressão de cores e detalhes bem dramáticos – tudo isso em una clara y nítida resolução 4K UHD. Aprecie imagens mais realistas com a tecnologia 4K que o Duosat Next UHD Lite oferece e eleve a sua experiência de entretenimento para o próximo nível.</h6>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/next_lite/img/4k2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--*******************************--}}

    <div class="section" id="section10">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo3">Conectividade</h4>
                    <h6 class="fuent_new3">Aprecie mais simples e rapidamente o aceso ao seu entretimento favorito, conectando via wi-fi o seu Next UHD Lite com outros dispositivos multimídia. Visualize o seu programa de TV favorito a partir do seu móbil ou vice-versa. Sinta uma experiência de navegação mais rápida simplesmente como se fosse um computador.</h6>
                    {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/next_lite/img/conec.jpg')}}" alt=""></div>
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

    <div class="section" id="section11">
        <div class="features_area">
            <div class="container">
                <div class="all_features">

                    <div class="row features feature_two">

                        <div class="col-md-7 col-md-offset-1 visible-sm visible-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo2">3D</h4>
                                <h6 class="fuent_new2">Assista os seus vídeos em um 3D intenso, vívido e incrível, apenas assista seus vídeos da maneira em que você está predestinado a fazê-lo!</h6>
                                {{--<p style="color: black">função disponível com a conexão ao Sistema Home Theater</p>--}}

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/next_lite/img/3d.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 hidden-sm hidden-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo2">3D</h4>
                                <h6 class="fuent_new2">Assista os seus vídeos em um 3D intenso, vívido e incrível, apenas assista seus vídeos da maneira em que você está predestinado a fazê-lo!</h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--*******************************--}}


    <div class="section" id="section12">
        <div class="features_area">
            <div class="container">
                <div class="all_features">
                    <div class="row features feature_three">
                        <div class="col-md-6">
                            <div class="feature_detail">
                                <h4 class="fuente_titulo1">Jogos</h4>
                                <h6 class="fuent_new1">Curta os jogos mais populares listados no Google Play, com air-mouse o Joystick². </h6>
                                <p style="color: white">²Função disponível com conexão ao Sistema Home Theater.</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/next_lite/img/game.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--*******************************--}}





    {{--*******************************--}}

    <div class="section" id="section13">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Streaming</h4>
                    <h6 class="fuent_new2">O Next UHD Lite foi desenvolvido para ser o mais compatível com todos os aplicativos de Streaming da sua preferência, como XBMC, Netflix, Hulu, Kodi, Dailymotion, YouTube e outros aplicativos de Streaming suportados pelo seu sistema Android.</h6>
                    {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/next_lite/img/str.png')}}" alt=""></div>
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

    <div class="section" id="section14">
        <div class="features_area">
            <div class="container">
                <div class="all_features">

                    <div class="row features feature_two">

                        <div class="col-md-7 col-md-offset-1 visible-sm visible-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo2">Aceleração Multimídia: NEON</h4>
                                <h6 class="fuent_new2">Porque você merece! Assista qualquer vídeo, em qualquer formato, edite e melhore os vídeos capturados, processamento de jogos otimizado, processamento rápido de fotos com vários megapixels, tratamento eficiente de dados que minimiza o acesso à memória e muito, muito mais...</h6>
                                {{--<p style="color: black">função disponível com a conexão ao Sistema Home Theater</p>--}}

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/next_lite/img/control.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 hidden-sm hidden-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo2">Aceleração Multimídia: NEON</h4>
                                <h6 class="fuent_new2">Porque você merece! Assista qualquer vídeo, em qualquer formato, edite e melhore os vídeos capturados, processamento de jogos otimizado, processamento rápido de fotos com vários megapixels, tratamento eficiente de dados que minimiza o acesso à memória e muito, muito mais...</h6>

                                {{--<p style="color: black">função disponível com a conexão ao Sistema Home Theater</p>--}}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{--*******************************--}}


    {{--*******************************--}}



    <div class="section" id="section15">
        <div class="features_area">
            <div class="container">
                <div class="all_features">
                    <div class="row features feature_three">
                        <div class="col-md-6">
                            <div class="feature_detail">
                                <h4 class="fuente_titulo2">USB 3.0</h4>
                                <h6 class="fuent_new2">
                                    USB 3.0 é a terceira maior versão de Universal Serial Bus (USB), padrão para a interface de computadores y dispositivos eletrônicos. Entre outras melhoras, o USB 3.0 acrescenta a nova taxa de transferência chamada SuperSpeed USB (SS) que é capaz de transferir dados a velocidades de até 5 Gbit/s (625 MB/s), para curtir filmes codificados do Blu-Ray ou filmes em UHD 4K a partir do dispositivo de Memória Flash.
                                </h6>
                                {{--<p style="color: black">função disponível com a conexão ao Sistema Home Theater</p>--}}

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/next_lite/img/use.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





{{--***********************************--}}
    <div class="section" id="section16">
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
                        .cuad2{
                            border-right: 1px solid gray;
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
                                <img  class=""  src="{{URL::to('vista/next_lite/img/ico/android.png')}}" alt="">
                            </div>
                            <div class="row" >
                                <h4 class="fuente_titulo4">Android</h4>
                                </div>
                            <div class="row" >
                            <p class="parraf">Sistema Operacional Android KitKat (Exclusivo para reprodutores multimídia)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/next_lite/img/ico/tuner.png')}}" alt="">
                            <h4 class="fuente_titulo4">Sintonizador</h4>

                            <p class="parraf">
                                Sintonizador Dual. Suporta DVB-S2 : 2~45 Ms/s, Demodulação: ACM, VCM, QPSK, 8PSK, 16APSK, 32APSK. Conector de entrada: F-Type, IEC 169-24 X 2, Fêmea. Frequência de Entrada: 950 ~ 2150MHz. LNB & Polarização: Vertical: +13.5V, Horizontal: +18V, Corrente: Max. 450mA
                            </p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/next_lite/img/ico/4k.png')}}" alt="">
                            <h4 class="fuente_titulo4">Vídeo</h4>

                            <p class="parraf">
                                Resolução Ultra HD 4k x 2k: 3840p x 2160p, 1080P/i, 720p, 576p/i, 480p/i, decodificação: HEVC (H.265),H.264 BP/MP/HP@L5.0, Full HD 3D (MVC), Blu-ray, MPEG2SP@ML/MP@HL,AVS baseline @L6.0 e AVS -16(AVS+), VC-1 SP@ML, MP@HL,  e AP@L0-3,Mpeg4 SHF(h.263 baseline)
                            </p>

                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/next_lite/img/ico/procesador.png')}}" alt="">
                            <h4 class="fuente_titulo4">Processador </h4>

                            <p class="parraf">
                                Quad-Core ARM Cortex A7. Quad-Core de Alta Performance Mali450. Aceleração de Motor Multimídia Integrada: NEON. Aceleração JAVA. Coprocessador Floating Point Integrado.
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/next_lite/img/ico/usb.png')}}" alt="">
                            <h4 class="fuente_titulo4">USB</h4>

                            <p class="parraf">2 X USB 2.0 Host (Lateral)
                                1 X USB 3.0 Host (Lateral)
                            </p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/next_lite/img/ico/display.png')}}" alt="">
                            <h4 class="fuente_titulo4">Display</h4>

                            <p class="parraf">
                                1 X 10 dígitos VFD, 1 X Dual LED (Modo de Espera), 1 X LED (Redes)
                            </p>

                            </p>
                        </div>
                    </div>





                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/next_lite/img/ico/sound.png')}}" alt="">
                            <h4 class="fuente_titulo4">Áudio</h4>

                            <p class="parraf">
                                2 X RCA Chinch(L/R), Saída Digital de Áudio 1 x SPDIF(Óptico), Áudio DSP dedicado, decodificação G.711, Dolby Digital e Dolby Digital plus, Mix de
                                Áudio de 2-canais, cancelamento de eco, SRS,MS11 Efeitos de som, Processamento Pounding bass, AAC-LC e Decodificação HE AACV1/V2, APE, FLAC, Ogg, AMR-NB, e Decodificação AMR-WB, MPEG L1/L2/L3
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/next_lite/img/ico/MEMO.png')}}" alt="">
                            <h4 class="fuente_titulo4">Memória</h4>

                            <p class="parraf">Memória: RAM DDR3 1GBytes, Memória Flash: 8GBytes</p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/next_lite/img/ico/dimensiones.png')}}" alt="">
                            <h4 class="fuente_titulo4">Especificações Físicas</h4>

                            <p class="parraf">
                                Tamanho: 180mm x 40mm x 124mm (W x H x D). Peso (Conjunto) Aprox. 0.7Kg. Temperatura Operacional: 0° C to +45° C. Temperatura de Armazenamento: -10°C to +70°C.
                            </p>
                            {{--<p class="parraf">Sistema Operacional Android 4.4 kitkat</p>--}}
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 cuad cuad2" >
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/next_lite/img/ico/wifi.png')}}" alt="">
                            <h4 class="fuente_titulo4">WIFI</h4>

                            <p class="parraf">(WLAN 11b/g/n Incorporado): 1 Fêmea  RP-SMA ( com Antena 4dB)</p>
                            {{--<p class="parraf">*Wi-Fi specifications may vary according to the region</p>--}}

                            </p>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>

    {{--**********************************--}}










    <div class="section" id="section17">
        <div class="contact_area">
            <div class="container">
                <div class="row page_title text-center">


                    <br>
                    <iframe width="700" height="400" src="https://www.youtube.com/embed/Ji9zM2ItQzQ" frameborder="0" allowfullscreen></iframe>

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
    <script type="text/javascript">
        function popup(url,ancho,alto) {
            var posicion_x;
            var posicion_y;
            console.log(screen.width);


            posicion_x=(screen.width/2)-(ancho/2);
            posicion_y=(screen.height/2)-(alto/2);
            window.open(url, "leonpurpura.com", "width="+ancho+",height="+alto+",menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left="+posicion_x+",top="+posicion_y+"");
        }
    </script>


{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>--}}
{{--<script>window.jQuery || document.write('<script src="{{URL::to('vista/new_prod/js/jquery-1.10.2.min.js')}}"><\/script>')</script>--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>--}}
{{--<script src="{{URL::to('vista/new_prod/js/bootstrap.min.js')}}"></script>--}}
<script src="{{URL::to('vista/new_prod/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fullPage.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fancybox.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/wow.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{URL::to('vista/next_lite/js/main.js')}}"></script>


{{--</body>--}}


    {{--*******************************--}}




@stop