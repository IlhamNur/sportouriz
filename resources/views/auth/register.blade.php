@extends('layouts.main')

@section('content')

    <!-- ***** Register Start ***** -->
    <section class="section" id="registration">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="regis-content">
                        <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                        <p>Professional Skydiving & Paragliding You Can Trust.</p>
                        <div class="card">
                          <div class="card-header">{{ __('Register') }}</div>

                          <div class="card-body">
                              <form method="POST" action="{{ route('register') }}">
                                  @csrf

                                  <div class="row mb-3">
                                      <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                      <div class="col-md-6">
                                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                          @error('name')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                      <div class="col-md-6">
                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                      <div class="col-md-6">
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                      </div>
                                  </div>

                                  <div>
                                      <div class="main-button scroll-to-section">
                                          <button type="submit" class="btn">
                                              {{ __('Register') }}
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Register End ***** -->

@endsection