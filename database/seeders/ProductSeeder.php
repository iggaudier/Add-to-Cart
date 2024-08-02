<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Samsung Galaxy',
                'description' => 'Samsung Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'price' => '400'
            ],
            [
                'name' => 'Apple Iphone 12',
                'description' => 'Apple Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'price' => '500'
            ],
            [
                'name' => 'Poco F5',
                'description' => 'Xiaomi Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'price' => '200'
            ],
            [
                'name' => 'Infinix Note 30',
                'description' => 'Infinix Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'price' => '100'
            ],
          
        ];
        foreach ($products as $key => $value){
            Product::create($value);
        }
    }
}
