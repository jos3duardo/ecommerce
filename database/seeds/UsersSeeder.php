<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'José Eduardo Lopes de Souza',
            'email' => 'jos3duardolopes@gmail.com',
            'password' => bcrypt('Admin123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'jos3duardolopes@gmail.com',
            'password' => bcrypt('Admin123'),
        ]);
    }
}
