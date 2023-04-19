<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Seeder Admin
        \App\Models\Admin::create([
            'name' => 'adminBLUG',
            'username' => 'admin123',
            'password' => bcrypt('1234')
        ]);

        // Seeder Divisi
        Divisi::create([
            'name' => 'Inti'
        ]);

        Divisi::create([
            'name' => 'Medinfo'
        ]);

        Divisi::create([
            'name' => 'Siber'
        ]);

        Divisi::create([
            'name' => 'Programming'
        ]);
    }
}
