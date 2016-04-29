<!DOCTYPE html>
<html>
    <head>
        <title>Duosat</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            {{--html, body {--}}
                {{--height: 100%;--}}
            {{--}--}}

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            /*img{*/
               /*margin:  0 auto;*/
                /*padding: 0;*/
            /*}*/

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            {{--.title {--}}
                {{--font-size: 72px;--}}
                {{--margin-bottom: 40px;--}}
            {{--}--}}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content" >
                {{--<div class="title">Be right back.</div>--}}


                <img src="{{URL::to('503/503.png')}}" alt="">
            </div>
        </div>
    </body>
</html>
