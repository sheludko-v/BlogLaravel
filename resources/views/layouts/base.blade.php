<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/favicon-local.ico">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('page.title', config('app.name'))</title>
</head>

<body>

<div class="d-flex flex-column justify-content-between min-vh-100">


    @include('includes.header')
    @include('includes.alert')

    <main class="flex-grow-1 py-3">
        @yield('content')
    </main>

    @include('includes.footer')

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="/js/app.js"></script>

@stack('js')

</body>
</html>
