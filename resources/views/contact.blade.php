@extends('layouts.master')

@section('title', 'Contact')
@section('content')


<form class="mx-auto mt-8 p-8 bg-white shadow-md rounded w-full max-w-xl" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
    @csrf

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                {{ __('Name') }}
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" type="text" id="name" name="name" required autofocus placeholder="Jane">
            @if ($errors->has('name'))
            <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
                {{ $errors->first('name') }}
            </span>
            @endif
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                {{ __('E-Mail Address') }}
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" name="email" id="email" type="email" placeholder="jane@example.com">
            @if ($errors->has('email'))
            <span class="invalid-feedback text-red-500 text-xs italic" role="alert">
                {{ $errors->first('email') }}
            </span>
            @endif
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                {{ __('Message') }}
            </label>
            <textarea rows="10" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" name="message" id="message"></textarea>
        </div>
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-8 rounded focus:outline-none focus:shadow-outline" type="submit">
            {{ __('Send') }}
        </button>
    </div>

</form>

@endsection
