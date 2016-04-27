@extends('index')
@section('contenido')

    {{--<meta name="title" content="jQuery One Page Scroll by Pete R. | The Pete Design" />--}}
    {{--<meta name="description" content="Create an Apple-like one page scroller website (iPhone 5S website) with One Page Scroll plugin" />--}}
    {{--<link rel="image_src" href="/images/notify_better_image.png" />--}}

    {{--<meta content="http://www.thepetedesign.com/demos/onepage_scroll_demo.html" property="og:url" />--}}
    {{--<meta content="http://www.thepetedesign.com/images/onepage_scroll_image.png" property="og:image" />--}}
    <link rel="shortcut icon" id="favicon" href="favicon.png">
    <link href='{{URL::to('vista/next/css/animate.css')}}' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{URL::to('vista/next/js/wow.js')}}"></script>
    {{--<meta name="author" content="Pete R.">--}}
    <link rel="canonical" href="http://www.thepetedesign.com/demos/onepage_scroll_demo.html" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>
    {{--<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>--}}
    {{--<script type="text/javascript" src="{{URL::to('vista/next/jquery.onepage-scroll.js')}}"></script>--}}
    {{--<link href='{{URL::to('vista/next/onepage-scroll.css')}}' rel='stylesheet' type='text/css'>--}}
    {{--<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">--}}
{{--****************************--}}
    <style>
        html {
            height: 100%;
        }
        body {
            background: #E2E4E7;
            padding: 0;
            text-align: center;
            font-family: 'open sans';
            position: relative;
            margin: 0;
            height: 100%;
            -webkit-font-smoothing: antialiased;
        }

        .wrapper {
            height: 100% !important;
            height: 100%;
            margin: 0 auto;
            overflow: hidden;
        }

        a {
            text-decoration: none;
        }


        h1, h2 {
            width: 100%;
            float: left;
        }
        h1 {
            margin-top: 100px;
            color: #000;
            margin-bottom: 5px;
            font-size: 70px;
            letter-spacing: -4px;
            font-weight: 100;
        }
        h1 span {
            font-size: 26px;
            margin: 0 5px;
            text-transform: capitalize;
            background: rgba(0,0,0,0.85);
            display: inline-block;
            color: #84848b;
            border-radius: 5px 5px;
            -webkit-border-radius: 5px 5px;
            -moz-border-radius: 5px 5px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.75);
            padding: 3px 10px;
        }
        h2 {
            color: #84848b;
            font-weight: 100;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .pointer {
            color: #9b59b6;
            font-family: 'Pacifico', cursive;
            font-size: 30px;
            margin-top: 15px;
        }
        code {
            margin: 20px 1%;
            float: left;
            width: 48%;
            height: 105px;
            background: rgba(0,0,0,0.1);
            border: rgba(0,0,0,0.05) 5px solid;
            border-radius: 5px;
            padding:5px;
            color: white;
            text-align: center;
            font-size: 15px;
            margin-top: 25px;
            display: block;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        code.html {
            color: #7EC9E6;
        }
        code.js {
            color: #FFAD00;
        }

        .main {
            float: left;
            width: 100%;
            margin: 0 auto;
        }

        .main h1 {
            padding:150px 50px;
            float: left;
            width: 100%;
            font-size: 45px;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            font-weight: 100;
            color: white;
            margin: 0;
        }

        .main h1.demo1 {
            background: #1ABC9C;
        }

        .reload.bell {
            font-size: 12px;
            padding: 20px;
            width: 45px;
            text-align: center;
            height: 47px;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
        }

        .reload.bell #notification {
            font-size: 25px;
            line-height: 140%;
        }

        .reload, .btn{
            display: inline-block;
            border: 4px solid #A2261E;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            background: #CC3126;
            display: inline-block;
            line-height: 100%;
            padding: 0.7em;
            text-decoration: none;
            color: #fff;
            width: 100px;
            line-height: 140%;
            font-size: 17px;
            font-family: open sans;
            font-weight: bold;
        }
        .reload:hover{
            background: #444;
        }
        .btn {
            width: 200px;
            color: rgb(255, 255, 255);
            border: 4px solid rgb(0, 0, 0);
            background: rgba(3, 3, 3, 0.75);
        }
        .clear {
            width: auto;
        }
        .btn:hover, .btn:hover {
            background: #444;
        }
        .btns {
            width: 410px;
            margin: 50px auto;
        }
        .credit {
            text-align: center;
            color: rgba(132, 132, 139, 0.5);
            padding: 10px;
            width: 410px;
            clear: both;
        }
        .credit a {
            color: rgba(132, 132, 139, 0.85);
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }

        .back {
            position: absolute;
            top: 0;
            left: 0;
            text-align: center;
            display: block;
            padding: 7px;
            width: 100%;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            background: rgba(255, 255, 255, 0.25);
            font-weight: bold;
            font-size: 13px;
            color: #84848b;
            -webkit-transition: all 500ms ease-in-out;
            -moz-transition: all 500ms ease-in-out;
            -o-transition: all 500ms ease-in-out;
            transition: all 500ms ease-in-out;
        }
        .back:hover {
            color: #84848b;
            background: rgba(255, 255, 255, 0.5);
        }

        header {
            position: relative;
            z-index: 10;
        }
        .main section .page_container {
            position: relative;
            top: 25%;
            margin: 0 auto 0;
            max-width: 950px;
            z-index: 3;
        }
        .main section  {
            overflow: hidden;
        }

        .main section > img {
            position: absolute;
            max-width: 100%;
            z-index: 1;
        }
        section{
            height: 100vh !important;
        }
        .main section.page1 {
            width: 100%;


            background: rgb(224, 226, 230);
        }

        .main section.page1 .TEXT {
            position: absolute;
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 30px;
            color: #84848b;
            margin-top: 32px;
            margin-left: 160px;
        }
        .main section.page1 h1 {
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 70px;
            color: #84848b;
        }
        .main section.page1 h2 {
            color: rgba(132, 132, 139, 0.85);
            text-align: center;
            width: 435px;
            line-height: 160%;
        }
        .main section .page_container .btns {
            clear: both;
            float: left;
            text-align: center;
            width: 435px;
        }
        .main section .page_container .btns a{
            text-align: center;
        }


        /**************************/

        /**************************/
        .main section.page2 {

            /*background-image: url('http://www.samsung.com/hk_en/consumer-images/article/2014/large-tv/MainKV_without-title-0.jpg');*/
            /*background-repeat: no-repeat;*/
            background: #3496d9;
        }
        .main section.page2 > img {
            position: absolute;
            /*top: -300px;*/
            left: 50%;
            margin-left: -1095px;
        }
        .main section.page2 .page_container {
            /*margin-top: 240px;*/
            overflow: hidden;
        }
        .main section.page2 h1 {
            text-align: center;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            letter-spacing: -1px;
            color: white;



        }
        
        .main section.page2 h2 {
            color: rgba(255,255,255,0.85);
            text-align: center;
            line-height: 160%;
            font-weight: 100;



        }
        .viewing-page-2 .back{
            background: rgba(0, 0, 0, 0.25);
            color: #FFF;
        }
        .main section.page3 {
            /*background:url(tilted-phone.png) no-repeat 156px -150px ;*/
        }
        .main section.page3 .page_container {
            margin-top: 50px;
            overflow: hidden;
            width: 500px;
            right: -170px;
        }
        .main section.page3 h1 {
            text-align: left;
            padding: 0;
            margin-bottom: 0;
            font-size: 70px;
            letter-spacing: -1px;
            color: #84848b;
        }
        .main section.page3 h2 {
            color: rgba(132, 132, 139, 0.85);
            text-align: left;
            line-height: 160%;
            font-weight: 100;
            font-size: 21px;
        }

        /************************/
        .main section.page4 {
            background: #2082ec;
        }
        .main section.page4 > img {
            position: absolute;
            top: -100px;
            left: 50%;
            margin-left: -1095px;
        }
        .main section.page4 .page_container {

            overflow: hidden;
        }
        .main section.page4 h1 {
            text-align: center;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            letter-spacing: -1px;
            color: white;
        }
        .main section.page4 h2 {
            color: rgba(255,255,255,0.85);
            text-align: center;
            line-height: 160%;
            font-weight: 100;
        }
        .viewing-page-4 .back{
            background: rgba(0, 0, 0, 0.25);
            color: #FFF;
        }
        /*********************/

        .main section.page5 {

            background: rgb(253, 253, 254);
        }

        .main section.page5 .TEXT {

            position: absolute;
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 20px;
            color: #84848b;
            margin-top: 32px;
            margin-left: 160px;
        }
        .main section.page5 h1 {
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            color: #84848b;
        }
        .main section.page5 h2 {
            font-size: 25px;
            color:
            text-align: center;
            width: 435px;
            line-height: 160%;
        }
        /********************/

        /*********************/

        .main section.page051 {

            background: rgb(253, 253, 254);
        }
        .main section.page051 img{
            margin-top: 200px;
        }
        .main section.page051 .TEXT {

            position: absolute;
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 20px;
            color: #84848b;
            margin-top: 32px;
            margin-left: 160px;
        }
        .main section.page051 h1 {
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            color: #84848b;
        }
        .main section.page051 h2 {
            font-size: 25px;

            text-align: center;
            width: 435px;
            line-height: 160%;
        }
        /********************/

        /************************/
        .main section.page6 {
            background: rgba(226, 226, 227, 0.85);
        }
        .main section.page6 > img {
            position: absolute;
            top: -100px;
            left: 50%;
            margin-left: -1095px;
        }
        .main section.page6 .page_container {
            margin-top: -100px;

            overflow: hidden;
        }
        .main section.page6 h1 {
            text-align: center;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            letter-spacing: -1px;
            color: #84848b;
        }
        .main section.page6 h2 {
            color: rgba(132, 132, 139, 0.85);
            text-align: center;
            line-height: 160%;
            font-weight: 100;
        }
        .viewing-page6 .back{
            background: rgba(0, 0, 0, 0.25);
            color: #FFF;
        }
        /*********************/

        .main section.page7 {
            /*background:url(tilted-phone.png) no-repeat 156px -150px ;*/
        }
        .main section.page7 .page_container {
            margin-top: 50px;
            overflow: hidden;
            width: 500px;
            right: -170px;
        }
        .main section.page7 h1 {
            text-align: left;
            padding: 0;
            margin-bottom: 0;
            font-size: 70px;
            letter-spacing: -1px;
            color: #84848b;
        }
        .main section.page7 h2 {
            color: rgba(132, 132, 139, 0.85);
            text-align: left;
            line-height: 160%;
            font-weight: 100;
            font-size: 21px;
        }
        /*********************************/




        /************************/
        .main section.page8 {
            background: #2082ec;
        }
        .main section.page8 > img {
            position: absolute;
            top: -300px;
            left: 50%;
            margin-left: -1095px;
        }
        .main section.page8 .page_container {
            margin-top: 50px;
            overflow: hidden;
        }
        .main section.page8 h1 {
            text-align: center;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            letter-spacing: -1px;
            color: white;
        }
        .main section.page8 h2 {
            color: rgba(255,255,255,0.85);
            text-align: center;
            line-height: 160%;
            font-weight: 100;
        }

        .main section.page8 p {
            color: rgba(255,255,255,0.85);
            text-align: center;
            line-height: 160%;
            font-weight: 100;
        }
        .viewing-page-8 .back{
            background: rgba(0, 0, 0, 0.25);
            color: #FFF;
        }
        /*********************/

        .main section.page9 {

            /*background-image: url('http://www.samsung.com/hk_en/consumer-images/article/2014/large-tv/MainKV_without-title-0.jpg');*/
            /*background-repeat: no-repeat;*/
            background: #3496d9;
        }
        .main section.page9 > img {
            position: absolute;
            top: -300px;
            left: 50%;
            margin-left: -1095px;
        }
        .main section.page9 .page_container {
            margin-top: 10px;
            overflow: hidden;
        }
        .main section.page9 h1 {
            text-align: center;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            letter-spacing: -1px;
            color: white;



        }

        .main section.page9 h2 {
            color: rgba(255,255,255,0.85);
            text-align: center;
            line-height: 160%;
            font-weight: 100;



        }
        .viewing-page-9 .back{
            background: rgba(0, 0, 0, 0.25);
            color: #FFF;
        }
        /*************************************/


        /*********************/

        .main section.page05 {

            background: rgb(253, 253, 254);
        }
        .main section.page05 img{
            margin-top: -170px;
        }
        .main section.page05 .TEXT {

            position: absolute;
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 20px;
            color: #84848b;
            margin-top: 32px;
            margin-left: 160px;
        }
        .main section.page05 h1 {
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            color: #84848b;
        }
        .main section.page05 h2 {
            font-size: 25px;
            color:
            text-align: center;
            width: 435px;
            line-height: 160%;
        }
        /********************/


        body.disabled-onepage-scroll .onepage-wrapper  section {
            min-height: 100%;
            height: auto;
        }

        body.disabled-onepage-scroll .main section .page_container, body.disabled-onepage-scroll .main section.page3 .page_container  {
            padding: 20px;
            margin-top: 150px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body.disabled-onepage-scroll  section .page_container h1{
            text-align: center;
            font-size: 50px;
        }
        body.disabled-onepage-scroll section .page_container h2, body.disabled-onepage-scroll section .page_container .credit, body.disabled-onepage-scroll section .page_container .btns{
            text-align: center;
            width: 100%;
        }

        body.disabled-onepage-scroll .main section.page1 > img {
            position: absolute;
            width: 80%;
            left: 10%;
        }

        body.disabled-onepage-scroll .main section > img {
            position: relative;
            max-width: 80%;
            bottom: 0;
        }
        body.disabled-onepage-scroll code {
            width: 95%;
            margin: 0 auto 25px;
            float: none;
            overflow: hidden;
        }

        body.disabled-onepage-scroll .main section.page3 .page_container {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            right: 0;
        }
         .modelo{
             z-index: -1000;
            position: absolute;
            margin-top: -190px;
            margin-left: -700px;
        }

        .modelo2{
            z-index: -1000;
            position: absolute;
            margin-top: -250px;
            margin-left: -600px;
        }


    </style>

    {{--************************--}}





    {{--************************--}}


    <div class="wrapper">
        <div class="main">


            <section class="page1">
                <div class="page_container">
                    <br> <br> <br> <br>
                    <div class="wow fadeInDown"><h1>NEXT</h1> <p CLASS="TEXT">UHD</p></div>
                    {{--<div class="wow fadeInDown"><img src="{{URL::to('vista/next/logo.png')}}" alt=""></div>--}}
                    <h2 class="wow bounceInUp">Olvídate de los dispositivos multimedia convencionales, porque ahora existe</h2>
                    <p class="credit"></p>
                    <div class="btns">
                        {{--<a class="reload btn" href="https://github.com/peachananr/onepage-scroll">Download on Github</a>--}}
                    </div>
                </div>

                <img class="wow bounceInRight" src="{{URL::to('vista/play/play.png')}}" alt="phones">
            </section>



            <section class="page2"  style="background: url(' {{URL::to('vista/next/fondo13.jpg')}}') ;  background-repeat:no-repeat; background-size:cover; width: 100%";>
                <div class="page_container">
                   <div class="wow zoomInUp"> <h1>Memoria Expandible</h1>
                    <h2>El funcionamiento de la  memoria no debería ser una cosa. Así que, si 16GB aún no son suficientes, puedes añadir una tarjeta microSD adicional de 64 GB. De modo que, no se necesitarán nubes ni unidades de disco duro.</h2></div>
                    <img  class="wow bounceInUp"  src="{{URL::to('vista/next/64.png')}}" alt="phones" >

                </div>

            </section>

            <section class="page3"  class="page9" style="background:#000000 ; width: 100%"; >
                <div class="page_container">

                    <div class=" wow fadeIn"><h1 >Diseño Inteligente</h1>
                    <h2>El Next UHD tiene una pantalla de funciones en el panel frontal, para personalizar el visual  conforme a tu decoración, con diversas opciones como el reloj, los íconos del canal o puedes cargar tu propia imagen para poder visualizar en la pantalla. Hemos perfeccionado el diseño del Next UHD para cumplir con una tendencia minimalista para el dispositivo, con materiales totalmente reciclables lo que lo convierte en un arte ecológico.</h2>
                    </div>



                </div>
                <img class="modelo wow fadeInLeft" src="{{URL::to('vista/next/du.png')}}" alt="phones">
                <br>
            </section>


            <section class="page4">
                <div class="page_container">
                    <h1>Único
                        Sistema Operacional Android

                    </h1>
                    <h2>Las cosas simplemente se volvieron más dulces. El Next UHD es impulsado por un único Sistema Operacional Android, que es el  KITKAT. Hemos elegido el Sistema Operacional más estable para configurarlo, creando un Sistema Operacional Android  global único para reproductores multimedia y nuevas funcionalidades desarrolladas especialmente conforme al uso de los reproductores multimedia, lo que permite anticipar tu próximo movimiento.</h2>
                    <img  class="wow bounceInUp" src="{{URL::to('vista/next/android.png')}}" alt="phones">





                </div>

            </section>



            <section class="page5">
                <div class="page_container">
                    <br> <br>
                    <h1>HEVC (H.265) Codec</h1>
                    <h2>Con el más nuevo Códec H.265, las imágenes ganaron una considerable mejora en relación con los dispositivos tecnológicos actuales, impulsado con un exclusivo procesador de video de gran alcance, que permite realzar verdaderamente tu experiencia de imagen colorida.</h2>
                    <img  class="wow bounce" src="{{URL::to('vista/next/h2645.png')}}" alt="phones">

                </div>

            </section>


            <section class="page6">
                <div class="page_container">
                    <br> <br>
                  <div class="wow fadeIn">  <h1>WI-FI más veloz</h1>
                    <h2  >El Next UHD es  impulsado por la última tecnología en dispositivos WI-FI. Lo que significa que la velocidad ha sido mejorada para soportar la transmisión multimedia a través de Internet, conforme a las más nuevas tendencias del entretenimiento. </h2>
                  </div>
                    <img  class="wow bounceIn" src="{{URL::to('vista/next/07.jpg')}}" alt="phones">

                </div>

            </section>

            <section class="page7"  style="background:#000000 ; width: 100%"; >
                <div class="page_container">

                    <h1>Transformador Diseño Modular
                    </h1>
                    <h2>El Nuevo Duosat Next UHD fue diseñado para ayudarte quitar el máximo provecho al entretenimiento. Una visión a futuro es que el diseño modular te deja usar un sintonizador  compañero para mejorar las funcionalidades del entretenimiento. El deslizamiento para fuera del sintonizador puede ser realizado en un instante para la personalización de tu Sistema de Televisión, soportando diferentes opciones de sintonización, ya sea ISDBT, Cable, Satélite, la personalización del mismo es muy sencilla!</h2>


                </div>
                <img class="modelo wow fadeInLeft" src="{{URL::to('vista/next/tuner.jpg')}}" alt="phones">
                <br>
            </section>


            <section class="page8"  style="background: url(' {{URL::to('vista/next/capture.jpg')}}') ;  background-repeat:no-repeat; background-size:cover; width: 100%";>
                <div class="page_container">

                    <div class="wow pulse">  <h1>Captura más de cada momento</h1>
                        <h2  >Toma fotos o utiliza tu Cámara IP para seguridad, además se puede usar con  Snapchat™, Skype™ u otras aplicaciones que necesiten compatibilidad de cámara.</h2>
                        <p>Función disponible con la compra de un accesorio extra </p>
                    </div>
                    {{--<img  class="wow wobble" src="{{URL::to('vista/next/cam.png')}}" alt="phones">--}}

                </div>

            </section>

            <section class="page5">
                <div class="page_container">
                    <br> <br>
                    <h1>Calidad de Audio</h1>
                    <h2>El Duosat Next UHD está equipado con salida de audio óptico (SPDIF),soportando Dolby, AC3 DTS, 5.1 y 7.1, con alta fidelidad  ²<p style="font-size:15px">función disponible con conexión del Sistema Home Theater</p> </h2>

                    <img  class="wow bounce" src="{{URL::to('vista/next/homet.png')}}" >

                </div>

            </section>


            <section class="page9"  class="page9" style="background:#63d7a4 ; width: 100%"; >
                <div class="page_container">
                    <div class="wow zoomInUp"> <h1>4K UHD</h1>
                        <h2>La experiencia más envolvente con UHD 4K es que convierte el entretenimiento ordinario a algo extraordinario. Vea imágenes increíblemente nítidas, una amplia expresión de color y detalles muy dramáticos - todo en una clara y nítida resolución 4K UHD. Disfrute de una imagen más realista en nuestra UHD TV 4K y eleve su experiencia de entretenimiento al siguiente nivel.</h2></div>
                    <img  class="wow bounceInUp"  src="{{URL::to('vista/next/4k2.png')}}"  >





                </div>

            </section>


            <section class="page051">
                <div class="page_container">

                    <h1> Conectividad
                    </h1>
                    <h2>La experiencia más envolvente con UHD 4K es que convierte el entretenimiento ordinario a algo extraordinario. Vea imágenes increíblemente nítidas, una amplia expresión de color y detalles muy dramáticos - todo en una clara y nítida resolución 4K UHD. Disfrute de una imagen más realista en nuestra UHD TV 4K y eleve su experiencia de entretenimiento al siguiente nivel.</h2>


                </div>
                <br>

                <img class=" modelo2 wow fadeInLeft" src="{{URL::to('vista/next/conec.jpg')}}" >

            </section>


            <section class="page9" style="background:#d72702 ; width: 100%"; >
                <div class="page_container">
                    <div class="wow zoomInUp"> <h1>3D</h1>
                        <h2>Experiencia realmente envolvente con las funcionalidades 3D en tu Next UHD</h2></div>
                    <img  class="wow wobble"  src="{{URL::to('vista/next/3d.png')}}"  >


                </div>
                <br>

            </section>

            <section class="page05">
                <div class="page_container">
                    <br> <br>
                    <h1>Juegos</h1>
                    <h2>Disfruta de los juegos más populares listados en Google Play, con air mouse o Joystick² </h2>
                    <img  class="wow bounce" src="{{URL::to('vista/next/game.png')}}" >
                    <p>Función disponible con conexión al Sistema Home Theater</p>

                </div>

            </section>

            <section class="page9"  class="page9" style="background:#48474e ; width: 100%"; >
                <div class="page_container">
                    <div class="wow zoomInUp"> <h1>Streaming</h1>
                        <h2>Try XBMC, netflix, hulu, Kodi dailimotion, youtube, todas las aplicaciones de Streaming que son soportadas por el Sistema Android</h2></div>
                    <img  class="wow bounceInUp"  src="{{URL::to('vista/next/str.png')}}"  >


                </div>

            </section>


            <section class="page9"  class="page9" style="background:#d0d79a ; width: 100%"; >
                <div class="page_container">
                    <div class="wow bounceInUp"> <h1>QWERTY RCU</h1>
                        <h2>Disfruta de tu experiencia de navegacion, en el chat, con teclado QWERTY exclusivo que viene como un contro remote estándar con el Duosat Next UHD</h2></div>
                    <img  class=" contro wow bounceIn"  src="{{URL::to('vista/next/control.png')}}"  >





                </div>

            </section>

            <section class="page5" >
                <div class="page_container">
                    <br> <br>
                    <h1>USB 3.0 </h1>
                    <h2>USB 3.0  es la tercera mayor versión del universal serial bus (USB) estándar para la interface de computadoras y dispositivos electrónicos. Entre otras mejoras, USB 3.0 añade la nueva tasa de transferencia denominada SuperSpeed USB (SS) que es capaz de transferir datos a velocidades de hasta to 5 Gbit/s (625 MB/s), para disfrutar las películas codificadas o películas del Blu-Ray o películas en UHD 4K desde tu dispositivo de Memoria Flash</h2>
                    <img  class="wow bounce" src="{{URL::to('vista/next/use.jpg')}}" >
                    {{--<p>function available with connection  of home theater system</p>--}}

                </div>

            </section>
            <section class="page5"  class="page9" style="background:#d3d3df ;top: 5px;width: 100%"; >
                <div class="page_container">
                    <br>
                    <iframe width="700" height="400" src="https://www.youtube.com/embed/g3BV1kMvgSI" frameborder="0" allowfullscreen></iframe>

                </div>

            </section>















        </div>
        {{--<a class="back" href="http://www.thepetedesign.com/#design">Back to The Pete Design</a>--}}
        {{--<a href="https://github.com/peachananr/onepage-scroll"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>--}}
    </div>



    <script>
        new WOW().init();
    </script>










@stop