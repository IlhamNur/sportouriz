@extends('layouts.main')

@section('content')

    <!-- ***** Register Start ***** -->
    <section class="section" id="registration">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="regis-content">
                        <h2>Welcome <em>back</em>, to <em>Sportouriz</em>!</h2>
                        <p>Professional Skydiving & Paragliding You Can Trust.</p>
                        <div class="card">
                            <div class="card-header">{{ __('Login') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <div class="main-button scroll-to-section">
                                            <button type="submit" class="btn">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>

                                    <div>
                                        <div>
                                            @if (Route::has('register'))
                                                <a class="btn btn-link" href="{{ route('register') }}">
                                                    {{ __("Don't have an account yet? Register here") }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
    </section>
    <!-- ***** Register End ***** -->

@endsection