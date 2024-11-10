<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Product;
use App\Models\admin\Category;
class ProductCotroller extends Controller
{
    //
    public function index()
    {
        $products = Product::with('category')->paginate(10); // Phân trang với 10 sản phẩm mỗi trang

        return view('admin.products.products', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
            'category_id' => $request->category_id,
        ]);
        // dd($request->input('image'));
        // dd($request->all());
        return redirect()->route('products.create')
            ->with('success', 'Sản phẩm đã được tạo thành công.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('products.edit', ['id' => $id])
        ->with('success', 'Sản phẩm đã được cập nhật thành công.');
    
    }
    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.products')
        ->with('success', 'Sản phẩm đã được xóa thành công.');

    }
}
