<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Muratov Law Firm - Юридические услуги</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    @yield('css')
    @yield('metrix-head')
</head>
<body>
    @yield('metrix-body')
    @yield('content')
</body>

<div id="CallbackComponent" actions="{{ json_encode(['submit' => '/callback.json']) }}" triggerClass=".callback-trigger" title="Закажите консультацию"></div>
<div id="CongratsComponent" triggerClass=".congrats-trigger"></div>
<div class="congrats-trigger" style="display: none;"></div>

<script src="https://use.fontawesome.com/b953d657bb.js"></script>
<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
@yield('scripts')
</html>
