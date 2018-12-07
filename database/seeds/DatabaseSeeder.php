<?php

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
         $this->call(UsersSeeder::class);
         $this->call(CategoriaSeeder::class);
         $this->call(ProductsSeeder::class);
         $this->call(ProfessionSeeder::class);
        //  $this->call(UserSeeder::class);

    }
}
