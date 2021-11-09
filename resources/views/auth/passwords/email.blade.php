{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('auth.default-auth')
@section('title','Forgot-password')
@section('content')
	<!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- Forgot Password v1 -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="/" class="brand-logo">
                                    <img src="/storage/{{ $url_logo->image }}" height="30px" width="150px" alt="">
                                </a>

                                <h4 class="card-title mb-1">Forgot Password? 🔒</h4>
                                <p class="card-text mb-2">Enter your email and we'll send you instructions to reset your password</p>

                                <form class="auth-forgot-password-form mt-2" action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        {{-- <input type="text" class="form-control" id="forgot-password-email" name="forgot-password-email" placeholder="john@example.com" aria-describedby="forgot-password-email" tabindex="1" autofocus /> --}}
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-block" tabindex="2">Send reset link</button>
                                </form>

                                <p class="text-center mt-2">
                                    <a href="page-auth-login-v1.html"> <i data-feather="chevron-left"></i> Back to login </a>
                                </p>
                            </div>
                        </div>
                        <!-- /Forgot Password v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
