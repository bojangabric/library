<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134774339-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-134774339-1');
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <script src="/js/app.js"></script>
  <link href="/css/app.css" rel="stylesheet">
  <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <title>@yield('title') - Library</title>
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

</head>

<body class="relative min-h-screen">
  @include('partials.header')

  <div class="pb-16">
    @yield('content')
  </div>
  @include('partials.footer')

  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $(function() {
      var AuthUser = "{{{ (Auth::user()) ? Auth::user() : null }}}";

      $(".btn-cart").on("click", function() {
        if (!AuthUser) {
          alert('Must be logged in to add to cart.');
          return false;
        }

        $(this).text('Added to cart');
        $(this).removeClass('btn-cart');
        $(this).addClass('opacity-50');

        @auth
        $.ajax({
          type: 'POST',
          url: '/addBookToCart',
          data: {
            'userid': <?php echo json_encode(Auth::user()->id); ?>,
            'bookid': $(this).attr('data-bookid')
          },
        });
        @endauth
      });
    });
  </script>
</body>

</html>
