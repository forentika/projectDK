<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'product_name' => 'Mocci',
            'category_id' => '1',
            'stok' => '20',
            'sku'=>'20',
        ]);
        
        DB::table('products')->insert([
            'product_name' => 'Kimbab',
            'category_id' => '2',
            'stok' => '200',
            'sku'=>'202',

        ]);
        
    }
}
