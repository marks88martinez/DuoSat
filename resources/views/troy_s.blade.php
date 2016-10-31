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
    <link rel="stylesheet" href="{{URL::to('vista/troy_s/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('vista/new_prod/responsive.css')}}">

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
//
//            $('#btn_pro').click(function(){
//
//                var nu = window.location.replace(url);
//
////                        console.log(nu);
//
//
//            })
//
//
//            var b = $('body').valueOf('baseURI');
//            var c =  $('.fp-viewing-firstPage').val();
//
//                    if(b != c ){
//                        console.log(b);
//                    }else{
//                        console.log('no son'+c);
//                    }
//
////
//////            var url2 = "/onenanoHD#firstPage";
//
//
//
//
//
//
//
//        })
//        var b = $('body').valueOf('baseURI');
//        var c =  $('.fp-viewing-firstPage').val();
//
//        if(b != c ){
//            console.log(b);
//        }else{
//            console.log('no son'+c);
//        }




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
            color: #000000;
            background-color: #000000;
            border-color: #000000;
        }
        .btn-default_1:hover{
            opacity: 0.8;
            color: #000000;
            background-color: #000000;
            border-color: #000000;
        }
        img.gra{
            margin-bottom: 10px;

            margin-left: 80%;

            width: 50px;
            height: auto;
            cursor: pointer;

        }
        .declaration {
            margin-top: 50px;

        }
    </style>
    {{--************************--}}


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
    {{--<div class="modal fade" id="myModal" role="dialog">--}}
        {{--<div class="modal-dialog modal-lg">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                    {{--<h4 class="modal-title">Modal Header</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<p>This is a large modal.</p>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--************************--}}



<div id="fullpage">
    <div class="section"  id="section0">

        <div class="homescreen">
            <div class="container">
                <div class="row text-center">
                    <div class="declaration">
                        <br>
                        {{--<h1 class="logo">BOISHAkHi</h1>--}}
                        {{--<h1>NEXT</h1>--}}
                        {{--<h4 class="fuente_titulo1">im</h4>--}}

                        {{--<p class="fuent_new1">High Definition For Everyone--}}
                        {{--</p>--}}
                        <img src="{{URL::to('vista/troy_s/logo.png')}}" alt="">

                    </div>
                    <div class="header_btn">
                        {{--<a class="btn_download" href="http://google.com">Download the app</a> <br>--}}


                    </div>

                </div>
                <div class="row">
                    <div class="header_img">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                {{--<img class="btn-default_1 gra" onclick="popup('/onenanoHD360',600,455)" src="vista/wave/wave.png" alt="">--}}
                                {{--<img class="btn-default_1 gra" data-toggle="modal" data-target="#myModal"  src="vista/play/360.png" alt="">--}}

                                <img src="{{URL::to('vista/troy_s/troy_s.png')}}" alt="">


                                {{--********************************************--}}

                                {{--<div class="menu-360">--}}
                                    {{--<ul class="list wow bounceInUp">--}}
                                        {{--@for($i=1; $i<11; $i++)--}}
                                        {{--<li><img src="{{URL::to('vista/one/images/image1_'.$i.'.jpg')}}" /></li>--}}

                                        {{--@endfor--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<link rel="stylesheet" href="{{URL::to('vista/one/css/style.css')}}">--}}

                                {{--<script type="text/javascript" src="{{URL::to('vista/one/js/script.js')}}"></script>--}}
                                {{--<script type="text/javascript">--}}

                                    {{--var _gaq = _gaq || [];--}}
                                    {{--_gaq.push(['_setAccount', 'UA-36251023-1']);--}}
                                    {{--_gaq.push(['_setDomainName', 'jqueryscript.net']);--}}
                                    {{--_gaq.push(['_trackPageview']);--}}

                                    {{--(function() {--}}
                                        {{--var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;--}}
                                        {{--ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';--}}
                                        {{--var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);--}}
                                    {{--})();--}}

                                {{--</script>--}}
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
                    <h4 class="fuente_titulo2">Novo Design!</h4>
                    <h6 class="fuent_new2">A era dos receptores de alta tecnologia é a tendência para o mundo do entretenimento hoje. Atualmente, mais do que nunca buscamos a inovação, usabilidade intuitiva e design simples, mas elegante nos dispositivos eletrônicos que usamos. Isto é precisamente o que nos traz o novo DUOSAT TROY S HD.</h6>
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


    <div class="section" id="section5">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo1">Processador Poderoso</h4>
                    <h6 class="fuent_new1">A sua nova geração de processadores Dual-Core ajuda a torná-lo um Media Player excelente capaz de reproduzir conteúdo em resolução FULL HD 1080p proporcionando uma experiência extraordinária.</h6>
                    <div class="row">
                        {{--<div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/one/conec.jpg')}}" alt=""></div>--}}
                    </div>
                </div>
                <div class="row screens">

                </div>
            </div>
        </div>
    </div>





    {{--***************************************--}}
    {{--*******************************--}}

    {{--<div class="section" id="section3">--}}
        {{--<div class="screens_area">--}}
            {{--<div class="container">--}}
                {{--<div class="row page_title text-center">--}}
                    {{--<h4 class="fuente_titulo3">Sistema Operacional Exclusivo</h4>--}}
                    {{--<h6 class="fuent_new3">O inovador Sistema Operacional baseado em Linux, muito rápido e fácil de usar, como apenas a Duosat sabe fazer, com um menu intuitivo e design minimalista que inclui todas as informações que você precisa.</h6>--}}
                    {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/one/so.jpg')}}" alt=""></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row screens">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--*******************************--}}


    <div class="section" id="section3">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">HEVC (H.265) Codec</h4>
                    <h6 class="fuent_new2">Com o mais novo Codec H.265, as imagens ganharam uma considerável melhora em relação com os dispositivos tecnológicos atuais, o Troy S HD é impulsado com um exclusivo processador de vídeo extremadamente poderoso, o que lhe permitirá aprimorar de verdade a sua experiência de imagem colorida, além de reduzir drasticamente o consumo da Internet com conteúdos Streaming
                    </h6>
                    {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/h2645.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="row screens">

                </div>
            </div>
        </div>
    </div>


    {{--***********************************************--}}

    <div class="section" id="section3">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Acelerador de Vídeo Integrado</h4>
                    <h6 class="fuent_new2">Com o novíssimo e poderoso acelerador, você pode desfrutar cores verdadeiras, com aceleração de gráficos realistas, melhorando também a qualidade do Streaming.
                    </h6>
                    {{--<p style="color: #000000">Função disponível com a compra de um acessório extra</p>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/new_prod/img/h2645.png')}}" alt=""></div>--}}
                    {{--</div>--}}
                </div>
                <div class="row screens">

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
                    <h6 class="fuent_new3"> Você já não tem que estar conectado com cabos irritantes que às vezes nos causam muitos problemas. Agora você pode acessar o seu dispositivo via Wi-Fi e começar a desfrutar os seus conteúdos multimídia!</h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/one/conec.jpg')}}" alt=""></div>
                    </div>
                </div>
                <div class="row screens">

                </div>
            </div>
        </div>
    </div>

    <div class="section" id="section6">
        <div class="screens_area">
            <div class="container">
                <div class="row page_title text-center">
                    <h4 class="fuente_titulo2">Full HD</h4>
                    <h6 class="fuent_new2">A Resolução Full HD 1080p oferece uma qualidade impressionante e nitidez melhorada na indústria de vídeos, filmes e todos os tipos de conteúdos digitais. Com ele você terá acesso a todo  conteúdo HD, não só aqueles que vêm através do satélite, mas aqueles que podem ser acessados a partir de outras fontes, como Internet, YouTube e outros dispositivos de armazenamento.</h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/one/3d.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="row screens">

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
                    <h6 class="fuent_new2">Desenvolvimento de redes melhorada para conseguir um desempenho mais alto dos vários aplicativos de Streaming disponíveis, além dos aplicativos da Duosat que você já conhece e as melhores plataformas como YouTube, Dailymotion entre outros..</h6>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><img  class="img-responsive" src="{{URL::to('vista/one/hevc.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="row screens">

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
                                <p class="parraf">1 Ghz Dual Core, 2000MIPS
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

                            <p class="parraf">Tuner Duplo. Suporta DVB-S2: 2~45Ms/S, Demodulador: ACM, VCM, QPSK, 8PSK, 16APSK, 32APSK. Conector de entrada: F-Type, IEC169-24 x 2, Fêmea. Frequência de entrada 950~2150MHz. LNB e Polarização: Vertical: +13.5V, Horizontal: +18V, Corrente: Max 450mA
                            </p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/video.png')}}" alt="">
                            <h4 class="fuente_titulo4">Video</h4>

                            <p class="parraf">Resolução: 1080P/i, 720p, 576p/i, 480p/i, Decodificação de Vídeo: HEVC (H.265) MP@L4.1, MPEG-4 Part 10/H.264 HP@L4.1, MPEG-2 (ISO 13818) </p>

                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/usb2.png')}}" alt="">
                            <h4 class="fuente_titulo4">USB </h4>

                            <p class="parraf">
                                1 x USB 2.0 Host (Traseiro)
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/MEMO.png')}}" alt="">
                            <h4 class="fuente_titulo4">Memória RAM</h4>

                            <p class="parraf">DDR3 256MB, Memória Flash 16MB</p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/wifi.png')}}" alt="">
                            <h4 class="fuente_titulo4">Conectividade</h4>

                            <p class="parraf">Internet (LAN) 1 x RJ45, Wi-Fi: 1 x Fêmea RP-SMA (WLAN 11b/g/n)</p>

                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/dimensiones.png')}}" alt="">
                            <h4 class="fuente_titulo4">Especificações Físicas</h4>

                            <p class="parraf">Tamanho: 205mm x 45mm x 145mm (W x H x D)
                                Peso: Aprox. 1.0 Kg

                            </p>

                            </p>
                        </div>
                    </div>



                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/sound.png')}}" alt="">
                            <h4 class="fuente_titulo4">Áudio</h4>

                            <p class="parraf">MPEG/MusiCam Layer I/II/III, AAC, HE-AAC, AC-3, EAC3, OGG, FLAG, APE. Modo: Single Channel, Dual Channel, Joint Stereo, e Stereo</p>

                            </p>
                        </div>
                    </div>







                    <div class="col-md-4 cuad">
                        <div class="">
                            <p  href="img/screen1-big.png"  title="First Screen" data-fancybox-group="thumb" >
                                <img  class=""  src="{{URL::to('vista/new_prod/img/ico/power.png')}}" alt="">
                            <h4 class="fuente_titulo4">Fonte de energia</h4>

                            <p class="parraf">Tipo: Adaptador, 12V DC 2A 50/60Htz.</p>

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
{{--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>--}}
{{--<script src="{{URL::to('vista/new_prod/js/bootstrap.min.js')}}"></script>--}}
<script src="{{URL::to('vista/new_prod/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fullPage.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fancybox.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/wow.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{URL::to('vista/troy_s/js/main.js')}}"></script>


{{--</body>--}}


    {{--*******************************--}}




@stop