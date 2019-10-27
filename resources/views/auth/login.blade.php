@extends('layouts.master')

@section('title', 'Login')
@section('content')

<form class="mx-auto mt-8 p-8 bg-white shadow-md rounded w-full max-w-md" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
  @csrf

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
        {{ __('E-Mail Address') }}
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" name="email" id="email" type="email" placeholder="jane@example.com" autofocus required>
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
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" name="password" id="password" type="password" placeholder="******************" required>
      @if ($errors->has('password'))
      <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
        {{ $errors->first('password') }}
      </span>
      @endif
    </div>
  </div>

  <div class="mb-6">
    <label class="text-gray-500 font-semibold flex items-center">
      <input class="mr-1  leading-tight" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
    </label>
  </div>

  <div class="flex items-center justify-between">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
      {{ __('Login') }}
    </button>
    <a class="inline-block align-baseline font-semibold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
      {{ __('Forgot Your Password?') }}
    </a>
  </div>

</form>

@endsection
