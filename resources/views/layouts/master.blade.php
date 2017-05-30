<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>PMApp - Project Management Application</title>
    <meta name="description" content="PMApp is a project management app built for Laravel learning">
    <script src="//use.typekit.net/udt8boc.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>
    <div class="container">
        @yield('content')
        @include('layouts.partials.alerts')
    </div>

</body>
</html>