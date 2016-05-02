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
    <link rel="stylesheet" href="{{URL::to('vista/new_prod/style.css')}}">
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
                        <h4 class="fuente_titulo">NEXT UHD</h4>
                        <p class="fuent_new">Esqueça o entretenimento convencional, porque com NEXT UHD o futuro é agora</p>

                    </div>
                    <div class="header_btn">
                        {{--<a class="btn_download" href="http://google.com">Download the app</a> <br>--}}
                    </div>

                </div>
                <div class="row">
                    <div class="header_img">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <img src="{{URL::to('vista/new_prod/img/next.png')}}" alt="" class="img-responsive wow bounceInUp">
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

                                <h4 class="fuente_titulo1">Memória Expansível</h4>
                                <h6 class="fuent_new1">O armazenamento da memória não deveria ser um problema. Então, se 16GB ainda não são suficientes, você pode acrescentar um cartão de memória adicional de 128GB. Assim, você não precisará de nuvens nem unidades de disco rígido</h6>



                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive " src="{{URL::to('vista/new_prod/img/64.png')}}" alt="">
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

                                <h4 class="fuente_titulo1">Design Inteligente</h4>
                                <h6 class="fuent_new1">O Next UHD tem uma tela de funções no painel frontal, para poder personalizar o visual segundo a sua decoração, com varias opções como o relógio, ícones de canais ou você pode carregar a sua própria imagem para poder visualizar na tela. Fomos aperfeiçoando o design do Next UHD para cumprir com a tendência minimalista, com materiais totalmente recicláveis o que o torna uma arte ecológica.</h6>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/new_prod/img/du.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 hidden-sm hidden-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo1">Design Inteligente</h4>
                                <h6 class="fuent_new1">O Next UHD tem uma tela de funções no painel frontal, para poder personalizar o visual segundo a sua decoração, com varias opções como o relógio, ícones de canais ou você pode carregar a sua própria imagem para poder visualizar na tela. Fomos aperfeiçoando o design do Next UHD para cumprir com a tendência minimalista, com materiais totalmente recicláveis o que o torna uma arte ecológica.</h6>


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
                                <h4 class="fuente_titulo1">Único Sistema Operacional Android para Media Player</h4>
                                <h6 class="fuent_new1">As coisas simplesmente se tornaram mais doces. O Next UHD é impulsado por um único Sistema Operacional Android, o KITKAT. Optámos pelo Sistema Operacional mais estável para configurá-lo, criando um Sistema Operacional em Android mundialmente único para reprodutores multimídia e as novas funcionalidades são desenvolvidas especialmente segundo o padrão de uso dos reprodutores multimídia, o que permitirá antecipar o seu próximo movimento.</h6>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/new_prod/img/android.png')}}" alt="">
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
    <div class="section" id="section5">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">WI-FI mais rápido</h4>
                    <h6 class="fuent_new2">O Next UHD é impulsado pela última tecnologia em dispositivos WI-FI. O que significa que a velocidade tem sido melhorada para suportar a transmissão multimídia a traves da Internet, segundo as mais novas tendências do entretenimento</h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/07.jpg')}}" alt=""></div>
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
                    <h4 class="fuente_titulo2">Transformador Design Modular</h4>
                    <h6 class="fuent_new2">O Novo Duosat Next UHD foi projetado para lhe ajudar a tirar o máximo proveito ao entretenimento. Uma visão futura é que o Design Modular lhe deixa usar um sintonizador companheiro para melhorar as funcionalidades do entretenimento. O deslizamento para fora do sintonizador pode ser realizado em um piscar de olhos para a personalização do tipo de Sistema de TV a usar, suportando diferentes opções de sintonização, por exemplo, ISDBT, Cabo, Satélite, a customização do Next UHD é muito simples!</h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/tuner.jpg')}}" alt=""></div>
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



    <div class="section" id="section7">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Capture mais de cada momento</h4>
                    <h6 class="fuent_new2">Tire fotos ou use a sua Câmera de Segurança, além disso, pode ser usado com Snapchat™, Skype™ e outros aplicativos que precisam compatibilidade de câmera.</h6>
                    <p style="color: white">Função disponível com a compra de um acessório extra</p>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/tuner.jpg')}}" alt=""></div>
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

    <div class="section" id="section8">
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



    <div class="section" id="section9">
        <div class="features_area">
            <div class="container">
                <div class="all_features">
                    <div class="row features feature_three">
                        <div class="col-md-6">
                            <div class="feature_detail">
                                <h4 class="fuente_titulo1">4K UHD</h4>
                                <h6 class="fuent_new1">A experiência mais envolvente com UHD 4K é que transforma o entretenimento ordinário em extraordinário. Veja imagens incrivelmente nítidas, uma ampla expressão de cores e detalhes bem dramáticos – tudo isso em una clara y nítida resolução 4K UHD. Aprecie imagens mais realistas com a nossa UHD TV 4K e eleve a sua experiência de entretenimento para o próximo nível.</h6>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/new_prod/img/4k2.png')}}" alt="">
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

    <div class="section" id="section11">
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


    <div class="section" id="section12">
        <div class="features_area">
            <div class="container">
                <div class="all_features">
                    <div class="row features feature_three">
                        <div class="col-md-6">
                            <div class="feature_detail">
                                <h4 class="fuente_titulo1">Jogos</h4>
                                <h6 class="fuent_new1">Curta os jogos mais populares listados no Google Play, com air-mouse o Joystick².</h6>
                                <p style="color: white">Função disponível com conexão ao Sistema Home Theater</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/new_prod/img/game.png')}}" alt="">
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
                    <h6 class="fuent_new2">Try XBMC, Netflix, Hulu, Kodi Dailymotion, YouTube, todos os aplicativos de Streaming que são suportados pelo Sistema Androide</h6>
                    {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/str.png')}}" alt=""></div>
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

                                <h4 class="fuente_titulo2">QWERTY RCU</h4>
                                <h6 class="fuent_new2">Curta ao máximo da sua experiência de navegação, no chat, com o teclado QWERTY exclusivo que acompanha como um controle remoto padrão o Duosat Next UHD</h6>
                                {{--<p style="color: black">função disponível com a conexão ao Sistema Home Theater</p>--}}

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/new_prod/img/control.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 hidden-sm hidden-xs">
                            <div class="feature_detail">

                                <h4 class="fuente_titulo2">Controle Remoto  </h4>
                                <h6 class="fuent_new2">Curta ao máximo da sua experiência de navegação, no chat, com o teclado QWERTY RCU exclusivo que acompanha como um controle remoto padrão do Duosat Next UHD ou divírtase jogando com o Air Mouse. </h6>
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
                                <h6 class="fuent_new2">USB 3.0 é a terceira maior versão de universal serial bus (USB) padrão para a interface de computadores y dispositivos eletrônicos. Entre outras melhoras, o USB 3.0 acrescenta a nova taxa de transferência chamada SuperSpeed USB (SS) que é capaz de transferir dados a velocidades de até 5 Gbit/s (625 MB/s), para curtir filmes codificados do Blu-Ray ou filmes em UHD 4K a partir do dispositivo de Memória Flash.</h6>
                                {{--<p style="color: black">função disponível com a conexão ao Sistema Home Theater</p>--}}

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/new_prod/img/use.png')}}" alt="">
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
                                <img  class="img-responsive"  src="{{URL::to('vista/new_prod/img/ico/android.png')}}" alt="">
                            </div>
                            <div class="row" >
                                <h4 class="fuente_titulo4">Android</h4>
                                </div>
                            <div class="row" >
                            <p class="parraf">Sistema Operacional Android 4.4 kitkat exclusivo para reproductores multimídia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class="img-responsive"  src="{{URL::to('vista/new_prod/img/ico/tuner.png')}}" alt="">
                            <h4 class="fuente_titulo4">Tuner</h4>

                            <p class="parraf">Tuner Modular transformável. Suporta DVB-S2, DVB-S, DVB-C, ISDBT, à eleição  </p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class="img-responsive"  src="{{URL::to('vista/new_prod/img/ico/4k.png')}}" alt="">
                            <h4 class="fuente_titulo4">Vídeo</h4>

                            <p class="parraf">Ultra HD 4k X 2k
                                Resolução: 3840p x 2160p, 1080P/i, 720p, 576p/i, 480p/i, decodificação: HEVC (H.265),H.264 BP/MP/HP@L5.0, Full HD 3D  MVC, Blu-ray, MPEG2SP@ML/MP@HL,AVS base line@L6/P16(AVS+),VC-1 SP@HL/AP@L0-3,Mpeg4 SHF, MPEG1, 4K x 2K@30fps

                                entre outros Vídeos 3D</p>

                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class="img-responsive"  src="{{URL::to('vista/new_prod/img/ico/procesador.png')}}" alt="">
                            <h4 class="fuente_titulo4">Processador </h4>

                            <p class="parraf">
                                Alto Performance do Quad-Core (ARM Cortex A7)GPU: Mali450 com acelerador multimídia NEON integrado,
                                IC: acelerador JAVA e co-processador ponto flotante integrado
                             </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class="img-responsive"  src="{{URL::to('vista/new_prod/img/ico/usb.png')}}" alt="">
                            <h4 class="fuente_titulo4">USB</h4>

                            <p class="parraf">1 x USB 3.0 Host, 1 x USB 2.0 host, USB hub </p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class="img-responsive"  src="{{URL::to('vista/new_prod/img/ico/display.png')}}" alt="">
                            <h4 class="fuente_titulo4">Display</h4>

                            <p class="parraf"> AMOLED Display, dual LED TFT ou OLED Display * isto depende da região de comercialização </p>

                            </p>
                        </div>
                    </div>





                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class="img-responsive"  src="{{URL::to('vista/new_prod/img/ico/sound.png')}}" alt="">
                            <h4 class="fuente_titulo4">Áudio</h4>

                            <p class="parraf">:  2 x RCA(audio L/R), Saída  Digital de áudio 1 x SPDIF(óptico), DSP dedicado de áudio, decodificador G.711,Dolby Digital e Dolby Digital plus, 2 canais de áudio, efeitos de som SRS,MS11, processador Pounding Bass,AAC-LC e decodificador HE AACV1/V2, MPEG L1/L2/L3</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class="img-responsive"  src="{{URL::to('vista/new_prod/img/ico/MEMO.png')}}" alt="">
                            <h4 class="fuente_titulo4">Memória RAM</h4>

                            <p class="parraf">RAM 1GB DDR3, Memória Interna de 16GB, com suporte para memória Micro SD de até 128GB</p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class="img-responsive"  src="{{URL::to('vista/new_prod/img/ico/dimensiones.png')}}" alt="">
                            <h4 class="fuente_titulo4">Especificações Físicas</h4>

                            <p class="parraf">Tamanho do Aparelho
                                195mm x 43mm x 127mm (WxHxD) </p>
                            {{--<p class="parraf">Sistema Operacional Android 4.4 kitkat</p>--}}
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
                    <iframe width="700" height="400" src="https://www.youtube.com/embed/g3BV1kMvgSI" frameborder="0" allowfullscreen></iframe>

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
<script src="{{URL::to('vista/new_prod/js/main.js')}}"></script>


{{--</body>--}}


    {{--*******************************--}}




@stop