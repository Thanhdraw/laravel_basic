<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateController extends Controller
{
    //
    public function index()
    {
        $title = "Danh muc san pham";
        return view('categories.cate', ['title' => $title]);
    }
}
