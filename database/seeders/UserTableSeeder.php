<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::insert([
            'name' => 'Nur Alam Shishir',
            'email' => 'adriankhanshishir@gmail.com',
            'password' => bcrypt('12345678')
        ]);

    }
}

