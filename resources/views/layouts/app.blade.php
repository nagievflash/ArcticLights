<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="/images/favicon.png" />

    <title>Свет Арктики – проект, направленный на улучшение здоровья и работоспособности жителей Арктической зоны</title>

    <link rel='stylesheet' id='wp-block-library-css' href='/css/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='frontend-css' href='/css/styles.css' type='text/css' media='all' />
    @yield('assets-css')
</head>
<body>

    @include('layouts.header')

    <main>
    @yield('content')
    </main>

    @include('layouts.footer')
</body>

</html>
