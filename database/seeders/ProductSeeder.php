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


        // Thêm sản phẩm cho từng category

        Product::create([
            'name' => 'iPhone 12 ProMax',
            'price' => 99.88,
            'category_id' => 1,
            'image' => 'https://mobileworld.com.vn/uploads/product/06_2020/thumbs/iphone-12-128gb-quoc-te-likenew-99-trang.webp',
            'updated_at' => now(),
            'created_at' => now()
        ]);

    }
}
