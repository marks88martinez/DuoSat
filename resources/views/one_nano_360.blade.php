


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>







    {{--<link rel="stylesheet" href="{{URL::to('vista/new_prod/css/bootstrap.min.css')}}">--}}


    {{--<link rel="stylesheet" href="{{URL::to('vista/new_prod/css/jquery.fullPage.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{URL::to('vista/new_prod/css/animate.css')}}" />--}}












{{--</head>--}}
{{--<body>--}}
    <style>
        body{
            background: #ffffff;
        }

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
            margin-left: 80%;

            width: 80px;
            height: auto;
            cursor: pointer;

        }


        /*****************************/

        .menu1-360{
            width: 100%;
            height: auto;


            /*margin: 30px auto 0;*/
            /*overflow: hidden;*/
        }
        .menu1-360 ul {
            margin: 0 auto;
            padding: 0;
            width: 100%;
            height: auto;
        }
        .menu1-360 ul li img {
            display: block;
            width: 100%;
            height: auto;
        }
    </style>



<div id="fullpage">
    <div class="section"  id="section0">

        <div class="homescreen">
            <div class="container">
                <div class="row text-center">
                    <div class="declaration">

                        {{--<h1 class="logo">BOISHAkHi</h1>--}}
                        {{--<h1>NEXT</h1>--}}

                    </div>
                    <div class="header_btn">
                        {{--<a class="btn_download" href="http://google.com">Download the app</a> <br>--}}
                    </div>

                </div>
                <div class="row">





                                {{--********************************************--}}

                                <div class="menu1-360">
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



{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>--}}
{{--<script>window.jQuery || document.write('<script src="{{URL::to('vista/new_prod/js/jquery-1.10.2.min.js')}}"><\/script>')</script>--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>--}}
{{--<script src="{{URL::to('vista/new_prod/js/bootstrap.min.js')}}"></script>--}}
<script src="{{URL::to('vista/new_prod/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fullPage.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fancybox.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/wow.min.js')}}"></script>
<script src="{{URL::to('vista/new_prod/js/jquery.fancybox-thumbs.js')}}"></script>
{{--<script src="{{URL::to('vista/one/js/main.js')}}"></script>--}}


{{--</body>--}}


    {{--*******************************--}}




{{--@stop--}}