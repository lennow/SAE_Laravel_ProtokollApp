@extends('layouts.app')

@section('content')
<div class="container" style="margin: 3em auto;">
    <div class="content">
        <div class="card" style="padding: 3em;">
            <div class="card-header-title">{{ __('Login') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field">
                        <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                        <div class="control">
                            <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="is-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label for="password" class="label">{{ __('Password') }}</label>
                        <div class="control">
                            <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="is-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="radio" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-link">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="button is-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
