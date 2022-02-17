<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>
    body {
        background: url('https://i.pinimg.com/originals/c2/b6/63/c2b6634c484d5e27903b2caa8eb2aea9.gif');
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
    }

    h2 {
        color: white;
    }
</style>

<body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tickets</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Vorname</th>
                <th scope="col">Nachname</th>
                <th scope="col">Email</th>
                <th scope="col">Preis</th>
                <th scope="col">Token</th>
                <th scope="col">Message</th>
                <th scope="col">Datum</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
            <tr>
                <td scope="row">{{ ++$i }}</td>
                <td>{{ $product->firstname }}</td>
                <td>{{ $product->lastname }}</td>
                <td>{{ $product->email }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->token }}</td>
                <td>{{ $product->message }}</td>
                <td>{{ $product->created_at }}</td>
            <tr>
                @endforeach
        </tbody>
    </table>
    {!! $products->links() !!}

</body>

</html>