<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @hasSection('title')
            @yield('title')
        @else
            {{ config('app.name', 'Laravel') }}
        @endif
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container font-sans max-width mx-auto mt-12">
    @yield('content')
</div>
</body>
</html>
