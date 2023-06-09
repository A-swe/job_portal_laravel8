@extends('layouts.app')


@section('title')
    Login
@endsection

@section('theme')
    <link rel="stylesheet" href="{{ asset('dashboard/assets/modules/bootstrap-social/bootstrap-social.css') }}">
    <style>
        .btn-social>:first-child {
            top: 7px !important;
        }
    </style>
@endsection

@section('auth-content')
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-7 d-none d-lg-block">
                        <img src="{{ asset('dashboard/assets/img/login.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-12 col-sm-8 col-md-6 col-lg-5">
                        <div class="card card-primary shadow">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}" class="needs-validation">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            tabindex="1" required autofocus>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            tabindex="2" required>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input"
                                                tabindex="3" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
