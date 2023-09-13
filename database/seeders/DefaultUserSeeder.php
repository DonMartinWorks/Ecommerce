<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # Roles
        $admin = __('admin');
        $vendor = __('vendor');
        $user = __('user');

        # Status
        $inactive = __('inactive');
        $active = __('active');

        User::create([
            'name' => 'Usuario Administrador',
            'username' => 'Administrador',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'phone' => '123456789123',
            'remember_token' => Str::random(10),
            'role' => $admin,
            'status' => $active
        ]);

        User::create([
            'name' => 'Usuario Vendedor',
            'username' => 'Vendedor',
            'email' => 'vendor@vendor.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'phone' => '987654321987',
            'remember_token' => Str::random(10),
            'role' => $vendor,
            'status' => $active
        ]);

        User::create([
            'name' => 'Usuario Normal',
            'username' => 'Normal',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'phone' => '456789123456',
            'remember_token' => Str::random(10),
            'role' => $user,
            'status' => $active
        ]);

        User::create([
            'name' => 'Usuario Normal Inactivo',
            'username' => 'NormalInactivo',
            'email' => 'user2@user2.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'phone' => '123987456258',
            'remember_token' => Str::random(10),
            'role' => $user,
            'status' => $inactive
        ]);
    }
}
