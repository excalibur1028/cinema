<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinema Ticketing</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    @include('flash::message')

    @section('header')
        @include('partials.header')
    @show

    <div class="container">
        @include('partials.alerts')
        @yield('content')
    </div>


    <!-- JavaScripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @include('sweet::alert')
</body>
</html>
