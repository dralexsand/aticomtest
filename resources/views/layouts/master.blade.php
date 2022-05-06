<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Polls | @yield('title', 'Home')</title>
    @section('headerScripts')

        <link href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

        <!--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                      crossorigin="anonymous">-->

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    @show
</head>
<body>
<div class="container">
    @yield('content')
</div>
@section('footerScripts')

    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>-->

    <!--    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>-->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/axios/dist/axios.js') }}"></script>
    <script src="{{ asset('assets/js/axios/dist/axios.map') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
@show
</body>
</html>
