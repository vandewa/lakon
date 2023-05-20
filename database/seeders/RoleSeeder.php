<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'opd',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'irban',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'sekretaris',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'inspektur',
            'guard_name' => 'web'
        ]);
    }
}