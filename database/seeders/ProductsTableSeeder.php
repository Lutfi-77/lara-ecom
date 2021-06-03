<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([
            'product_name'	=> "Sepatu Mike",
            'product_desc'	=> 'Dari kulit buaya asli',
            'stock'	=> 15,
            'price'	=> 12000000,
            'category_id'	=> 1,
            'user_id'	=> 1,
        ]);
    }
}
