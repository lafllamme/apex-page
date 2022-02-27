<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <title>SECRET</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css" rel="stylesheet">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">

    <meta name="description" content="BEST SECRET RAVES CGN">
    <meta name="author" content="Verschluesseltes System">


    </link>
    <!-- Styles -->
    <style>
        /* Please ❤ this if you like it! */


        @font-face {
            font-family: "MyWebFont";
            src: url("/fonts/font.woff2") format("woff2");
        }


        body {
            background: url('https://i.gifer.com/746m.gif');
            overflow-x: hidden;
            font-family: 'MyWebFont';


            /* Location of the image */

            /* Background image is centered vertically and horizontally at all times */
            background-position: center center;

            /* Background image doesn't tile */
            background-repeat: no-repeat;

            /* Background image is fixed in the viewport so that it doesn't move when
            the content's height is greater than the image's height */
            background-attachment: fixed;

            /* This is what makes the background image rescale based
            on the container's size */
            background-size: cover;

            /* Set a background color that will be displayed
            while the background image is loading */
            background-color: #464646;


        }

        h1 {
            font-size: 3rem;
            background-color: #0093E9;
            background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        h2,
        h3,
        h4,
        h5 {
            background-color: #21D4FD;
            background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }

        h5 {
            font-size: 1.3em;
        }

        .spacer {
            margin-top: 40px;
            /* define margin as you see fit */
        }

        button {
            background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);

        }

        button:hover {
            background-color: #21D4FD;
            background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);

        }

        #cardContent {
            background-color: #08AEEA;
            background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }

        #buttonContent {
            background-color: #3EECAC;
            background-image: linear-gradient(19deg, #3EECAC 0%, #EE74E1 100%);
            color: white;

        }

        #buttonContent:hover {
            background-color: #52ACFF;
            background-image: linear-gradient(180deg, #52ACFF 25%, #FFE32C 100%);
            color: black;

        }

        #redirect {
            background-color: #FF9A8B;
            background-image: linear-gradient(90deg, #FF9A8B 0%, #FF6A88 55%, #FF99AC 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #redirect:hover {
            background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);
        }

        #box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20rem;
            height: 26rem;
            text-align: center;



        }

        #boxtext {
            color: white;
            font-family: 'MyWebFont';
            font-size: 2rem;
            text-decoration: underline;
            text-align: center;
            background-color: #52ACFF;
            background-image: linear-gradient(180deg, #52ACFF 25%, #FFE32C 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }

        .gradient-border {
            --borderWidth: 6px;
            background: #1D1F20;
            position: relative;
            border-radius: var(--borderWidth);
        }

        .gradient-border:after {
            content: '';
            position: absolute;
            top: calc(-1 * var(--borderWidth));
            left: calc(-1 * var(--borderWidth));
            height: calc(100% + var(--borderWidth) * 2);
            width: calc(100% + var(--borderWidth) * 2);
            background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
            border-radius: calc(2 * var(--borderWidth));
            z-index: -1;
            animation: animatedgradient 3s ease alternate infinite;
            background-size: 300% 300%;
        }


        @keyframes animatedgradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .alert>.start-icon {
            margin-right: 0;
            min-width: 20px;
            text-align: center;
        }

        .alert>.start-icon {
            margin-right: 5px;
        }

        .greencross {
            font-size: 18px;
            color: #25ff0b;
            text-shadow: none;
        }

        .alert-simple.alert-success {
            border: 1px solid rgba(36, 241, 6, 0.46);
            background-color: rgba(7, 149, 66, 0.12156862745098039);
            box-shadow: 0px 0px 2px #259c08;
            color: #0ad406;
            text-shadow: 2px 1px #00040a;
            transition: 0.5s;
            cursor: pointer;
        }

        .alert-success:hover {
            background-color: rgba(7, 149, 66, 0.35);
            transition: 0.5s;
        }

        .alert-simple.alert-info {
            border: 1px solid rgba(6, 44, 241, 0.46);
            background-color: rgba(7, 73, 149, 0.12156862745098039);
            box-shadow: 0px 0px 2px #0396ff;
            color: #0396ff;
            text-shadow: 2px 1px #00040a;
            transition: 0.5s;
            cursor: pointer;
        }

        .alert-info:hover {
            background-color: rgba(7, 73, 149, 0.35);
            transition: 0.5s;
        }

        .blue-cross {
            font-size: 18px;
            color: #0bd2ff;
            text-shadow: none;
        }

        .alert-simple.alert-warning {
            border: 1px solid rgba(241, 142, 6, 0.81);
            background-color: rgba(220, 128, 1, 0.16);
            box-shadow: 0px 0px 2px #ffb103;
            color: #ffb103;
            text-shadow: 2px 1px #00040a;
            transition: 0.5s;
            cursor: pointer;
        }

        .alert-warning:hover {
            background-color: rgba(220, 128, 1, 0.33);
            transition: 0.5s;
        }

        .warning {
            font-size: 18px;
            color: #ffb40b;
            text-shadow: none;
        }

        .alert-simple.alert-danger {
            border: 1px solid rgba(241, 6, 6, 0.81);
            background-color: rgba(220, 17, 1, 0.16);
            box-shadow: 0px 0px 2px #ff0303;
            color: #ff0303;
            text-shadow: 2px 1px #00040a;
            transition: 0.5s;
            cursor: pointer;
        }

        .alert-danger:hover {
            background-color: rgba(220, 17, 1, 0.33);
            transition: 0.5s;
        }

        .danger {
            font-size: 18px;
            color: #ff0303;
            text-shadow: none;
        }

        .alert-simple.alert-primary {
            border: 1px solid rgba(6, 241, 226, 0.81);
            background-color: rgba(1, 204, 220, 0.16);
            box-shadow: 0px 0px 2px #03fff5;
            color: #03d0ff;
            text-shadow: 2px 1px #00040a;
            transition: 0.5s;
            cursor: pointer;
        }

        .alert-primary:hover {
            background-color: rgba(1, 204, 220, 0.33);
            transition: 0.5s;
        }

        .alertprimary {
            font-size: 18px;
            color: #03d0ff;
            text-shadow: none;
        }

        .square_box {
            position: absolute;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            border-top-left-radius: 45px;
            opacity: 0.302;
        }

        .square_box.box_three {
            background-image: -moz-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
            background-image: -webkit-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
            background-image: -ms-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
            opacity: 0.059;
            left: -80px;
            top: -60px;
            width: 500px;
            height: 500px;
            border-radius: 45px;
        }

        .square_box.box_four {
            background-image: -moz-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
            background-image: -webkit-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
            background-image: -ms-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
            opacity: 0.059;
            left: 150px;
            top: -25px;
            width: 550px;
            height: 550px;
            border-radius: 45px;
        }

        .alert:before {
            content: '';
            position: absolute;
            width: 0;
            height: calc(100% - 44px);
            border-left: 1px solid;
            border-right: 2px solid;
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
            left: 0;
            top: 50%;
            transform: translate(0, -50%);
            height: 20px;
        }

        .fa-times {
            -webkit-animation: blink-1 2s infinite both;
            animation: blink-1 2s infinite both;
        }


        /**
 * ----------------------------------------
 * animation blink-1
 * ----------------------------------------
 */
        @-webkit-keyframes blink-1 {

            0%,
            50%,
            100% {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        @keyframes blink-1 {

            0%,
            50%,
            100% {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        @media (max-width: 500px) {

            html,
            body {
                overflow-x: hidden;
                width: 100%;
            }
        }

        /* here the rules for windows between 500px and 900px */
        @media (min-width: 500px) and (max-width: 900px) {

            html,
            body {
                overflow-x: hidden;
                width: 100%;
            }
        }

        #neonShadow {
            height: 5rem;
            width: 23rem;
            border: none;
            border-radius: 50px;
            transition: 0.3s;
            background-color: rgba(156, 161, 160, 0.3);
            animation: glow 1s infinite;
            transition: 0.5s;
            background: black;
        }

        #span {
            display: block;
            width: 100%;
            height: 100%;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            padding-top: 15%;
            padding-right: 2.5%;
            margin-right: 0px;
            font-size: 1.2rem;
            transition: 0.3s;
            opacity: 0;
        }

        #span:hover {
            transition: 0.3s;
            opacity: 1;
            font-weight: 700;

        }

        #neonShadow:hover {
            transform: translateX(-20px)rotate(30deg);
            border-radius: 5px;
            background-color: red;
            transition: 0.7s;
            color: black !important;

        }

        @keyframes glow {
            0% {
                box-shadow: 5px 5px 20px rgb(93, 52, 168), -5px -5px 20px rgb(93, 52, 168);
            }

            50% {
                box-shadow: 5px 5px 20px rgb(81, 224, 210), -5px -5px 20px rgb(81, 224, 210)
            }

            100% {
                box-shadow: 5px 5px 20px rgb(93, 52, 168), -5px -5px 20px rgb(93, 52, 168)
            }
        }
    </style>
</head>
<br>

<body>

    <div class="shake-opacity shake-constant">
        <div class="container">
            <div class="justify-content-center">
                <h1 class="text-center">Secret Rave</h1>
            </div>
        </div>
    </div>
    </div>
    <br>

    <div class="shake-chunk shake-constant shake-constant--hover">
        <h3 class="text-center">CHOOSE <i class="bi bi-ticket-perforated"></i> TICKET</h3>
    </div>


    <div class="row spacer"></div>

    <div class="quotes">
        <h5 class="text-center" style="white-space: nowrap;">LIMITED CAPACITY</h5>
    </div>


    <div class="row spacer"></div>
    <div class="row justify-content-center">
        <form action="{{ route('processTransaction') }}" id="form">
            @csrf

            <input type="hidden" name="ticket" value="1">

            <div class="card" style="width: 19rem; background: black;">

                <img class="card-img-top" src="https://s10.gifyu.com/images/O_Phase__Human_Error__MDWXLP001____Official_Video.gif" alt="Card image cap"></img>
                <br>
                <h5 class="card-title text-center" style="color:black;">15<i class="bi bi-currency-euro"></i></h5>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <p id="cardContent" class="card-text text-center">Secret Rave.</p>
                        <p id="cardContent" class="card-text text-center">Hidden Location.</p>
                        <p id="cardContent" class="card-text text-center">Indoor Spot.</p>
                        <a id="redirect" class="btn btn-outline-dark">MORE INFOS</a>
                    </div>
                </div>
        </form>

    </div>

    <br>
    <div class="row justify-content-center mt-2 mr-4 ml-4 mb-4">
        <div class="col">
            <div class="gradient-border" id="box">
                <div class="row">
                    <div class="col">
                        <a href="https://paypal.me/ukrainekonflikt" id="boxtext">END THE WAR <br>🇺🇦 <br>ANTIKRIEG <br>RAVE<br> <br>SPENDE JETZT <br> <br></a>

                    </div>

                    <div class="col">
                        <a href="https://paypal.me/ukrainekonflikt" id="boxtext" style="font-size: 0.75em !important;">paypal.me/ukrainekonflikt</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <section>
            <div class="square_box box_three"></div>
            <div class="square_box box_four"></div>
            <div class="container mt-5">
                <div class="row">

                    <div class="col-sm-12">
                        <div style="font-family: Arial, Helvetica, sans-serif;" class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                            <button type="button" style="background: black;" class="close font__size-18" data-dismiss="alert">
                                <span aria-hidden="true"><a>
                                        <i class="fa fa-times greencross"></i>
                                    </a></span>
                                <span class="sr-only">Close</span>
                            </button>
                            <i class="start-icon far fa-check-circle faa-tada animated"></i>
                            <strong>Jeder Euro </strong> kann helfen! Das Geld geht an <strong class="font__weight-semibold"><i>Aktion Deutschland hilft</i></strong>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div style="font-family: Arial, Helvetica, sans-serif;" class="alert fade alert-simple alert-info alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
                            <button type="button" style="background: black;" class="close font__size-18" data-dismiss="alert">
                                <span aria-hidden="true">
                                    <i class="fa fa-times blue-cross"></i>
                                </span>
                                <span class="sr-only">Close</span>
                            </button>
                            <i class="start-icon  fa fa-info-circle faa-shake animated"></i>
                            <strong class="font__weight-semibold">Heads up!</strong> Klick oben auf den Banner um weitergeleitet zu werden
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div style="font-family: Arial, Helvetica, sans-serif;" class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
                            <button type="button" style="background: black;" class="close font__size-18" data-dismiss="alert">
                                <span aria-hidden="true">
                                    <i class="fa fa-times warning"></i>
                                </span>
                                <span class="sr-only">Close</span>
                            </button>
                            <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
                            <strong class="font__weight-semibold">Achtung!</strong> Momentan sind viele Organisation unterwegs, die das Geld selbst einstecken
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div style="font-family: Arial, Helvetica, sans-serif;" class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
                            <button type="button" style="background: black;" class="close font__size-18" data-dismiss="alert">
                                <span aria-hidden="true">
                                    <i class="fa fa-times danger "></i>
                                </span>
                                <span class="sr-only">Close</span>
                            </button>
                            <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                            <strong class="font__weight-semibold">Oh snap!</strong> Die Party ist geplant für den <strong> 05.03.2022</strong>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div style="font-family: Arial, Helvetica, sans-serif;" class="alert fade alert-simple alert-primary alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
                            <button type="button" style="background: black;" class="close font__size-18" data-dismiss="alert">
                                <span aria-hidden="true"><i class="fa fa-times alertprimary"></i></span>
                                <span class="sr-only">Close</span>
                            </button>
                            <i class="start-icon fa fa-thumbs-up faa-bounce animated"></i>
                            <strong class="font__weight-semibold">Well done!</strong> Wir freuen uns auf jede Hilfe und auf die kommende Veranstaltung

                        </div>

                    </div>
                </div>
        </section>
    </div>
    </div>
    <div class="row spacer"></div>


    <!-- <button type="button" id="buy" class="btn-lg btn-block btn-outline-dark">Buy Tickets</button> -->

    <div class="row justify-content-center">
        <button id="neonShadow">
            <br>
            <p style="color: white;">Buy Tickets</p>
            <p id="span" style="color: white">Thanks!</p>
        </button>


    </div>
    <div class="row spacer"></div>

    <div class="row justify-content-center">
        @if(\Session::has('error'))
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}
        @endif

        @if(\Session::has('success'))

        <div id="success" class="alert alert-light">
            {{ \Session::get('success') }}
        </div>
    </div>


    <h5 class="text-center" id="buttonContent">Das ist dein Ticket!</h5>

    <div class="row spacer"></div>
    <div class="row justify-content-center">
        <a href="{{\Session::get('url')}}" class="btn btn-lg btn-dark" id="buttonContent" download>Download</a>
    </div>
    <div class="row spacer"></div>

    <div class="row justify-content-center">
        <img src="{{\Session::get('url')}}" class="img-fluid" alt="Responsive image">
    </div>




    {{ \Session::forget('success') }}
    @endif
    <div class="row spacer"></div>
    <div class="row spacer"></div>


</body>

</html>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    var domElement = document.getElementById('success');


    if (domElement) {

        window.onbeforeunload = function() {
            return true;
        };

        $(document).ready(function() {
            $("#success").fadeTo(5000, 500).slideUp(500, function() {
                $("#success").slideUp(500);
            });
        });
    }

    document.getElementById("neonShadow").onclick = function() {
        document.getElementById("neonShadow").innerHTML = 'One moment...'
        document.getElementById("form").submit();
    }



    var quotes = $(".quotes");
    var quoteIndex = -1;

    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(2000)
            .delay(2000)
            .fadeOut(2000, showNextQuote);
    }

    showNextQuote();

    document.getElementById("redirect").onclick = function() {
        location.href = "https://t.me/ravecgn/";
    };
</script>