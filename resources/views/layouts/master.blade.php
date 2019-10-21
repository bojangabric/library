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

<body>
  @include('partials.header')

  @yield('content')

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

        var bookname = $("#bookName").text();

        var div = $(this).closest(".btn-group");
        if (!bookname)
          bookname = $(this).parent().parent().parent().parent().find('h4:first').text();

        div.empty();
        if ('<?php echo isset($_GET['gridview']) ? $_GET['gridview'] : ''; ?>' == 'list-view')
          div.append('<div class="btn-group ml-5"><button class="btn btn-primary disabled">In cart</button></div>');
        else
          div.append("<button class='btn btn-primary disabled'>In cart</button>");
        @auth
        $.ajax({
          type: 'POST',
          url: '/addBookToCart',
          data: {
            'userid': <?php echo json_encode(Auth::user()->id); ?>,
            'bookname': bookname
          },
        });
        @endauth
      });
    });
  </script>
</body>

</html>
