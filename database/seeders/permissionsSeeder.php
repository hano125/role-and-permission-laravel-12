<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class permissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = ['create user', 'edit user', 'delete user', 'view user', 'create role', 'edit role', 'view role', 'delete role'];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        // Create the admin role
        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        // Create an admin user
        $user = User::firstOrCreate([
            'email' => 'mohannad.abbas.dev@gmail.com',
        ], [
            'name' => 'admin',
            'password' => Hash::make("12345678"),
        ]);

        // Assign the admin role and permissions to the user
        $user->assignRole($adminRole);
        $user->givePermissionTo($permissions);
    }
}
