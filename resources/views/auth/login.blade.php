@extends('layouts.admin.master')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="row mb-4 offset-md-3">
        <label for="username" class="col-md-8 col-form-label text-md-end">{{ __('Username') }}</label>

        <div class="col-md-8">
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3 offset-md-3">
        <label for="password" class="col-md-8 col-form-label text-md-end">{{ __('Password') }}</label>

        <div class="col-md-8">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-8 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="row mb-8">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
            <a class="btn btn-primary" type="submit" href="{{ route('register')}}">
                {{ __('Register') }}
            </a>
        </div>
    </div>
    <br>
    <div class="row mb-8">
        <div class="col-md-8 offset-md-4">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password ?') }}
                </a>
            @endif
        </div>
    </div>
</form>
@endsection
