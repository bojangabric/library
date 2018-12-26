<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <img src="/favicon.png" class="header-icon">
        <a class="navbar-brand ml-5 header-library" href="/">Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li>
                    <form class="my-2 my-lg-0 mr-lg-2" method="GET" action="/store/categories/1">
                        <div class="input-group">
                            <input class="form-control" type="text" name="keyword" placeholder="Search for a book...">
                            <span class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/store/categories/1?sort=&amp;gridview=">Shop</a>
                </li>
                @auth
                @if (!Auth::user()->isAdmin())
                <li class="nav-item">
                    <a class="nav-link" href="/cart">Cart</a>
                </li>
                @endif
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                @else
                <li class="nav-item dropdown header">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->isAdmin())
                        <a class="dropdown-item" href="/admin">Admin dashboard</a>
                        @endif
                        <a class="dropdown-item" href="/settings">Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>

<script>
    var checkvalue = window.location.pathname;

    $(".nav-link").each(function () {
        if ($(this).attr('href') == checkvalue) {
            $(this).addClass("active");
        }
    });
</script>
