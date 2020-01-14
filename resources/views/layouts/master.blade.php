<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="/css/app.css" rel="stylesheet">
  <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <title>@yield('title') - Library</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>

<body class="relative min-h-screen">
  <div id="app">

    @include('partials.header')

    <div class="pb-16">
      @yield('content')
    </div>
    @include('partials.footer')
  </div>
  <script src="/js/app.js"></script>
</body>

</html>
