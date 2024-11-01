<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Product;
class ProductCotroller extends Controller
{
    //
    public function index()
    {
        $products = Product::with('category')->paginate(10); // Phân trang với 10 sản phẩm mỗi trang

        return view('admin.products.products', compact('products'));
    }
}
