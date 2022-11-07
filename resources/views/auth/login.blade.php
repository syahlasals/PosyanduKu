@extends('layouts.app')

@include('template.head')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-md-8"> --}}
                <div class="card log-page mt-5">
                    {{-- <div class="card-header">
                        {{ __('Login') }}
                    </div> --}}

                    <div class="card-body mt-3">

                        <h3 class="txt-brand">Welcome!</h3>
                        <h4 class="txt-brand">Please, Login to Your Account</h4>

                        <div class="row">
                            <div class="col">
                                <img style="height: 70%; width: 70%; display:block; margin-left: auto; margin-right: auto; margin-top: 30px;"
                                src="{{ asset('template/img/posyandu-welcome.svg') }}" alt="logo">

                                <h5 class="txt-brand">Posyanduku</h5>
                            </div>

                            <div class="col">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
        
                                    <div class="row mb-3" style="margin-top: 120px">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
        
                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="row mb-3">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
        
                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">
        
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
        
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button><br>
    
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
@endsection

@include('template.script')
