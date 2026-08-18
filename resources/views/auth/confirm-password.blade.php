<x-guest-layout bodyClass="login-page">
    <!-- ============================================
    SMARTAGRO - Split Authentication Layout
    Left: AdminLTE 3 / Bootstrap Carousel
    Right: Confirm Password Form
    ============================================ -->
    <div class="login-split-wrapper">

        <!-- Left Image Carousel -->
        <x-auth-carousel />
        <!-- /.Left Image Carousel -->

        <!-- Right Confirm Password Form -->
        <div class="login-form-col">
            <div class="login-form-card">
                <!-- Application Logo -->
                <a href="{{ url('/') }}" class="login-brand-logo">
                    <img src="{{ asset('dist/img/smartagrologo.png') }}" alt="SmartAgro Logo">
                </a>

                <p class="login-box-msg">This is a secure area of the application. Please confirm your password before continuing.</p>

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

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text password-toggle" id="togglePassword" role="button" tabindex="0" aria-label="Toggle password visibility">
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </div>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="text-danger mb-2" />

                    <!-- Confirm Button -->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
        <!-- /.Right Confirm Password Form -->

    </div>
    <!-- /.login-split-wrapper -->
</x-guest-layout>
