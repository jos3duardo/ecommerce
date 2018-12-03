<?php

use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert(['name' => 'Programador', 'media_salaria' => 2500]);
        DB::table('professions')->insert(['name' => 'Vendedor', 'media_salaria' => 2500]);
        DB::table('professions')->insert(['name' => 'Gerente', 'media_salaria' => 2500]);
        DB::table('professions')->insert(['name' => 'Sepervisor', 'media_salaria' => 2500]);
        DB::table('professions')->insert(['name' => 'Adminstrador', 'media_salaria' => 2500]);
        DB::table('professions')->insert(['name' => 'Analista', 'media_salaria' => 2500]);
        DB::table('professions')->insert(['name' => 'Tester', 'media_salaria' => 2500]);
    }
}
