<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SECRET</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    </link>
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
            background: url('https://media2.giphy.com/media/eDzhyEt8rHGUM/giphy.gif?cid=6c09b9526c60c272542c42c47c924f8072a3f0007675e23c&rid=giphy.gif&ct=g');
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

    <h3 class="text-center">CHOOSE <i class="bi bi-ticket-perforated"></i> TICKET</h3>

    <div class="row spacer"></div>

    <div class="quotes">
        <h5 class="text-center" style="white-space: nowrap;">ONLY 100 TICKETS LEFT</h5>
    </div>


    <div class="row spacer"></div>
    <div class="row justify-content-center">
        <form action="<?php echo e(route('processTransaction')); ?>" id="form">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="ticket" value="1">

            <div class="card" style="width: 18rem; background: black;">

                <img class="card-img-top" src="https://media3.giphy.com/media/3oFzlUASnAYgzmujja/giphy.gif" alt="Card image cap"></img>
                <br>
                <h5 class="card-title text-center" style="color:black;">15<i class="bi bi-currency-euro"></i></h5>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <p class="card-text text-center">Secret Rave.</p>
                        <p class="card-text text-center">Hidden Location.</p>
                        <p class="card-text text-center">Indoor Spot.</p>
                        <a style="backgound-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
;" id="redirect" class="btn btn-outline-dark">MORE INFOS</a>
                    </div>
                </div>
        </form>

    </div>
    </div>

    </div>
    <div class="row spacer"></div>


    <button type="button" id="buy" class="btn-lg btn-block btn-outline-dark">Buy Tickets</button>

    <div class="row spacer"></div>

    <div class="row justify-content-center">
        <?php if(\Session::has('error')): ?>
        <div class="alert alert-danger"><?php echo e(\Session::get('error')); ?></div>
        <?php echo e(\Session::forget('error')); ?>

        <?php endif; ?>

        <?php if(\Session::has('success')): ?>

        <div id="success" class="alert alert-light">
            <?php echo e(\Session::get('success')); ?>

        </div>
    </div>


    <h5 class="text-center">Das ist dein Ticket!</h5>

    <div class="row spacer"></div>
    <div class="row justify-content-center">
        <a href="<?php echo e(\Session::get('url')); ?>" class="btn btn-lg btn-dark" download>Download</a>
    </div>
    <div class="row spacer"></div>

    <div class="row justify-content-center">
        <div class="col"> <img src="<?php echo e(\Session::get('url')); ?>" class="img-fluid" alt="Responsive image"></div>
    </div>




    <?php echo e(\Session::forget('success')); ?>

    <?php endif; ?>
    <div class="row spacer"></div>
    <div class="row spacer"></div>


</body>

</html>
<script src="<?php echo e(mix('/js/app.js')); ?>"></script>
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

    document.getElementById("buy").onclick = function() {
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
</script><?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>