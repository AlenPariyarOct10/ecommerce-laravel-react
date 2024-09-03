<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Admin Permissions
        $adminPermissions = [
            'manage products',
            'manage users',
            'manage orders'
        ];

        foreach ($adminPermissions as $permission) {
            Permission::create(['name' => $permission])->assignRole($adminRole);
        }

        // User Permissions
        $userPermissions = [
            'manage profile',
            'view orders'
        ];

        foreach ($userPermissions as $permission) {
            Permission::create(['name' => $permission])->assignRole($userRole);
        }
    }
}
