<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin\Product;
use App\Models\admin\Category;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $electronics = Category::where('name', 'Electronics')->first();
        $books = Category::where('name', 'Books')->first();
        $clothing = Category::where('name', 'Clothing')->first();

        // Thêm sản phẩm cho từng category
        Product::create(['name' => 'Laptop', 'price' => 1500, 'category_id' => $electronics->id]);
        Product::create(['name' => 'Smartphone', 'price' => 800, 'category_id' => $electronics->id]);

        Product::create(['name' => 'Fiction Book', 'price' => 20, 'category_id' => $books->id]);
        Product::create(['name' => 'Science Book', 'price' => 35, 'category_id' => $books->id]);

        Product::create(['name' => 'T-shirt', 'price' => 15, 'category_id' => $clothing->id]);
        Product::create(['name' => 'Jeans', 'price' => 45, 'category_id' => $clothing->id]);
    }
}
