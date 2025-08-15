<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Buat permissions
        $permissions = [
            'view_any users',
            'create users',
            'update users',
            'delete users',
            'view_any roles',
            'create roles',
            'update roles',
            'delete roles',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign all permissions to admin role
        $adminRole->syncPermissions($permissions);
    }
}
