<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Alexis Zavala',
            'email' => 'alexisantoniozh@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Kristel Zelaya',
            'email' => 'kristel@gmail.com',
            'password' => bcrypt('1234')
        ]);

    }
}
