<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // 1. Pata mtumiaji aliyefanikiwa kuingia (Login)
        $user = $request->user();

        // 2. Mfumo wa Spatie unaangalia Role na kumpeleka kwenye ukurasa wake sahihi
        if ($user->hasRole('Admin')) {
            return redirect()->intended(route('admin.dashboard', absolute: false));
        } 
        
        if ($user->hasRole('Farmer')) {
            return redirect()->intended(route('farmer.dashboard', absolute: false));
        } 
        
        if ($user->hasRole('Buyer')) {
            return redirect()->intended(route('buyer.dashboard', absolute: false));
        }

        // 3. KAMA HANA ROLE: Mtoe nje ya mfumo (Logout) na mpe ujumbe wa kosa
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->withErrors([
            'email' => 'Akaunti yako haina jukumu (Role) lolote kwenye mfumo. Wasiliana na msimamizi.',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}