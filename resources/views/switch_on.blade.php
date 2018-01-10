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



    <link rel="stylesheet" href="{{URL::to('vista/switch_on/css/font-awesome.min.css')}}">
    {{--<link rel="stylesheet" href="{{URL::to('vista/switch_on/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{URL::to('vista/switch_on/css/jquery.fancybox.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/switch_on/css/jquery.fancybox-thumbs.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/switch_on/css/jquery.fullPage.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/switch_on/css/animate.css')}}" />
    <link rel="stylesheet" href="{{URL::to('vista/switch_on/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('vista/switch_on/responsive.css')}}">

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
                        <h4 class="fuente_titulo">SWITCH ON</h4>
                        <p class="fuent_new">Switch On, Bem-vindo à nova era do entretenimento! </p>

                    </div>
                    <div class="header_btn">
                        {{--<a class="btn_download" href="http://google.com">Download the app</a> <br>--}}
                    </div>

                </div>
                <div class="row">
                    <div class="header_img">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <img src="{{URL::to('vista/switch_on/img/sw.png')}}" alt="" class="img-responsive wow bounceInUp">
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

                                <h4 class="fuente_titulo1">Design Moderno</h4>
                                <h6 class="fuent_new1">
                                Design moderno e futurista, elegante mas robusto,
                                combina com qualquer quarto ou sala, dando-lhe um
                                toque de tecnologia e beleza.


                                </h6>



                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class=" " src="{{URL::to('vista/switch_on/img/64.png')}}" alt="">
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

                                <h4 class="fuente_titulo1">Excelente processador</h4>
                                <h6 class="fuent_new1">
                                Desempenho garantido com o processador Quad-Core ARM
                                Cortex A53 e não é somente isso, vem com a versão mais
                                recente e mais moderna de Android para Media Player,
                                o Android Nougat, o Sistema Operacional que fala o seu
                                idioma e o transportará para novos mundos!

                                </h6>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/switch_on/img/du.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 hidden-sm hidden-xs">
                            <div class="feature_detail">
                              <h4 class="fuente_titulo1">Excelente processador</h4>
                              <h6 class="fuent_new1">
                              Desempenho garantido com o processador Quad-Core ARM
                              Cortex A53 e não é somente isso, vem com a versão mais
                              recente e mais moderna de Android para Media Player,
                              o Android Nougat, o Sistema Operacional que fala o seu
                              idioma e o transportará para novos mundos!

                              </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="section3">
        <div class="describe_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Codec H.265</h4>
                    <h6 class="fuent_new2">
                    O padrão de compressão de vídeo mais moderno que está
                    revolucionando a transmissão de vídeo com transmissões e
                    downloads. O H.265 reduz metade da largura de banda sem
                    perda absoluta de qualidade!

                    </h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/switch_on/img/h2645.png')}}" alt=""></div>
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
    <div class="section" id="section4">
        <div class="features_area">
            <div class="container">
                <div class="all_features">
                    <div class="row features feature_three">
                        <div class="col-md-6">
                            <div class="feature_detail">
                                <h4 class="fuente_titulo1">4K</h4>
                                <h6 class="fuent_new1">
                                  Esqueça o entretenimento convencional e comece a viver uma verdadeira experiência tecnológica com imagens nítidas e detalhes super dramáticos. Você poderá ver claramente até os cabelinhos de uma pena!
                                </h6>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/switch_on/img/4k2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section" id="section5">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Conectividade</h4>
                    <h6 class="fuent_new2">
                      Wi-Fi integrado de 150 Mbps, já não estamos na era do irritante cabeamento de internet!
                     </h6>
                    <p style="color: white">
                       você pode desfrutar do seu entretenimento favorito com simplicidade e praticidade!
                     </p>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/switch_on/img/07.jpg')}}" alt=""></div>
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
                    <h4 class="fuente_titulo2">
                      Controle QWERTY  + Air Mouse
                    </h4>
                    <h6 class="fuent_new2">
Aproveite a sua experiência de navegação ou no chat, com teclado QWERTY exclusivo que vem como um controle remoto padrão com o Duosat Switch On e não é so isso, você também poderá jogar muito com o Air Mouse!
                    </h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/switch_on/img/qwr.png')}}" alt=""></div>
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
                    <div class="row features feature_three">
                        <div class="col-md-6">
                            <div class="feature_detail">
                                <h4 class="fuente_titulo2">USB 3.0</h4>
                                <h6 class="fuent_new2">
USB 3.0 é a terceira maior versão de universal serial bus (USB)
 padrão para a interface de computadores y dispositivos eletrônicos.
 Entre outras melhoras, o USB 3.0 acrescenta a nova taxa de transferência
 chamada SuperSpeed USB (SS) que é capaz de transferir dados a velocidades de
 até 5 Gbit/s (625 MB/s), para curtir filmes codificados do Blu-Ray ou filmes
 em UHD 4K a partir do dispositivo de Memória Flash.


                                  </h6>
                                {{--<p style="color: black">função disponível com a conexão ao Sistema Home Theater</p>--}}

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_image">
                                <img class="img-responsive"  src="{{URL::to('vista/switch_on/img/use.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>



    {{--*******************************--}}







    {{--*******************************--}}










{{--***********************************--}}
    <div class="section" id="section8">
        <div class="screens_area">
            <div class="container">
                {{--<div class="row page_title text-center">--}}
                    {{--<h4 class="fuente_titulo2">Streaming</h4>--}}
                    {{--<h6 class="fuent_new2">Try XBMC, Netflix, Hulu, Kodi Dailymotion, YouTube, todos os aplicativos de Streaming que são suportados pelo Sistema Androide</h6>--}}
                    {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/switch_on/img/str.png')}}" alt=""></div>--}}
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
                        .cuad3{
                            margin: 0 auto;
                            padding: 5px;

                            text-align: center;
                            width: 33%;
                            min-height: 227px;
                            /*background: silver;*/

                            /*border-left: 1px solid gray;*/
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

                            .margen{
                              margin: 10px;
                            }
                        }
                    </style>


                    <div class="col-md-4 cuad">
                        <div class="">

                            <div class="row" >
                                <img  class=""  src="{{URL::to('vista/switch_on/img/ico/android.png')}}" alt="">
                            </div>
                            <div class="row" >
                                <h4 class="fuente_titulo4">Android</h4>
                                </div>
                            <div class="row" >
                            <p class="parraf">Sistema Operacional Nougat (Exclusivo para Reprodutores Multimídia)</p>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/switch_on/img/ico/procesador.png')}}" alt="">
                            <h4 class="fuente_titulo4">Processador </h4>

                            <p class="parraf">
                              Processador Quad-Core ARM 64-bit Cortex A53.
                              Quad-core high-performance Mali450 GPU.
                              Aceleração Multimídia NEON Integrado.
                              Co-processador floating-point Integrado.


                             </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/switch_on/img/ico/usb.png')}}" alt="">
                            <h4 class="fuente_titulo4">USB</h4>

                            <p class="parraf">1 x USB 3.0, 1 x USB 2.0 </p>

                            </p>
                        </div>
                    </div>






                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/switch_on/img/ico/sound.png')}}" alt="">
                            <h4 class="fuente_titulo4">Áudio</h4>

                            <p class="parraf">
                            MPEG L1/L2. AAC-LC and HE AAC V1/V2 dec. APE, FLAC, Ogg, AMR-NB, e AMR-WB dec. G.711 (u/a) Dec. de Áudio. G.711 (u/a), AMR-NB, AMR-WB, e Dec. de Áudio AAC-LC
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/switch_on/img/ico/MEMO.png')}}" alt="">
                            <h4 class="fuente_titulo4"> Memória</h4>

                            <p class="parraf">Memória Flash eMMc :  16GByte. MemóriaDDR4: 1GByte</p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/switch_on/img/ico/dimensiones.png')}}" alt="">
                            <h4 class="fuente_titulo4">Especificações Físicas</h4>

                            <p class="parraf">Tamanho:  106 x 106 x 23mm</p>
                            {{--<p class="parraf">Sistema Operacional Android 4.4 kitkat</p>--}}
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 cuad cuad2" >
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/switch_on/img/ico/wifi.png')}}" alt="">
                            <h4 class="fuente_titulo4">Conectividade</h4>

                            <p class="parraf">Internet: 1 porta X RJ45 </p>
                            <p class="parraf">Wi-Fi embutido: 1 X 150Mbps WLAN 802.11 b/g/n</p>

                            </p>
                        </div>
                    </div>


                  {{-- ***************************** --}}
                  <div class="col-md-4 cuad3">
                      <div class="">
                          <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                              <img  class=""  src="{{URL::to('vista/switch_on/img/ico/4k.png')}}" alt="">
                          <h4 class="fuente_titulo4">Vídeo</h4>

                          <p class="parraf ">
                      H.265/HEVC 4K x 2K@60 fps 10-bit
                      H.264/AVC max. 4K x 2K@30 fps
                      Max. 4K x 2K@60 fps 10-bit VP9 dec. / 1080p@60 fps VP6/8, Real 8/9/10 dec., DivX3/4/5/6,MPEG-1 dec., MPEG-2 SP@ML, MP@HL dec.
                      MPEG-4 SP@levels 0−3, ASP@levels 0−5, GMC,
                      AVS baseline profile@level 6.0, AVS-P16 (AVS+), max. 1080p@60 fps dec.
                      VC-1 SP@ML, MP@HL, AP@levels 0−3, max. 1080p@60 fps dec. / AVS-P16 (AVS+), max. 1080p@60 fps dec.
                      JPEG, PNG dec., max. 64 megapixels

                          </p>

                          </p>
                      </div>
                  </div>
                  {{-- ***************************** --}}

                  {{-- ***************************** --}}
                  <div class="col-md-4 cuad">
                      <div class="">
                          <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                              {{-- <img  class=""  src="{{URL::to('vista/switch_on/img/ico/4k.png')}}" alt=""> --}}
                          <h4 class="fuente_titulo4">
                            {{-- TITULO --}}
                          </h4>

                          <p class="parraf ">
                    {{-- description --}}
                          </p>

                          </p>
                      </div>
                  </div>
                  {{-- ***************************** --}}




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
                    <iframe width="700" height="400" src="https://www.youtube.com/embed/-kRa6i9evME" frameborder="0" allowfullscreen></iframe>

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




{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>--}}
{{--<script>window.jQuery || document.write('<script src="{{URL::to('vista/switch_on/js/jquery-1.10.2.min.js')}}"><\/script>')</script>--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>--}}
{{--<script src="{{URL::to('vista/switch_on/js/bootstrap.min.js')}}"></script>--}}
<script src="{{URL::to('vista/switch_on/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::to('vista/switch_on/js/jquery.fullPage.min.js')}}"></script>
<script src="{{URL::to('vista/switch_on/js/jquery.fancybox.js')}}"></script>
<script src="{{URL::to('vista/switch_on/js/wow.min.js')}}"></script>
<script src="{{URL::to('vista/switch_on/js/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{URL::to('vista/switch_on/js/main.js')}}"></script>


{{--</body>--}}


    {{--*******************************--}}




@stop
