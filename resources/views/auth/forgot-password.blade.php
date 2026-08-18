<x-guest-layout bodyClass="login-page">
    <!-- ============================================
    SMARTAGRO - Split Authentication Layout
    Left: AdminLTE 3 / Bootstrap Carousel
    Right: Forgot Password Form
    ============================================ -->
    <div class="login-split-wrapper">

        <!-- Left Image Carousel -->
        <x-auth-carousel />
        <!-- /.Left Image Carousel -->

        <!-- Right Forgot Password Form -->
        <div class="login-form-col">
            <div class="login-form-card">
                <!-- Application Logo -->
                <a href="{{ url('/') }}" class="login-brand-logo">
                    <img src="{{ asset('dist/img/smartagrologo.png') }}" alt="SmartAgro Logo">
                </a>

                <!-- Page Title -->
                <h1 class="auth-page-title">Forgot Your Password?</h1>
                <p class="auth-page-subtitle">No worries. Enter your registered email address and we'll send you a reset link.</p>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Please correct the following errors:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Session Status -->
                <x-auth-session-status class="mb-3" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required autofocus autocomplete="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="text-danger mb-2" />

                    <!-- reCAPTCHA -->
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('g-recaptcha-response')" class="text-danger mb-2" />

                    <!-- Send Reset Link Button -->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Send Reset Link</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- Back to Login -->
                <p class="login-register-text">
                    <a href="{{ route('login') }}">&larr; Back to Login</a>
                </p>

                <!-- Footer -->
                <div class="login-footer">
                    &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                </div>
            </div>
        </div>
        <!-- /.Right Forgot Password Form -->

    </div>
    <!-- /.login-split-wrapper -->
</x-guest-layout>
