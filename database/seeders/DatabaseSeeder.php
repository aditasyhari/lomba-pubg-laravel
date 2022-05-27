<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'nama' => 'adit',
            'email' => 'adit.asyhari16@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
    }
}
