<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Items;
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
        User::create([
            'name' => 'Nann',
            'username' => 'nann',
            'email' => 'nann@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(2)->create();
        Items::factory(30)->create();
    }
}
