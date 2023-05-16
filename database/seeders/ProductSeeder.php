<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $products = [
            [
                'name' => 'pempek',
                'image' => 'assets/images/pempek.png',
                'price' => 5000,
                'description' => 'lorem ipsum dolor sit amet'
            ],
            [
                'name' => 'Roti',
                'image' => 'assets/images/roti.png',
                'price' => 5000,
                'description' => 'lorem ipsum dolor sit amet'
            ],
            [
                'name' => 'coffee',
                'image' => 'assets/images/coffee.png',
                'price' => 5000,
                'description' => 'lorem ipsum dolor sit amet'
            ],
            [
                'name' => 'thai tea',
                'image' => 'assets/images/thai tea.png',
                'price' => 5000,
                'description' => 'lorem ipsum dolor sit amet'
            ],
        ];

        foreach ($products as $key=>$value){
            Product::create($value);
        }
    }
}
