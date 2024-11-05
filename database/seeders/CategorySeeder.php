<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // Xóa toàn bộ dữ liệu hiện tại


    public function run(): void
    {



        Category::create(['name' => 'Electronics']);
        Category::create(['name' => 'iPhone']);
        Category::create(['name' => 'iPad']);
    }
}
