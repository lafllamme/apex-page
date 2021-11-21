<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </link>
    <!-- Styles -->
    <style>
        @font-face {
            font-family: "MyWebFont";
            src: url("/fonts/font.woff2") format("woff2");
        }



        ul {
            padding: 0;
            margin: 0;
        }

        li {
            list-style-type: none;
        }

        input[type=radio] {
            display: none;
        }

        label {
            cursor: pointer;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        body .swanky {
            margin: auto;
            top: 0;
            bottom: 0;
            left: ;
            right: 0;
        }

        body {
            height: 100vh;
            font-weight: 500;
            font-family: "MyWebFont", sans-serif;
            background: linear-gradient(135deg, #8254EA 0%, #E86DEC 100%);
            -webkit-font-smoothing: antialiased;
            font-size: 12px;
        }

        body .swanky {
            perspective: 600px;
            width: 700px;
            position: absolute;
            margin: auto;
            height: 360px;
        }

        body .swanky_title {
            float: right;
            text-align: left;
            width: 400px;
            color: white;
            position: relative;
            top: 70px;
        }

        body .swanky_title__social a {
            position: relative;
            overflow: hidden;
            width: 140px;
            margin-right: 15px;
            text-decoration: none;
            padding: 0px 0px 5px 0px;
            height: 40px;
            border: 2px solid white;
            float: left;
            color: white;
            font-size: 12px;
            font-weight: 400;
            margin-top: 20px;
        }

        body .swanky_title__social a .slide {
            height: 45px;
            width: 100px;
            float: left;
            position: absolute;
            transform: skew(20deg);
            left: -120px;
            transition-property: left;
            transition-duration: 0.2s;
            background: white;
        }

        body .swanky_title__social a .slide .arrow {
            position: absolute;
            right: 31px;
            top: 24px;
            opacity: 0;
            transform: skew(-20deg);
        }

        body .swanky_title__social a .slide .arrow .stem {
            width: 10px;
            height: 1px;
            background: #858490;
        }

        body .swanky_title__social a .slide .arrow .point {
            width: 6px;
            height: 6px;
            border-right: 2px solid #858490;
            top: -3px;
            right: 1px;
            position: absolute;
            transform: rotate(45deg);
            border-top: 2px solid #858490;
        }

        body .swanky_title__social a img {
            width: 16px;
            margin-left: 10px;
            position: relative;
            margin-right: 8px;
            transition-property: margin-left;
            transition-duration: 0.1s;
            margin-top: 10px;
            top: 4px;
        }

        body .swanky_title__social a:hover>.slide {
            left: -70px;
            transition-property: left;
            transition-duration: 0.1s;
        }

        body .swanky_title__social a:hover>img {
            margin-left: 40px;
            transition-property: margin-left;
            transition-duration: 0.1s;
        }

        body .swanky_title__social a:hover>.slide .arrow {
            right: 11px;
            opacity: 1;
            transition-property: right, opacity;
            transition-delay: 0.07s;
            transition-duration: 0.2s;
        }

        body .swanky .intro {
            float: right;
            color: white;
            width: 370px;
            top: 50px;
            position: relative;
        }

        body .swanky .intro h1 {
            text-shadow: 0px 2px rgba(0, 0, 0, 0.26);
        }

        body .swanky .intro p {
            line-height: 20px;
            text-shadow: 0px 1px rgba(0, 0, 0, 0.26);
        }

        body .swanky_wrapper {
            width: 225px;
            height: auto;
            overflow: hidden;
            border-radius: 4px;
            background: #2a394f;
        }

        body .swanky_wrapper label {
            padding: 25px;
            float: left;
            height: 72px;
            border-bottom: 1px solid #293649;
            position: relative;
            width: 100%;
            color: #eff4fa;
            transition: text-indent 0.15s, height 0.3s;
            box-sizing: border-box;
        }

        body .swanky_wrapper label img {
            margin-right: 10px;
            position: relative;
            top: 2px;
            width: 16px;
        }

        body .swanky_wrapper label span {
            position: relative;
            top: -3px;
        }

        body .swanky_wrapper label:hover {
            background: #212e41;
            border-bottom: 1px solid #2A394F;
            text-indent: 4px;
        }

        body .swanky_wrapper label:hover .bar {
            width: 100%;
        }

        body .swanky_wrapper label .bar {
            width: 0px;
            transition: width 0.15s;
            height: 2px;
            position: absolute;
            display: block;
            background: #355789;
            bottom: 0;
            left: 0;
        }

        body .swanky_wrapper label .lil_arrow {
            width: 5px;
            height: 5px;
            transition: transform 0.8s;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border-top: 2px solid white;
            border-right: 2px solid white;
            float: right;
            position: relative;
            top: 6px;
            right: 2px;
            transform: rotate(45deg);
        }

        body .swanky_wrapper__content {
            position: absolute;
            display: none;
            overflow: hidden;
            left: 0;
            width: 100%;
        }

        body .swanky_wrapper__content li {
            width: 100%;
            opacity: 0;
            left: -100%;
            background: #15a4fa;
            padding: 25px 0px;
            text-indent: 25px;
            box-shadow: 0px 0px #126CA1 inset;
            transition: box-shadow 0.3s, text-indent 0.3s;
            position: relative;
        }

        body .swanky_wrapper__content li:hover {
            background: #0c93e4;
            box-shadow: 3px 0px #126CA1 inset;
            transition: box-shadow 0.3s linear, text-indent 0.3s linear;
            text-indent: 31px;
        }

        body .swanky_wrapper__content .clear {
            clear: both;
        }

        input[type=radio]:checked+label .swanky_wrapper__content {
            display: block;
            top: 68px;
            border-bottom: 1px solid #212e41;
        }

        input[type=radio]:checked+label>.lil_arrow {
            transition: transform 0.8s;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            transform: rotate(135deg);
            border-top: 2px solid #14a3f9;
            border-right: 2px solid #14a3f9;
        }

        input[type=radio]:checked+label {
            height: 325px;
            background: #212e41;
            text-indent: 4px;
            transition-property: height;
            transition-duration: 0.6s;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        input[type=radio]:checked+label .bar {
            width: 0;
        }

        input[type=radio]:checked+label li:nth-of-type(1) {
            -webkit-animation: in 0.15s 0.575s forwards;
            animation: in 0.15s 0.575s forwards;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -moz-animation: in 0.15s 0.575s forwards;
            -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        input[type=radio]:checked+label li:nth-of-type(2) {
            -webkit-animation: in 0.15s 0.7s forwards;
            animation: in 0.15s 0.7s forwards;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -moz-animation: in 0.15s 0.7s forwards;
            -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        input[type=radio]:checked+label li:nth-of-type(3) {
            -webkit-animation: in 0.15s 0.825s forwards;
            animation: in 0.15s 0.825s forwards;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -moz-animation: in 0.15s 0.825s forwards;
            -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        input[type=radio]:checked+label li:nth-of-type(4) {
            -webkit-animation: in 0.15s 0.95s forwards;
            animation: in 0.15s 0.95s forwards;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -moz-animation: in 0.15s 0.95s forwards;
            -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        @-webkit-keyframes in {
            from {
                left: -100%;
                opacity: 0;
            }

            to {
                left: 0;
                opacity: 1;
            }
        }

        @keyframes in {
            from {
                left: -100%;
                opacity: 0;
            }

            to {
                left: 0;
                opacity: 1;
            }
        }

        .love {
            position: absolute;
            right: 20px;
            bottom: 0px;
            font-size: 11px;
            font-weight: normal;
        }

        .love p {
            color: white;
            font-weight: normal;
            font-family: "MyWebFont", sans-serif;
        }

        .love a {
            color: white;
            font-weight: 700;
            text-decoration: none;
        }

        .love img {
            position: relative;
            top: 3px;
            margin: 0px 4px;
            width: 10px;
        }

        .brand {
            position: absolute;
            left: 20px;
            bottom: 14px;
        }

        .brand img {
            width: 30px;
        }

        #c2 {
            background: green;
            float: right;
        }
    </style>
</head>

<body>

    <!-- /////////// Begin Dropdown //////////// -->
    <div class='swanky_wrapper'>
        <input id='Dashboard' name='radio' type='radio'>
        <label for='Dashboard'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/dash.png'>
            <span>Dashboard</span>
            <div class='lil_arrow'></div>
            <div class='bar'></div>
            <div class='swanky_wrapper__content'>
                <ul>
                    <li>Tools <i class="bi bi-box-arrow-in-right">kkkkk</i>
                    </li>
                    <li>Reports</li>
                    <li>Analytics</li>
                    <li>Code Blocks</li>
                </ul>
            </div>
        </label>
        <input id='Sales' name='radio' type='radio'>
        <label for='Sales'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/del.png'>
            <span>Sales</span>
            <div class='lil_arrow'></div>
            <div class='bar'></div>
            <div class='swanky_wrapper__content'>
                <ul>
                    <li>New Sales</li>
                    <li>Expired Sales</li>
                    <li>Sales Reports</li>
                    <li>Deliveries</li>
                </ul>
            </div>
        </label>
        <input id='Messages' name='radio' type='radio'>
        <label for='Messages'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/mess.png'>
            <span>Messages</span>
            <div class='lil_arrow'></div>
            <div class='bar'></div>
            <div class='swanky_wrapper__content'>
                <ul>
                    <li>Inbox</li>
                    <li>Outbox</li>
                    <li>Sent</li>
                    <li>Archived</li>
                </ul>
            </div>
        </label>
        <input id='Users' name='radio' type='radio'>
        <label for='Users'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/users.png'>
            <span>Users</span>
            <div class='lil_arrow'></div>
            <div class='bar'></div>
            <div class='swanky_wrapper__content'>
                <ul>
                    <li>New User</li>
                    <li>User Groups</li>
                    <li>Permissions</li>
                    <li>Passwords</li>
                </ul>
            </div>
        </label>
        <input id='Settings' radio='radio' type='radio'>
        <label for='Settings'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/set.png'>
            <span>Settings</span>
            <div class='lil_arrow'></div>
            <div class='swanky_wrapper__content'>
                <ul>
                    <li>Databases</li>
                    <li>Design</li>
                    <li>Change User</li>
                    <li>Log Out</li>
                </ul>
            </div>
        </label>
    </div>
    <!-- /////////// End Dropdown //////////// -->
    </div>
    <div id="c2">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <!-- / My Footer -->
    <div class='love'>
        <p>Made with <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/love_copy.png" /> by <a href='https://www.jamiecoulter.co.uk' target='_blank'> Jcoulterdesign </a></p>
    </div>

</body>

</html>
<script src="{{ mix('/js/app.js') }}"></script>