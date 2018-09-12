@extends('layouts.master')

@section('title', 'Contact')
@section('content')


<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Contact') }}</div>

                <div class="card-body">
                    <form method="POST" aria-label="{{ __('Contact') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-sm-4 col-form-label text-md-right">{{ __('First name') }}</label>
                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-sm-4 col-form-label text-md-right">{{ __('Last name') }}</label>
                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
                            <div class="col-md-6">
                                <select name="country" class="form-control" id="country">
                                    <option value="serbia">Serbia</option>
                                    <option value="france">France</option>
                                    <option value="germany">Germany</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>
                            <div class="col-md-6">
                                <textarea id="message" class="form-control" name="message" rows="8" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
