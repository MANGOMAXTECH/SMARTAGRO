<x-guest-layout bodyClass="login-page">
    <!-- ============================================
    SMARTAGRO - Split Authentication Layout
    Left: AdminLTE 3 / Bootstrap Carousel
    Right: Reset Password Form
    ============================================ -->
    <div class="login-split-wrapper">

        <!-- Left Image Carousel -->
        <x-auth-carousel />
        <!-- /.Left Image Carousel -->

        <!-- Right Reset Password Form -->
        <div class="login-form-col">
            <div class="login-form-card">
                <!-- Application Logo -->
                <a href="{{ url('/') }}" class="login-brand-logo">
                    <img src="{{ asset('dist/img/smartagrologo.png') }}" alt="SmartAgro Logo">
                </a>

                <!-- Page Title -->
                <h1 class="auth-page-title">Reset Your Password</h1>
                <p class="auth-page-subtitle">Create a new secure password for your account.</p>

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

                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email', $request->email) }}" placeholder="Email address" required autofocus autocomplete="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="text-danger mb-2" />

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="New password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text password-toggle" id="togglePassword" role="button" tabindex="0" aria-label="Toggle password visibility">
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="text-danger mb-2" />

                    <!-- Confirm Password -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text password-toggle" id="togglePasswordConfirm" role="button" tabindex="0" aria-label="Toggle password visibility">
                                <i class="fas fa-eye" id="toggleIconConfirm"></i>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mb-2" />

                    <!-- Reset Password Button -->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
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
        <!-- /.Right Reset Password Form -->

    </div>
    <!-- /.login-split-wrapper -->
</x-guest-layout>
