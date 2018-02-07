<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'adminz@gmail.com',
            'password' => bcrypt('123123'),
            'remember_token' => str_random(10)  
        ]);
    }
}
