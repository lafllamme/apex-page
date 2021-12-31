<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NOCTA X</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    </link>
    <meta name="description" content="BEST SECRET RAVES CGN">
    <meta name="author" content="Verschluesseltes System">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </link>
    <!-- Styles -->
    <style>
        /* Please ❤ this if you like it! */


        @font-face {
            font-family: "MyWebFont";
            src: url("/fonts/font.woff2") format("woff2");
        }

        :root {
            font-size: 20px;
            --dark-blue: black;
            --white-gr: #c4c3ca;
            --yellow: #63FFB5;
            --yellow-2: #7de54e;
        }

        body {
            color: var(--white-gr);
            background: url('https://i.pinimg.com/originals/b4/e3/71/b4e371619042d1e80918d09904e90f7d.gif');
            overflow-x: hidden;


        }

        h2 {
            font-family: 'MyWebFont', sans-serif;
            font-weight: 700;
            color: white;
            font-size: 25px;
        }

        .color-yellow {
            color: var(--yellow);
        }

        .size-22 {
            font-size: 22px;
        }

        .logo {
            position: absolute;
            top: 30px;
            right: 30px;
            display: block;
            z-index: 100;
            transition: all 250ms linear;
        }

        .logo img {
            height: 26px;
            width: auto;
            display: block;
        }

        .section {
            position: relative;
            width: 100%;
            display: block;
            z-index: 2;
        }

        [type="radio"]:checked,
        [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
            width: 0;
            height: 0;
            visibility: hidden;
        }

        .checkbox-ticket:checked+label,
        .checkbox-ticket:not(:checked)+label {
            position: relative;
            width: 184px;
            display: inline-block;
            cursor: pointer;
            padding: 50px 0;
            text-align: center;
            margin: 5px;
            border-radius: 0;
            background-color: transparent;
            overflow: hidden;
            transition: all 250ms linear;
        }

        .checkbox-ticket:checked+label:before,
        .checkbox-ticket:not(:checked)+label:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            display: block;
            background-image: linear-gradient(335deg, var(--yellow), var(--yellow-2));
        }

        .checkbox-ticket:not(:checked)+label:after {
            content: '';
            position: absolute;
            top: -100%;
            left: 100%;
            width: 100%;
            height: 100%;
            border-radius: 200%;
            z-index: -1;
            display: block;
            background-color: var(--white-gr);
            opacity: 0.4;
            transition: all 250ms linear;
        }

        .checkbox-ticket:checked+label:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 0;
            z-index: -1;
            display: block;
            background-color: var(--white-gr);
            opacity: 0.4;
            transition: all 250ms linear;
        }

        .checkbox-ticket:checked+label {
            transform: translateY(-10px);
        }

        .checkbox-ticket+label .duration {
            font-family: 'MyWebFont', sans-serif;
            font-weight: 700;
            font-size: 18px;
            line-height: 1.2;
            text-transform: uppercase;
            color: var(--dark-blue);
            display: block;
            transition: all 250ms linear;
        }

        .checkbox-ticket+label .price {
            font-family: 'MyWebFont', sans-serif;
            font-weight: 900;
            font-size: 40px;
            line-height: 1;
            text-transform: uppercase;
            color: var(--dark-blue);
            display: block;
            transition: all 250ms linear;
            text-shadow: 1px 2px 4px var(--yellow), 0 0 0 #000, 1px 2px 4px var(--yellow);
        }

        .checkbox-ticket+label .price sup {
            font-size: 26px;
            line-height: 1;
            letter-spacing: 4px;
        }

        .checkbox-ticket+label .uil {
            font-size: 30px;
            line-height: 1;
            color: var(--dark-blue);
            display: block;
            transition: all 250ms linear;
        }

        .checkbox-ticket+label .time {
            font-family: 'MyWebFont', sans-serif;
            font-weight: 700;
            font-size: 15px;
            line-height: 1;
            text-transform: uppercase;
            color: var(--dark-blue);
            display: block;
            transition: all 250ms linear;
        }

        .top-dots,
        .bottom-dots {
            position: absolute;
            width: 100%;
            display: block;
            top: 0;
            transform: translateY(-50%);
            z-index: 10;
        }

        .bottom-dots {
            top: 100%;
        }

        .dots span {
            position: absolute;
            width: 6px;
            height: 6px;
            display: block;
            border-radius: 50%;
            top: 0;
            transform: translateY(-50%);
            background-color: var(--dark-blue);
        }

        .dots span:nth-child(1) {
            width: 30px;
            height: 30px;
            left: -15px;
        }

        .dots span:nth-child(2) {
            width: 30px;
            height: 30px;
            right: -15px;
        }

        .dots span:nth-child(3) {
            left: 19px;
        }

        .dots span:nth-child(4) {
            left: 29px;
        }

        .dots span:nth-child(5) {
            left: 39px;
        }

        .dots span:nth-child(6) {
            left: 49px;
        }

        .dots span:nth-child(7) {
            left: 59px;
        }

        .dots span:nth-child(8) {
            left: 69px;
        }

        .dots span:nth-child(9) {
            left: 79px;
        }

        .dots span:nth-child(10) {
            left: 89px;
        }

        .dots span:nth-child(11) {
            left: 99px;
        }

        .dots span:nth-child(12) {
            left: 109px;
        }

        .dots span:nth-child(13) {
            left: 119px;
        }

        .dots span:nth-child(14) {
            left: 129px;
        }

        .dots span:nth-child(15) {
            left: 139px;
        }

        .dots span:nth-child(16) {
            left: 149px;
        }

        .dots span:nth-child(17) {
            left: 159px;
        }

        .dots span:nth-child(18) {
            left: 169px;
        }

        .dots span:nth-child(19) {
            left: 179px;
        }

        .btn {
            border-radius: 4px;
            height: 48px;
            font-size: 16px;
            font-family: 'MyWebFont', sans-serif;
            font-weight: 700;
            transition: all 200ms linear;
            padding: 0 35px;
            letter-spacing: 0.2px;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -ms-flex-pack: center;
            text-align: center;
            border: none;
            color: var(--dark-blue);
            background-color: var(--yellow);
        }

        .btn:active,
        .btn:focus {
            box-shadow: none;
        }

        .btn:hover {
            color: var(--yellow);
            background-color: var(--yellow-2);
            box-shadow: 0 6px 20px 0 rgba(255, 235, 167, 0.25);
        }

        .checkbox-ticket:not(:checked)~.btn {
            pointer-events: none;
            opacity: 0.2;
        }

        .checkbox-ticket:checked~.btn {
            pointer-events: auto;
            opacity: 1;
        }

        .topcorner {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 100;

        }

        #mydiv {
            top: 0%;
            left: 60%;
            width: 25em;
            height: 14em;
            margin-top: -10em;
            /*set to a negative number 1/2 of your height*/
            margin-left: -13em;
            /*set to a negative number 1/2 of your width*/
            position: relative;
            z-index: -100;
        }

        .responsive {
            max-width: 90%;
            max-width: 100%;
            margin: auto;
        }

        #target {
            transition: opacity 3s;
        }

        #disable-ticket-1 {
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(0, 0, 0, 0.15) 100%), radial-gradient(at top center, rgba(255, 255, 255, 0.40) 0%, rgba(0, 0, 0, 0.40) 120%) #989898;
            background-blend-mode: multiply, multiply;
            pointer-events: none;


        }
    </style>
