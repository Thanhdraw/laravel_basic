<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use Illuminate\Http\Request;

class CategoryCotroller extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.cate', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Gọi phương thức createCategory trong model
        Category::createCategory([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.create')->with('success', 'Category created successfully.');
    }
    public function edit($id)
    {
        // Lấy ra category theo id , đây là ORM 
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $id,
        ]);

        // Gọi phương thức updateCategory trong model
        Category::updateCategory($id, [
            'name' => $request->name,
        ]);

        return redirect()->route('categories.edit', $id)->with('success', 'Category updated successfully.');
    }
    public function destroy($id)
    {
        Category::deleteCategoryById($id);
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
