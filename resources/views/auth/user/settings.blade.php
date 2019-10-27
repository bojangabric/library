@extends('layouts.master')

@section('title', 'Settings')
@section('content')


<form class="mx-auto mt-8 p-8 bg-white shadow-md rounded w-full max-w-xl" method="POST" action="{{ route('changeSettings') }}" aria-label="{{ __('Save') }}">
  @csrf

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
        {{ __('First name') }}
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" type="text" id="name" name="name" required value="{{ Auth::user()->name }}">
      @if ($errors->has('first_name'))
      <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
        {{ $errors->first('first_name') }}
      </span>
      @endif
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last-name">
        {{ __('Last name') }}
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" type="text" id="last-name" name="last-name" type="text" value="{{ Auth::user()->last_name }}">
      @if ($errors->has('last_name'))
      <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
        {{ $errors->first('last_name') }}
      </span>
      @endif
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
        {{ __('E-Mail Address') }}
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" name="email" id="email" type="email" value="{{ Auth::user()->email }}">
      @if ($errors->has('email'))
      <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
        {{ $errors->first('email') }}
      </span>
      @endif
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="current-password">
        {{ __('Current password') }}
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" name="current-password" id="current-password" type="password" required placeholder="******************">
      @if ($errors->has('current-password'))
      <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
        {{ $errors->first('current-password') }}
      </span>
      @endif
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="new-password">
        {{ __('New password') }}
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" name="new-password" id="new-password" type="password" placeholder="******************">
      @if ($errors->has('new-password'))
      <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
        {{ $errors->first('new-password') }}
      </span>
      @endif
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="new-password-confirm">
        {{ __('Confirm new password') }}
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" name="new-password-confirm" id="new-password-confirm" type="password" placeholder="******************">
      @if ($errors->has('new-password'))
      <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
        {{ $errors->first('new-password') }}
      </span>
      @endif
    </div>
  </div>

  @if (session('error'))
  <div class="bg-red-500 rounded text-white px-3 py-2 text-md mb-3 -mt-3">
    {{session('error')}}
  </div>
  @endif
  @if (session('success'))
  <div class="bg-green-500 rounded text-white px-3 py-2 text-md mb-3 -mt-3">
    {{session('success')}}
  </div>
  @endif

  <div class="flex items-center justify-between">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
      {{ __('Save') }}
    </button>
  </div>

</form>

@endsection
