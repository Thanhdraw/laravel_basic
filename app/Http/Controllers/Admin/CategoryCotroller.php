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
}
