<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'product_name' => 'Product 1',
            'product_slug' => 'New product',
            'product_code' => Str::random(4),
            'product_qty' => '4',
            'selling_price' => Int::random(10),
            'short_descp' => Str::random(25),
            'long_descp' => Str::random(100),
            'product_thambnail' => Str::random(10),
            
        ]);
    }
}
