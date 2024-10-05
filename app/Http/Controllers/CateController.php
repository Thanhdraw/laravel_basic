<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateController extends Controller
{
    //
    public function index()
    {
        $title = "Danh muc san pham";
        $categories = [
            [
                'id' => 1,
                'name' => 'Quần áo cho Nam',
            ],
            [
                'id' => 2,
                'name' => 'Quần áo cho Nữ',
            ],
            [
                'id' => 3,
                'name' => 'Làm đẹp cho Nam',
            ],
            [
                'id' => 4,
                'name' => 'Làm đẹp cho Nữ',
            ],
            [
                'id' => 5,
                'name' => 'Nước Hoa cho Nam',
            ],
            [
                'id' => 6,
                'name' => 'Nước Hoa cho Nữ',
            ],
            [
                'id' => 7,
                'name' => 'Nước Hoa cho Unisex',
            ]


        ];
        return view('categories.cate', compact('categories'));
    }

    public function show()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Quần áo cho Nam',
            ],
            [
                'id' => 2,
                'name' => 'Quần áo cho Nữ',
            ],
            [
                'id' => 3,
                'name' => 'Làm đẹp cho Nam',
            ],
            [
                'id' => 4,
                'name' => 'Làm đẹp cho Nữ',
            ],
            [
                'id' => 5,
                'name' => 'Nước Hoa cho Nam',
            ],
            [
                'id' => 6,
                'name' => 'Nước Hoa cho Nữ',
            ],
            [
                'id' => 7,
                'name' => 'Nước Hoa cho Unisex',
            ]


        ];
        return view('categories.cate', ['categories' => $categories]);

    }

}
