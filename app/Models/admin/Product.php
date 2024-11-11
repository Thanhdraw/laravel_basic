<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Admin\CategoryCotroller;

class Product extends Model
{
    use HasFactory;
    // Khai báo các thuộc tính có thể được gán
    // Trong model Product
    protected $fillable = ['name', 'price', 'description', 'image', 'quantity', 'category_id'];


    // Định nghĩa quan hệ với Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

  

    public static function addProduct(array $data)
    {

        return self::create($data);
    }
}
