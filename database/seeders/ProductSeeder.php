<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('products')->insert([
            'name' => 'Producto 1',
            'description' => 'Descripción del producto 1',
            'price' => 10.99,
        ],
        [
            'name' => 'Producto 2',
            'description' => 'Descripción del producto 2',
            'price' => 19.99,
        ],
        [
            'name' => 'Producto 3',
            'description' => 'Descripción del producto 3',
            'price' => 29.99,
        ]
        );


    }
}
