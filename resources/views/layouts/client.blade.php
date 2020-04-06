<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title', 'Mahmoud Hekal')</title>
</head>
<body>
@include('shared.navbar')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Laravel 7 CRUD Tutorial</h1>
        </div>
    </div>

    <div class="row">
        @yield('content')
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>

<script>
    $('.message').fadeOut(3000);
    $('.del').click(function(e){
        e.preventDefault();
        if (confirm('Are you sure you want to delete?')) {
            $(e.target).closest('form').submit();
        }
    });
</script>

</body>
</html>
