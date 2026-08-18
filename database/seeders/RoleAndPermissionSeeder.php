<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Safisha cache
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // --- UNDA PERMISSIONS ---
        $permissions = [
            'manage users',
            'manage products',
            'manage orders',
            'browse marketplace',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate([
                'name' => $perm,
                'guard_name' => 'web'
            ]);
        }

        // --- UNDA ROLES ---
        $adminRole = Role::firstOrCreate([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);
        $adminRole->syncPermissions(Permission::all());

        $farmerRole = Role::firstOrCreate([
            'name' => 'Farmer',
            'guard_name' => 'web'
        ]);
        $farmerRole->syncPermissions([
            'manage products',
            'manage orders'
        ]);

        $buyerRole = Role::firstOrCreate([
            'name' => 'Buyer',
            'guard_name' => 'web'
        ]);
        $buyerRole->syncPermissions([
            'browse marketplace'
        ]);

        // --- MPE USER WA KWANZA ROLE ---
        $firstUser = User::first();
        if ($firstUser && !$firstUser->hasRole('Admin')) {
            $firstUser->assignRole('Admin');
            $this->command->info("✅ {$firstUser->name} amepewa role Admin");
        }

        // --- UNDA TEST USERS ---
        $farmerUser = User::firstOrCreate(
            ['email' => 'farmer@example.com'],
            [
                'name' => 'Test Farmer',
                'phone' => '0712345978',
                'password' => bcrypt('password123'),
            ]
        );
        
        // 👇 MUHIMU: Mpe Test Farmer role zote mbili (Farmer na Admin)
        if (!$farmerUser->hasRole('Farmer')) {
            $farmerUser->assignRole('Farmer');
        }
        if (!$farmerUser->hasRole('Admin')) {
            $farmerUser->assignRole('Admin'); // 👈 ONGEZA HII!
        }
        $this->command->info("✅ Farmer: farmer@example.com / password123 (Roles: Farmer, Admin)");

        $buyerUser = User::firstOrCreate(
            ['email' => 'buyer@example.com'],
            [
                'name' => 'Test Buyer',
                'phone' => '0712385679',
                'password' => bcrypt('password123'),
            ]
        );
        if (!$buyerUser->hasRole('Buyer')) {
            $buyerUser->assignRole('Buyer');
        }
        $this->command->info("✅ Buyer: buyer@example.com / password123");

        // --- UNDA ADMIN USER MAALUM (Sasa Imeongezwa!) ---
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Test Admin',
                'phone' => '0712345677',
                'password' => bcrypt('password123'),
            ]
        );
        if (!$adminUser->hasRole('Admin')) {
            $adminUser->assignRole('Admin');
        }
        $this->command->info("✅ Admin: admin@example.com / password123");

        // Safisha cache mwishoni
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $this->command->info("🎉 Roles na Permissions zimeundwa kikamilifu!");
        $this->command->info("📌 Admin: user wa kwanza");
        $this->command->info("📌 Farmer: farmer@example.com (password123) - Roles: Farmer, Admin");
        $this->command->info("📌 Buyer: buyer@example.com (password123)");
        $this->command->info("📌 Admin Test: admin@example.com (password123)");
    }
}