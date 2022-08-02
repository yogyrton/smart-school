<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <title> @yield('title')</title>

@php($assets_version = 9)

<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

<!-- Meta -->

    <!-- Page Description Here -->
    <meta name="title" content=""/>
    <meta name="keywords" content=""/>
    <meta name="description" content="@yield('description')"/>


    <!-- Disable screen scaling-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta name="format-detection" content="telephone=no">


    <!-- CSS -->
    <link rel="stylesheet" href="/css/app.css?v={{ $assets_version }}">


    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

</head>
<body class="@yield('padding')">
<div id="app">
    @include('partials.header')
    @include('partials.request_modal')

    @yield('content')

    @include('partials.footer')


</div>

<script src="/js/app.js"></script>

</body>
</html>
