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
            color: #6D461D;
            border-radius: 5px 5px;
            -webkit-border-radius: 5px 5px;
            -moz-border-radius: 5px 5px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.75);
            padding: 3px 10px;
        }
        h2 {
            color: #6D461D;
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
            color: rgba(0,0,0,0.5);
            padding: 10px;
            width: 410px;
            clear: both;
        }
        .credit a {
            color: rgba(0,0,0,0.85);
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
            color: #000;
            -webkit-transition: all 500ms ease-in-out;
            -moz-transition: all 500ms ease-in-out;
            -o-transition: all 500ms ease-in-out;
            transition: all 500ms ease-in-out;
        }
        .back:hover {
            color: black;
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

        .main section.page1 {
            background: rgb(224, 226, 230);
        }

        .main section.page1 .TEXT {
            position: absolute;
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 30px;
            color: black;
            margin-top: 32px;
            margin-left: 160px;
        }
        .main section.page1 h1 {
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 70px;
            color: black;
        }
        .main section.page1 h2 {
            color: rgba(0,0,0,0.85);
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
        .main section.page2 {

            /*background-image: url('http://www.samsung.com/hk_en/consumer-images/article/2014/large-tv/MainKV_without-title-0.jpg');*/
            /*background-repeat: no-repeat;*/
            background: #3496d9;
        }
        .main section.page2 > img {
            position: absolute;
            top: -300px;
            left: 50%;
            margin-left: -1095px;
        }
        .main section.page2 .page_container {
            margin-top: 240px;
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
            color: black;
        }
        .main section.page3 h2 {
            color: rgba(0,0,0,0.85);
            text-align: left;
            line-height: 160%;
            font-weight: 100;
            font-size: 21px;
        }

        /************************/
        .main section.page4 {
            background: #a7c836;
        }
        .main section.page4 > img {
            position: absolute;
            top: -300px;
            left: 50%;
            margin-left: -1095px;
        }
        .main section.page4 .page_container {
            margin-top: 50px;
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
            color: black;
            margin-top: 32px;
            margin-left: 160px;
        }
        .main section.page5 h1 {
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            color: black;
        }
        .main section.page5 h2 {
            font-size: 25px;
            color: rgba(0, 0, 0, 0.85);
            text-align: center;
            width: 435px;
            line-height: 160%;
        }
        /********************/

        /************************/
        .main section.page6 {
            background: #2b2b2d;
        }
        .main section.page6 > img {
            position: absolute;
            top: -300px;
            left: 50%;
            margin-left: -1095px;
        }
        .main section.page6 .page_container {
            margin-top:10px;
            overflow: hidden;
        }
        .main section.page6 h1 {
            text-align: center;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            letter-spacing: -1px;
            color: white;
        }
        .main section.page6 h2 {
            color: rgba(255,255,255,0.85);
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
            color: black;
        }
        .main section.page7 h2 {
            color: rgba(0,0,0,0.85);
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
            margin-top: -365px;
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
                    <h2 class="wow bounceInUp">Forget about a conventional multimedia devices, because The next is now</h2>
                    <p class="credit"></p>
                    <div class="btns">
                        {{--<a class="reload btn" href="https://github.com/peachananr/onepage-scroll">Download on Github</a>--}}
                    </div>
                </div>

                <img class="wow bounceInRight" src="{{URL::to('vista/next/89.png')}}" alt="phones">
            </section>

            <section class="page2"  style="background: url(' {{URL::to('vista/next/fondo13.jpg')}}') ; width: 100%";>
                <div class="page_container">
                   <div class="wow zoomInUp"> <h1>Expandable memory</h1>
                    <h2>Running out of memory shouldn’t be a thing. So if 16GB isn’t already enough, you can add an additional 64GB with a microSD card. No clouds, no hard drives.</h2></div>
                    <img  class="wow bounceInUp"  src="{{URL::to('vista/next/memory.png')}}" alt="phones" >





                </div>

            </section>

            <section class="page3">
                <div class="page_container">

                    <h1>Smart Design</h1>
                    <h2>The Next UHD feature screens in a front panel, to customize the look in accord of your decoration, many options as clock skins and channel icon, or your own picture can be  loaded to be shown in a display. We’ve perfected the Next UHD design, to meet an minimalist trending for media device, with fully recyclable materials, making eco-friendly craft.</h2>




                </div>
                <img class="modelo wow fadeInLeft" src="{{URL::to('vista/next/mm.png')}}" alt="phones">
                <br>
            </section>


            <section class="page4">
                <div class="page_container">
                    <h1>The unique Android OS
                    </h1>
                    <h2>Things just got sweeter. The Next UHD powered by the unique Android KITKAT OS. We have choice the most stable OS to rework, making the global unique android OS for media players, and new features developed specially to meet the use for media players,  that anticipates your next move.</h2>
                    <img  class="wow bounceInUp" src="{{URL::to('vista/next/android.png')}}" alt="phones">





                </div>

            </section>



            <section class="page5">
                <div class="page_container">
                    <br> <br>
                    <h1>HEVC (H.265) Codec</h1>
                    <h2>With the newest H.265 codec, the image earn considerable improvement in relation to current technology's devices, powered with powerful exclusive video processor, enhancing your true colorful image experience.</h2>
                    <img  class="wow bounce" src="{{URL::to('vista/next/HEVC.jpg')}}" alt="phones">

                </div>

            </section>


            <section class="page6">
                <div class="page_container">
                    <br> <br>
                  <div class="wow fadeIn">  <h1>Fastest WI-FI</h1>
                    <h2  >The Next UHD  powered by the latest technology on wifi devices. That means the speed is enhanced to support the streaming media through internet, to meet newest trending of entertainment.</h2>
                  </div>
                    <img  class="wow tada" src="{{URL::to('vista/next/wifi.png')}}" alt="phones">

                </div>

            </section>

            <section class="page7">
                <div class="page_container">

                    <h1>Transformative
                        modular design
                    </h1>
                    <h2>The new Duosat Next UHD is designed  to help you get the most out of entertainment. A forward-thinking modular design let's you use companion tuner to enhanced entertainment capabilities. The slide out tuner can be swapped in a flash to customize your television system, supporting different tuner options as ISDBT, Cable, Satellite, it's customization made easy!</h2>


                </div>
                <img class="modelo wow fadeInLeft" src="{{URL::to('vista/next/tuner.jpg')}}" alt="phones">
                <br>
            </section>


            <section class="page8">
                <div class="page_container">

                    <div class="wow pulse">  <h1>Capture more of every moment</h1>
                        <h2  >Take pictures  or use IP camera for surveillance, also able to use with Snapchat, skype or other applications that you need with camera compatibilities.</h2>
                        <p>function available with the purchase of extra accessory</p>
                    </div>
                    <img  class="wow wobble" src="{{URL::to('vista/next/cam.png')}}" alt="phones">

                </div>

            </section>

            <section class="page5">
                <div class="page_container">
                    <br> <br>
                    <h1>Audio performance</h1>
                    <h2>The Duosat Next UHD is equiped with optical audio output (SPDIF), supporting Dolby, AC3 DTS, 5.1 and 7.1, with high fidelity ² </h2>
                    <img  class="wow bounce" src="{{URL::to('vista/next/sonido.png')}}" >

                </div>

            </section>


            <section class="page9"  class="page9" style="background:#63d7a4 ; width: 100%"; >
                <div class="page_container">
                    <div class="wow zoomInUp"> <h1>4K UHD</h1>
                        <h2>The ultimate immersive experience with 4K UHD technology, turns ordinary home entertainment into extraordinary. See incredibly sharp picture, a wide color expression and remarkably dramatic detail – all in crisp, clear 4K UHD resolution. Enjoy a more lifelike picture on our 4K UHD TVs and take your entertainment experience to the next level.</h2></div>
                    <img  class="wow bounceInUp"  src="{{URL::to('vista/next/4KUHD-Banner.png')}}"  >





                </div>

            </section>


            <section class="page7">
                <div class="page_container">

                    <h1>Connectivity
                    </h1>
                    <h2>Enjoy easier and faster access to your favourite media and entertainment, connecting your Next UHD via wi-fi with other media devices.Watch your TV entertainment on your mobile device or vice versa.Enjoy a faster fluid browsing experience just like a computer.</h2>


                </div>
                <br>

                <img class=" modelo2 wow fadeInLeft" src="{{URL::to('vista/next/acceso.jpg')}}" >

            </section>


            <section class="page9" style="background:#d72702 ; width: 100%"; >
                <div class="page_container">
                    <div class="wow zoomInUp"> <h1>3D</h1>
                        <h2>Experience truily immersive experience with 3D capatibility on your Next UHD</h2></div>
                    <img  class="wow wobble"  src="{{URL::to('vista/next/3d.png')}}"  >


                </div>
                <br>

            </section>

            <section class="page5">
                <div class="page_container">
                    <br> <br>
                    <h1>Gaming</h1>
                    <h2>Enjoy the most popular games listed in google play, with air mouse or Joystick² </h2>
                    <img  class="wow bounce" src="{{URL::to('vista/next/game.png')}}" >
                    <p>function available with connection  of home theater system</p>

                </div>

            </section>

            <section class="page9"  class="page9" style="background:#48474e ; width: 100%"; >
                <div class="page_container">
                    <div class="wow zoomInUp"> <h1>Streaming</h1>
                        <h2>Try XBMC, netflix, hulu, Kodi dailimotion, youtube  every streaming app's supported by your android system</h2></div>
                    <img  class="wow bounceInUp"  src="{{URL::to('vista/next/str.png')}}"  >


                </div>

            </section>


            <section class="page9"  class="page9" style="background:#d0d79a ; width: 100%"; >
                <div class="page_container">
                    <div class="wow bounceInUp"> <h1>QWERT RCU</h1>
                        <h2>Enjoy your browsing experience, chatting, with the exclusive QWERTY keyboard thats coming as standard remote control in the Duosat Next UHD</h2></div>
                    <img  class="wow bounceIn"  src="{{URL::to('vista/next/control.png')}}"  >





                </div>

            </section>

            <section class="page5" >
                <div class="page_container">
                    <br> <br>
                    <h1>USB 3.0 </h1>
                    <h2>USB 3.0 is the third major version of the universal serial bus (USB) standard for interfacing computers and electronic devices. Among other improvements, USB 3.0 adds the new transfer rate referred to as SuperSpeed USB (SS) that can transfer data at up to 5 Gbit/s (625 MB/s), to enjoy blueray encode4d movies or UHD 4K movies from your flash memory device</h2>
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