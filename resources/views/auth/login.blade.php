@extends('layouts.app')

@section('content')
    <style>
        .container {
            margin-top: 50px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 22px;
            background: linear-gradient(to right, rgba(138, 43, 226, 0.7), rgba(75, 0, 130, 0.7));
            backdrop-filter: blur(10px);
            color: #fff;
            max-width: 400px;
            margin: 0 auto;
        }
        #login_b{
            width:100px;
            height:50px;
        }
        #forgot{
           text-align:right;
           margin-left: 180px;
           text-decoration:none;
        }
        #forgot:hover{
           text-align:right;
           margin-left: 180px;
           color:white;
        }
        .card-body {
            padding: 20px;
        }

        .form-check-input {
            margin-top: 5px;
            color:white;
        }
        .form-check-input:hover {
    margin-top: 5px;
    color: white;
}

/* Apply styles when the "D" key is pressed */
.form-check-input:active {
    margin-top: 5px;
    color: white;
    /* Add any additional styles you want for the "D" key pressed state */
}

        .btn-primary {
            background: linear-gradient(to right, #8a2be2, #4b0082);
            border-color: #fff;
            border-radius: 22px;
            color: #fff;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #4b0082, #8a2be2);
            border-color: #fff;
        }

        .btn-link {
            color: #fff;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        /* Optional: Add media queries for responsiveness */
        @media (max-width: 768px) {
            .col-md-4 {
                text-align: center;
            }

            .col-md-6 {
                text-align: center;
            }
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Login</h2>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" id="forgot"href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                          <center>  <div class="mb-0">
                                <button type="submit" class="btn btn-primary" id="login_b">
                                    {{ __('Login') }}
                                </button>
                               
                            </div></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
