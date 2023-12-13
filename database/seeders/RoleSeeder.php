<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = Permission::create(['name' => 'edit_users']);
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'pustakawan']);
        // $permission = Permission::create(['name' => 'edit_users']);
        $role = Role::create(['name' => 'anggota']);
        // $permission = Permission::create(['name' => 'edit_users']);
    }
}
