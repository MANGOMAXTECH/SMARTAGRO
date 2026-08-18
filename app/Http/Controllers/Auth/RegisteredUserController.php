<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'unique:users'],
            'role' => ['required', 'in:Admin,Farmer,Buyer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $roleName = $request->role;

        // Get the role - assume it exists (created by seeder)
        $role = Role::where('name', $roleName)->where('guard_name', 'web')->first();

        if (!$role) {
            // If role doesn't exist, create it (but better to seed first)
            $role = Role::create(['name' => $roleName, 'guard_name' => 'web']);
        }

        $user->assignRole($role);

        event(new Registered($user));

        Auth::login($user);

        // Redirect based on role
        switch ($roleName) {
            case 'Admin':
                return redirect()->route('admin.dashboard');
            case 'Farmer':
                return redirect()->route('farmer.dashboard');
            case 'Buyer':
                return redirect()->route('buyer.dashboard');
            default:
                return redirect()->route('home');
        }
    }
}