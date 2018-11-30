<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(['name' => 'Teclado USB','unidade' => 'PÇ', 'valor' => 30, 'category_id' => 2, 'estoque' => 50]);
        DB::table('products')->insert(['name' => 'Mouse USB','unidade' => 'PÇ', 'valor' => 15 , 'category_id' => 2, 'estoque' => 50]);
        DB::table('products')->insert(['name' => 'Monitor 25 polegadas profisional Samsumg','unidade' => 'PÇ', 'valor' => 1050, 'category_id' => 1, 'estoque' => 10]);
        DB::table('products')->insert(['name' => 'Mochila para notebook 15 polegadas','unidade' => 'PÇ', 'valor' => 200 , 'category_id' =>  3, 'estoque' => 5 ]);
        DB::table('products')->insert(['name' => 'Mouse Pad','unidade' => 'PÇ', 'valor' => 45, 'category_id' => 2, 'estoque' => 20 ]);
        DB::table('products')->insert(['name' => 'Cabo HDMI 3 metros','unidade' => 'PÇ', 'valor' => 35 , 'category_id' => 4 , 'estoque' => 20]);
        DB::table('products')->insert(['name' => 'Adaptador HDMI x VGA','unidade' => 'PÇ', 'valor' =>35 , 'category_id' => 6 , 'estoque' => 15]);
        DB::table('products')->insert(['name' => 'Fonte universal','unidade' => 'PÇ', 'valor' => 50, 'category_id' => 6 , 'estoque' => 10]);
        DB::table('products')->insert(['name' => 'Fone de ouvido com microfone bluetooh','unidade' => 'PÇ', 'valor' => 65, 'category_id' => 10, 'estoque' => 10]);
        DB::table('products')->insert(['name' => 'Fonte real 500w corsair','unidade' => 'PÇ', 'valor' => 250, 'category_id' => 8 , 'estoque' =>  15]);
        DB::table('products')->insert(['name' => 'Gabinete middle tower aerocol','unidade' => 'PÇ', 'valor' => 400, 'category_id' => 10, 'estoque' => 5]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);
        // DB::table('products')->insert(['name' => '','unidade' => '', 'valor' => , 'categories_id' => , 'estoque' => ]);

    }
}
