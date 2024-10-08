@extends('layouts.app')

@include('template.head')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-md-8"> --}}
                <div class="card log-page mt-3">
                    {{-- <div class="card-header">
                        {{ __('Masuk') }}
                    </div> --}}

                    <div class="card-body mt-3">

                        <h3 class="txt-brand">Selamat Datang!</h3>
                        <h4 class="txt-brand">Silahkan Masuk ke Akun Anda</h4>

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
                                        <label for="username"
                                            class="col-md-3 col-form-label offset-md-1">{{ __('Username') }}</label>
        
                                        <div class="col-md-6">
                                            <input id="username" type="text"
                                                class="form-control @error('username') is-invalid @enderror" name="username"
                                                value="{{ old('username') }}" required autocomplete="username" autofocus>
        
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="row mb-3">
                                        <label for="password"
                                            class="col-md-3 col-form-label offset-md-1">{{ __('Kata Sandi') }}</label>
        
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
                                    <div class="row mt-4">
                                        <div class="col-md-9 d-grid offset-md-1">
                                            <button type="submit" class="btn btn-main-login">
                                                {{ __('Masuk') }}
                                            </button>
                                        </div>
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
