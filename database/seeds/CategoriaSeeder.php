<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'EPI']);
        DB::table('categories')->insert(['name' => 'Ferramentas Manuais']);
        DB::table('categories')->insert(['name' => 'Ferramentas Eletricas']);
        DB::table('categories')->insert(['name' => 'Cimento']);
        DB::table('categories')->insert(['name' => 'Serralheria']);
        DB::table('categories')->insert(['name' => 'Tinas']);
        DB::table('categories')->insert(['name' => 'Pisos']);
        DB::table('categories')->insert(['name' => 'Vidro']);
        DB::table('categories')->insert(['name' => 'Munk']);
        DB::table('categories')->insert(['name' => 'Hidraulico']);
        DB::table('categories')->insert(['name' => 'Eletrica']);
        DB::table('categories')->insert(['name' => 'Cabos eletricos']);

    }
}
