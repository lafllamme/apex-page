<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    </link>
    <link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css" rel="stylesheet">
    </link>
    <!-- Styles -->
    <style>
        /* Please ❤ this if you like it! */


        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700;900&display=swap');

        :root {
            font-size: 20px;
            --dark-blue: #1f2029;
            --white-gr: #c4c3ca;
            --yellow: #ffeba7;
            --yellow-2: #f8ab37;
        }

       
        body {
            color: var(--white-gr);
            background: var(--dark-blue);
            overflow-x: hidden;
        }

        h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            color: var(--white-gr);
            font-size: 36px;
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
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            font-size: 18px;
            line-height: 1.2;
            text-transform: uppercase;
            color: var(--dark-blue);
            display: block;
            transition: all 250ms linear;
        }

        .checkbox-ticket+label .price {
            font-family: 'Lato', sans-serif;
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
            font-family: 'Lato', sans-serif;
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
            font-family: 'Lato', sans-serif;
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
            background-color: #000;
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
    </style>
</head>

<body>

    <a href="https://front.codes/" class="logo hover-target" target="_blank">
        <img src="https://i.imgur.com/nPIBnnu.png" alt="">
    </a>

    <div class="section">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="pb-4">Choose <i class='uil uil-bus color-yellow'></i> ticket</h1>
                    <div class="section">
                        <input class="checkbox-ticket" type="radio" name="ticket" id="ticket-1">
                        <label for="ticket-1">
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
                                30 min
                            </span>
                            <span class="price mt-2 pb-4 mb-3">
                                <sup>$</sup>2.95
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
                            <span class="time mt-2">
                                2:00 pm - 2:30 pm
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
						--><input class="checkbox-ticket" type="radio" name="ticket" id="ticket-2">
                        <label for="ticket-2">
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
                                60 min
                            </span>
                            <span class="price mt-2 pb-4 mb-3">
                                <sup>$</sup>4.95
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
                            <span class="time mt-2">
                                2:00 pm - 3:00 pm
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
						--><input class="checkbox-ticket" type="radio" name="ticket" id="ticket-3">
                        <label for="ticket-3">
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
                                90 min
                            </span>
                            <span class="price mt-2 pb-4 mb-3">
                                <sup>$</sup>6.95
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
                            <span class="time mt-2">
                                2:00 pm - 3:30 pm
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
                        <div class="w-100"></div>
                        <a href="#" class="btn mt-4 mb-5"><i class="uil uil-ticket size-22 mr-2"></i>Buy Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<script src="{{ mix('/js/app.js') }}"></script>