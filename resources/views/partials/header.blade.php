<nav class="bg-gray-900 p-6">
  <div class="flex items-center justify-between flex-wrap w-4/6 mx-auto">
    <div class="flex items-center  text-white mr-6">
      <a href="/" class="flex">
        <img src="/favicon.png" class="header-icon">
        <span class="font-semibold text-xl tracking-tight">Library</span>
      </a>
    </div>
    <div class="block lg:hidden">
      <button class="flex items-center px-3 py-2 border rounded text-white border-teal-400 hover:text-gray-400 hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full block lg:flex lg:items-center lg:w-auto">
      <div class="text-sm lg:flex-grow">
        <div class="block mt-4 lg:inline-block lg:mt-0 mr-4">
          <form method="GET" action="/store/categories/1">
            <input class="p-2 mr-0 rounded-l outline-none" type="text" name="keyword" placeholder="Search for a book...">
            <button class="text-white bg-blue-500 px-3 py-2 -ml-1 rounded-r outline-none" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
        <a href="/store/categories/1" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 mr-4 text-base font-semibold">
          Shop
        </a>
        @auth
        @if (!Auth::user()->isAdmin())
        <a class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 mr-4 text-base font-semibold" href="/cart">Cart</a>
        @endif
        @endauth
        <a class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 mr-4 text-base font-semibold" href="/contact">Contact</a>

        @guest
        <a class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 mr-4 text-base font-semibold" href="/login">Login</a>
        <a class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 mr-4 text-base font-semibold" href="/register">Register</a>
        @else
        <div class="block mt-4 lg:inline-block lg:mt-0 text-white mr-4">
          <div class="mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 mr-4 text-base font-semibold username cursor-pointer">
            {{ Auth::user()->name }}
            <i class="fa fa-caret-down"></i>
          </div>
          <div class="mt-1 absolute bg-gray-900 rounded border border-gray-800 overflow-hidden flex flex-col username-options hidden">
            @if (Auth::user()->isAdmin())
            <a class="p-3 hover:text-gray-400 border-b border-gray-800" href="/admin">Admin dashboard</a>
            @endif
            <a class="p-3 hover:text-gray-400 border-b border-gray-800" href="/settings">Settings</a>
            <a class="p-3 hover:text-gray-400 border-b border-gray-800" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" class="hidden" action="{{ route('logout') }}" method="POST">
              @csrf
            </form>
          </div>
        </div>
        @endguest
      </div>
    </div>
  </div>
</nav>

<script>
  var checkvalue = window.location.pathname;

  $(".nav-link").each(function() {
    if ($(this).attr('href') == checkvalue) {
      $(this).addClass("active");
    }
  });

  $(".username").click(function() {
    $('.username-options').removeClass("hidden");
  });

  window.onclick = function(event) {
    if (!event.target.matches('.username')) {
      var dropdowns = document.getElementsByClassName("username-options");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (!openDropdown.classList.contains('hidden')) {
          openDropdown.classList.add('hidden');
        }
      }
    }
  }
</script>