</head>
<br>

<body>
    <div onclick="window.location='https://www.instagram.com/apex.cologne'">
        <div id="mydiv">
            <img src="https://i.imgur.com/yqlpd1I.png" class="responsive" width="450" height="450" alt="">
        </div>
    </div>
    <audio id="audio" src="https://www.soundjay.com/buttons/button-34.mp3"></audio>
    <audio id="audio2" src="https://www.myinstants.com/media/sounds/sm64_mario_lets_go.mp3"></audio>



    <div class="section">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <br>

                    <h2 class="pb-4">CHOOSE <i class='uil uil-ticket' style="color: #63FFB5;"></i> TICKET</h2>

                   <!--  <div class="progress-pie-chart" data-percent="59" onclick="alert('Hurry up and get your ticket!')">
                        <div class="ppc-progress">
                            <div class="ppc-progress-fill"></div>
                        </div>
                        <div class="ppc-percents">
                            <div class="pcc-percents-wrapper">
                                <span>%</span>
                            </div>
                        </div>
                    </div> -->
                    <br>

                    <form action="{{ route('processTransaction') }}" id="form" onsubmit="play('audio2')">
                        @csrf
                        <div class="section">
                            <input class="checkbox-ticket" type="radio" value="ticket-1" name="ticket" id="ticket-1"> 
                            <label for="ticket-1" onclick="play('audio')" id="disable-ticket-1" >
                                <span class=" top-dots">

                                    <span class="section dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </span>
                                <span class="duration">
                                    Early Bird </span>
                                <span class="price mt-2 pb-4 mb-3">
                                    14<sup>€</sup>
                                </span>
                                <span class="section dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="section pt-4">
                                    <i class='uil uil-clock-two mt-3'></i>
                                </span>
                                <span class="time mt-2" id="demo">

                                </span>
                                <span class="bottom-dots">
                                    <span class="section dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </span>
                            </label>
                            <!--
						--><input class="checkbox-ticket" type="radio" value="ticket-2" name="ticket" id="ticket-2">
                            <label for="ticket-2" onclick="play('audio')" id="disable-ticket-2" style="display: none;">
                                <span class=" top-dots">
                                    <span class="section dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </span>
                                <span class="duration">
                                    Regular
                                </span>
                                <span class="price mt-2 pb-4 mb-3">
                                    15<sup>€</sup>
                                </span>
                                <span class="section dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="section pt-4">
                                    <i class='uil uil-clock-two mt-3'></i>
                                </span>
                                <span class="time mt-2" id="demo2">
                                </span>
                                <span class="bottom-dots">
                                    <span class="section dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </span>
                            </label>
                            <!--
						--><input class="checkbox-ticket" type="radio" value="ticket-3" name="ticket" id="ticket-3">
                            <label for="ticket-3" onclick="play('audio')">
                                <span class="top-dots">
                                    <span class="section dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </span>
                                <span class="duration">
                                    REGULAR                                </span>
                                <span class="price mt-2 pb-4 mb-3">
                                    22<sup>€</sup>
                                </span>
                                <span class="section dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="section pt-4">
                                    <i class='uil uil-clock-two mt-3'></i>
                                </span>
                                <span class="time mt-2" id="demo3"></span>
                                <span class="bottom-dots">
                                    <span class="section dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </span>
                            </label>
                            <div class="w-100"></div>
                            <a href="#" class="btn mt-4 mb-5" id="submit-button"><i class="uil uil-euro-circle size-22 mr-2"></i>Buy Ticket</a>
                        </div>
                    </form>
                    @if(\Session::has('error'))
                    <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                    {{ \Session::forget('error') }}
                    @endif
                    @if(\Session::has('success'))

                    <div id="success" class="alert alert-light">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ \Session::get('success') }}
                    </div>
                    <!-- <form class="text-center" action="{{route('qrcode')}}" method="post" accept-charset="utf-8">
                        @csrf -->
                    <div class="my-sm-3">
                        <div class="col-md-12">
                            <h2>Das ist dein Ticket!</h2>

                            <!-- <button class="btn btn-success" type="submit">Generate</button> -->
                            <a href="{{\Session::get('url')}}" class="btn btn-primary" download>Download</a><br>
                            <img src="{{\Session::get('url')}}" width="150" height="150" style="margin-top: 20px">
                        </div>
                    </div>
                    <!-- </form> -->
                    {{ \Session::forget('success') }}
                    @endif
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    .progress-pie-chart {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background-color: #5c157a;
        position: relative;
    }

    .progress-pie-chart.gt-50 {
        background-color: #2dede4;
    }

    .ppc-progress {
        content: "";
        position: absolute;
        border-radius: 50%;
        left: calc(50% - 100px);
        top: calc(50% - 100px);
        width: 200px;
        height: 200px;
        clip: rect(0, 200px, 200px, 100px);
    }

    .ppc-progress .ppc-progress-fill {
        content: "";
        position: absolute;
        border-radius: 50%;
        left: calc(50% - 100px);
        top: calc(50% - 100px);
        width: 200px;
        height: 200px;
        clip: rect(0, 100px, 200px, 0);
        background: #2dede4;
        transform: rotate(60deg);
    }

    .gt-50 .ppc-progress {
        clip: rect(0, 100px, 200px, 0);
    }

    .gt-50 .ppc-progress .ppc-progress-fill {
        clip: rect(0, 200px, 200px, 100px);
        background: #5c157a;
    }

    .ppc-percents {
        content: "";
        position: absolute;
        border-radius: 50%;
        left: calc(50% - 173.9130434783px/2);
        top: calc(50% - 173.9130434783px/2);
        width: 173.9130434783px;
        height: 173.9130434783px;
        background: black;
        text-align: center;
        display: table;
    }

    .ppc-percents span {
        display: block;
        font-size: 2em;
        font-weight: bold;
        color: #2dede4;
    }

    .pcc-percents-wrapper {
        display: table-cell;
        vertical-align: middle;
    }

    .progress-pie-chart {
        margin: 0px auto 0;
    }
