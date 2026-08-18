<x-guest-layout bodyClass="login-page">
    <!-- ============================================
    SMARTAGRO - Split Authentication Layout
    Left: AdminLTE 3 / Bootstrap Carousel
    Right: Verify Email Form
    ============================================ -->
    <div class="login-split-wrapper">

        <!-- Left Image Carousel -->
        <x-auth-carousel />
        <!-- /.Left Image Carousel -->

        <!-- Right Verify Email Form -->
        <div class="login-form-col">
            <div class="login-form-card">
                <!-- Application Logo -->
                <a href="{{ url('/') }}" class="login-brand-logo">
                    <img src="{{ asset('dist/img/smartagrologo.png') }}" alt="SmartAgro Logo">
                </a>

                <p class="login-box-msg">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-3 text-success" :status="session('status')" />

                <div class="d-flex flex-column gap-2">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Resend Verification Email
                            </button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-secondary btn-block">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.Right Verify Email Form -->

    </div>
    <!-- /.login-split-wrapper -->
</x-guest-layout>
