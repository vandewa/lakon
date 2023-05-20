<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@app.com',
            'password' => bcrypt('password'), //password
        ]);

        $admin->assignRole('admin');

        $irban = User::create([
            'name' => 'irban',
            'email' => 'irban@app.com',
            'password' => bcrypt('password'),
        ]);

        $irban->assignRole('irban');

        $sekretaris = User::create([
            'name' => 'sekretaris',
            'email' => 'sekretaris@app.com',
            'password' => bcrypt('password'),
        ]);

        $sekretaris->assignRole('sekretaris');

        $inspektur = User::create([
            'name' => 'inspektur',
            'email' => 'inspektur@app.com',
            'password' => bcrypt('password'),
        ]);

        $inspektur->assignRole('inspektur');
    }
}