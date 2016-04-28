@extends('index')
@section('contenido')

    {{--<meta name="title" content="jQuery One Page Scroll by Pete R. | The Pete Design" />--}}
    {{--<meta name="description" content="Create an Apple-like one page scroller website (iPhone 5S website) with One Page Scroll plugin" />--}}
    {{--<link rel="image_src" href="/images/notify_better_image.png" />--}}

    {{--<meta content="http://www.thepetedesign.com/demos/onepage_scroll_demo.html" property="og:url" />--}}
    {{--<meta content="http://www.thepetedesign.com/images/onepage_scroll_image.png" property="og:image" />--}}
    <link rel="shortcut icon" id="favicon" href="favicon.png">
    <link href='{{URL::to('vista/next/css/animate.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{URL::to('vista/css_new.css')}}' rel='stylesheet' type='text/css'>
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



/*****************************************/


        .main section.page19 {

            /*background-image: url('http://www.samsung.com/hk_en/consumer-images/article/2014/large-tv/MainKV_without-title-0.jpg');*/
            /*background-repeat: no-repeat;*/
            /*background: #3496d9;*/
        }
        .main section.page19 > img {
            position: absolute;
            top: -300px;
            left: 50%;
            margin-left: -1095px;
        }
        .main section.page19 .page_container {
            margin-top: -130px;
            overflow: hidden;
        }
        .main section.page19 h1 {
            text-align: center;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            letter-spacing: -1px;
            color: white;



        }

        .main section.page19 h2 {
            color: rgba(255,255,255,0.85);
            text-align: center;
            line-height: 160%;
            font-weight: 100;



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

                {{--*********************************--}}



                {{--*********************************--}}

                <img class="wow bounceInRight" src="{{URL::to('vista/next/89.png')}}" alt="phones">
            </section>



            <section class="page2"  style="background: url(' {{URL::to('vista/next/fondo13.jpg')}}') ;  background-repeat:no-repeat; background-size:cover; width: 100%";>
                <div class="page_container">
                    <div class="wow zoomInUp"> <h1>Memória Expansível</h1>
                        <h2>O armazenamento da memória não deveria ser um problema. Então, se 16GB ainda não são suficientes, você pode acrescentar um cartão de memoria adicional de 64GB. Assim, você não precisará de nuvens nem unidades de disco rígido</h2></div>
                    <img  class="wow bounceInUp"  src="{{URL::to('vista/next/64.png')}}" alt="phones" >

                </div>

            </section>

            <section class="page3"  class="page9" style="background:#000000 ; width: 100%"; >
                <div class="page_container">

                    <div class=" wow fadeIn"><h1>Design Inteligente</h1>
                        <h2>O Next UHD tem uma tela de funções no painel frontal, para poder personalizar o visual segundo a sua decoração, com varias opções como o relógio, ícones de canais ou você pode carregar a sua própria imagem para poder visualizar na tela. Fomos aperfeiçoando o design do Next UHD para cumprir com a tendência minimalista, com materiais totalmente recicláveis o que o torna uma arte ecológica.    </h2>
                        <p>Dependendo da  região de compra as telas poderão ser AMOLED, OLED, LED o TFT</p>
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
                    <h2>As coisas simplesmente se tornaram mais doces. O Next UHD é impulsado por um único Sistema Operacional Android, o KITKAT. Optámos pelo Sistema Operacional mais estável para configurá-lo, criando um Sistema Operacional em Android mundialmente único para reprodutores multimídia e as novas funcionalidades são desenvolvidas especialmente segundo o padrão de uso dos reprodutores multimídia, o que permitirá antecipar o seu próximo movimento.</h2>
                    <img  class="wow bounceInUp" src="{{URL::to('vista/next/android.png')}}" alt="phones">





                </div>

            </section>



            <section class="page5">
                <div class="page_container">
                    <br> <br>
                    <h1>HEVC (H.265) Codec</h1>
                    <h2>Com o mais novo Codec H.265, as imagens ganharam uma considerável melhora em relação com os dispositivos tecnológicos atuais, o Next UHD é impulsado com um exclusivo processador de vídeo extremadamente poderoso, o que lhe permitirá aprimorar de verdade a sua experiência de imagem colorida, além de reduzir drasticamente o consumo da Internet com conteúdos Streaming</h2>
                    <img  class="wow bounce" src="{{URL::to('vista/next/h2645.png')}}" alt="phones">

                </div>

            </section>


            <section class="page6">
                <div class="page_container">
                    <br> <br>
                    <div class="wow fadeIn">  <h1>WI-FI mais rápido</h1>
                        <h2>O Next UHD é impulsado pela última tecnologia em dispositivos WI-FI. O que significa que a velocidade tem sido melhorada para suportar a transmissão multimídia a traves da Internet, segundo as mais novas tendências do entretenimento.  </h2>
                    </div>
                    <img  class="wow bounceIn" src="{{URL::to('vista/next/07.jpg')}}" alt="phones">

                </div>

            </section>

            <section class="page7"  style="background:#000000 ; width: 100%"; >
                <div class="page_container">

                    <h1>Transformador Design Modular
                    </h1>
                    <h2>O Novo Duosat Next UHD foi projetado para lhe ajudar a tirar o máximo proveito ao entretenimento. Uma visão futura é que o Design Modular lhe deixa usar um sintonizador companheiro para melhorar as funcionalidades do entretenimento. O deslizamento para fora do sintonizador pode ser realizado em um piscar de olhos para a personalização do tipo de Sistema de TV a usar, suportando diferentes opções de sintonização, por exemplo, ISDBT, Cabo, Satélite, a customização do Next UHD é muito simples!</h2>


                </div>
                <img class="modelo wow fadeInLeft" src="{{URL::to('vista/next/tuner.jpg')}}" alt="phones">
                <br>
            </section>


            <section class="page8"  style="background: url(' {{URL::to('vista/next/capture.jpg')}}') ;  background-repeat:no-repeat; background-size:cover; width: 100%";>
                <div class="page_container">

                    <div class="wow pulse">  <h1>Capture mais de cada momento</h1>
                        <h2>Tire fotos ou use a sua Câmera de Segurança, além disso, pode ser usado com  Snapchat™, Skype™ e outros aplicativos que precisam compatibilidade de câmera.</h2>
                        <p>Função disponível com a compra de um acessório extra </p>
                    </div>
                    {{--<img  class="wow wobble" src="{{URL::to('vista/next/cam.png')}}" alt="phones">--}}

                </div>

            </section>

            <section class="page5">
                <div class="page_container">
                    <br> <br>
                    <h1>Qualidade do Áudio</h1>
                    <h2>O Duosat Next UHD está equipado com a saída de áudio óptico (SPDIF), suportando Dolby, AC3 DTS, 5.1 y 7.1, com alta fidelidade ². <p style="font-size:15px">função disponível com a conexão ao Sistema Home Theater</p> </h2>

                    <img  class="wow bounce" src="{{URL::to('vista/next/homet.png')}}" >

                </div>

            </section>


            <section class="page9"  class="page9" style="background:#63d7a4 ; width: 100%"; >
                <div class="page_container">
                    <div class="wow zoomInUp"> <h1>4K UHD</h1>
                        <h2>A experiência mais envolvente com UHD 4K é que transforma o entretenimento ordinário em extraordinário. Veja imagens incrivelmente nítidas, uma ampla expressão de cores e detalhes bem dramáticos – tudo isso em una clara y nítida resolução 4K UHD. Aprecie imagens mais realistas com a nossa UHD TV 4K e eleve a sua experiência de entretenimento para o próximo nível.</h2></div>
                    <img  class="wow bounceInUp"  src="{{URL::to('vista/next/4k2.png')}}"  >





                </div>

            </section>


            <section class="page051">
                <div class="page_container">

                    <h1> Conectividade
                    </h1>
                    <h2>Aprecie mais simples e rapidamente o aceso ao seu entretimento favorito, conectando via wi-fi o seu Next UHD com outros dispositivos multimídia. Visualize o seu programa de TV favorito a partir do seu móbil ou vice-versa. Sinta uma experiência de navegação mais rápida simplesmente como se fosse um computador</h2>


                </div>
                <br>

                <img class=" modelo2 wow fadeInLeft" src="{{URL::to('vista/next/conec.jpg')}}" >

            </section>


            <section class="page9" style="background:#d72702 ; width: 100%"; >
                <div class="page_container">
                    <div class="wow zoomInUp"> <h1>3D</h1>
                        <h2>Experiência realmente envolvente com as funcionalidades 3D no seu Next UHD</h2></div>


                    <img  class="wow wobble"  src="{{URL::to('vista/next/3d.png')}}"  >


                </div>
                <br>

            </section>

            <section class="page05">
                <div class="page_container">
                    <br> <br>
                    <h1>Jogos</h1>
                    <h2>Curta os jogos mais populares listados no Google Play, com air-mouse o Joystick². </h2>
                    <img  class="wow bounce" src="{{URL::to('vista/next/game.png')}}" >
                    <p>Função disponível com conexão ao Sistema Home Theater</p>

                </div>

            </section>

            <section class="page9"  class="page9" style="background:#48474e ; width: 100%"; >
                <div class="page_container">
                    <div class="wow zoomInUp"> <h1>Streaming</h1>
                        <h2>Try XBMC, Netflix, Hulu, Kodi Dailymotion, YouTube, todos os aplicativos de Streaming que são suportados pelo Sistema Androide</h2></div>
                    <img  class="wow bounceInUp"  src="{{URL::to('vista/next/str.png')}}"  >


                </div>

            </section>


            <section class="page9"  class="page9" style="background:#d0d79a ; width: 100%"; >
                <div class="page_container">
                    <div class="wow bounceInUp"> <h1>QWERTY RCU</h1>
                        <h2>Curta ao máximo da sua experiência de navegação, no chat, com o teclado QWERTY exclusivo que acompanha como um controle remoto padrão o Duosat Next UHD</h2></div>
                    <img  class=" contro wow bounceIn"  src="{{URL::to('vista/next/control.png')}}"  >





                </div>

            </section>

            <section class="page5" >
                <div class="page_container">
                    <br> <br>
                    <h1>USB 3.0 </h1>
                    <h2>USB 3.0  é a terceira maior versão de universal serial bus (USB) padrão para a interface de computadores y dispositivos eletrônicos. Entre outras melhoras, o USB 3.0 acrescenta a nova taxa de transferência chamada SuperSpeed USB (SS) que é capaz de transferir dados a velocidades de até 5 Gbit/s (625 MB/s), para curtir filmes codificados do Blu-Ray ou filmes em UHD 4K a partir do dispositivo de Memória Flash.</h2>
                    <img  class="wow bounce" src="{{URL::to('vista/next/use.jpg')}}" >
                    {{--<p>function available with connection  of home theater system</p>--}}

                </div>

            </section>

            <section   class="page19" style="background:#2b2b2d ;width: 100%"; >
                <div class="page_container contenedor">


                    <div class="spec">
                        <img src="{{URL::to('vista/next/ico/android.png')}}" alt="" class="spec-img">
                        <p class="spec-title">Android</p>
                        <p class="spec-text">Sistema Operacional Android 4.4 kitkat<br><span class="spec-bold">&nbsp;</span><br class="spec-mobile-break"> &nbsp; <br class="spec-mobile-break"> <span class="spec-bold">&nbsp;</span> &nbsp;</p>
                    </div>
                    <div class="spec">
                        <img src="{{URL::to('vista/next/ico/tuner.png')}}" alt="" class="spec-img">
                        <p class="spec-title">Tuner</p>
                        <p class="spec-text">Sintonizador duplo DVB+S2 <br><span class="spec-bold">Tuner Modular transformável</span><br class="spec-mobile-break"> &nbsp; <br class="spec-mobile-break"> <span class="spec-bold">microSD de 64Gb;</span> &nbsp;</p>
                    </div>

                    <div class="spec">
                        <img src="{{URL::to('vista/next/ico/4k.png')}}" alt="" class="spec-img">
                        <p class="spec-title">Video</p>
                        <p class="spec-text">Ultra HD 4k X 2k<br><span class="spec-bold">Suporta formatos de vídeo como </span><br class="spec-mobile-break">avi, divx, mkv, xvid, mp4  <br class="spec-mobile-break"> <span class="spec-bold">entre outros Vídeos 3D</span> 5.1”</p>
                    </div>



                    <div class="spec">
                        <img src="{{URL::to('vista/next/ico/procesador.png')}}" alt="" class="spec-img">
                        <p class="spec-title">Processador Quad-Core
                        </p>
                        <p class="spec-text">(ARM Cortex A7)<br><span class="spec-bold">Alto Performance do Quad-Core Mali450
</span><br class="spec-mobile-break">  Memória Interna de 16Gb, com  possibilidade <br class="spec-mobile-break"> <span class="spec-bold">  de acrescentar outro </span>microSD de 64Gb</p>
                    </div>
                    <div class="spec">
                        <img src="{{URL::to('vista/next/ico/usb.png')}}" alt="" class="spec-img">
                        <p class="spec-title">
                            Entrada/Saída
                        </p>
                        <p class="spec-text">Suporta USB 3.0 x 1
                            <br><span class="spec-bold">Internet (LAN) 1 x RJ45</span><br class="spec-mobile-break">Saída Digital de Áudio: Óptico <br class="spec-mobile-break"> <span class="spec-bold">&nbsp;</span> &nbsp;</p>
                    </div>

                    <div class="spec">
                        <img src="{{URL::to('vista/next/ico/display.png')}}" alt="" class="spec-img">
                        <p class="spec-title">Display </p>
                        <p class="spec-text">Display LCD, LED Dual
                            <br><span class="spec-bold">Resolution</span><br class="spec-mobile-break">&nbsp;<br class="spec-mobile-break"><span class="spec-bold">&nbsp;</span> &nbsp;</p>
                    </div>


                    <div class="spec">
                        <img src="{{URL::to('vista/next/ico/sound.png')}}" alt="" class="spec-img">
                        <p class="spec-title">Áudio
                        </p>
                        <p class="spec-text">Dolby Digital e Dolby Digital Plus
                            <br><span class="spec-bold">Controle de volume inteligente</span><br class="spec-mobile-break">Efeitos de som SRS, Dolby e MS11
                            <br class="spec-mobile-break"> <span class="spec-bold">&nbsp;</span> &nbsp;</p>
                    </div>
                    <div class="spec">
                        <img src="{{URL::to('vista/next/ico/wifi.png')}}" alt="" class="spec-img">
                        <p class="spec-title">Conectividade
                        </p>
                        <p class="spec-text">Wi-Fi embutido<br><span class="spec-bold">&nbsp;</span><br class="spec-mobile-break"> &nbsp; <br class="spec-mobile-break"> <span class="spec-bold">&nbsp;</span>&nbsp;</p>
                    </div>

                    <div class="spec">
                        <img src="{{URL::to('vista/next/ico/dimensiones.png')}}" alt="" class="spec-img">
                        <p class="spec-title">Especificações Físicas
                        </p>
                        <p class="spec-text">Tamanho do Aparelho<br><span class="spec-bold">195mm x 43mm x 127mm (WxHxD)
</span><br class="spec-mobile-break"> &nbsp; <br class="spec-mobile-break"> <span class="spec-bold">&nbsp;</span> &nbsp;</p>
                    </div>







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