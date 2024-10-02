<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name" => "Product 1",
            "description" => "Cà phê sữa đá",
            "price" => 10.000,
            "overall_rating" => 123,
            "rating_avg" => 4,
            "type_id" => 1,
            "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOoRcTP_2RnOlWOysKxCf6lk_HBlDxv9nHig&s",
        ]);

        Product::create([
            "name" => "Cà phê đen",
            "description" => "Description for product 2",
            "price" => 20.000,
            "overall_rating" => 122,
            "rating_avg" => 5,
            "type_id" => 1,
            "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOoRcTP_2RnOlWOysKxCf6lk_HBlDxv9nHig&s",
        ]);

        Product::create([
            "name" => "Cà phê đắng",
            "description" => "Description for product 3",
            "price" => 30.000,
            "overall_rating" => 100,
            "rating_avg" => 3,
            "type_id" => 1,
            "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOoRcTP_2RnOlWOysKxCf6lk_HBlDxv9nHig&s",
        ]);
    }
}
