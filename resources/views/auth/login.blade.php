@extends('auth.master')

@section('content')

    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ __('Login') }}</h3>
        </div>
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               placeholder="{{ __('E-Mail Address') }}" name="email" type="email" autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               placeholder="{{ __('Password') }}" name="password" type="password" value="">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox"
                                   value="{{ __('Remember Me') }}" {{ old('remember') ? 'checked' : '' }}>Remember Me
                        </label>
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
                    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>

                </fieldset>
                <a class="btn btn-link offset-md-4" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            </form>
        </div>
    </div>

@endsection
