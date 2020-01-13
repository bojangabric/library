@extends('layouts.master')

@section('title', 'Login')
@section('content')

<div class="login-form md:w-11/12 lg:w-2/3 xl:w-1/2 md:flex mx-auto md:shadow-md md:rounded mt-10 md:mt-20 overflow-hidden max-w-5xl">
  <div class="w-11/12 mx-auto md:w-2/5 flex flex-col justify-center">
    <form class="p-8 md:p-6" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
      @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
            {{ __('E-Mail Address') }}
          </label>
          <input class="form-input w-full" name="email" id="email" type="email" placeholder="jane@example.com" required>
          @if ($errors->has('email'))
          <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
            {{ $errors->first('email') }}
          </span>
          @endif
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
            {{ __('Password') }}
          </label>
          <input class="form-input w-full" name="password" id="password" type="password" placeholder="******************" required>
          @if ($errors->has('password'))
          <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
            {{ $errors->first('password') }}
          </span>
          @endif
        </div>
      </div>

      <div class="mb-6 py-1">
        <label class=" text-gray-700 text-sm leading-none flex items-center">
          <input class="mr-1 form-checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
        </label>
      </div>

      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded focus:outline-none focus:shadow-outline" type="submit">
          {{ __('Login') }}
        </button>
        <a class="inline-block align-baseline font-semibold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
        </a>
      </div>
    </form>


    <div class="text-center mx-auto text-sm text-gray-500 my-4 w-10/12 border-b border-gray-400" style="line-height: 0.1em;">
      <span class="bg-white px-3">or</span>
    </div>

    <div class="p-8 md:p-6 w-11/12 w-full flex flex-col md:pb-8">
      <div class="w-full sm:w-auto mb-2">
        <div class="flex justify-center items-center bg-red-500 hover:bg-red-600 cursor-pointer text-white rounded px-6 py-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" class="fill-current h-5 w-5 mr-2">
            <path d="M 15.003906 3 C 8.3749062 3 3 8.373 3 15 C 3 21.627 8.3749062 27 15.003906 27 C 25.013906 27 27.269078 17.707 26.330078 13 L 25 13 L 22.732422 13 L 15 13 L 15 17 L 22.738281 17 C 21.848702 20.448251 18.725955 23 15 23 C 10.582 23 7 19.418 7 15 C 7 10.582 10.582 7 15 7 C 17.009 7 18.839141 7.74575 20.244141 8.96875 L 23.085938 6.1289062 C 20.951937 4.1849063 18.116906 3 15.003906 3 z" />
          </svg>
          <div>Sign in with Google</div>
        </div>
      </div>
      <div class="w-full sm:w-auto mb-2">
        <div class="flex justify-center items-center bg-blue-700 hover:bg-blue-800 cursor-pointer text-white rounded px-6 py-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-5 w-5 mr-2">
            <path d="M20.766 0H3.234A3.236 3.236 0 000 3.234v17.532A3.236 3.236 0 003.234 24h8.645l.016-8.578H9.668a.527.527 0 01-.527-.524l-.008-2.761a.522.522 0 01.523-.528h2.223V8.938c0-3.102 1.894-4.79 4.66-4.79h2.27c.289 0 .527.235.527.528v2.328a.528.528 0 01-.527.527h-1.391c-1.504 0-1.797.715-1.797 1.766v2.312h3.305c.316 0 .558.274.523.586l-.328 2.766a.527.527 0 01-.523.46h-2.961L15.62 24h5.145A3.236 3.236 0 0024 20.766V3.234A3.236 3.236 0 0020.766 0zm0 0" />
          </svg>
          <div>Sign in with Facebook</div>
        </div>
      </div>
      <div class="w-full sm:w-auto">
        <div class="flex justify-center items-center bg-blue-400 hover:bg-blue-500 cursor-pointer text-white rounded px-6 py-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current h-5 w-5 mr-2">
            <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" />
          </svg>
          <div>Sign in with Twitter</div>
        </div>
      </div>
    </div>

  </div>

  <div class="hidden md:block mx-auto md:w-3/5 bg-gray-300">
    <flickity ref="flickity" :options="flickityLoginOptions">
      <div class="w-full relative" style="height: 35rem;">
        <img class="w-full h-full" src="/images/books.png" alt="">
        <div class="absolute bottom-0 flex mx-6 xl:mx-16 mb-8">
          <div class="hidden sm:flex p-2 md:p-4 bg-gray-100 rounded-l self-stretch items-center">
            <div class="rounded-full bg-teal-400 p-4">
              <img class="w-16" src="/images/icons/library.png" alt=" ">
            </div>
          </div>
          <div class="p-4 bg-white rounded sm:rounded-l-none sm:rounded-r self-stretch flex flex-col justify-center">
            <div class="font-medium mb-1">Vast majority of books</div>
            <div class="text-sm leading-tight">Competitive prices from extensive network budget hotels to 5 star hotels such as Ibis, Amaris</div>
          </div>
        </div>
      </div>

      <div class="w-full relative" style="height: 35rem;">
        <img class="w-full h-full" src="/images/discount.png" alt="">
        <div class="absolute bottom-0 flex mx-6 xl:mx-10 mb-8">
          <div class="hidden sm:flex p-2 md:p-4 bg-gray-100 rounded-l self-stretch items-center">
            <div class="rounded-full bg-gree bg-red-500 p-4">
              <img class="w-16" src="/images/icons/price-tag.png" alt=" ">
            </div>
          </div>
          <div class="p-4 bg-white rounded sm:rounded-l-none sm:rounded-r self-stretch flex flex-col justify-center">
            <div class="font-medium mb-1">Best price guarantee</div>
            <div class="text-sm leading-tight">Competitive prices from extensive network budget hotels to 5 star hotels such as Ibis, Amaris</div>
          </div>
        </div>
      </div>

      <div class="w-full relative" style="height: 35rem;">
        <img class="w-full h-full" src="/images/writing.png" alt="">
        <div class="absolute bottom-0 flex mx-6 xl:mx-10 mb-8">
          <div class="hidden sm:flex p-2 md:p-4 bg-gray-100 rounded-l self-stretch items-center">
            <div class="rounded-full bg-yellow-300 p-4">
              <img class="w-16" src="/images/icons/authors.png" alt=" ">
            </div>
          </div>
          <div class="p-4 bg-white rounded sm:rounded-l-none sm:rounded-r self-stretch flex flex-col justify-center">
            <div class="font-medium mb-1">Top authors & books</div>
            <div class="text-sm leading-tight">Competitive prices from extensive network budget hotels to 5 star hotels such as Ibis, Amaris</div>
          </div>
        </div>
      </div>
    </flickity>
  </div>
</div>
@endsection
