<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Iite RoleAndPermissionSeeder kwanza ili Roles na Permissions zitengenezwe
        $this->call([
            RoleAndPermissionSeeder::class,
        ]);

        // 2. Tengeneza Mfano wa User wa Admin
        $admin = User::create([
            'name' => 'Baraka Maxmilian',
            'email' => 'admin@smartagro.com',
            'phone' => '0712345678',
            'password' => Hash::make('password123'),
        ]);
        $admin->assignRole('Admin');

        // 3. Tengeneza Mfano wa User wa Farmer kwa ajili ya majaribio
        $farmer = User::create([
            'name' => 'Jane Mkulima',
            'email' => 'farmer@smartagro.com',
            'phone' => '0723456789',
            'password' => Hash::make('password123'),
        ]);
        $farmer->assignRole('Farmer');

        // 4. Tengeneza Mfano wa User wa Buyer kwa ajili ya majaribio
        $buyer = User::create([
            'name' => 'John Mnunuzi',
            'email' => 'buyer@smartagro.com',
            'phone' => '0734567890',
            'password' => Hash::make('password123'),
        ]);
        $buyer->assignRole('Buyer');
    }
}
