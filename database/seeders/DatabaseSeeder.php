<?php

namespace Database\Seeders;

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

        \App\Models\Admin::create([
            'name' => 'adminBLUG',
            'username' => 'admin123',
            'password' => bcrypt('1234')
        ]);
    }
}
