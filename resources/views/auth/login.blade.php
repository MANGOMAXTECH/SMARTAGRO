<x-guest-layout bodyClass="login-page">
    <!-- ============================================
    SMARTAGRO - Split Authentication Layout
    Left: AdminLTE 3 / Bootstrap Carousel
    Right: Professional Authentication Form
    ============================================ -->
    <div class="login-split-wrapper">

        <!-- Left Image Carousel -->
        <x-auth-carousel />
        <!-- /.Left Image Carousel -->

        <!-- Right Authentication Form -->
        <div class="login-form-col">
            <div class="login-form-card">
                <!-- Application Logo -->
                <a href="{{ url('/') }}" class="login-brand-logo">
                    <img src="{{ asset('dist/img/smartagrologo.png') }}" alt="SmartAgro Logo">
                </a>

                <!-- Page Title -->
                <h1 class="auth-page-title">Welcome Back</h1>
                <p class="auth-page-subtitle">Sign in to your SmartAgro account</p>

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

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email or username" required autofocus autocomplete="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="text-danger mb-2" />

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text password-toggle" id="togglePassword" role="button" tabindex="0" aria-label="Toggle password visibility">
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="text-danger mb-2" />

                    <!-- Remember Me & Forgot Password -->
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4 text-right">
                            <a href="{{ route('password.request') }}">Forgot password?</a>
                        </div>
                        <!-- /.col -->
                    </div>

                    <!-- Login Button -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- Registration Link -->
                <p class="login-register-text">
                    Don't have an account? <a href="{{ route('register') }}">Create Account</a>
                </p>

                <!-- Footer -->
                <div class="login-footer">
                    &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                </div>
            </div>
        </div>
        <!-- /.Right Authentication Form -->

    </div>
    <!-- /.login-split-wrapper -->
</x-guest-layout>
