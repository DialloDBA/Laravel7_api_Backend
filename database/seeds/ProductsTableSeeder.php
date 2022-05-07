<?php

use App\Product;
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
        Product::truncate();

        Product::create([
            'description'=>"Ordinateur Bureautique",
            'price'=>500000,
            'stock'=>15,
        ]);
        Product::create([
            'description'=>"PC Dell Core I5",
            'price'=>5000000,
            'stock'=>5,
        ]);
        Product::create([
            'description'=>"Chargeur HP EliteBook",
            'price'=>180000,
            'stock'=>11,
        ]);
        Product::create([
            'description'=>"HDD",
            'price'=>350000,
            'stock'=>20,
        ]);
    }
}
