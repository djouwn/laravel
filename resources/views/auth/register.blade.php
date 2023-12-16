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

        .card-body {
            padding: 20px;
        }

        .form-check-input {
            margin-top: 5px;
            color: white;
        }

        .form-check-input:hover {
            margin-top: 5px;
            color: white;
        }

        .form-check-input:active {
            margin-top: 5px;
            color: white;
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

        @media (max-width: 768px) {
            .col-md-4 {
                text-align: center;
                margin-top: 5px;

            }

            .col-md-6 {
                margin-top: 5px;

                text-align: center;
            }
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Register</h2>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="role[]" value="seller" id="seller-role">
                                    <label class="form-check-label" for="seller-role">
                                        {{ __('Seller') }}
                                    </label>
                                </div>
                            </div>

                            <div class="mb-0">
                               <center> <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
