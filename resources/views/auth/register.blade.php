<x-guest-layout bodyClass="login-page register-page">
    <!-- ============================================
    SMARTAGRO - Split Authentication Layout
    Left: AdminLTE 3 / Bootstrap Carousel
    Right: Professional Registration Form
    ============================================ -->
    <div class="login-split-wrapper">

        <!-- Left Image Carousel -->
        <x-auth-carousel />
        <!-- /.Left Image Carousel -->

        <!-- Right Registration Form -->
        <div class="login-form-col">
            <div class="login-form-card">
                <!-- Application Logo -->
                <a href="{{ url('/') }}" class="login-brand-logo">
                    <img src="{{ asset('dist/img/smartagrologo.png') }}" alt="SmartAgro Logo">
                </a>

                <!-- Page Title -->
                <h1 class="auth-page-title">Create Account</h1>
                <p class="auth-page-subtitle">Join SmartAgro and connect with the agricultural community.</p>

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

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Full Name -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full name" required autofocus autocomplete="name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="text-danger mb-2" />

                    <!-- Email Address -->
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="text-danger mb-2" />

                    <!-- Phone Number -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone number" required autocomplete="tel">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('phone')" class="text-danger mb-2" />

                    <!-- Role Selection -->
                    <div class="input-group mb-3">
                        <select name="role" class="form-control" required>
                            <option value="">Select a role</option>
                            <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Farmer" {{ old('role') == 'Farmer' ? 'selected' : '' }}>Farmer</option>
                            <option value="Buyer" {{ old('role') == 'Buyer' ? 'selected' : '' }}>Buyer</option>
                        </select>
                    </div>
                    <x-input-error :messages="$errors->get('role')" class="text-danger mb-2" />

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text password-toggle" id="togglePassword" role="button" tabindex="0" aria-label="Toggle password visibility">
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="text-danger mb-2" />

                    <!-- Confirm Password -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text password-toggle" id="togglePasswordConfirm" role="button" tabindex="0" aria-label="Toggle password visibility">
                                <i class="fas fa-eye" id="toggleIconConfirm"></i>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mb-2" />

                    <!-- Terms & Register Button -->
                    <div class="row mt-2">
                        <div class="col-12 mb-2">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" {{ old('terms') ? 'checked' : '' }}>
                                <label for="agreeTerms">
                                    I agree to the <a href="{{ route('terms') }}">terms</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                        </div>
                    </div>
                </form>

                <!-- Login Link -->
                <p class="login-register-text">
                    Already have an account? <a href="{{ route('login') }}">Login</a>
                </p>

                <!-- Footer -->
                <div class="login-footer">
                    &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                </div>
            </div>
        </div>
        <!-- /.Right Registration Form -->

    </div>
    <!-- /.login-split-wrapper -->
</x-guest-layout>