</style>
<script>
    play = (domElement) => {
        var audio = document.getElementById(domElement);
        audio.play();
        alert('Two for One Special!')
    }

    var domElement = document.getElementById('success');

    $(document).ready(function() {
        $('#submit-button').click(function(ev) {
            play('audio2');
            ev.preventDefault();
        });

        $(function() {
            var $ppc = $('.progress-pie-chart'),
                percent = parseInt($ppc.data('percent')),
                deg = 360 * percent / 100;
            if (percent > 50) {
                $ppc.addClass('gt-50');
            }
            $('.ppc-progress-fill').css('transform', 'rotate(' + deg + 'deg)');
            $('.ppc-percents span').html(percent + '%');
        });
    });


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

    var countDownDate = new Date("November 30, 2021 23:59:00").getTime();
    var countDownDate2 = new Date("December 2, 2021 23:59:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {
        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;
        var distance2 = countDownDate2 - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML =
            days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        document.getElementById("demo2").innerHTML =
            (days + 2) + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        document.getElementById("demo3").innerHTML = `Fr, 07.01.21 <br>
                                                      Fr, 14.01.21`;

        // If the count down is finished, write some text

        document.getElementById("demo").innerHTML = `SOLD OUT <br>
                                                     SOLD OUT`;



        if (distance2 <= 0) {
            clearInterval(x);
            document.getElementById("disable-ticket-2").remove();
        }
    }, 1000);

    document.getElementById("submit-button").onclick = function() {
        document.getElementById("form").submit();
    }
</script>