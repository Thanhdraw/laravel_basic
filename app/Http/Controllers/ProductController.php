<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth')->except('index');
    }
    public function index()
    {
        $title = 'Sản Phẩm';
        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 1500, 'img' => 'https://plus.unsplash.com/premium_photo-1675186049366-64a655f8f537?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
            ['id' => 2, 'name' => 'Phone', 'price' => 800, 'img' => 'https://plus.unsplash.com/premium_photo-1675186049419-d48f4b28fe7c?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
            ['id' => 3, 'name' => 'Tablet', 'price' => 600, 'img' => 'https://plus.unsplash.com/premium_photo-1673287635935-66e9540e0d8e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
        ];
        return view('product.product', compact('products', 'title'));
    }
    public function show($id)
    {
        return "Thong tin san pham co ID:" . $id;
    }

}
