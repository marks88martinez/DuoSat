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
    <link rel="stylesheet" href="{{URL::to('vista/one/style.css')}}">
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
                        <h4 class="fuente_titulo1">One Nano HD</h4>
                        <p class="fuent_new1">One Nano HD, Alta definição para todos
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



                                {{--********************************************--}}

                                <div class="menu-360">
                                    <ul class="list wow bounceInUp">
                                        @for($i=1; $i<11; $i++)
                                        <li><img src="{{URL::to('vista/one/images/image1_'.$i.'.jpg')}}" /></li>

                                        @endfor
                                    </ul>
                                </div>
                                <link rel="stylesheet" href="{{URL::to('vista/one/css/style.css')}}">

                                <script type="text/javascript" src="{{URL::to('vista/one/js/script.js')}}"></script>
                                <script type="text/javascript">

                                    var _gaq = _gaq || [];
                                    _gaq.push(['_setAccount', 'UA-36251023-1']);
                                    _gaq.push(['_setDomainName', 'jqueryscript.net']);
                                    _gaq.push(['_trackPageview']);

                                    (function() {
                                        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                                    })();

                                </script>
                                {{--********************************************--}}



                                {{--<img src="{{URL::to('vista/one/one.png')}}" alt="" class="img-responsive wow bounceInUp">--}}
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
                    <h4 class="fuente_titulo2">Design compacto</h4>
                    <h6 class="fuent_new2">Visual Retrô,  respeitando a identidade do primeiro modelo do One SD Nano. Design Inovador, que da a impressão que o receptor tem uma capa protetora, tornando-o mais robusto e resistente sem interferir na aparência e na beleza.</h6>
                    <div class="row">
                        {{--<div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/h2645.png')}}" alt=""></div>--}}
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

                                <h4 class="fuente_titulo1">Processador Poderoso</h4>
                                <h6 class="fuent_new1">Conseguimos! Este é um processador exclusivo Duosat Cube 3100, desenvolvido segundo as necessidades dos consumidores, processamento de conectividade aprimorada para Streaming, maior velocidade para o processamento do DVB-S2 e, além disso, processamento de vídeo melhorado para entregar mais  e melhores cores</h6>



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


    {{--***************************************--}}
    {{--*******************************--}}

    <div class="section" id="section3">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo3">Sistema Operacional Exclusivo</h4>
                    <h6 class="fuent_new3">O inovador Sistema Operacional baseado em Linux, muito rápido e fácil de usar, como apenas a Duosat sabe fazer, com um menu intuitivo e design minimalista que inclui todas as informações que você precisa.</h6>
                    {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/one/so.png')}}" alt=""></div>
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


    <div class="section" id="section3">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">HEVC (H.265) Codec</h4>
                    <h6 class="fuent_new2">Com o mais novo Codec H.265, as imagens ganharam uma considerável melhora em relação com os dispositivos tecnológicos atuais, o ONE Nano HD é impulsado com um exclusivo processador de vídeo extremadamente poderoso, o que lhe permitirá aprimorar de verdade a sua experiência de imagem colorida, além de reduzir drasticamente o consumo da Internet com conteúdos Streaming
                    </h6>
                    {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/h2645.png')}}" alt=""></div>
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

    {{--*****************************************--}}




    <div class="section" id="section5">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo3">Conectividade</h4>
                    <h6 class="fuent_new3">Sem dúvida alguma, atualmente o Wi-Fi é essencial nos reprodutores multimídia, conectividade Wireless melhorada, mais estável e rápido para sustentar as suas preferências de Streaming. Baixe o Aplicativo Android para usar o controle remoto e muito mais!</h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/one/conec.jpg')}}" alt=""></div>
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
                    <h4 class="fuente_titulo2">Full HD e 3D</h4>
                    <h6 class="fuent_new2">Detalhes como nunca antes,  Alta Definição melhor do que nunca, esta é a maneira mais simples de descrever a qualidade da imagem do novíssimo Duosat ONE Nano HD!</h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/one/3d.png')}}" alt=""></div>
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
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Streaming</h4>
                    <h6 class="fuent_new2"> Muitos aplicativos de Streaming disponíveis, além dos aplicativos da Duosat que você já conhece e as melhores plataformas como o YouTube, Dailymotion, entre outros.</h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/one/hevc.png')}}" alt=""></div>
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
                            border-left: 1px solid gray;
                            margin: 0 auto;
                            padding: 0px;

                            text-align: center;
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


                        @media (max-width: 700px) {
                            .cuad2{
                                border-right: 0px solid gray;
                                border-left: 0px solid gray;
                            }
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
                                <p class="parraf">Duosat Cube 3100 - 1GHz
                                     </p>
                                {{--<p class="parraf">Sistema DRAM 256MB</p>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/tuner.png')}}" alt="">
                            <h4 class="fuente_titulo4">Tuner</h4>

                            <p class="parraf">Tuner Duplo. Suporta DVBS/2: 2~45Ms/S, Demodulador: QPSK, 8PSK, 16APSK, 32APSK, Conector de entrada: F-Type, IEC169-24, Fêmea, Frequência de entrada 950~2150MHz
                            LNB e apontamento: Vertical: +13.5V, Horizontal: +18V, Corrente: max 500mA
                            </p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/video.png')}}" alt="">
                            <h4 class="fuente_titulo4">Vídeo</h4>

                            <p class="parraf">Resolução: 1080P/i, 720p, 576p/i, 480p/i, decodificação: HEVC (H.265), MPEG-4 (H.264) HD, MPEG-2 HD(ISO 13818) Saída HDMI: 1 x HDMI(ver 1.3)</p>

                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/usb2.png')}}" alt="">
                            <h4 class="fuente_titulo4">USB </h4>

                            <p class="parraf">
                                2 x USB 2.0 Host
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/MEMO.png')}}" alt="">
                            <h4 class="fuente_titulo4">Memória RAM</h4>

                            <p class="parraf">DDR3 SDRAM 256MBytes, Memória Interna de 16mb</p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/wifi.png')}}" alt="">
                            <h4 class="fuente_titulo4">Conectividade</h4>

                            <p class="parraf">Wifi: IEEE 802.11n, IEEE 802.11g, por USB 2.0, frequência: 2.4GHz to 2.462GHz, Internet (LAN) 1 x RJ45, RS-232C 1 x 9pin Dsub</p>

                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/dimensiones.png')}}" alt="">
                            <h4 class="fuente_titulo4">Especificações Físicas</h4>

                            <p class="parraf">Tamanho Compacto
                                170mm x 39mm x 118mm (WxHxD) </p>

                            </p>
                        </div>
                    </div>



                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/sound.png')}}" alt="">
                            <h4 class="fuente_titulo4">Áudio</h4>

                            <p class="parraf">MPEG/MusiCam Layer I/II/III, AAC, HE-AAC, AC-3, Taxa de amostra: 32/44.1/48 KHz, modo: Single Channel, Dual Channel, Joint Stereo, Stereo </p>

                            </p>
                        </div>
                    </div>







                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/power.png')}}" alt="">
                            <h4 class="fuente_titulo4">Fonte de energia</h4>

                            <p class="parraf">Voltagem de entrada: 90~250VAC, 50/60Hz. Tipo de consumo: adaptador, 12V DC 2A, Max 24W, Temperatura de operação 0~45 °C, Temperatura de armazenamento: -10°C + 70°C</p>

                            </p>
                        </div>
                    </div>


                        {{--<div class=" cuad  cuad2">--}}
                            {{--<div class="">--}}
                                {{--<p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >--}}
                                    {{--<img  class=""  src="{{URL::to('vista/new_prod/img/ico/wifi.png')}}" alt="">--}}
                                {{--<h4 class="fuente_titulo4">WIFI</h4>--}}

                                {{--<p class="parraf">--}}
                                    {{--IEEE 802.11n, IEEE 802.11g, por USB 2.0, frequência: 2.4GHz to 2.462GHz--}}
                                {{--</p>--}}

                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}













                </div>
            </div>
        </div>
    </div>

    {{--**********************************--}}











    <div class="section" id="section8">
        <div class="contact_area">
            <div class="container">
                <div class="row page_title text-center">


                    <br>
                    <iframe width="700" height="400" src="https://www.youtube.com/embed/-oM_djb0FeA" frameborder="0" allowfullscreen></iframe>

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
<script src="{{URL::to('vista/one/js/main.js')}}"></script>


{{--</body>--}}


    {{--*******************************--}}




@stop