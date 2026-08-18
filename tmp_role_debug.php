<?php
require __DIR__ . '/vendor/autoload.php';

$app = require __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\User;
use Spatie\Permission\Models\Role;

foreach (Role::all() as $role) {
    echo "ROLE: {$role->id}|{$role->name}|{$role->guard_name}\n";
}

echo "\n";

foreach (User::with('roles')->get() as $user) {
    $roleNames = $user->roles->pluck('name')->join(',');
    $roleGuards = $user->roles->pluck('guard_name')->join(',');
    echo "USER: {$user->id}|{$user->email}|roles={$roleNames}|guards={$roleGuards}\n";
}

echo "\n";

use Illuminate\Support\Facades\DB;

$farmerRole = Role::where('name', 'Farmer')->first();
if ($farmerRole) {
    $rows = DB::table('model_has_roles')->where('role_id', $farmerRole->id)->get();
    echo "model_has_roles records for Farmer role: " . $rows->count() . "\n";
    foreach ($rows as $row) {
        echo "role_id={$row->role_id}|model_type={$row->model_type}|model_id={$row->model_id}\n";
    }
}

echo "\n";

echo 'DEFAULT AUTH GUARD: ' . config('auth.defaults.guard') . PHP_EOL;
echo 'AUTH_GUARD env: ' . env('AUTH_GUARD', '(not set)') . PHP_EOL;

echo 'CURRENT AUTH GUARD via auth()->getDefaultDriver(): ' . auth()->getDefaultDriver() . PHP_EOL;
echo 'Auth::guard("web") user loaded? ' . (auth()->guard('web')->check() ? 'yes' : 'no') . PHP_EOL;
echo 'Auth::guard("web") user id: ' . (auth()->guard('web')->id() ?? 'null') . PHP_EOL;
echo "\n";

use Illuminate\Http\Request;
use Spatie\Permission\Middleware\RoleMiddleware;
use Illuminate\Routing\Route;

$route = app('router')->getRoutes()->getByName('farmer.dashboard');
echo 'FARMER ROUTE MIDDLEWARE: ' . json_encode($route?->middleware()) . PHP_EOL;
echo 'FARMER ROUTE ACTION MIDDLEWARE: ' . json_encode($route?->action['middleware'] ?? null) . PHP_EOL;

$user = User::where('email', 'farmer2@gmail.com')->first();
if ($user) {
    echo 'TEST USER: ' . $user->email . PHP_EOL;
    echo 'hasRole(Farmer): ' . ($user->hasRole('Farmer') ? 'true' : 'false') . PHP_EOL;
    echo 'hasAnyRole(Farmer): ' . ($user->hasAnyRole('Farmer') ? 'true' : 'false') . PHP_EOL;

    echo 'User Role Names:' . PHP_EOL;
    foreach ($user->roles as $r) {
        echo '  name=' . var_export($r->name, true) . ' len=' . mb_strlen($r->name) . ' bytes=' . implode(',', array_map('ord', preg_split('//u', $r->name, -1, PREG_SPLIT_NO_EMPTY))) . PHP_EOL;
    }

    $middleware = new RoleMiddleware();
    $request = Request::create('/farmer/dashboard', 'GET');
    app('auth')->setUser($user);

    try {
        $middleware->handle($request, function ($req) { return 'ok'; }, 'Farmer', 'web');
        echo 'MIDDLEWARE direct check with guard:web PASSED'.PHP_EOL;
    } catch (Throwable $e) {
        echo 'MIDDLEWARE direct check with guard:web FAILED: ' . get_class($e) . ' - ' . $e->getMessage() . PHP_EOL;
    }

    try {
        $middleware->handle($request, function ($req) { return 'ok'; }, 'Farmer');
        echo 'MIDDLEWARE direct check without guard PASSED'.PHP_EOL;
    } catch (Throwable $e) {
        echo 'MIDDLEWARE direct check without guard FAILED: ' . get_class($e) . ' - ' . $e->getMessage() . PHP_EOL;
    }
}
